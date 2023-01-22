<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->delete();

        DB::table('general_settings')->insert(array(
            0 =>
            array(
                'active_template' => 'basic',
                'agree' => 1,
                'balance_transfer' => 1,
                'balance_transfer_fixed_charge' => '1.00000000',
                'balance_transfer_max' => '1000.00000000',
                'balance_transfer_min' => '0.00000000',
                'balance_transfer_per_charge' => '2.00',
                'base_color' => '1e90fF',
                'bv_price' => '10.00000000',
                'cary_flash' => 0,
                'created_at' => NULL,
                'cur_sym' => '$',
                'cur_text' => 'USD',
                'email_from' => 'info@viserlab.com',
                'email_template' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--[if !mso]><!-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<style type="text/css">
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }
table { border-spacing: 0; table-layout: fixed; margin: 0 auto;border-collapse: collapse; }
table table table { table-layout: auto; }
.yshortcuts a { border-bottom: none !important; }
img:hover { opacity: 0.9 !important; }
a { color: #0087ff; text-decoration: none; }
.textbutton a { font-family: \'open sans\', arial, sans-serif !important;}
.btn-link a { color:#FFFFFF !important;}

@media only screen and (max-width: 480px) {
body { width: auto !important; }
*[class="table-inner"] { width: 90% !important; text-align: center !important; }
*[class="table-full"] { width: 100% !important; text-align: center !important; }
/* image */
img[class="img1"] { width: 100% !important; height: auto !important; }
}
</style>



<table bgcolor="#414a51" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td height="50"></td>
</tr>
<tr>
<td align="center" style="text-align:center;vertical-align:top;font-size:0;">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td align="center" width="600">
<!--header-->
<table class="table-inner" width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td bgcolor="#0087ff" style="border-top-left-radius:6px; border-top-right-radius:6px;text-align:center;vertical-align:top;font-size:0;" align="center">
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td height="20"></td>
</tr>
<tr>
<td align="center" style="font-family: \'Open sans\', Arial, sans-serif; color:#FFFFFF; font-size:16px; font-weight: bold;">This is a System Generated Email</td>
</tr>
<tr>
<td height="20"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<!--end header-->
<table class="table-inner" width="95%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td bgcolor="#FFFFFF" align="center" style="text-align:center;vertical-align:top;font-size:0;">
<table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td height="35"></td>
</tr>
<!--logo-->
<tr>
<td align="center" style="vertical-align:top;font-size:0;">
<a href="#">
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello {{fullname}} ({{username}})</td>
</tr>
<!--end headline-->
<tr>
<td align="center" style="text-align:center;vertical-align:top;font-size:0;">
<table width="40" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td height="20" style=" border-bottom:3px solid #0087ff;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="20"></td>
</tr>
<!--content-->
<tr>
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;">{{message}}</td>
</tr>
<!--end content-->
<tr>
<td height="40"></td>
</tr>

</tbody></table>
</td>
</tr>
<tr>
<td height="45" align="center" bgcolor="#f4f4f4" style="border-bottom-left-radius:6px;border-bottom-right-radius:6px;">
<table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td height="10"></td>
</tr>
<!--preference-->
<tr>
<td class="preference-link" align="center" style="font-family: \'Open sans\', Arial, sans-serif; color:#95a5a6; font-size:14px;">
© 2021 <a href="#">{{site_name}}</a>&nbsp;. All Rights Reserved. 
</td>
</tr>
<!--end preference-->
<tr>
<td height="10"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="60"></td>
</tr>
</tbody></table>',
                'en' => 1,
                'ev' => 0,
                'force_ssl' => 0,
                'global_shortcodes' => '{
"site_name":"Name of your site",
"site_currency":"Currency of your site",
"currency_symbol":"Symbol of currency"
}',
                'id' => 1,
                'kv' => 1,
                'language' => 1,
                'last_cron' => '2022-11-27 13:29:32',
                'last_paid' => NULL,
                'mail_config' => '{"name":"php"}',
                'maintenance_mode' => 0,
                'matching_bonus_time' => 'daily',
                'matching_when' => '5',
                'max_bv' => 500,
                'registration' => 1,
                'secondary_color' => NULL,
                'secure_password' => 1,
                'site_name' => 'OORA Trade',
                'sms_body' => 'hi {{fullname}} ({{username}}), {{message}}',
                'sms_config' => '{"name":"nexmo","clickatell":{"api_key":"----------------"},"infobip":{"username":"------------8888888","password":"-----------------"},"message_bird":{"api_key":"-------------------"},"nexmo":{"api_key":"----------------------","api_secret":"----------------------"},"sms_broadcast":{"username":"----------------------","password":"-----------------------------"},"twilio":{"account_sid":"-----------------------","auth_token":"---------------------------","from":"----------------------"},"text_magic":{"username":"-----------------------","apiv2_key":"-------------------------------"},"custom":{"method":"get","url":"https:\\/\\/hostname\\/demo-api-v1","headers":{"name":["api_key"],"value":["test_api 555"]},"body":{"name":["from_number"],"value":["5657545757"]}}}',
                'sms_from' => 'ViserAdmin',
                'sn' => 1,
                'sv' => 0,
                'system_info' => '[]',
                'total_bv' => 50,
                'updated_at' => '2023-01-21 19:56:52',
            ),
        ));
    }
}
