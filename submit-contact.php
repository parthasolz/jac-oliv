<?php

header('Content-Type: application/json; charset=UTF-8');


/*
|--------------------------------------------------------------------------
| PHPMailer
|--------------------------------------------------------------------------
*/

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
$dbName = 'jacolivol';
$dbUser = 'root';
$dbPass = 'AA^Gckq2xyfjEJ4h';


/*
|--------------------------------------------------------------------------
| EMAIL CONFIGURATION
|--------------------------------------------------------------------------
*/

// Gmail account used to send emails
$senderEmail = 'noreply@jacolivol.com';

// Email where contact messages will be received
$adminEmail = 'prakash.infotechsolz@gmail.com';


/*
|--------------------------------------------------------------------------
| JSON RESPONSE
|--------------------------------------------------------------------------
*/

function response(
    bool $success,
    string $message,
    array $data = []
): void {

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
| REQUEST METHOD
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    response(
        false,
        'Invalid request method.'
    );

}


/*
|--------------------------------------------------------------------------
| GET FORM DATA
|--------------------------------------------------------------------------
*/

$firstName = trim(
    $_POST['first_name'] ?? ''
);

$lastName = trim(
    $_POST['last_name'] ?? ''
);

$email = trim(
    $_POST['email'] ?? ''
);

$phone = trim(
    $_POST['phone'] ?? ''
);

$inquiryType = trim(
    $_POST['inquiry_type'] ?? ''
);

$message = trim(
    $_POST['message'] ?? ''
);


/*
|--------------------------------------------------------------------------
| REQUIRED FIELD VALIDATION
|--------------------------------------------------------------------------
*/

if ($firstName === '') {

    response(
        false,
        'Please enter your first name.'
    );

}


if ($lastName === '') {

    response(
        false,
        'Please enter your last name.'
    );

}


if ($email === '') {

    response(
        false,
        'Please enter your email address.'
    );

}


if ($phone === '') {

    response(
        false,
        'Please enter your phone number.'
    );

}


if ($inquiryType === '') {

    response(
        false,
        'Please select an inquiry type.'
    );

}


if ($message === '') {

    response(
        false,
        'Please enter your message.'
    );

}


/*
|--------------------------------------------------------------------------
| NAME VALIDATION
|--------------------------------------------------------------------------
*/

if (strlen($firstName) < 2) {

    response(
        false,
        'First name must contain at least 2 characters.'
    );

}


if (strlen($firstName) > 100) {

    response(
        false,
        'First name is too long.'
    );

}


if (strlen($lastName) < 2) {

    response(
        false,
        'Last name must contain at least 2 characters.'
    );

}


if (strlen($lastName) > 100) {

    response(
        false,
        'Last name is too long.'
    );

}


/*
|--------------------------------------------------------------------------
| EMAIL VALIDATION
|--------------------------------------------------------------------------
*/

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    response(
        false,
        'Please enter a valid email address.'
    );

}


if (strlen($email) > 150) {

    response(
        false,
        'Email address is too long.'
    );

}


/*
|--------------------------------------------------------------------------
| PHONE VALIDATION
|--------------------------------------------------------------------------
*/

if (!preg_match('/^[0-9+\-\s().]{10,12}$/', $phone)) {

    response(
        false,
        'Please enter a valid phone number.'
    );

}


/*
|--------------------------------------------------------------------------
| INQUIRY TYPE VALIDATION
|--------------------------------------------------------------------------
*/

$allowedInquiryTypes = [
    'Business / Distribution Inquiry',
    'Media & Press',
    'Partnership Proposal',
    'Product Feedback',
    'Careers',
    'General Query'
];


if (!in_array(
    $inquiryType,
    $allowedInquiryTypes,
    true
)) {

    response(
        false,
        'Please select a valid inquiry type.'
    );

}


/*
|--------------------------------------------------------------------------
| MESSAGE VALIDATION
|--------------------------------------------------------------------------
*/

if (strlen($message) < 10) {

    response(
        false,
        'Your message must contain at least 10 characters.'
    );

}


if (strlen($message) > 5000) {

    response(
        false,
        'Your message is too long. Maximum 5000 characters allowed.'
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

    error_log(
        'Contact database connection error: ' .
        $e->getMessage()
    );

    response(
        false,
        'Database connection failed. Please try again later.'
    );

}


/*
|--------------------------------------------------------------------------
| SAVE CONTACT MESSAGE
|--------------------------------------------------------------------------
*/

try {

    $sql = "
        INSERT INTO contact_messages
        (
            first_name,
            last_name,
            email,
            phone,
            inquiry_type,
            message,
            created_at
        )
        VALUES
        (
            :first_name,
            :last_name,
            :email,
            :phone,
            :inquiry_type,
            :message,
            NOW()
        )
    ";


    $stmt = $pdo->prepare($sql);


    $stmt->execute([

        ':first_name'   => $firstName,

        ':last_name'    => $lastName,

        ':email'        => $email,

        ':phone'        => $phone,

        ':inquiry_type' => $inquiryType,

        ':message'      => $message

    ]);


    $messageId = $pdo->lastInsertId();


} catch (PDOException $e) {

    error_log(
        'Contact database insert error: ' .
        $e->getMessage()
    );

    response(
        false,
        'Unable to save your message. Please try again.'
    );

}


/*
|--------------------------------------------------------------------------
| SEND EMAIL USING PHPMailer
|--------------------------------------------------------------------------
*/

$mail = new PHPMailer(true);


try {

    /*
    |--------------------------------------------------------------------------
    | SMTP
    |--------------------------------------------------------------------------
    */

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username = $senderEmail;


    /*
    |--------------------------------------------------------------------------
    | GOOGLE APP PASSWORD
    |--------------------------------------------------------------------------
    |
    | Replace this with your Google App Password.
    |
    */

    $mail->Password = 'gszlbbwpoewcjsda';


    /*
    |--------------------------------------------------------------------------
    | SMTP SECURITY
    |--------------------------------------------------------------------------
    */

    $mail->SMTPSecure =
        PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = 587;


    /*
    |--------------------------------------------------------------------------
    | CHARACTER SET
    |--------------------------------------------------------------------------
    */

    $mail->CharSet = 'UTF-8';


    /*
    |--------------------------------------------------------------------------
    | FROM
    |--------------------------------------------------------------------------
    */

    $mail->setFrom(
        $senderEmail,
        'Jac Olivol Contact Form'
    );


    /*
    |--------------------------------------------------------------------------
    | TO
    |--------------------------------------------------------------------------
    */

    $mail->addAddress(
        $adminEmail,
        'Jac Olivol'
    );


    /*
    |--------------------------------------------------------------------------
    | REPLY TO
    |--------------------------------------------------------------------------
    */

    $mail->addReplyTo(
        $email,
        $firstName . ' ' . $lastName
    );


    /*
    |--------------------------------------------------------------------------
    | EMAIL SUBJECT
    |--------------------------------------------------------------------------
    */

    $mail->Subject =
        'New Contact Inquiry - ' .
        $inquiryType;


    /*
    |--------------------------------------------------------------------------
    | SAFE HTML VALUES
    |--------------------------------------------------------------------------
    */

    $safeFirstName = htmlspecialchars(
        $firstName,
        ENT_QUOTES,
        'UTF-8'
    );


    $safeLastName = htmlspecialchars(
        $lastName,
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


    $safeInquiryType = htmlspecialchars(
        $inquiryType,
        ENT_QUOTES,
        'UTF-8'
    );


    $safeMessage = nl2br(
        htmlspecialchars(
            $message,
            ENT_QUOTES,
            'UTF-8'
        )
    );


    /*
    |--------------------------------------------------------------------------
    | HTML EMAIL
    |--------------------------------------------------------------------------
    */

    $mail->isHTML(true);


    $mail->Body = '

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body style="
        margin:0;
        padding:0;
        background-color:#f4efe6;
        font-family:Arial, Helvetica, sans-serif;
    ">

    <table width="100%" cellpadding="0" cellspacing="0" border="0"
        style="background-color:#f4efe6; padding:40px 15px;">

        <tr>
            <td align="center">

                <!-- MAIN CONTAINER -->
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="
                        max-width:680px;
                        background:#ffffff;
                        border-radius:12px;
                        overflow:hidden;
                    ">

                    <!-- HEADER - LOGO ONLY -->
                    <tr>
                        <td align="center"
                            style="
                                background:#080808;
                                padding:35px 25px;
                            ">

                            <img
                                src="https://jacolivolgroup.com/images/jack-olivol.webp"
                                alt="Jac Olivol"
                                style="
                                    max-width:220px;
                                    width:100%;
                                    height:auto;
                                    display:block;
                                    margin:0 auto;
                                "
                            >

                        </td>
                    </tr>


                    <!-- INTRO -->
                    <tr>
                        <td style="padding:35px 40px 10px;">

                            <p style="
                                margin:0;
                                color:#333333;
                                font-size:15px;
                                line-height:1.7;
                            ">
                                Hello Jac Olivol Team,
                            </p>

                            <p style="
                                margin:12px 0 0;
                                color:#666666;
                                font-size:14px;
                                line-height:1.7;
                            ">
                                You have received a new inquiry through the
                                <strong style="color:#333333;">
                                    Jac Olivol
                                </strong>
                                website contact form.
                            </p>

                        </td>
                    </tr>


                    <!-- CONTACT DETAILS TITLE -->
                    <tr>
                        <td style="padding:25px 40px 12px;">

                            <p style="
                                margin:0;
                                color:#b58b4d;
                                font-size:12px;
                                font-weight:bold;
                                letter-spacing:1.8px;
                                text-transform:uppercase;
                            ">
                                Contact Details
                            </p>

                            <div style="
                                width:40px;
                                height:2px;
                                background:#c49a6c;
                                margin-top:10px;
                            "></div>

                        </td>
                    </tr>


                    <!-- CONTACT DETAILS -->
                    <tr>
                        <td style="padding:5px 40px 10px;">

                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="
                                    border:1px solid #eee7dc;
                                    border-radius:8px;
                                    overflow:hidden;
                                ">

                                <tr>
                                    <td style="
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        width:35%;
                                        border-bottom:1px solid #eee7dc;
                                    ">
                                        Name
                                    </td>

                                    <td style="
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        font-weight:600;
                                        border-bottom:1px solid #eee7dc;
                                    ">
                                        ' . $safeFirstName . ' ' . $safeLastName . '
                                    </td>
                                </tr>


                                <tr>
                                    <td style="
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    ">
                                        Email Address
                                    </td>

                                    <td style="
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        border-bottom:1px solid #eee7dc;
                                    ">
                                        ' . $safeEmail . '
                                    </td>
                                </tr>


                                <tr>
                                    <td style="
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                        border-bottom:1px solid #eee7dc;
                                    ">
                                        Phone Number
                                    </td>

                                    <td style="
                                        padding:14px 16px;
                                        color:#222222;
                                        font-size:14px;
                                        border-bottom:1px solid #eee7dc;
                                    ">
                                        ' . $safePhone . '
                                    </td>
                                </tr>


                                <tr>
                                    <td style="
                                        padding:14px 16px;
                                        background:#faf8f4;
                                        color:#777777;
                                        font-size:13px;
                                    ">
                                        Inquiry Type
                                    </td>

                                    <td style="
                                        padding:14px 16px;
                                        color:#b58b4d;
                                        font-size:14px;
                                        font-weight:600;
                                    ">
                                        ' . $safeInquiryType . '
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>


                    <!-- MESSAGE TITLE -->
                    <tr>
                        <td style="padding:28px 40px 12px;">

                            <p style="
                                margin:0;
                                color:#b58b4d;
                                font-size:12px;
                                font-weight:bold;
                                letter-spacing:1.8px;
                                text-transform:uppercase;
                            ">
                                Message
                            </p>

                            <div style="
                                width:40px;
                                height:2px;
                                background:#c49a6c;
                                margin-top:10px;
                            "></div>

                        </td>
                    </tr>


                    <!-- MESSAGE -->
                    <tr>
                        <td style="padding:5px 40px 35px;">

                            <div style="
                                background:#faf8f4;
                                border-left:4px solid #c49a6c;
                                padding:20px;
                                border-radius:0 7px 7px 0;
                                color:#444444;
                                font-size:14px;
                                line-height:1.8;
                            ">
                                ' . $safeMessage . '
                            </div>

                        </td>
                    </tr>


                    <!-- FOOTER - ONLY ONE LINE -->
                    <tr>
                        <td align="center"
                            style="
                                background:#080808;
                                padding:22px 25px;
                            ">

                            <p style="
                                margin:0;
                                color:#999999;
                                font-size:12px;
                                line-height:1.6;
                            ">
                                This email was generated from the Jac Olivol website contact form.
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>

    </table>

    </body>
    </html>

    ';


    /*
    |--------------------------------------------------------------------------
    | PLAIN TEXT EMAIL
    |--------------------------------------------------------------------------
    */

    $mail->AltBody =
        "New Contact Inquiry\n\n" .

        "Message ID: {$messageId}\n" .

        "First Name: {$firstName}\n" .

        "Last Name: {$lastName}\n" .

        "Email: {$email}\n" .

        "Phone: {$phone}\n" .

        "Inquiry Type: {$inquiryType}\n\n" .

        "Message:\n{$message}";


    /*
    |--------------------------------------------------------------------------
    | SEND
    |--------------------------------------------------------------------------
    */

    $mail->send();


    /*
    |--------------------------------------------------------------------------
    | SUCCESS
    |--------------------------------------------------------------------------
    */

    response(
        true,
        'Message sent successfully.',
        [
            'message_id' => $messageId,
            'mail_sent'  => true
        ]
    );


} catch (Exception $e) {

    /*
    |--------------------------------------------------------------------------
    | EMAIL ERROR
    |--------------------------------------------------------------------------
    */

    error_log(
        'PHPMailer contact error: ' .
        $mail->ErrorInfo
    );


    /*
    |--------------------------------------------------------------------------
    | APPLICATION IS ALREADY SAVED
    |--------------------------------------------------------------------------
    */

    response(
        false,
        'Your message was saved, but the notification email could not be sent. Please try again later.',
        [
            'message_id' => $messageId,
            'mail_sent'  => false
        ]
    );

}