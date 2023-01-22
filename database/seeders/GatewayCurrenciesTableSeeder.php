<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GatewayCurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('gateway_currencies')->delete();

        DB::table('gateway_currencies')->insert(array(
            0 =>
            array(
                'created_at' => '2021-06-05 11:37:45',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Flutterwave',
                'gateway_parameter' => '{"public_key":"----------------","secret_key":"-----------------------","encryption_key":"------------------"}',
                'id' => 115,
                'image' => NULL,
                'max_amount' => '2000.00000000',
                'method_code' => 109,
                'min_amount' => '1.00000000',
                'name' => 'Flutterwave - USD',
                'percent_charge' => '0.00',
                'rate' => '1.00000000',
                'symbol' => 'USD',
                'updated_at' => '2021-06-05 11:37:45',
            ),
            1 =>
            array(
                'created_at' => '2022-08-31 06:21:15',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'TwoCheckout',
                'gateway_parameter' => '{"merchant_code":"253248016872","secret_key":"eQM)ID@&vG84u!O*g[p+"}',
                'id' => 160,
                'image' => NULL,
                'max_amount' => '100.00000000',
                'method_code' => 122,
                'min_amount' => '1.00000000',
                'name' => 'Two Checkout - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-08-31 06:21:15',
            ),
            2 =>
            array(
                'created_at' => '2022-08-31 07:14:42',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'AdvCash',
                'gateway_parameter' => '{"account_email":"viserlabteam@gmail.com","api_name":"MYAPP","api_password":"2B8iTL_0ee"}',
                'id' => 161,
                'image' => NULL,
                'max_amount' => '1000.00000000',
                'method_code' => 123,
                'min_amount' => '1.00000000',
                'name' => 'Advance Cash - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-08-31 07:14:42',
            ),
            3 =>
            array(
                'created_at' => '2022-11-27 07:26:37',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Authorize',
                'gateway_parameter' => '{"login_id":"------------","transaction_key":"------------"}',
                'id' => 165,
                'image' => NULL,
                'max_amount' => '10.00000000',
                'method_code' => 120,
                'min_amount' => '1.00000000',
                'name' => 'Authorize.net - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:26:37',
            ),
            4 =>
            array(
                'created_at' => '2022-11-27 07:26:42',
                'currency' => 'BTC',
                'fixed_charge' => '11.00000000',
                'gateway_alias' => 'Blockchain',
                'gateway_parameter' => '{"api_key":"------------","xpub_code":"------------"}',
                'id' => 166,
                'image' => NULL,
                'max_amount' => '1.11000000',
                'method_code' => 501,
                'min_amount' => '1.00000000',
                'name' => 'Blockchain - BTC',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:26:42',
            ),
            5 =>
            array(
                'created_at' => '2022-11-27 07:26:47',
                'currency' => 'PKR',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Cashmaal',
                'gateway_parameter' => '{"web_id":"------------","ipn_key":"------------"}',
                'id' => 167,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 116,
                'min_amount' => '1.00000000',
                'name' => 'Cashmaal - PKR',
                'percent_charge' => '10.00',
                'rate' => '100.00000000',
                'symbol' => 'pkr',
                'updated_at' => '2022-11-27 07:26:47',
            ),
            6 =>
            array(
                'created_at' => '2022-11-27 07:26:53',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'CoinbaseCommerce',
                'gateway_parameter' => '{"api_key":"------------","secret":"------------"}',
                'id' => 168,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 506,
                'min_amount' => '1.00000000',
                'name' => 'Coinbase Commerce - USD',
                'percent_charge' => '10.00',
                'rate' => '10.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:26:53',
            ),
            7 =>
            array(
                'created_at' => '2022-11-27 07:26:53',
                'currency' => 'JPY',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'CoinbaseCommerce',
                'gateway_parameter' => '{"api_key":"------------","secret":"------------"}',
                'id' => 169,
                'image' => NULL,
                'max_amount' => '11.00000000',
                'method_code' => 506,
                'min_amount' => '1.00000000',
                'name' => 'CoinPayments - ETH',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '111',
                'updated_at' => '2022-11-27 07:26:53',
            ),
            8 =>
            array(
                'created_at' => '2022-11-27 07:27:03',
                'currency' => 'BTC',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Coinpayments',
                'gateway_parameter' => '{"public_key":"---------------","private_key":"------------","merchant_id":"------------"}',
                'id' => 170,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 503,
                'min_amount' => '1.00000000',
                'name' => 'CoinPayments - BTC',
                'percent_charge' => '10.00',
                'rate' => '10.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:03',
            ),
            9 =>
            array(
                'created_at' => '2022-11-27 07:27:06',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'CoinpaymentsFiat',
                'gateway_parameter' => '{"merchant_id":"------------"}',
                'id' => 171,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 504,
                'min_amount' => '1.00000000',
                'name' => 'CoinPayments Fiat - USD',
                'percent_charge' => '10.00',
                'rate' => '10.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:06',
            ),
            10 =>
            array(
                'created_at' => '2022-11-27 07:27:06',
                'currency' => 'AUD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'CoinpaymentsFiat',
                'gateway_parameter' => '{"merchant_id":"------------"}',
                'id' => 172,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 504,
                'min_amount' => '1.00000000',
                'name' => 'CoinPayments Fiat - AUD',
                'percent_charge' => '0.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:06',
            ),
            11 =>
            array(
                'created_at' => '2022-11-27 07:27:13',
                'currency' => 'INR',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Instamojo',
                'gateway_parameter' => '{"api_key":"------------","auth_token":"------------","salt":"------------"}',
                'id' => 174,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 112,
                'min_amount' => '1.00000000',
                'name' => 'Instamojo - INR',
                'percent_charge' => '1.00',
                'rate' => '75.00000000',
                'symbol' => '₹',
                'updated_at' => '2022-11-27 07:27:13',
            ),
            12 =>
            array(
                'created_at' => '2022-11-27 07:27:21',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'MercadoPago',
                'gateway_parameter' => '{"access_token":"------------"}',
                'id' => 175,
                'image' => NULL,
                'max_amount' => '10.00000000',
                'method_code' => 119,
                'min_amount' => '1.00000000',
                'name' => 'Mercado Pago - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:21',
            ),
            13 =>
            array(
                'created_at' => '2022-11-27 07:27:26',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Mollie',
                'gateway_parameter' => '{"mollie_email":"------------","api_key":"------------"}',
                'id' => 176,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 115,
                'min_amount' => '1.00000000',
                'name' => 'Mollie - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:26',
            ),
            14 =>
            array(
                'created_at' => '2022-11-27 07:27:29',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'NMI',
                'gateway_parameter' => '{"api_key":"------------"}',
                'id' => 177,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 121,
                'min_amount' => '1.00000000',
                'name' => 'NMI - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:29',
            ),
            15 =>
            array(
                'created_at' => '2022-11-27 07:27:33',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Payeer',
                'gateway_parameter' => '{"merchant_id":"------------","secret_key":"------------"}',
                'id' => 178,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 106,
                'min_amount' => '1.00000000',
                'name' => 'Payeer - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:33',
            ),
            16 =>
            array(
                'created_at' => '2022-11-27 07:27:36',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Paypal',
                'gateway_parameter' => '{"paypal_email":"------------"}',
                'id' => 179,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 101,
                'min_amount' => '1.00000000',
                'name' => 'Paypal - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:36',
            ),
            17 =>
            array(
                'created_at' => '2022-11-27 07:27:40',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'PaypalSdk',
                'gateway_parameter' => '{"clientId":"------------","clientSecret":"------------"}',
                'id' => 180,
                'image' => NULL,
                'max_amount' => '1000000.00000000',
                'method_code' => 113,
                'min_amount' => '1.00000000',
                'name' => 'Paypal Express - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:40',
            ),
            18 =>
            array(
                'created_at' => '2022-11-27 07:27:45',
                'currency' => 'NGN',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Paystack',
                'gateway_parameter' => '{"public_key":"------------","secret_key":"------------"}',
                'id' => 181,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 107,
                'min_amount' => '1.00000000',
                'name' => 'PayStack - NGN',
                'percent_charge' => '1.00',
                'rate' => '420.00000000',
                'symbol' => '₦',
                'updated_at' => '2022-11-27 07:27:45',
            ),
            19 =>
            array(
                'created_at' => '2022-11-27 07:27:55',
                'currency' => 'AUD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Paytm',
                'gateway_parameter' => '{"MID":"------------","merchant_key":"------------","WEBSITE":"DIYtestingweb","INDUSTRY_TYPE_ID":"Retail","CHANNEL_ID":"WEB","transaction_url":"https:\\/\\/pguat.paytm.com\\/oltp-web\\/processTransaction","transaction_status_url":"https:\\/\\/pguat.paytm.com\\/paytmchecksum\\/paytmCallback.jsp"}',
                'id' => 182,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 105,
                'min_amount' => '1.00000000',
                'name' => 'PayTM - AUD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:55',
            ),
            20 =>
            array(
                'created_at' => '2022-11-27 07:27:55',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Paytm',
                'gateway_parameter' => '{"MID":"------------","merchant_key":"------------","WEBSITE":"DIYtestingweb","INDUSTRY_TYPE_ID":"Retail","CHANNEL_ID":"WEB","transaction_url":"https:\\/\\/pguat.paytm.com\\/oltp-web\\/processTransaction","transaction_status_url":"https:\\/\\/pguat.paytm.com\\/paytmchecksum\\/paytmCallback.jsp"}',
                'id' => 183,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 105,
                'min_amount' => '1.00000000',
                'name' => 'PayTM - USD',
                'percent_charge' => '1.00',
                'rate' => '2.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:55',
            ),
            21 =>
            array(
                'created_at' => '2022-11-27 07:27:57',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'PerfectMoney',
                'gateway_parameter' => '{"passphrase":"------------","wallet_id":"U30603391"}',
                'id' => 184,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 102,
                'min_amount' => '1.00000000',
                'name' => 'Perfect Money - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:27:57',
            ),
            22 =>
            array(
                'created_at' => '2022-11-27 07:28:02',
                'currency' => 'INR',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Razorpay',
                'gateway_parameter' => '{"key_id":"------------","key_secret":"------------"}',
                'id' => 185,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 110,
                'min_amount' => '1.00000000',
                'name' => 'RazorPay - INR',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:28:02',
            ),
            23 =>
            array(
                'created_at' => '2022-11-27 07:28:05',
                'currency' => 'AED',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Skrill',
                'gateway_parameter' => '{"pay_to_email":"------------","secret_key":"---"}',
                'id' => 186,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 104,
                'min_amount' => '1.00000000',
                'name' => 'Skrill - AED',
                'percent_charge' => '1.00',
                'rate' => '10.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:28:05',
            ),
            24 =>
            array(
                'created_at' => '2022-11-27 07:28:05',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Skrill',
                'gateway_parameter' => '{"pay_to_email":"------------","secret_key":"---"}',
                'id' => 187,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 104,
                'min_amount' => '1.00000000',
                'name' => 'Skrill - USD',
                'percent_charge' => '1.00',
                'rate' => '2.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:28:05',
            ),
            25 =>
            array(
                'created_at' => '2022-11-27 07:28:11',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Stripe',
                'gateway_parameter' => '{"secret_key":"------------","publishable_key":"------------"}',
                'id' => 188,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 103,
                'min_amount' => '1.00000000',
                'name' => 'Stripe Hosted - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:28:11',
            ),
            26 =>
            array(
                'created_at' => '2022-11-27 07:28:17',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'StripeJs',
                'gateway_parameter' => '{"secret_key":"------------","publishable_key":"------------"}',
                'id' => 189,
                'image' => NULL,
                'max_amount' => '10000.00000000',
                'method_code' => 111,
                'min_amount' => '1.00000000',
                'name' => 'Stripe Storefront - USD',
                'percent_charge' => '1.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:28:17',
            ),
            27 =>
            array(
                'created_at' => '2022-11-27 07:28:25',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'StripeV3',
                'gateway_parameter' => '{"secret_key":"------------","publishable_key":"------------","end_point":"------------"}',
                'id' => 190,
                'image' => NULL,
                'max_amount' => '1000.00000000',
                'method_code' => 114,
                'min_amount' => '10.00000000',
                'name' => 'Stripe Checkout - USD',
                'percent_charge' => '0.00',
                'rate' => '1.00000000',
                'symbol' => 'USD',
                'updated_at' => '2022-11-27 07:28:25',
            ),
            28 =>
            array(
                'created_at' => '2022-11-27 07:28:29',
                'currency' => 'USD',
                'fixed_charge' => '1.00000000',
                'gateway_alias' => 'Voguepay',
                'gateway_parameter' => '{"merchant_id":"------------"}',
                'id' => 191,
                'image' => NULL,
                'max_amount' => '1000.00000000',
                'method_code' => 108,
                'min_amount' => '1.00000000',
                'name' => 'VoguePay - USD',
                'percent_charge' => '0.00',
                'rate' => '1.00000000',
                'symbol' => '$',
                'updated_at' => '2022-11-27 07:28:29',
            ),
        ));
    }
}