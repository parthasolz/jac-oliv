<?php

header('Content-Type: application/json; charset=UTF-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| DATABASE CONFIGURATION
|--------------------------------------------------------------------------
*/

// $dbHost = 'localhost';
// $dbName = 'jac_olivol';
// $dbUser = 'root';
// $dbPass = '';

$dbHost = 'localhost';
$dbName = 'u959656367_db_jac';
$dbUser = 'u959656367_un_jac';
$dbPass = '~rbYJN7V';

/*
|--------------------------------------------------------------------------
| EMAIL CONFIGURATION
|--------------------------------------------------------------------------
*/

// Gmail account used to send email
$senderEmail = 'noreply@jacolivol.com';

// Email where job applications will be received
$adminEmail = 'hr@jacolivol.com';


/*
|--------------------------------------------------------------------------
| RESUME UPLOAD DIRECTORY
|--------------------------------------------------------------------------
*/

$uploadDir = __DIR__ . '/uploads/resumes/';


/*
|--------------------------------------------------------------------------
| JSON RESPONSE FUNCTION
|--------------------------------------------------------------------------
*/

function response(bool $success, string $message, array $data = []): void
{
    echo json_encode(
        [
            'success' => $success,
            'message' => $message,
            'data'    => $data
        ],
        JSON_UNESCAPED_UNICODE
    );

    exit;
}


/*
|--------------------------------------------------------------------------
| REQUEST METHOD CHECK
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    response(false, 'Invalid request method.');
}


/*
|--------------------------------------------------------------------------
| GET FORM DATA
|--------------------------------------------------------------------------
*/

$jobTitle = trim($_POST['job_title'] ?? '');

$fullName = trim($_POST['full_name'] ?? '');

$email = trim($_POST['email'] ?? '');

$phone = trim($_POST['phone'] ?? '');

$currentLocation = trim($_POST['current_location'] ?? '');

$totalExperience = trim($_POST['total_experience'] ?? '');

$linkedin = trim($_POST['linkedin'] ?? '');

$coverNote = trim($_POST['cover_note'] ?? '');


/*
|--------------------------------------------------------------------------
| REQUIRED FIELD VALIDATION
|--------------------------------------------------------------------------
|
| Required fields are only the fields marked with *
|
| Full Name
| Email
| Phone
| Total Experience
| Cover Note
| Resume
|
*/


if ($fullName === '') {
    response(false, 'Please enter your full name.');
}


if ($email === '') {
    response(false, 'Please enter your email address.');
}


if ($phone === '') {
    response(false, 'Please enter your phone number.');
}


if ($totalExperience === '') {
    response(false, 'Please select your total experience.');
}


if ($coverNote === '') {
    response(false, 'Please enter your cover note.');
}


/*
|--------------------------------------------------------------------------
| FULL NAME VALIDATION
|--------------------------------------------------------------------------
*/

if (strlen($fullName) < 2) {
    response(false, 'Please enter a valid full name.');
}

if (strlen($fullName) > 100) {
    response(false, 'Full name is too long.');
}


/*
|--------------------------------------------------------------------------
| EMAIL VALIDATION
|--------------------------------------------------------------------------
*/

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    response(false, 'Please enter a valid email address.');
}

if (strlen($email) > 150) {
    response(false, 'Email address is too long.');
}


/*
|--------------------------------------------------------------------------
| PHONE VALIDATION
|--------------------------------------------------------------------------
|
| Allows:
| 0123456789
| +91 9876543210
| +91-9876543210
| (033) 12345678
|
*/

if (!preg_match('/^[0-9+\-\s().]{10,12}$/', $phone)) {
    response(false, 'Please enter a valid phone number.');
}


/*
|--------------------------------------------------------------------------
| COVER NOTE VALIDATION
|--------------------------------------------------------------------------
*/

if (strlen($coverNote) < 10) {
    response(false, 'Cover note must contain at least 10 characters.');
}

if (strlen($coverNote) > 5000) {
    response(false, 'Cover note is too long. Maximum 5000 characters allowed.');
}


/*
|--------------------------------------------------------------------------
| LINKEDIN / PORTFOLIO VALIDATION
|--------------------------------------------------------------------------
|
| This field is optional.
|
*/

if ($linkedin !== '') {

    if (!filter_var($linkedin, FILTER_VALIDATE_URL)) {
        response(false, 'Please enter a valid LinkedIn or portfolio URL.');
    }

}


/*
|--------------------------------------------------------------------------
| RESUME FILE CHECK
|--------------------------------------------------------------------------
*/

if (!isset($_FILES['resume'])) {
    response(false, 'Please attach your resume.');
}


if ($_FILES['resume']['error'] !== UPLOAD_ERR_OK) {

    switch ($_FILES['resume']['error']) {

        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            response(false, 'Resume file is too large.');

        case UPLOAD_ERR_NO_FILE:
            response(false, 'Please attach your resume.');

        default:
            response(false, 'There was an error uploading your resume.');
    }

}


/*
|--------------------------------------------------------------------------
| RESUME FILE INFORMATION
|--------------------------------------------------------------------------
*/

$fileName = $_FILES['resume']['name'];

$fileTmpName = $_FILES['resume']['tmp_name'];

$fileSize = $_FILES['resume']['size'];

$fileExtension = strtolower(
    pathinfo($fileName, PATHINFO_EXTENSION)
);


/*
|--------------------------------------------------------------------------
| ALLOWED RESUME EXTENSIONS
|--------------------------------------------------------------------------
*/

$allowedExtensions = [
    'pdf',
    'doc',
    'docx'
];


if (!in_array($fileExtension, $allowedExtensions, true)) {

    response(
        false,
        'Only PDF, DOC, and DOCX files are allowed.'
    );

}


/*
|--------------------------------------------------------------------------
| MAXIMUM FILE SIZE = 5MB
|--------------------------------------------------------------------------
*/

$maxFileSize = 5 * 1024 * 1024;


if ($fileSize > $maxFileSize) {

    response(
        false,
        'Resume size must be less than 5MB.'
    );

}


/*
|--------------------------------------------------------------------------
| CHECK FILE MIME TYPE
|--------------------------------------------------------------------------
*/

$finfo = finfo_open(FILEINFO_MIME_TYPE);

$fileMimeType = finfo_file($finfo, $fileTmpName);

finfo_close($finfo);


$allowedMimeTypes = [
    'pdf' => [
        'application/pdf'
    ],

    'doc' => [
        'application/msword',
        'application/octet-stream'
    ],

    'docx' => [
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/zip',
        'application/octet-stream'
    ]
];


if (
    !isset($allowedMimeTypes[$fileExtension]) ||
    !in_array(
        $fileMimeType,
        $allowedMimeTypes[$fileExtension],
        true
    )
) {

    response(
        false,
        'The uploaded resume file type is not valid.'
    );

}


/*
|--------------------------------------------------------------------------
| CREATE UPLOAD DIRECTORY IF NOT EXISTS
|--------------------------------------------------------------------------
*/

if (!is_dir($uploadDir)) {

    if (!mkdir($uploadDir, 0755, true)) {

        response(
            false,
            'Unable to create resume upload directory.'
        );

    }

}


/*
|--------------------------------------------------------------------------
| CREATE UNIQUE FILE NAME
|--------------------------------------------------------------------------
*/

$cleanFileName = preg_replace(
    '/[^a-zA-Z0-9._-]/',
    '_',
    $fileName
);


$uniqueFileName =
    date('YmdHis') . '_' .
    bin2hex(random_bytes(8)) . '_' .
    $cleanFileName;


$destination = $uploadDir . $uniqueFileName;


/*
|--------------------------------------------------------------------------
| MOVE UPLOADED FILE
|--------------------------------------------------------------------------
*/

if (!move_uploaded_file($fileTmpName, $destination)) {

    response(
        false,
        'Unable to save the uploaded resume.'
    );

}


/*
|--------------------------------------------------------------------------
| DATABASE CONNECTION
|--------------------------------------------------------------------------
*/

try {

    $pdo = new PDO(
        "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4",
        $dbUser,
        $dbPass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ]
    );

} catch (PDOException $e) {

    // Remove uploaded file if database connection fails
    if (file_exists($destination)) {
        unlink($destination);
    }

    error_log(
        'Database connection error: ' . $e->getMessage()
    );

    response(
        false,
        'Database connection failed. Please try again later.'
    );

}


/*
|--------------------------------------------------------------------------
| SAVE APPLICATION TO DATABASE
|--------------------------------------------------------------------------
*/

try {

    $sql = "
        INSERT INTO applications
        (
            job_title,
            full_name,
            email,
            phone,
            current_location,
            total_experience,
            linkedin,
            cover_note,
            resume,
            created_at
        )
        VALUES
        (
            :job_title,
            :full_name,
            :email,
            :phone,
            :current_location,
            :total_experience,
            :linkedin,
            :cover_note,
            :resume,
            NOW()
        )
    ";


    $stmt = $pdo->prepare($sql);


    $stmt->execute([

        ':job_title'         => $jobTitle,

        ':full_name'         => $fullName,

        ':email'             => $email,

        ':phone'             => $phone,

        ':current_location'  => $currentLocation,

        ':total_experience'  => $totalExperience,

        ':linkedin'          => $linkedin,

        ':cover_note'        => $coverNote,

        ':resume'            => $uniqueFileName

    ]);


    $applicationId = $pdo->lastInsertId();


} catch (PDOException $e) {

    // Remove uploaded resume if database insert fails
    if (file_exists($destination)) {
        unlink($destination);
    }

    error_log(
        'Application database error: ' . $e->getMessage()
    );

    response(
        false,
        'Unable to save your application. Please try again.'
    );

}


/*
|--------------------------------------------------------------------------
| SEND EMAIL USING PHPMailer + GMAIL SMTP
|--------------------------------------------------------------------------
*/

$mail = new PHPMailer(true);


try {

    /*
    |--------------------------------------------------------------------------
    | SMTP SETTINGS
    |--------------------------------------------------------------------------
    */

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username = $senderEmail;

    /*
    |--------------------------------------------------------------------------
    | IMPORTANT:
    | Replace this with your GOOGLE APP PASSWORD.
    |
    | DO NOT USE YOUR NORMAL GMAIL PASSWORD.
    |--------------------------------------------------------------------------
    */

    $mail->Password = 'gszlbbwpoewcjsda';


    /*
    |--------------------------------------------------------------------------
    | TLS / PORT
    |--------------------------------------------------------------------------
    */

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = 587;


    /*
    |--------------------------------------------------------------------------
    | CHARACTER SET
    |--------------------------------------------------------------------------
    */

    $mail->CharSet = 'UTF-8';


    /*
    |--------------------------------------------------------------------------
    | EMAIL SENDER
    |--------------------------------------------------------------------------
    */

    $mail->setFrom(
        $senderEmail,
        'Jac Olivol Careers'
    );


    /*
    |--------------------------------------------------------------------------
    | ADMIN EMAIL
    |--------------------------------------------------------------------------
    */

    $mail->addAddress(
        $adminEmail,
        'Jac Olivol HR'
    );


    /*
    |--------------------------------------------------------------------------
    | REPLY TO APPLICANT
    |--------------------------------------------------------------------------
    */

    $mail->addReplyTo(
        $email,
        $fullName
    );


    /*
    |--------------------------------------------------------------------------
    | ATTACH RESUME
    |--------------------------------------------------------------------------
    */

    $mail->addAttachment(
        $destination,
        $fileName
    );


    /*
    |--------------------------------------------------------------------------
    | EMAIL SUBJECT
    |--------------------------------------------------------------------------
    */

    $mail->Subject =
        'New Job Application - ' .
        ($jobTitle !== '' ? $jobTitle : 'Careers');


    /*
    |--------------------------------------------------------------------------
    | HTML EMAIL BODY
    |--------------------------------------------------------------------------
    */

    $mail->isHTML(true);


    $safeJobTitle = htmlspecialchars(
        $jobTitle,
        ENT_QUOTES,
        'UTF-8'
    );


    $safeFullName = htmlspecialchars(
        $fullName,
        ENT_QUOTES,
        'UTF-8'
    );


    $safeEmail = htmlspecialchars(
        $email,
        ENT_QUOTES,
        'UTF-8'
    );


    $safePhone = htmlspecialchars(
        $phone,
        ENT_QUOTES,
        'UTF-8'
    );


    $safeLocation = htmlspecialchars(
        $currentLocation !== ''
            ? $currentLocation
            : 'Not provided',
        ENT_QUOTES,
        'UTF-8'
    );


    $safeExperience = htmlspecialchars(
        $totalExperience,
        ENT_QUOTES,
        'UTF-8'
    );


    $safeLinkedin = htmlspecialchars(
        $linkedin !== ''
            ? $linkedin
            : 'Not provided',
        ENT_QUOTES,
        'UTF-8'
    );


    $safeCoverNote = nl2br(
        htmlspecialchars(
            $coverNote,
            ENT_QUOTES,
            'UTF-8'
        )
    );


    $mail->Body = "

    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>

    <body style=\"
        margin:0;
        padding:0;
        background-color:#f4efe6;
        font-family:Arial, Helvetica, sans-serif;
    \">

    <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"
        style=\"background-color:#f4efe6; padding:40px 15px;\">

        <tr>
            <td align=\"center\">

                <!-- MAIN CONTAINER -->
                <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"
                    style=\"
                        max-width:680px;
                        background:#ffffff;
                        border-radius:12px;
                        overflow:hidden;
                    \">

                    <!-- HEADER - LOGO ONLY -->
                    <tr>
                        <td align=\"center\"
                            style=\"
                                background:#080808;
                                padding:35px 25px;
                            \">

                            <img
                                src=\"https://brandaid.digital/proposals/jac-olivol/new/html/images/jack-olivol.webp\"
                                alt=\"Jac Olivol\"
                                style=\"
                                    max-width:220px;
                                    width:100%;
                                    height:auto;
                                    display:block;
                                    margin:0 auto;
                                \">

                        </td>
                    </tr>


                    <!-- INTRO -->
                    <tr>
                        <td style=\"padding:35px 40px 10px;\">

                            <p style=\"
                                margin:0;
                                color:#333333;
                                font-size:15px;
                                line-height:1.7;
                            \">
                                Hello Jac Olivol HR Team,
                            </p>

                            <p style=\"
                                margin:12px 0 0;
                                color:#666666;
                                font-size:14px;
                                line-height:1.7;
                            \">
                                You have received a new job application through the
                                <strong style=\"color:#333333;\">
                                    Jac Olivol
                                </strong>
                                website careers form.
                            </p>

                        </td>
                    </tr>


                    <!-- APPLICATION DETAILS TITLE -->
                    <tr>
                        <td style=\"padding:25px 40px 12px;\">

                            <p style=\"
                                margin:0;
                                color:#b58b4d;
                                font-size:12px;
                                font-weight:bold;
                                letter-spacing:1.8px;
                                text-transform:uppercase;
                            \">
                                Application Details
                            </p>

                            <div style=\"
                                width:40px;
                                height:2px;
                                background:#c49a6c;
                                margin-top:10px;
                            \"></div>

                        </td>
                    </tr>


                    <!-- APPLICATION DETAILS -->
                    <tr>
                        <td style=\"padding:5px 40px 10px;\">

                            <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"
                                style=\"
                                    border:1px solid #eee7dc;
                                    border-radius:8px;
                                    overflow:hidden;
                                \">

                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        width:35%;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        Application ID
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        font-weight:600;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        #{$applicationId}
                                    </td>
                                </tr>


                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        Job Title
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#b58b4d;
                                        font-size:14px;
                                        font-weight:600;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        {$safeJobTitle}
                                    </td>
                                </tr>


                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        Full Name
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        font-weight:600;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        {$safeFullName}
                                    </td>
                                </tr>


                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        Email Address
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        {$safeEmail}
                                    </td>
                                </tr>


                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        Phone Number
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        {$safePhone}
                                    </td>
                                </tr>


                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        Current Location
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        {$safeLocation}
                                    </td>
                                </tr>


                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        Total Experience
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        border-bottom:1px solid #eee7dc;
                                    \">
                                        {$safeExperience}
                                    </td>
                                </tr>


                                <tr>
                                    <td style=\"
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                    \">
                                        LinkedIn / Portfolio
                                    </td>

                                    <td style=\"
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                    \">
                                        {$safeLinkedin}
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>


                    <!-- COVER NOTE TITLE -->
                    <tr>
                        <td style=\"padding:28px 40px 12px;\">

                            <p style=\"
                                margin:0;
                                color:#b58b4d;
                                font-size:12px;
                                font-weight:bold;
                                letter-spacing:1.8px;
                                text-transform:uppercase;
                            \">
                                Cover Note
                            </p>

                            <div style=\"
                                width:40px;
                                height:2px;
                                background:#c49a6c;
                                margin-top:10px;
                            \"></div>

                        </td>
                    </tr>


                    <!-- COVER NOTE -->
                    <tr>
                        <td style=\"padding:5px 40px 35px;\">

                            <div style=\"
                                background:#faf8f4;
                                border-left:4px solid #c49a6c;
                                padding:20px;
                                border-radius:0 7px 7px 0;
                                color:#444444;
                                font-size:14px;
                                line-height:1.8;
                            \">
                                {$safeCoverNote}
                            </div>

                            <p style=\"
                                margin:18px 0 0;
                                color:#777777;
                                font-size:12px;
                                line-height:1.6;
                            \">
                                The applicant's resume is attached to this email.
                            </p>

                        </td>
                    </tr>


                    <!-- FOOTER - ONLY ONE LINE -->
                    <tr>
                        <td align=\"center\"
                            style=\"
                                background:#080808;
                                padding:22px 25px;
                            \">

                            <p style=\"
                                margin:0;
                                color:#999999;
                                font-size:12px;
                                line-height:1.6;
                            \">
                                This email was generated from the Jac Olivol website careers form.
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>

    </table>

    </body>
    </html>

    ";

    /*
    |--------------------------------------------------------------------------
    | PLAIN TEXT ALTERNATIVE
    |--------------------------------------------------------------------------
    */

    $mail->AltBody =
        "New Job Application\n\n" .

        "Application ID: {$applicationId}\n" .

        "Job Title: {$jobTitle}\n" .

        "Full Name: {$fullName}\n" .

        "Email: {$email}\n" .

        "Phone: {$phone}\n" .

        "Current Location: " .
        ($currentLocation !== ''
            ? $currentLocation
            : 'Not provided') .
        "\n" .

        "Total Experience: {$totalExperience}\n" .

        "LinkedIn / Portfolio: " .
        ($linkedin !== ''
            ? $linkedin
            : 'Not provided') .
        "\n\n" .

        "Cover Note:\n{$coverNote}";


    /*
    |--------------------------------------------------------------------------
    | SEND EMAIL
    |--------------------------------------------------------------------------
    */

    $mail->send();


    /*
    |--------------------------------------------------------------------------
    | SUCCESS RESPONSE
    |--------------------------------------------------------------------------
    */

    response(
        true,
        'Application submitted successfully.',
        [
            'application_id' => $applicationId,
            'mail_sent'      => true
        ]
    );


} catch (Exception $e) {

    /*
    |--------------------------------------------------------------------------
    | EMAIL FAILED
    |--------------------------------------------------------------------------
    |
    | IMPORTANT:
    | Application is already saved in database.
    | Resume is also already saved.
    |
    */

    error_log(
        'PHPMailer error: ' . $mail->ErrorInfo
    );


    response(
        false,
        'Your application was saved, but the notification email could not be sent. Please try again later.',
        [
            'application_id' => $applicationId,
            'mail_sent'      => false
        ]
    );

}