<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CareerApplicationController extends Controller
{
    /**
     * Store career application
     */
    public function store(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'job_title' => [
                'nullable',
                'string',
                'max:255',
            ],

            'full_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[A-Za-zÀ-ÿ\s.\'-]+$/',
            ],

            'email' => [
                'required',
                'email',
                'max:150',
            ],

            'phone' => [
                'required',
                'string',
                'max:18',
                'regex:/^(?=.*\d)\+?[0-9 ]{9,17}$/',
            ],

            'current_location' => [
                'nullable',
                'string',
                'max:150',
            ],

            'total_experience' => [
                'required',
                'string',
                'max:50',
            ],

            'linkedin' => [
                'nullable',
                'url',
                'max:500',
            ],

            'cover_note' => [
                'required',
                'string',
                'min:10',
                'max:5000',
            ],

            'resume' => [
                'required',
                'file',
                'mimes:pdf,doc,docx',
                'max:5120',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | CLEAN DATA
        |--------------------------------------------------------------------------
        */

        $jobTitle = trim($validated['job_title'] ?? '');
        $fullName = trim($validated['full_name']);
        $email = trim($validated['email']);
        $phone = trim($validated['phone']);
        $currentLocation = trim($validated['current_location'] ?? '');
        $totalExperience = trim($validated['total_experience']);
        $linkedin = trim($validated['linkedin'] ?? '');
        $coverNote = trim($validated['cover_note']);


        /*
        |--------------------------------------------------------------------------
        | RESUME UPLOAD
        |--------------------------------------------------------------------------
        */

        $resumePath = null;
        $originalFileName = null;
        $uniqueFileName = null;

        try {

            $resume = $request->file('resume');

            $originalFileName = $resume->getClientOriginalName();

            $uniqueFileName =
                now()->format('YmdHis') . '_' .
                bin2hex(random_bytes(8)) . '_' .
                preg_replace(
                    '/[^a-zA-Z0-9._-]/',
                    '_',
                    $originalFileName
                );


            /*
            |--------------------------------------------------------------------------
            | STORE RESUME
            |--------------------------------------------------------------------------
            */

            $resumePath = $resume->storeAs(
                'uploads/resumes',
                $uniqueFileName,
                'public'
            );


            /*
            |--------------------------------------------------------------------------
            | SAVE APPLICATION TO DATABASE
            |--------------------------------------------------------------------------
            |
            | IMPORTANT:
            | Your applications table currently has created_at
            | but does NOT have updated_at.
            |
            */

            $applicationId = DB::table('applications')
                ->insertGetId([
                    'job_title'        => $jobTitle,
                    'full_name'        => $fullName,
                    'email'            => $email,
                    'phone'            => $phone,
                    'current_location' => $currentLocation,
                    'total_experience' => $totalExperience,
                    'linkedin'         => $linkedin,
                    'cover_note'       => $coverNote,
                    'resume'           => $uniqueFileName,
                    'created_at'       => now(),
                ]);


            /*
            |--------------------------------------------------------------------------
            | EMAIL HTML
            |--------------------------------------------------------------------------
            */

            $logoPath = public_path('images/jack-olivol.webp');

            $escapedJobTitle = e($jobTitle ?: 'General Application');
            $escapedFullName = e($fullName);
            $escapedEmail = e($email);
            $escapedPhone = e($phone);
            $escapedLocation = e($currentLocation ?: '-');
            $escapedExperience = e($totalExperience);
            $escapedLinkedin = $linkedin
                ? '<a href="' . e($linkedin) . '" style="color:#b58b4d;">'
                    . e($linkedin) . '</a>'
                : '-';
            $escapedCoverNote = nl2br(e($coverNote));

            $html = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>New Job Application</title>
            </head>

            <body style="
                margin:0;
                padding:0;
                background-color:#f4efe6;
                font-family:Arial, Helvetica, sans-serif;
            ">

                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f4efe6;padding:40px 15px;">
                    <tr>
                        <td align="center">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width:680px;background:#ffffff;border-radius:12px;overflow:hidden;">
                                <tr>
                                    <td align="center" style="background:#080808;padding:35px 25px;">
                                        <img src="cid:jac-olivol-logo" alt="Jac Olivol" style="max-width:220px;width:100%;height:auto;display:block;margin:0 auto;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:35px 40px 10px;">
                                        <p style="margin:0;color:#333333;font-size:15px;line-height:1.7;">Hello Jac Olivol Team,</p>
                                        <p style="margin:12px 0 0;color:#666666;font-size:14px;line-height:1.7;">You have received a new career application through the <strong style="color:#333333;">Jac Olivol</strong> website.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:25px 40px 12px;">
                                        <p style="margin:0;color:#b58b4d;font-size:12px;font-weight:bold;letter-spacing:1.8px;text-transform:uppercase;">Application Details</p>
                                        <div style="width:40px;height:2px;background:#c49a6c;margin-top:10px;"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 40px 10px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #eee7dc;border-radius:8px;overflow:hidden;">
                                            <tr><td style="padding:14px 16px;background:#faf8f4;color:#777777;font-size:13px;border-bottom:1px solid #eee7dc;">Job Title</td><td style="padding:14px 16px;color:#b58b4d;font-size:14px;font-weight:600;border-bottom:1px solid #eee7dc;">' . $escapedJobTitle . '</td></tr>
                                            <tr><td style="padding:14px 16px;background:#faf8f4;color:#777777;font-size:13px;border-bottom:1px solid #eee7dc;">Full Name</td><td style="padding:14px 16px;color:#222222;font-size:14px;font-weight:600;border-bottom:1px solid #eee7dc;">' . $escapedFullName . '</td></tr>
                                            <tr><td style="padding:14px 16px;background:#faf8f4;color:#777777;font-size:13px;border-bottom:1px solid #eee7dc;">Email Address</td><td style="padding:14px 16px;color:#222222;font-size:14px;border-bottom:1px solid #eee7dc;">' . $escapedEmail . '</td></tr>
                                            <tr><td style="padding:14px 16px;background:#faf8f4;color:#777777;font-size:13px;border-bottom:1px solid #eee7dc;">Phone Number</td><td style="padding:14px 16px;color:#222222;font-size:14px;border-bottom:1px solid #eee7dc;">' . $escapedPhone . '</td></tr>
                                            <tr><td style="padding:14px 16px;background:#faf8f4;color:#777777;font-size:13px;border-bottom:1px solid #eee7dc;">Current Location</td><td style="padding:14px 16px;color:#222222;font-size:14px;border-bottom:1px solid #eee7dc;">' . $escapedLocation . '</td></tr>
                                            <tr><td style="padding:14px 16px;background:#faf8f4;color:#777777;font-size:13px;border-bottom:1px solid #eee7dc;">Total Experience</td><td style="padding:14px 16px;color:#222222;font-size:14px;border-bottom:1px solid #eee7dc;">' . $escapedExperience . '</td></tr>
                                            <tr><td style="padding:14px 16px;background:#faf8f4;color:#777777;font-size:13px;">LinkedIn</td><td style="padding:14px 16px;color:#222222;font-size:14px;">' . $escapedLinkedin . '</td></tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:28px 40px 12px;">
                                        <p style="margin:0;color:#b58b4d;font-size:12px;font-weight:bold;letter-spacing:1.8px;text-transform:uppercase;">Cover Note</p>
                                        <div style="width:40px;height:2px;background:#c49a6c;margin-top:10px;"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 40px 35px;">
                                        <div style="background:#faf8f4;border-left:4px solid #c49a6c;padding:20px;border-radius:0 7px 7px 0;color:#444444;font-size:14px;line-height:1.8;">' . $escapedCoverNote . '</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="background:#080808;padding:22px 25px;">
                                        <p style="margin:0;color:#999999;font-size:12px;line-height:1.6;">This email was generated from the Jac Olivol careers application form.</p>
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
            | RESUME FULL PATH
            |--------------------------------------------------------------------------
            */

            $fullResumePath = Storage::disk('public')
                ->path($resumePath);


            /*
            |--------------------------------------------------------------------------
            | SEND EMAIL
            |--------------------------------------------------------------------------
            */

            Mail::html($html, function ($mail) use (
                $validated,
                $fullResumePath,
                $originalFileName,
                $jobTitle,
                $logoPath
            ) {

                $mail->to(env('MAIL_CAREER_TO'))
                    ->subject(
                        'New Job Application - ' .
                        (
                            !empty($jobTitle)
                                ? $jobTitle
                                : 'Careers'
                        )
                    );

                /*
                |--------------------------------------------------------------------------
                | REPLY TO APPLICANT
                |--------------------------------------------------------------------------
                */

                $mail->replyTo(
                    $validated['email'],
                    $validated['full_name']
                );

                $mail->embed($logoPath, 'jac-olivol-logo');


                /*
                |--------------------------------------------------------------------------
                | ATTACH RESUME
                |--------------------------------------------------------------------------
                */

                $mail->attach(
                    $fullResumePath,
                    [
                        'as' => $originalFileName,
                    ]
                );
            });


            /*
            |--------------------------------------------------------------------------
            | SUCCESS LOG
            |--------------------------------------------------------------------------
            */

            Log::info(
                'Career application submitted successfully',
                [
                    'application_id' => $applicationId,
                    'email' => $email,
                ]
            );


            /*
            |--------------------------------------------------------------------------
            | SUCCESS RESPONSE
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => true,
                'message' => 'Your application has been submitted successfully.',
                'application_id' => $applicationId,
                'mail_sent' => true,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | DATABASE ERROR
        |--------------------------------------------------------------------------
        */

        catch (\Illuminate\Database\QueryException $e) {

            /*
            |--------------------------------------------------------------------------
            | DELETE RESUME IF DATABASE INSERT FAILS
            |--------------------------------------------------------------------------
            */

            if ($resumePath) {
                Storage::disk('public')->delete($resumePath);
            }


            Log::error(
                'Career application database error',
                [
                    'error' => $e->getMessage(),
                ]
            );


            return response()->json([
                'success' => false,
                'message' => 'Unable to submit your application. Please try again later.',
            ], 500);
        }


        /*
        |--------------------------------------------------------------------------
        | EMAIL ERROR
        |--------------------------------------------------------------------------
        */

        catch (\Throwable $e) {

            /*
            |--------------------------------------------------------------------------
            | IMPORTANT:
            |--------------------------------------------------------------------------
            | Application is already saved in DB.
            | We DO NOT delete the resume here.
            |
            */

            Log::error(
                'Career application email error',
                [
                    'error' => $e->getMessage(),
                    'application_id' => $applicationId ?? null,
                ]
            );


            return response()->json([
                'success' => true,
                'message' => 'Your application has been submitted successfully.',
                'application_id' => $applicationId ?? null,
                'mail_sent' => false,
            ]);
        }
    }
}
