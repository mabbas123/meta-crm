<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationTemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_templates')->delete();

        DB::table('notification_templates')->insert(array(
            0 =>
            array(
                'act' => 'BAL_ADD',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div><div style="font-family: Montserrat, sans-serif;">{{amount}} {{site_currency}} has been added to your account .</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><span style="color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;">Your Current Balance is :&nbsp;</span><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">{{post_balance}}&nbsp; {{site_currency}}&nbsp;</span></font><br></div><div><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></font></div><div>Admin note:&nbsp;<span style="color: rgb(33, 37, 41); font-size: 12px; font-weight: 600; white-space: nowrap; text-align: var(--bs-body-text-align);">{{remark}}</span></div>',
                'email_status' => 1,
                'id' => 1,
                'name' => 'Balance - Added',
                'shortcodes' => '{"trx":"Transaction number for the action","amount":"Amount inserted by the admin","remark":"Remark inserted by the admin","post_balance":"Balance of the user after this transaction"}',
                'sms_body' => '{{amount}} {{site_currency}} credited in your account. Your Current Balance {{post_balance}} {{site_currency}} . Transaction: #{{trx}}. Admin note is "{{remark}}"',
                'sms_status' => 0,
                'subj' => 'Your Account has been Credited',
                'updated_at' => '2022-04-03 02:18:28',
            ),
            1 =>
            array(
                'act' => 'BAL_SUB',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">{{amount}} {{site_currency}} has been subtracted from your account .</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><span style="color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;">Your Current Balance is :&nbsp;</span><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">{{post_balance}}&nbsp; {{site_currency}}</span></font><br><div><font style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></font></div><div>Admin Note: {{remark}}</div>',
                'email_status' => 1,
                'id' => 2,
                'name' => 'Balance - Subtracted',
                'shortcodes' => '{"trx":"Transaction number for the action","amount":"Amount inserted by the admin","remark":"Remark inserted by the admin","post_balance":"Balance of the user after this transaction"}',
                'sms_body' => '{{amount}} {{site_currency}} debited from your account. Your Current Balance {{post_balance}} {{site_currency}} . Transaction: #{{trx}}. Admin Note is {{remark}}',
                'sms_status' => 1,
                'subj' => 'Your Account has been Debited',
                'updated_at' => '2022-04-03 02:24:11',
            ),
            2 =>
            array(
                'act' => 'DEPOSIT_COMPLETE',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div>Your deposit of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been completed Successfully.<span style="font-weight: bolder;"><br></span></div><div><span style="font-weight: bolder;"><br></span></div><div><span style="font-weight: bolder;">Details of your Deposit :<br></span></div><div><br></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color="#000000">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Received : {{method_amount}} {{method_currency}}<br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size="5"><span style="font-weight: bolder;"><br></span></font></div><div><font size="5">Your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}} {{site_currency}}</span></font></div><div><br style="font-family: Montserrat, sans-serif;"></div>',
                'email_status' => 1,
                'id' => 3,
                'name' => 'Deposit - Automated - Successful',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after this transaction"}',
                'sms_body' => '{{amount}} {{site_currency}} Deposit successfully by {{method_name}}',
                'sms_status' => 1,
                'subj' => 'Deposit Completed Successfully',
                'updated_at' => '2022-04-03 02:25:43',
            ),
            3 =>
            array(
                'act' => 'DEPOSIT_APPROVE',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your deposit request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>is Approved .<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your Deposit :<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">Received : {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Paid via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><font size="5"><span style="font-weight: bolder;"><br></span></font></div><div style="font-family: Montserrat, sans-serif;"><font size="5">Your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}} {{site_currency}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div>',
                'email_status' => 1,
                'id' => 4,
                'name' => 'Deposit - Manual - Approved',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after this transaction"}',
                'sms_body' => 'Admin Approve Your {{amount}} {{site_currency}} payment request by {{method_name}} transaction : {{trx}}',
                'sms_status' => 1,
                'subj' => 'Your Deposit is Approved',
                'updated_at' => '2022-04-03 02:26:07',
            ),
            4 =>
            array(
                'act' => 'DEPOSIT_REJECT',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your deposit request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}} has been rejected</span>.<span style="font-weight: bolder;"><br></span></div><div><br></div><div><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">Received : {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Paid via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;">Charge: {{charge}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number was : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">if you have any queries, feel free to contact us.<br></div><br style="font-family: Montserrat, sans-serif;"><div style="font-family: Montserrat, sans-serif;"><br><br></div><span style="color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;">{{rejection_message}}</span><br>',
                'email_status' => 1,
                'id' => 5,
                'name' => 'Deposit - Manual - Rejected',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency","rejection_message":"Rejection message by the admin"}',
                'sms_body' => 'Admin Rejected Your {{amount}} {{site_currency}} payment request by {{method_name}}{{rejection_message}}',
                'sms_status' => 1,
                'subj' => 'Your Deposit Request is Rejected',
                'updated_at' => '2022-04-05 03:45:27',
            ),
            5 =>
            array(
                'act' => 'DEPOSIT_REQUEST',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div>Your deposit request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>submitted successfully<span style="font-weight: bolder;">&nbsp;.<br></span></div><div><span style="font-weight: bolder;"><br></span></div><div><span style="font-weight: bolder;">Details of your Deposit :<br></span></div><div><br></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}}<br></div><div>Pay via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div><br style="font-family: Montserrat, sans-serif;"></div>',
                'email_status' => 1,
                'id' => 6,
                'name' => 'Deposit - Manual - Requested',
                'shortcodes' => '{"trx":"Transaction number for the deposit","amount":"Amount inserted by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the deposit method","method_currency":"Currency of the deposit method","method_amount":"Amount after conversion between base currency and method currency"}',
                'sms_body' => '{{amount}} {{site_currency}} Deposit requested by {{method_name}}. Charge: {{charge}} . Trx: {{trx}}',
                'sms_status' => 1,
                'subj' => 'Deposit Request Submitted Successfully',
                'updated_at' => '2022-04-03 02:29:19',
            ),
            6 =>
            array(
                'act' => 'PASS_RESET_CODE',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">We have received a request to reset the password for your account on&nbsp;<span style="font-weight: bolder;">{{time}} .<br></span></div><div style="font-family: Montserrat, sans-serif;">Requested From IP:&nbsp;<span style="font-weight: bolder;">{{ip}}</span>&nbsp;using&nbsp;<span style="font-weight: bolder;">{{browser}}</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">{{operating_system}}&nbsp;</span>.</div><div style="font-family: Montserrat, sans-serif;"><br></div><br style="font-family: Montserrat, sans-serif;"><div style="font-family: Montserrat, sans-serif;"><div>Your account recovery code is:&nbsp;&nbsp;&nbsp;<font size="6"><span style="font-weight: bolder;">{{code}}</span></font></div><div><br></div></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="4" color="#CC0000">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><div><font size="4" color="#CC0000"><br></font></div>',
                'email_status' => 1,
                'id' => 7,
                'name' => 'Password - Reset - Code',
                'shortcodes' => '{"code":"Verification code for password reset","ip":"IP address of the user","browser":"Browser of the user","operating_system":"Operating system of the user","time":"Time of the request"}',
                'sms_body' => 'Your account recovery code is: {{code}}',
                'sms_status' => 0,
                'subj' => 'Password Reset',
                'updated_at' => '2022-03-20 20:47:05',
            ),
            7 =>
            array(
                'act' => 'PASS_RESET_DONE',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<p style="font-family: Montserrat, sans-serif;">You have successfully reset your password.</p><p style="font-family: Montserrat, sans-serif;">You changed from&nbsp; IP:&nbsp;<span style="font-weight: bolder;">{{ip}}</span>&nbsp;using&nbsp;<span style="font-weight: bolder;">{{browser}}</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">{{operating_system}}&nbsp;</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">{{time}}</span></p><p style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></p><p style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><font color="#ff0000">If you did not change that, please contact us as soon as possible.</font></span></p>',
                'email_status' => 1,
                'id' => 8,
                'name' => 'Password - Reset - Confirmation',
                'shortcodes' => '{"ip":"IP address of the user","browser":"Browser of the user","operating_system":"Operating system of the user","time":"Time of the request"}',
                'sms_body' => 'Your password has been changed successfully',
                'sms_status' => 1,
                'subj' => 'You have reset your password',
                'updated_at' => '2022-04-05 03:46:35',
            ),
            8 =>
            array(
                'act' => 'ADMIN_SUPPORT_REPLY',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div><p><span data-mce-style="font-size: 11pt;" style="font-size: 11pt;"><span style="font-weight: bolder;">A member from our support team has replied to the following ticket:</span></span></p><p><span style="font-weight: bolder;"><span data-mce-style="font-size: 11pt;" style="font-size: 11pt;"><span style="font-weight: bolder;"><br></span></span></span></p><p><span style="font-weight: bolder;">[Ticket#{{ticket_id}}] {{ticket_subject}}<br><br>Click here to reply:&nbsp; {{link}}</span></p><p>----------------------------------------------</p><p>Here is the reply :<br></p><p>{{reply}}<br></p></div><div><br style="font-family: Montserrat, sans-serif;"></div>',
                'email_status' => 1,
                'id' => 9,
                'name' => 'Support - Reply',
                'shortcodes' => '{"ticket_id":"ID of the support ticket","ticket_subject":"Subject  of the support ticket","reply":"Reply made by the admin","link":"URL to view the support ticket"}',
                'sms_body' => 'Your Ticket#{{ticket_id}} :  {{ticket_subject}} has been replied.',
                'sms_status' => 1,
                'subj' => 'Reply Support Ticket',
                'updated_at' => '2022-03-20 20:47:51',
            ),
            9 =>
            array(
                'act' => 'EVER_CODE',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<br><div><div style="font-family: Montserrat, sans-serif;">Thanks For joining us.<br></div><div style="font-family: Montserrat, sans-serif;">Please use the below code to verify your email address.<br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Your email verification code is:<font size="6"><span style="font-weight: bolder;">&nbsp;{{code}}</span></font></div></div>',
                'email_status' => 1,
                'id' => 10,
                'name' => 'Verification - Email',
                'shortcodes' => '{"code":"Email verification code"}',
                'sms_body' => '---',
                'sms_status' => 0,
                'subj' => 'Please verify your email address',
                'updated_at' => '2022-04-03 02:32:07',
            ),
            10 =>
            array(
                'act' => 'SVER_CODE',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '---',
                'email_status' => 0,
                'id' => 11,
                'name' => 'Verification - SMS',
                'shortcodes' => '{"code":"SMS Verification Code"}',
                'sms_body' => 'Your phone verification code is: {{code}}',
                'sms_status' => 1,
                'subj' => 'Verify Your Mobile Number',
                'updated_at' => '2022-03-20 19:24:37',
            ),
            11 =>
            array(
                'act' => 'WITHDRAW_APPROVE',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your withdraw request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been Processed Successfully.<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your withdraw:<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">You will get: {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">-----</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="4">Details of Processed Payment :</font></div><div style="font-family: Montserrat, sans-serif;"><font size="4"><span style="font-weight: bolder;">{{admin_details}}</span></font></div>',
                'email_status' => 1,
                'id' => 12,
                'name' => 'Withdraw - Approved',
                'shortcodes' => '{"trx":"Transaction number for the withdraw","amount":"Amount requested by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the withdraw method","method_currency":"Currency of the withdraw method","method_amount":"Amount after conversion between base currency and method currency","admin_details":"Details provided by the admin"}',
                'sms_body' => 'Admin Approve Your {{amount}} {{site_currency}} withdraw request by {{method_name}}. Transaction {{trx}}',
                'sms_status' => 1,
                'subj' => 'Withdraw Request has been Processed and your money is sent',
                'updated_at' => '2022-03-20 20:50:16',
            ),
            12 =>
            array(
                'act' => 'WITHDRAW_REJECT',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your withdraw request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been Rejected.<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your withdraw:<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">You should get: {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">----</div><div style="font-family: Montserrat, sans-serif;"><font size="3"><br></font></div><div style="font-family: Montserrat, sans-serif;"><font size="3">{{amount}} {{currency}} has been&nbsp;<span style="font-weight: bolder;">refunded&nbsp;</span>to your account and your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}}</span><span style="font-weight: bolder;">&nbsp;{{site_currency}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">-----</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="4">Details of Rejection :</font></div><div style="font-family: Montserrat, sans-serif;"><font size="4"><span style="font-weight: bolder;">{{admin_details}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br><br><br><br><br></div><div></div><div></div>',
                'email_status' => 1,
                'id' => 13,
                'name' => 'Withdraw - Rejected',
                'shortcodes' => '{"trx":"Transaction number for the withdraw","amount":"Amount requested by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the withdraw method","method_currency":"Currency of the withdraw method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after fter this action","admin_details":"Rejection message by the admin"}',
                'sms_body' => 'Admin Rejected Your {{amount}} {{site_currency}} withdraw request. Your Main Balance {{post_balance}}  {{method_name}} , Transaction {{trx}}',
                'sms_status' => 1,
                'subj' => 'Withdraw Request has been Rejected and your money is refunded to your account',
                'updated_at' => '2022-03-20 20:57:46',
            ),
            13 =>
            array(
                'act' => 'WITHDRAW_REQUEST',
                'created_at' => '2021-11-03 12:00:00',
                'email_body' => '<div style="font-family: Montserrat, sans-serif;">Your withdraw request of&nbsp;<span style="font-weight: bolder;">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style="font-weight: bolder;">{{method_name}}&nbsp;</span>has been submitted Successfully.<span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></div><div style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;">Details of your withdraw:<br></span></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Amount : {{amount}} {{site_currency}}</div><div style="font-family: Montserrat, sans-serif;">Charge:&nbsp;<font color="#FF0000">{{charge}} {{site_currency}}</font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style="font-family: Montserrat, sans-serif;">You will get: {{method_amount}} {{method_currency}}<br></div><div style="font-family: Montserrat, sans-serif;">Via :&nbsp; {{method_name}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Transaction Number : {{trx}}</div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="5">Your current Balance is&nbsp;<span style="font-weight: bolder;">{{post_balance}} {{site_currency}}</span></font></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><br><br><br></div>',
                'email_status' => 1,
                'id' => 14,
                'name' => 'Withdraw - Requested',
                'shortcodes' => '{"trx":"Transaction number for the withdraw","amount":"Amount requested by the user","charge":"Gateway charge set by the admin","rate":"Conversion rate between base currency and method currency","method_name":"Name of the withdraw method","method_currency":"Currency of the withdraw method","method_amount":"Amount after conversion between base currency and method currency","post_balance":"Balance of the user after fter this transaction"}',
                'sms_body' => '{{amount}} {{site_currency}} withdraw requested by {{method_name}}. You will get {{method_amount}} {{method_currency}} Trx: {{trx}}',
                'sms_status' => 1,
                'subj' => 'Withdraw Request Submitted Successfully',
                'updated_at' => '2022-03-21 04:39:03',
            ),
            14 =>
            array(
                'act' => 'DEFAULT',
                'created_at' => '2019-09-14 13:14:22',
                'email_body' => '{{message}}',
                'email_status' => 1,
                'id' => 15,
                'name' => 'Default Template',
                'shortcodes' => '{"subject":"Subject","message":"Message"}',
                'sms_body' => '{{message}}',
                'sms_status' => 1,
                'subj' => '{{subject}}',
                'updated_at' => '2021-11-04 09:38:55',
            ),
            15 =>
            array(
                'act' => 'KYC_APPROVE',
                'created_at' => NULL,
                'email_body' => '<font color="#212529">Your KYC document is </font>successfully<font color="#212529">&nbsp;verified.</font><br>',
                'email_status' => 1,
                'id' => 16,
                'name' => 'KYC Approved',
                'shortcodes' => '[]',
                'sms_body' => 'Your KYC document is successfully verified.',
                'sms_status' => 1,
                'subj' => 'KYC has been approved',
                'updated_at' => '2022-11-23 10:25:06',
            ),
            16 =>
            array(
                'act' => 'KYC_REJECT',
                'created_at' => NULL,
                'email_body' => 'Your KYC document is not valid.',
                'email_status' => 1,
                'id' => 17,
                'name' => 'KYC Rejected Successfully',
                'shortcodes' => '[]',
                'sms_body' => 'Your KYC document is not valid.',
                'sms_status' => 1,
                'subj' => 'KYC has been rejected',
                'updated_at' => '2022-11-23 10:22:13',
            ),
            17 =>
            array(
                'act' => 'REFERRAL_COMMISSION',
                'created_at' => NULL,
                'email_body' => '<font color="#212529" style="font-family: Montserrat, sans-serif;">Congratulation, you get&nbsp;</font><span style="color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;">Referral&nbsp;</span><font color="#212529" style=""><font face="Montserrat, sans-serif">Commission from user {{username}}, {{amount}}&nbsp;</font><font face="Montserrat, sans-serif">{{site_currency}}&nbsp;&nbsp;And your current balance is {{post_balance}}&nbsp;</font></font><font color="#212529" face="Montserrat, sans-serif">&nbsp;{{site_currency}}. Transaction number {{trx}}</font><br>',
                'email_status' => 1,
                'id' => 18,
                'name' => 'Referral Commission',
                'shortcodes' => '{"username":"commission From user","amount":"Plan price","post_balance":"After Balance","trx":"Transaction number"}',
                'sms_body' => 'Congratulation, you get Referral Commission from user {{username}}, {{amount}} {{site_currency}}  And your current balance is {{post_balance}}  {{site_currency}}. Transaction number {{trx}}',
                'sms_status' => 0,
                'subj' => 'Referral Commission',
                'updated_at' => '2022-11-09 10:08:16',
            ),
            18 =>
            array(
                'act' => 'PLAN_PURCHASED',
                'created_at' => NULL,
                'email_body' => 'Your purchase plan information is Transaction Number: {{trx}}, Plan Price: {{price}} {{site_currency}}, Plan Name: {{plan_name}}, Your Current Balance: {{post_balance}} {{site_currency}}',
                'email_status' => 1,
                'id' => 19,
                'name' => 'Plan Purchase',
                'shortcodes' => '{"trx":"Transaction number","price":"Plan price", "plan_name" : "Plan name", "post_balance": "Balance of the user after this transaction"}',
                'sms_body' => 'Your purchase plan information is Transaction Number: {{trx}}, Plan Price: {{price}} {{site_currency}}, Plan Name: {{plan_name}}, Your Current Balance: {{post_balance}} {{site_currency}}',
                'sms_status' => 0,
                'subj' => 'Plan Purchase Successfully',
                'updated_at' => '2022-11-15 06:23:23',
            ),
            19 =>
            array(
                'act' => 'MATCHING_BONUS',
                'created_at' => NULL,
                'email_body' => 'You have got matching bonus&nbsp;&nbsp;<span style="color: rgb(33, 37, 41);">{{amount}}&nbsp;{{site_currency}} for&nbsp;</span><span style="color: rgb(33, 37, 41);">{{paid_bv}}&nbsp;</span>BV , Your current balance:&nbsp;{{post_balance}}&nbsp;{{site_currency}}',
                'email_status' => 1,
                'id' => 20,
                'name' => 'Matching Bonus',
                'shortcodes' => '{"amount":"Matching amount", "paid_bv":"Paid business value", "post_balance":"After Balance"}',
                'sms_body' => 'You have got matching bonus  {{amount}} {{site_currency}} for {{paid_bv}} BV , Your current balance: {{post_balance}} {{site_currency}}',
                'sms_status' => 0,
                'subj' => 'Matching Bonus',
                'updated_at' => '2022-11-17 03:11:20',
            ),
            20 =>
            array(
                'act' => 'BALANCE_SEND',
                'created_at' => NULL,
                'email_body' => 'Your balance transfer information is Username:&nbsp;{{username}}, Amount:&nbsp;{{amount}}&nbsp;{{site_currency}}, Charge:&nbsp;{{charge}}&nbsp;{{site_currency}}, Current Balance:&nbsp;{{post_balance}}&nbsp;{{site_currency}}',
                'email_status' => 1,
                'id' => 21,
                'name' => 'Balance Send',
                'shortcodes' => '{"username":"Target username","amount":"Total amount","charge":"Transfer charge","post_balance":"After balance"}',
                'sms_body' => 'Your balance transfer information is Username: {{username}}, Amount: {{amount}} {{site_currency}}, Charge: {{charge}} {{site_currency}}, Current Balance: {{post_balance}} {{site_currency}}',
                'sms_status' => 0,
                'subj' => 'Balance Transfer Successfully',
                'updated_at' => '2022-11-17 03:27:25',
            ),
            21 =>
            array(
                'act' => 'BALANCE_RECEIVE',
                'created_at' => NULL,
                'email_body' => '<span style="color: rgb(33, 37, 41);">Your balance receive information is Username:&nbsp;{{username}}, Amount:&nbsp;{{amount}}&nbsp;{{site_currency}}, Current Balance:&nbsp;{{post_balance}}&nbsp;{{site_currency}}</span><br>',
                'email_status' => 1,
                'id' => 22,
                'name' => 'Balance Receive',
                'shortcodes' => '{"username":"Sender username","amount":"Total amount","post_balance":"After balance"}',
                'sms_body' => 'Your balance receive information is Username: {{username}}, Amount: {{amount}} {{site_currency}}, Current Balance: {{post_balance}} {{site_currency}}',
                'sms_status' => 0,
                'subj' => 'You Receive New Balance',
                'updated_at' => '2022-11-17 03:28:04',
            ),
            22 =>
            array(
                'act' => 'TREE_COMMISSION',
                'created_at' => NULL,
                'email_body' => 'Congratulations! You got tree commission. Amount:&nbsp;{{amount}}&nbsp;{{site_currency}}, Current Balance:&nbsp;{{post_balance}}&nbsp;{{site_currency}}',
                'email_status' => 1,
                'id' => 23,
                'name' => 'Tree Commission',
                'shortcodes' => '{"amount":"Commission amount","post_balance":"After balance"}',
                'sms_body' => 'Congratulations! You got tree commission. Amount: {{amount}} {{site_currency}}, Current Balance: {{post_balance}} {{site_currency}}',
                'sms_status' => 1,
                'subj' => 'You got tree commission',
                'updated_at' => '2022-11-17 03:37:48',
            ),
        ));
    }
}
