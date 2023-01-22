<?php

namespace Database\Seeders;

use App\Models\Extension;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtensionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Extension::truncate();

        DB::table('extensions')->insert(array(
            0 =>
            array(
                'act' => 'tawk-chat',
                'created_at' => '2019-10-18 23:16:05',
                'description' => 'Key location is shown bellow',
                'id' => 1,
                'image' => 'tawky_big.png',
                'name' => 'Tawk.to',
                'script' => '<script>
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src="https://embed.tawk.to/{{app_key}}";
s1.charset="UTF-8";
s1.setAttribute("crossorigin","*");
s0.parentNode.insertBefore(s1,s0);
})();
</script>',
                'shortcode' => '{"app_key":{"title":"App Key","value":"------------"}}',
                'status' => 0,
                'support' => 'twak.png',
                'updated_at' => '2022-11-27 07:29:15',
            ),
            1 =>
            array(
                'act' => 'google-recaptcha2',
                'created_at' => '2019-10-18 23:16:05',
                'description' => 'Key location is shown bellow',
                'id' => 2,
                'image' => 'recaptcha3.png',
                'name' => 'Google Recaptcha 2',
                'script' => '
<script src="https://www.google.com/recaptcha/api.js"></script>
<div class="g-recaptcha" data-sitekey="{{site_key}}" data-callback="verifyCaptcha"></div>
<div id="g-recaptcha-error"></div>',
                'shortcode' => '{"site_key":{"title":"Site Key","value":"------------"},"secret_key":{"title":"Secret Key","value":"------------"}}',
                'status' => 0,
                'support' => 'recaptcha.png',
                'updated_at' => '2022-11-27 07:29:12',
            ),
            2 =>
            array(
                'act' => 'custom-captcha',
                'created_at' => '2019-10-18 23:16:05',
                'description' => 'Just put any random string',
                'id' => 3,
                'image' => 'customcaptcha.png',
                'name' => 'Custom Captcha',
                'script' => NULL,
                'shortcode' => '{"random_key":{"title":"Random String","value":"SecureString"}}',
                'status' => 0,
                'support' => 'na',
                'updated_at' => '2022-11-27 04:16:17',
            ),
            3 =>
            array(
                'act' => 'google-analytics',
                'created_at' => NULL,
                'description' => 'Key location is shown bellow',
                'id' => 4,
                'image' => 'google_analytics.png',
                'name' => 'Google Analytics',
                'script' => '<script async src="https://www.googletagmanager.com/gtag/js?id={{app_key}}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag("js", new Date());

gtag("config", "{{app_key}}");
</script>',
                'shortcode' => '{"app_key":{"title":"App Key","value":"------"}}',
                'status' => 0,
                'support' => 'ganalytics.png',
                'updated_at' => '2021-05-04 10:19:12',
            ),
            4 =>
            array(
                'act' => 'fb-comment',
                'created_at' => NULL,
                'description' => 'Key location is shown bellow',
                'id' => 5,
                'image' => 'Facebook.png',
                'name' => 'Facebook Comment ',
                'script' => '<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId={{app_key}}&autoLogAppEvents=1"></script>',
                'shortcode' => '{"app_key":{"title":"App Key","value":"----"}}',
                'status' => 0,
                'support' => 'fb_com.PNG',
                'updated_at' => '2022-03-22 05:18:36',
            ),
        ));
    }
}
