<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrontendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('frontends')->delete();

        DB::table('frontends')->insert(array(
            0 =>
            array(
                'created_at' => '2020-07-04 23:42:52',
                'data_keys' => 'seo.data',
                'data_values' => '{"seo_image":"1","keywords":["admin","blog","aaaa","ddd","aaa","viserlab","viserscript","mlm","mlmlab","multilevel","marketing","platform"],"description":"MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It\\u2019s developed for those people who want to start their Multilevel business website.","social_title":"Viserlab Limited","social_description":"MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It\\u2019s developed for those people who want to start their Multilevel business website.","image":"6383035b358c81669530459.png"}',
                'id' => 1,
                'updated_at' => '2022-11-27 03:57:39',
            ),
            1 =>
            array(
                'created_at' => '2020-10-28 00:51:20',
                'data_keys' => 'about.content',
                'data_values' => '{"has_image":"1","heading":"About Us","video_link":"https:\\/\\/www.youtube.com\\/watch?v=WOb4cj7izpE","short_description":"We are not just an online version of any Business market, but also, the reflection of each and every MLM business. We are an international financial company engaged in investment activities, which are related to MLM on financial markets by qualified professional traders.","description":"Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.","background_image":"636a056cba46f1667892588.jpg"}',
                'id' => 24,
                'updated_at' => '2022-11-26 07:13:23',
            ),
            2 =>
            array(
                'created_at' => '2020-10-28 00:51:34',
                'data_keys' => 'blog.content',
                'data_values' => '{"heading":"Latest News","sub_heading":"Welcome! Please check our latest news and article here..."}',
                'id' => 25,
                'updated_at' => '2022-11-08 06:31:31',
            ),
            3 =>
            array(
                'created_at' => '2020-10-28 00:59:19',
                'data_keys' => 'contact_us.content',
                'data_values' => '{"has_image":"1","heading":"Contact Information","short_details":"We are here for you always! please fill up the information and feel free ask if you have any query.","email_address":"demo@email.com","contact_details":"Demo World Expo\\/Demo Enterprise Events","contact_number":"00123547895","background_image":"6369ffac604441667891116.png"}',
                'id' => 27,
                'updated_at' => '2022-11-23 02:09:33',
            ),
            4 =>
            array(
                'created_at' => '2020-10-28 01:04:02',
                'data_keys' => 'counter.content',
                'data_values' => '{"has_image":"1","background_image":"638219f1423511669470705.jpg"}',
                'id' => 28,
                'updated_at' => '2022-11-26 11:21:45',
            ),
            5 =>
            array(
                'created_at' => '2021-03-06 01:27:34',
                'data_keys' => 'service.content',
                'data_values' => '{"heading":"Our Services","sub_heading":"This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile views!!"}',
                'id' => 36,
                'updated_at' => '2022-11-08 05:59:30',
            ),
            6 =>
            array(
                'created_at' => '2020-07-04 23:42:52',
                'data_keys' => 'cookie.data',
                'data_values' => '{"short_desc":"We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.","description":"<div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">What information do we collect?<\\/h3><p class=\\"font-18\\" style=\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">How do we protect your information?<\\/h3><p class=\\"font-18\\" style=\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">All provided delicate\\/credit data is sent through Stripe.<br>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">Do we disclose any information to outside parties?<\\/h3><p class=\\"font-18\\" style=\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\"font-18\\" style=\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">Changes to our Privacy Policy<\\/h3><p class=\\"font-18\\" style=\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">How long we retain your information?<\\/h3><p class=\\"font-18\\" style=\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">What we don\\u2019t do with your data<\\/h3><p class=\\"font-18\\" style=\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>","status":1}',
                'id' => 41,
                'updated_at' => '2022-11-19 06:43:50',
            ),
            7 =>
            array(
                'created_at' => '2021-06-09 08:50:42',
                'data_keys' => 'policy_pages.element',
                'data_values' => '{"title":"Privacy Policy","details":"<div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">What information do we collect?<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">How do we protect your information?<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">All provided delicate\\/credit data is sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Do we disclose any information to outside parties?<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Changes to our Privacy Policy<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">How long we retain your information?<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">What we don\\u2019t do with your data<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>"}',
                'id' => 42,
                'updated_at' => '2021-06-09 08:50:42',
            ),
            8 =>
            array(
                'created_at' => '2021-06-09 08:51:18',
                'data_keys' => 'policy_pages.element',
                'data_values' => '{"title":"Terms of Service","details":"<div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We claim all authority to dismiss, end, or handicap any help with or without cause per administrator discretion. This is a Complete independent facilitating, on the off chance that you misuse our ticket or Livechat or emotionally supportive network by submitting solicitations or protests we will impair your record. The solitary time you should reach us about the seaward facilitating is if there is an issue with the worker. We have not many substance limitations and everything is as per laws and guidelines. Try not to join on the off chance that you intend to do anything contrary to the guidelines, we do check these things and we will know, don\'t burn through our own and your time by joining on the off chance that you figure you will have the option to sneak by us and break the terms.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><ul class=\\"font-18\\" style=\\"padding-left:15px;list-style-type:disc;font-size:18px;\\"><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Configuration requests - If you have a fully managed dedicated server with us then we offer custom PHP\\/MySQL configurations, firewalls for dedicated IPs, DNS, and httpd configurations.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Software requests - Cpanel Extension Installation will be granted as long as it does not interfere with the security, stability, and performance of other users on the server.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Emergency Support - We do not provide emergency support \\/ Phone Support \\/ LiveChat Support. Support may take some hours sometimes.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Webmaster help - We do not offer any support for webmaster related issues and difficulty including coding, &amp; installs, Error solving. if there is an issue where a library or configuration of the server then we can help you if it\'s possible from our end.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Backups - We keep backups but we are not responsible for data loss, you are fully responsible for all backups.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">We Don\'t support any child porn or such material.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No spam-related sites or material, such as email lists, mass mail programs, and scripts, etc.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No harassing material that may cause people to retaliate against you.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No phishing pages.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">You may not run any exploitation script from the server. reason can be terminated immediately.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">If Anyone attempting to hack or exploit the server by using your script or hosting, we will terminate your account to keep safe other users.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Malicious Botnets are strictly forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Spam, mass mailing, or email marketing in any way are strictly forbidden here.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Malicious hacking materials, trojans, viruses, &amp; malicious bots running or for download are forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Resource and cronjob abuse is forbidden and will result in suspension or termination.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Php\\/CGI proxies are strictly forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">CGI-IRC is strictly forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No fake or disposal mailers, mass mailing, mail bombers, SMS bombers, etc.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">NO CREDIT OR REFUND will be granted for interruptions of service, due to User Agreement violations.<\\/li><\\/ul><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Terms &amp; Conditions for Users<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">Before getting to this site, you are consenting to be limited by these site Terms and Conditions of Use, every single appropriate law, and guidelines, and concur that you are answerable for consistency with any material neighborhood laws. If you disagree with any of these terms, you are restricted from utilizing or getting to this site.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Support<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">Whenever you have downloaded our item, you may get in touch with us for help through email and we will give a valiant effort to determine your issue. We will attempt to answer using the Email for more modest bug fixes, after which we will refresh the center bundle. Content help is offered to confirmed clients by Tickets as it were. Backing demands made by email and Livechat.<\\/p><p class=\\"my-3 font-18 font-weight-bold\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">On the off chance that your help requires extra adjustment of the System, at that point, you have two alternatives:<\\/p><ul class=\\"font-18\\" style=\\"padding-left:15px;list-style-type:disc;font-size:18px;\\"><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Hang tight for additional update discharge.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Or on the other hand, enlist a specialist (We offer customization for extra charges).<\\/li><\\/ul><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Ownership<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">You may not guarantee scholarly or selective possession of any of our items, altered or unmodified. All items are property, we created them. Our items are given \\"with no guarantees\\" without guarantee of any sort, either communicated or suggested. On no occasion will our juridical individual be subject to any harms including, however not restricted to, immediate, roundabout, extraordinary, accidental, or significant harms or different misfortunes emerging out of the utilization of or powerlessness to utilize our items.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Warranty<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We don\'t offer any guarantee or assurance of these Services in any way. When our Services have been modified we can\'t ensure they will work with all outsider plugins, modules, or internet browsers. Program similarity ought to be tried against the show formats on the demo worker. If you don\'t mind guarantee that the programs you use will work with the component, as we can not ensure that our systems will work with all program mixes.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Unauthorized\\/Illegal Usage<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">You may not utilize our things for any illicit or unapproved reason or may you, in the utilization of the stage, disregard any laws in your locale (counting yet not restricted to copyright laws) just as the laws of your nation and International law. Specifically, it is disallowed to utilize the things on our foundation for pages that advance: brutality, illegal intimidation, hard sexual entertainment, bigotry, obscenity content or warez programming joins.<br \\/><br \\/>You can\'t imitate, copy, duplicate, sell, exchange or adventure any of our segment, utilization of the offered on our things, or admittance to the administration without the express composed consent by us or item proprietor.<br \\/><br \\/>Our Members are liable for all substance posted on the discussion and demo and movement that happens under your record.<br \\/><br \\/>We hold the chance of hindering your participation account quickly if we will think about a particularly not allowed conduct.<br \\/><br \\/>If you make a record on our site, you are liable for keeping up the security of your record, and you are completely answerable for all exercises that happen under the record and some other activities taken regarding the record. You should quickly inform us, of any unapproved employments of your record or some other penetrates of security.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Fiverr, Seoclerks Sellers Or Affiliates<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We do NOT ensure full SEO campaign conveyance within 24 hours. We make no assurance for conveyance time by any means. We give our best assessment to orders during the putting in of requests, anyway, these are gauges. We won\'t be considered liable for loss of assets, negative surveys or you being prohibited for late conveyance. If you are selling on a site that requires time touchy outcomes, utilize Our SEO Services at your own risk.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Payment\\/Refund Policy<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">No refund or cash back will be made. After a deposit has been finished, it is extremely unlikely to invert it. You should utilize your equilibrium on requests our administrations, Hosting, SEO campaign. You concur that once you complete a deposit, you won\'t document a debate or a chargeback against us in any way, shape, or form.<br \\/><br \\/>If you document a debate or chargeback against us after a deposit, we claim all authority to end every single future request, prohibit you from our site. False action, for example, utilizing unapproved or taken charge cards will prompt the end of your record. There are no special cases.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\">Free Balance \\/ Coupon Policy<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We offer numerous approaches to get FREE Balance, Coupons and Deposit offers yet we generally reserve the privilege to audit it and deduct it from your record offset with any explanation we may it is a sort of misuse. If we choose to deduct a few or all of free Balance from your record balance, and your record balance becomes negative, at that point the record will naturally be suspended. If your record is suspended because of a negative Balance you can request to make a custom payment to settle your equilibrium to actuate your record.<\\/p><\\/div>"}',
                'id' => 43,
                'updated_at' => '2021-06-09 08:51:18',
            ),
            9 =>
            array(
                'created_at' => '2020-07-04 23:42:52',
                'data_keys' => 'maintenance.data',
                'data_values' => '{"description":"<div class=\\"mb-5\\" style=\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\"><h3 class=\\"mb-3\\" style=\\"text-align: center; font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\">What information do we collect?<\\/h3><p class=\\"font-18\\" style=\\"text-align: center; margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div>"}',
                'id' => 44,
                'updated_at' => '2022-05-11 03:57:17',
            ),
            10 =>
            array(
                'created_at' => '2022-11-08 04:41:16',
                'data_keys' => 'banner.element',
                'data_values' => '{"has_image":["1"],"title":"MLMLab","subtitle":"Multilevel Marketing Platform","left_button":"Log In","left_button_link":"user\\/login","right_button":"Register","right_button_link":"user\\/register","description":"We are a dedicated Binary Multilevel Marketing company for every MLM plan with custom features.","background_image":"636a01142c5ef1667891476.jpg"}',
                'id' => 45,
                'updated_at' => '2022-11-27 06:38:02',
            ),
            11 =>
            array(
                'created_at' => '2022-11-08 04:42:08',
                'data_keys' => 'banner.element',
                'data_values' => '{"has_image":["1"],"title":"MLMLab","subtitle":"Multilevel Marketing Platform","left_button":"Log In","left_button_link":"user\\/login","right_button":"Register","right_button_link":"user\\/register","description":"We are a dedicated Binary Multilevel Marketing company for every MLM plan with custom features.","background_image":"636a0148129cb1667891528.jpg"}',
                'id' => 46,
                'updated_at' => '2022-11-27 06:38:15',
            ),
            12 =>
            array(
                'created_at' => '2022-11-08 05:59:54',
                'data_keys' => 'service.element',
                'data_values' => '{"icon":"<i class=\\"fas fa-hand-holding-heart\\"><\\/i>","title":"Profitable","description":"You can get the golden opportunity to actually win a lot of profit here."}',
                'id' => 47,
                'updated_at' => '2022-11-08 05:59:54',
            ),
            13 =>
            array(
                'created_at' => '2022-11-08 06:00:14',
                'data_keys' => 'service.element',
                'data_values' => '{"icon":"<i class=\\"fas fa-lock\\"><\\/i>","title":"Secure","description":"Gives ultimate security with 2FA authentication with this system"}',
                'id' => 48,
                'updated_at' => '2022-11-08 06:00:14',
            ),
            14 =>
            array(
                'created_at' => '2022-11-08 06:00:37',
                'data_keys' => 'service.element',
                'data_values' => '{"icon":"<i class=\\"fas fa-language\\"><\\/i>","title":"Language","description":"This site can be easily translated into your own language."}',
                'id' => 49,
                'updated_at' => '2022-11-08 06:00:37',
            ),
            15 =>
            array(
                'created_at' => '2022-11-08 06:00:58',
                'data_keys' => 'service.element',
                'data_values' => '{"icon":"<i class=\\"fab fa-btc\\"><\\/i>","title":"Crypto","description":"Cryptocurrency stored on our servers is covered by our insurance policy."}',
                'id' => 50,
                'updated_at' => '2022-11-08 06:00:58',
            ),
            16 =>
            array(
                'created_at' => '2022-11-08 06:02:03',
                'data_keys' => 'service.element',
                'data_values' => '{"icon":"<i class=\\"far fa-life-ring\\"><\\/i>","title":"Support","description":"We always provide the best \\r\\nsupport to all our users."}',
                'id' => 51,
                'updated_at' => '2022-11-08 06:02:03',
            ),
            17 =>
            array(
                'created_at' => '2022-11-08 06:02:26',
                'data_keys' => 'service.element',
                'data_values' => '{"icon":"<i class=\\"fas fa-globe-americas\\"><\\/i>","title":"Global","description":"We support a variety of the most popular digital currencies."}',
                'id' => 52,
                'updated_at' => '2022-11-08 06:02:26',
            ),
            18 =>
            array(
                'created_at' => '2022-11-08 06:04:58',
                'data_keys' => 'how_it_works.content',
                'data_values' => '{"heading":"How It Works","sub_heading":"This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile views!!"}',
                'id' => 53,
                'updated_at' => '2022-11-20 09:20:21',
            ),
            19 =>
            array(
                'created_at' => '2022-11-08 06:05:20',
                'data_keys' => 'how_it_works.element',
                'data_values' => '{"icon":"<i class=\\"fas fa-money-bill-wave\\"><\\/i>","title":"Get Paid","description":"Each member will get a commission by adding a new member. So it\'s a profitable process for all."}',
                'id' => 54,
                'updated_at' => '2022-11-08 06:05:20',
            ),
            20 =>
            array(
                'created_at' => '2022-11-08 06:05:44',
                'data_keys' => 'how_it_works.element',
                'data_values' => '{"icon":"<i class=\\"fas fa-users\\"><\\/i>","title":"Bring People","description":"The strategy is new members sponsored by distributors are added either on the left or right leg."}',
                'id' => 55,
                'updated_at' => '2022-11-08 06:05:44',
            ),
            21 =>
            array(
                'created_at' => '2022-11-08 06:06:07',
                'data_keys' => 'how_it_works.element',
                'data_values' => '{"icon":"<i class=\\"fas fa-user-edit\\"><\\/i>","title":"Sign Up","description":"Just click the register button on the website and fill up all the information there and get your account."}',
                'id' => 56,
                'updated_at' => '2022-11-08 06:06:07',
            ),
            22 =>
            array(
                'created_at' => '2022-11-08 06:08:19',
                'data_keys' => 'team.content',
                'data_values' => '{"heading":"Team Member","sub_heading":"The company empowers our team members to impact the company mission, grow personally and professionally, and reach an optimal work-life balance. So, meet with our awesome members!"}',
                'id' => 57,
                'updated_at' => '2022-11-08 06:08:19',
            ),
            23 =>
            array(
                'created_at' => '2022-11-08 06:09:19',
                'data_keys' => 'team.element',
                'data_values' => '{"has_image":["1"],"name":"MR. Jhon","designation":"CEO @ Adobe","image":"636a15b788b3b1667896759.jpg"}',
                'id' => 58,
                'updated_at' => '2022-11-08 06:09:19',
            ),
            24 =>
            array(
                'created_at' => '2022-11-08 06:10:00',
                'data_keys' => 'team.element',
                'data_values' => '{"has_image":["1"],"name":"Jon Doi","designation":"CEO @ Adobe","image":"636a15e0139101667896800.jpg"}',
                'id' => 59,
                'updated_at' => '2022-11-08 06:10:00',
            ),
            25 =>
            array(
                'created_at' => '2022-11-08 06:10:33',
                'data_keys' => 'team.element',
                'data_values' => '{"has_image":["1"],"name":"MR. Jhon","designation":"CEO @ Adobe","image":"636a1601368b21667896833.jpg"}',
                'id' => 60,
                'updated_at' => '2022-11-08 06:10:33',
            ),
            26 =>
            array(
                'created_at' => '2022-11-08 06:11:14',
                'data_keys' => 'team.element',
                'data_values' => '{"has_image":["1"],"name":"Sergio Leonel","designation":"CEO @ Adobe","image":"636a162adadcc1667896874.jpg"}',
                'id' => 61,
                'updated_at' => '2022-11-08 06:11:14',
            ),
            27 =>
            array(
                'created_at' => '2022-11-08 06:13:40',
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Total Invest","counter_value":"5M+"}',
                'id' => 62,
                'updated_at' => '2022-11-23 03:15:02',
            ),
            28 =>
            array(
                'created_at' => '2022-11-08 06:13:54',
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Total Deposit","counter_value":"8M+"}',
                'id' => 63,
                'updated_at' => '2022-11-23 03:15:22',
            ),
            29 =>
            array(
                'created_at' => '2022-11-08 06:14:08',
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Total Withdraw","counter_value":"3M+"}',
                'id' => 64,
                'updated_at' => '2022-11-23 03:15:16',
            ),
            30 =>
            array(
                'created_at' => '2022-11-08 06:14:22',
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Total Users","counter_value":"5K+"}',
                'id' => 65,
                'updated_at' => '2022-11-23 03:15:49',
            ),
            31 =>
            array(
                'created_at' => '2022-11-08 06:17:35',
                'data_keys' => 'testimonial.content',
                'data_values' => '{"heading":"Our Happy Client","sub_heading":"We always care for our clients, lets see what\'s their opinion about us."}',
                'id' => 66,
                'updated_at' => '2022-11-08 06:17:35',
            ),
            32 =>
            array(
                'created_at' => '2022-11-08 06:18:43',
                'data_keys' => 'testimonial.element',
                'data_values' => '{"has_image":["1"],"author":"John Doe","designation":"Designation","quote":"Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!","image":"636a188290b771667897474.png"}',
                'id' => 67,
                'updated_at' => '2022-11-27 06:36:38',
            ),
            33 =>
            array(
                'created_at' => '2022-11-08 06:19:22',
                'data_keys' => 'testimonial.element',
                'data_values' => '{"has_image":["1"],"author":"Debitis cumque","designation":"Designation","quote":"Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!","image":"636a1812bede71667897362.jpg"}',
                'id' => 68,
                'updated_at' => '2022-11-27 06:36:52',
            ),
            34 =>
            array(
                'created_at' => '2022-11-08 06:20:08',
                'data_keys' => 'testimonial.element',
                'data_values' => '{"has_image":["1"],"author":"Sed temporibus","designation":"Designation","quote":"Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!","image":"636a184006d401667897408.jpg"}',
                'id' => 69,
                'updated_at' => '2022-11-27 06:36:58',
            ),
            35 =>
            array(
                'created_at' => '2022-11-08 06:20:36',
                'data_keys' => 'testimonial.element',
                'data_values' => '{"has_image":["1"],"author":"Duis rerum","designation":"Designation","quote":"Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!","image":"636a185cb4d031667897436.jpg"}',
                'id' => 70,
                'updated_at' => '2022-11-27 06:37:04',
            ),
            36 =>
            array(
                'created_at' => '2022-11-08 06:28:25',
                'data_keys' => 'subscribe.content',
                'data_values' => '{"has_image":"1","heading":"DON\'T FORGET TO SUBSCRIBE OUR NEWSLETTER","background_image":"636a1a31517241667897905.jpg"}',
                'id' => 71,
                'updated_at' => '2022-11-08 06:28:25',
            ),
            37 =>
            array(
                'created_at' => '2022-11-08 06:32:09',
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Popular Words in the Multi-Level Marketing Industry","description":"<p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">While MLMs focus almost exclusively on direct selling, this is not an accurate synonym because direct selling is simply the method by which distributors in MLMs sell products and\\/or recruit new members. Direct selling is the idea that sales people leverage their personal contacts and relationships, whereas salesmen at a normal company are often working with people that they don\\u2019t personally know. Multi-level marketing companies that have lasted many years or even decades have generally done a better job of emphasizing direct sales over recruiting.<\\/font><br \\/><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\"><br \\/><\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">In 1979, a landmark ruling involving Amway helped to legitimize the multi-level marketing industry. The FTC found that Amway was not operating as a pyramid scheme according to the strict statutory definition of one, but did order the company to stop deceiving its distributors about their income potential.<\\/font><\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">Section 1.10.32 of \\"de Finibus Bonorum et Malorum\\", written by Cicero in 45 BC<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\\"<\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">1914 translation by H. Rackham<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\"<\\/p>","blog_image":"6381eb23e3df01669458723.jpg"}',
                'id' => 72,
                'updated_at' => '2022-11-26 08:02:04',
            ),
            38 =>
            array(
                'created_at' => '2022-11-08 06:32:39',
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"History of Multi-Level Marketing","description":"<p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">The first recognized MLM businesses in the United States were the California Vitamin Company (founded in the 1920s and later renamed Nutrilite in 1939), and the California Perfume Company (incorporated in 1909 and later renamed Avon Products in 1932).<\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\"><br \\/><\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">In 1979, a landmark ruling involving Amway helped to legitimize the multi-level marketing industry. The FTC found that Amway was not operating as a pyramid scheme according to the strict statutory definition of one, but did order the company to stop deceiving its distributors about their income potential.<\\/font><\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">Section 1.10.32 of \\"de Finibus Bonorum et Malorum\\", written by Cicero in 45 BC<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\\"<\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">1914 translation by H. Rackham<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\"<\\/p>","blog_image":"6381eaff00fce1669458687.jpg"}',
                'id' => 73,
                'updated_at' => '2022-11-26 08:01:27',
            ),
            39 =>
            array(
                'created_at' => '2022-11-08 06:33:40',
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"What is Multi-Level Marketing? What You Need to Know About the Industry","description":"<p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">This stands in stark contrast to most standard businesses, where employees are rewarded for sales made to other businesses (B2B companies) or to consumers (B2C companies). Additionally, obtaining a higher rank within multi-level marketing companies depends on your ability to recruit others, rather than by appointment. MLMs that rely too heavily on recruitment rather than emphasizing direct sales generally fail over time because of the natural progression of pyramid schemes which are unsustainable in the long run.<\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">Section 1.10.32 of \\"de Finibus Bonorum et Malorum\\", written by Cicero in 45 BC<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\\"<\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">1914 translation by H. Rackham<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\"<\\/p>","blog_image":"6381eaf2b989a1669458674.jpg"}',
                'id' => 74,
                'updated_at' => '2022-11-26 08:01:14',
            ),
            40 =>
            array(
                'created_at' => '2022-11-08 06:34:31',
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Melaleuca CEO Frank VanderSloot Promises to Resign if World Record Attempt Fails","description":"<p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;\\"><font face=\\"PT Sans, Arial, Helvetica, sans-serif\\"><span style=\\"font-size:16px;\\">In an interview with East Idaho News today, Melalecua CEO Frank Vandersloot promised to resign his executive position with the company if his world record rowing attempt fails. VanderSloot will attempt to complete a 100-meter row on a Concept 2 Rower within 15.3 seconds on Tuesday, which also happens to be his 70th birthday.<\\/span><\\/font><br \\/><\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">Section 1.10.32 of \\"de Finibus Bonorum et Malorum\\", written by Cicero in 45 BC<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\\"<\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">1914 translation by H. Rackham<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\"<\\/p>","blog_image":"6381eaebb1e881669458667.png"}',
                'id' => 75,
                'updated_at' => '2022-11-26 08:01:08',
            ),
            41 =>
            array(
                'created_at' => '2022-11-08 06:36:31',
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Amway Co-Founder Richard DeVos Passes Away at Age 92","description":"<p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">Rick DeVos announced earlier today that his grandfather and co-founder of Amway Richard DeVos has passed away at age 92. DeVos got his start in the multi-level marketing world as a distributor with Nutrilite, a direct selling company that primarily sold vitamins and supplements. Along with his partner Jay Van Andel, DeVos eventually started his own MLM called Amway (short for American Way), which eventually purchased Nutrilite in 1972. Since then, Amway has grown to become the largest MLM in the U.S., boasting over 3 million distributors worldwide.<\\/font><br \\/><\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">Section 1.10.32 of \\"de Finibus Bonorum et Malorum\\", written by Cicero in 45 BC<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\\"<\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">1914 translation by H. Rackham<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\"<\\/p>","blog_image":"6381eae20f24c1669458658.png"}',
                'id' => 76,
                'updated_at' => '2022-11-26 08:00:58',
            ),
            42 =>
            array(
                'created_at' => '2022-11-08 06:36:59',
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"2022 Top 50 MLM Companies in the U.S.","description":"<p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">*Note: 2019 revenue numbers coming soon.<\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\"><br \\/><\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">Below is the comprehensive list of multi-level marketing companies generating the most amount of revenue in the United States. After compiling this list, we noticed some interesting trends:<\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\"><br \\/><\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">Only 2 companies in the Top 10 were founded after the year 2000. Out of the Top 50, only 20 were founded after 2000.<\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">38% (19 total) of the Top 50 MLMs were in the supplements industry, by far the most popular category. The Beauty industry is second with 16% (8 total).<\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">Of the Top 10, 50% of the companies are in the Beauty industry.<\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#000000\\" face=\\"Open Sans, Arial, sans-serif\\">Have any others you\\u2019d like to add to the top MLMs list? Let us know in the comments.<\\/font><\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">Section 1.10.32 of \\"de Finibus Bonorum et Malorum\\", written by Cicero in 45 BC<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\\"<\\/p><h3 style=\\"margin-top:15px;margin-bottom:15px;font-weight:700;line-height:1.3;font-size:14px;color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;padding:0px;\\">1914 translation by H. Rackham<\\/h3><p style=\\"margin:-10px 0px 15px;color:rgb(0,0,0);font-size:14px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;\\">\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\"<\\/p>","blog_image":"6381ec415660a1669459009.jpg"}',
                'id' => 77,
                'updated_at' => '2022-11-26 08:06:49',
            ),
            43 =>
            array(
                'created_at' => '2022-11-08 06:45:34',
                'data_keys' => 'footer.content',
                'data_values' => '{"short_details":"We are a worldwide trusted company . This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile. This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile."}',
                'id' => 78,
                'updated_at' => '2022-11-23 03:36:17',
            ),
            44 =>
            array(
                'created_at' => '2022-11-08 06:46:02',
                'data_keys' => 'social_icon.element',
                'data_values' => '{"title":"Facebook","icon":"<i class=\\"lab la-facebook-f\\"><\\/i>","url":"https:\\/\\/www.facebook.com"}',
                'id' => 79,
                'updated_at' => '2022-11-08 06:46:02',
            ),
            45 =>
            array(
                'created_at' => '2022-11-08 06:46:39',
                'data_keys' => 'social_icon.element',
                'data_values' => '{"title":"Twitter","icon":"<i class=\\"lab la-twitter\\"><\\/i>","url":"https:\\/\\/twitter.com"}',
                'id' => 80,
                'updated_at' => '2022-11-08 06:46:39',
            ),
            46 =>
            array(
                'created_at' => '2022-11-08 06:47:06',
                'data_keys' => 'social_icon.element',
                'data_values' => '{"title":"LinkedIn","icon":"<i class=\\"lab la-linkedin-in\\"><\\/i>","url":"https:\\/\\/www.linkedin.com"}',
                'id' => 81,
                'updated_at' => '2022-11-08 06:47:06',
            ),
            47 =>
            array(
                'created_at' => '2022-11-08 06:47:24',
                'data_keys' => 'social_icon.element',
                'data_values' => '{"title":"Instagram","icon":"<i class=\\"lab la-instagram\\"><\\/i>","url":"https:\\/\\/www.instagram.com"}',
                'id' => 82,
                'updated_at' => '2022-11-08 06:47:24',
            ),
            48 =>
            array(
                'created_at' => '2022-11-08 08:41:16',
                'data_keys' => 'breadcrumb.content',
                'data_values' => '{"has_image":"1","background_image":"63821bed5b0bb1669471213.jpg"}',
                'id' => 84,
                'updated_at' => '2022-11-26 11:30:13',
            ),
            49 =>
            array(
                'created_at' => '2022-11-17 04:23:10',
                'data_keys' => 'kyc_info.content',
                'data_values' => '{"verification_content":"Please submit the required KYC information to verify yourself. Otherwise, you couldn\\\\\'t make any withdrawal requests to the system.","pending_content":"Your submitted KYC information is pending for admin approval. Please wait till that."}',
                'id' => 88,
                'updated_at' => '2022-11-17 04:23:10',
            ),
            50 =>
            array(
                'created_at' => '2022-11-17 04:25:44',
                'data_keys' => 'notice.content',
                'data_values' => '{"notice_content":"Multi-level marketing is a diverse and varied industry, employing many different structures and methods of selling. Although there may be significant differences in how multi-level marketers sell their products or services, core consumer protection principles are applicable to every member of the industry. The Commission staff offers this non-binding guidance to assist multi-level marketers in applying those core principles to their business practices."}',
                'id' => 89,
                'updated_at' => '2022-11-17 04:25:44',
            ),
            51 =>
            array(
                'created_at' => '2022-11-17 04:46:34',
                'data_keys' => 'marketing_tool.element',
                'data_values' => '{"title":"Binary MLM calculator","description":"<p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#555555\\" face=\\"Roboto, sans-serif\\" size=\\"4\\">Yes, the binary plan has been popular since the early days and the calculations were made manually. However, a binary system calculation with many networkers is a clutter-job. The emergence of binary calculators or simulators resolved this difficulty.<\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;text-align:justify;\\"><font color=\\"#555555\\" face=\\"Roboto, sans-serif\\" size=\\"4\\">By providing the necessary input on the binary calculator like the package details, compensations, and other expenses, an output can be simulated.<\\/font><\\/p>"}',
                'id' => 92,
                'updated_at' => '2022-11-17 04:46:34',
            ),
            52 =>
            array(
                'created_at' => '2022-11-17 04:46:53',
                'data_keys' => 'marketing_tool.element',
                'data_values' => '{"title":"Hybrid binary plan","description":"<p class=\\"text-s-1-2\\" style=\\"margin-bottom:1rem;color:rgb(49,49,49);line-height:2rem;letter-spacing:0.26px;word-spacing:1px;font-family:Gordita, \'Helvetica Neue\', Helvetica, sans-serif;\\"><font size=\\"4\\">A binary plan can be modified by combining with other compensation plans.\\u00a0<span class=\\"font-weight-medium\\">Why should an MLM company go for a hybrid plan?<\\/span><\\/font><\\/p><p class=\\"text-s-1-2\\" style=\\"margin-bottom:1rem;color:rgb(49,49,49);line-height:2rem;letter-spacing:0.26px;word-spacing:1px;font-family:Gordita, \'Helvetica Neue\', Helvetica, sans-serif;\\"><span style=\\"color:rgb(49,49,49);font-size:large;letter-spacing:0.26px;\\">MLM company strategies vary and they might even have their own custom plan to add in the existing binary plan. The plans are chosen by analyzing the present marketing situations. With the best marketing plan, companies can become popular and beneficial in productivity.<\\/span><\\/p>"}',
                'id' => 93,
                'updated_at' => '2022-11-17 04:46:53',
            ),
            53 =>
            array(
                'created_at' => '2022-11-17 04:47:11',
                'data_keys' => 'marketing_tool.element',
                'data_values' => '{"title":"Advantages\\/Benefits of Binary MLM Plan","description":"<p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;\\"><font face=\\"Gordita, Helvetica Neue, Helvetica, sans-serif\\" size=\\"4\\"><span style=\\"letter-spacing:0.26px;word-spacing:1px;\\">Inside leg placement: Inside leg placement is used to balance the legs in the binary tree. Distributors will add new members to the weak leg to balance the sales volume and active participation is assured.<\\/span><\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;\\"><font face=\\"Gordita, Helvetica Neue, Helvetica, sans-serif\\" size=\\"4\\"><span style=\\"letter-spacing:0.26px;word-spacing:1px;\\">Cycle point: A minimum sales volume is set for commission payment by binary companies. The pay leg must meet this volume or else the commission won\\u2019t be commenced until it meets the cycle point.<\\/span><\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;\\"><font face=\\"Gordita, Helvetica Neue, Helvetica, sans-serif\\" size=\\"4\\"><span style=\\"letter-spacing:0.26px;word-spacing:1px;\\">Individual volume threshold: A sales volume threshold is set to make sure every distributor contributes to the binary business.<\\/span><\\/font><\\/p><p style=\\"margin:-10px 0px 15px;font-family:Montserrat, sans-serif;padding:0px;\\"><font face=\\"Gordita, Helvetica Neue, Helvetica, sans-serif\\" size=\\"4\\"><span style=\\"letter-spacing:0.26px;word-spacing:1px;\\">Leg flush: MLM companies can flush out both weak and strong leg sales or reset sales volume to zero<\\/span><\\/font><\\/p>"}',
                'id' => 94,
                'updated_at' => '2022-11-17 04:47:11',
            ),
            54 =>
            array(
                'created_at' => '2022-11-20 03:01:56',
                'data_keys' => 'faq.content',
                'data_values' => '{"heading":"Frequently Asked Questions","sub_heading":"We always care for our clients, we have tried to answer some frequent questions about your business"}',
                'id' => 95,
                'updated_at' => '2022-11-20 03:04:08',
            ),
            55 =>
            array(
                'created_at' => '2022-11-20 03:02:12',
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"How to making a withdrawal?","answer":"You can make a withdrawal from the Withdraw page. Where possible we are required to send funds back to the payment method that was used to deposit the original funds.\\r\\nFor further details relating to processing times and any applicable fees, please refer to the Withdrawals section of our Payments page.\\r\\nYou can make a withdrawal from the Withdraw page. Where possible we are required to send funds back to the payment method that was used to deposit the original funds.\\r\\nFor further details relating to processing times and any applicable fees, please refer to the Withdrawals section of our Payments page."}',
                'id' => 96,
                'updated_at' => '2022-11-20 03:02:12',
            ),
            56 =>
            array(
                'created_at' => '2022-11-20 03:02:28',
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"I have not received my withdrawal","answer":"The processing time for your withdrawal will vary depending on your payment method.\\r\\nYou can view further information on withdrawal clearance times by visiting our Payment Method page. If you are unable to locate your withdrawal after the processing time has passed, please Contact Us."}',
                'id' => 97,
                'updated_at' => '2022-11-20 03:02:28',
            ),
            57 =>
            array(
                'created_at' => '2022-11-20 03:02:51',
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"Advantages\\/Benefits of Binary MLM Plan","answer":"Unlimited depth: Binary plan allows distributors to add members to unlimited levels and earn a high income.\\r\\n\\r\\nGroup work: With left leg or right spilling preferences, the distributors become active as they have to balance the tree for compensations.\\r\\n\\r\\nQuick growth: Binary plan offers quick business growth opportunities.\\r\\n\\r\\nCarry forward: Unpaid sales volume (SV) after present binary payout cycle is carry forward for the next binary payout cycle.\\r\\n\\r\\nSpillover: New members after completing the first level is spilled over to the unlimited down line levels."}',
                'id' => 98,
                'updated_at' => '2022-11-20 03:02:51',
            ),
            58 =>
            array(
                'created_at' => '2022-11-20 03:03:10',
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"How Does the Binary MLM Plan Works?","answer":"Binary MLM plan is a network marketing compensation strategy used by many top-performing MLM companies. The new members sponsored by distributors are added either on the left or right leg. Upon adding two new members on either side of the subtree, a binary tree gets formed.\\r\\n\\r\\nAll the new members referred after forming a binary tree gets spilled to the downlines.\\r\\n\\r\\nNote: Distributors become a part of the binary plan by purchasing an enrollment package. The enrollment package here means either a service or a list of products. The distributor buys the package and becomes a part of the binary MLM company."}',
                'id' => 99,
                'updated_at' => '2022-11-20 03:03:10',
            ),
            59 =>
            array(
                'created_at' => '2022-11-20 03:03:27',
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"What is a Binary MLM Plan?","answer":"The binary MLM plan is defined as a compensation plan that consists of two legs (left &amp; right) or subtrees under every distributor. Upon adding subtrees, a binary tree gets formed. New members joining after them are spilled over to the downlines or next business level."}',
                'id' => 100,
                'updated_at' => '2022-11-20 03:03:27',
            ),
            60 =>
            array(
                'created_at' => '2022-11-23 02:20:47',
                'data_keys' => 'plan.content',
                'data_values' => '{"has_image":"1","heading":"Pricing Plan","sub_heading":"Our pricing plans are very simple and attractive, have a check!","background_image":"637da77c41ab91669179260.jpg"}',
                'id' => 101,
                'updated_at' => '2022-11-23 02:24:20',
            ),
            61 =>
            array(
                'created_at' => '2022-11-23 03:04:57',
                'data_keys' => 'transactions.content',
                'data_values' => '{"heading":"Our Latest Transaction","sub_heading":"At this website, making deposits and widthway is simple and straight forward and hardly takes up any of your time. We are constantly striving to offer you, even more, deposit and withdraw options and to make the process even easier."}',
                'id' => 102,
                'updated_at' => '2022-11-23 03:04:57',
            ),
            62 =>
            array(
                'created_at' => '2022-11-26 11:26:02',
                'data_keys' => 'register.content',
                'data_values' => '{"has_image":"1","heading":"Create Your Account","short_details":"Haven\'t registered yet! don\'t worry just fillip all the information below and get your account now.","background_image":"63821af2b19aa1669470962.jpg"}',
                'id' => 103,
                'updated_at' => '2022-11-26 11:26:02',
            ),
            63 =>
            array(
                'created_at' => '2022-11-26 11:26:23',
                'data_keys' => 'login.content',
                'data_values' => '{"has_image":"1","heading":"Login Account","short_details":"To login into the site please enter your username and password","background_image":"63821b0737fa81669470983.jpg"}',
                'id' => 104,
                'updated_at' => '2022-11-26 11:26:23',
            ),
        ));
    }
}
