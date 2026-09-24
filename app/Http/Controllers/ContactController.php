<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     * Submit Contact Form
     */
    public function submit(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'first_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],

            'last_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
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

            'inquiry_type' => [
                'required',
                Rule::in([
                    'Business / Distribution Inquiry',
                    'Media & Press',
                    'Partnership Proposal',
                    'Product Feedback',
                    'Careers',
                    'General Query',
                ]),
            ],

            'message' => [
                'required',
                'string',
                'min:10',
                'max:5000',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | SAVE CONTACT MESSAGE
        |--------------------------------------------------------------------------
        */

        try {

            $messageId = DB::table('contact_messages')->insertGetId([
                'first_name'   => trim($validated['first_name']),
                'last_name'    => trim($validated['last_name']),
                'email'        => trim($validated['email']),
                'phone'        => trim($validated['phone']),
                'inquiry_type' => $validated['inquiry_type'],
                'message'      => trim($validated['message']),
                'created_at'   => now(),
            ]);

        } catch (\Exception $e) {

            Log::error('Contact database insert error', [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Unable to save your message. Please try again.',
            ], 500);
        }

        /*
        |--------------------------------------------------------------------------
        | ESCAPED EMAIL DATA
        |--------------------------------------------------------------------------
        */

        $firstName   = e($validated['first_name']);
        $lastName    = e($validated['last_name']);
        $email       = e($validated['email']);
        $phone       = e($validated['phone']);
        $inquiryType = e($validated['inquiry_type']);
        $message     = nl2br(e($validated['message']));

        /*
        |--------------------------------------------------------------------------
        | EMAIL HTML
        |--------------------------------------------------------------------------
        */

        $html = '
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>New Contact Inquiry</title>
        </head>

        <body style="
            margin:0;
            padding:0;
            background-color:#f4efe6;
            font-family:Arial, Helvetica, sans-serif;
        ">

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="
                    background-color:#f4efe6;
                    padding:40px 15px;
                "
            >

                <tr>
                    <td align="center">

                        <table
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                            style="
                                max-width:680px;
                                background:#ffffff;
                                border-radius:12px;
                                overflow:hidden;
                            "
                        >

                            <!-- HEADER -->
                            <tr>
                                <td
                                    align="center"
                                    style="
                                        background:#080808;
                                        padding:35px 25px;
                                    "
                                >

                                    <img
                                        src="' . asset('images/jack-olivol.webp') . '"
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
                                        You have received a new inquiry through
                                        the <strong style="color:#333333;">
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

                                    <table
                                        width="100%"
                                        cellpadding="0"
                                        cellspacing="0"
                                        border="0"
                                        style="
                                            border:1px solid #eee7dc;
                                            border-radius:8px;
                                            overflow:hidden;
                                        "
                                    >

                                        <!-- NAME -->
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
                                                ' . $firstName . ' ' . $lastName . '
                                            </td>

                                        </tr>


                                        <!-- EMAIL -->
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
                                                ' . $email . '
                                            </td>

                                        </tr>


                                        <!-- PHONE -->
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
                                                ' . $phone . '
                                            </td>

                                        </tr>


                                        <!-- INQUIRY TYPE -->
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
                                                ' . $inquiryType . '
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
                                        ' . $message . '
                                    </div>

                                </td>
                            </tr>


                            <!-- FOOTER -->
                            <tr>
                                <td
                                    align="center"
                                    style="
                                        background:#080808;
                                        padding:22px 25px;
                                    "
                                >

                                    <p style="
                                        margin:0;
                                        color:#999999;
                                        font-size:12px;
                                        line-height:1.6;
                                    ">
                                        This email was generated from the
                                        Jac Olivol website contact form.
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
        | SEND EMAIL
        |--------------------------------------------------------------------------
        */

        try {

            Mail::html($html, function ($mail) use ($validated) {

                $mail->to(env('MAIL_CONTACT_TO'))
                    ->subject(
                        'New Contact Inquiry - ' .
                        $validated['inquiry_type']
                    );

                $mail->replyTo(
                    $validated['email'],
                    $validated['first_name'] . ' ' .
                    $validated['last_name']
                );
            });

        } catch (\Exception $e) {

            Log::error('Contact mail error', [
                'error'      => $e->getMessage(),
                'message_id' => $messageId,
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Your message was saved, but the notification email could not be sent.',
                'data' => [
                    'message_id' => $messageId,
                    'mail_sent'  => false,
                ],
            ], 500);
        }


        /*
        |--------------------------------------------------------------------------
        | SUCCESS RESPONSE
        |--------------------------------------------------------------------------
        */

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully.',
            'data' => [
                'message_id' => $messageId,
                'mail_sent'  => true,
            ],
        ]);
    }
}
