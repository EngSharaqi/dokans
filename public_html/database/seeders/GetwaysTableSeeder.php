<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Getway;
class GetwaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$getways = array(
  array('id' => '1','user_id' => '4','category_id' => '2','content' => '{"title":"Cash On Delivery (COD)","additional_details":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,"}','status' => '1','created_at' => '2021-03-07 13:37:35','updated_at' => '2021-03-07 13:37:54'),

  array('id' => '2','user_id' => '4','category_id' => '5','content' => '{"title":"paypal","currency":"USD","ClientID":"","ClientSecret":"","env":"sandbox"}','status' => '1','created_at' => '2021-03-07 13:38:48','updated_at' => '2021-03-07 13:38:57'),

  array('id' => '3','user_id' => '5','category_id' => '2','content' => '{"title":"Cash On Delivery (COD)","additional_details":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the"}','status' => '1','created_at' => '2021-03-08 06:49:06','updated_at' => '2021-03-08 06:49:57'),

  array('id' => '4','user_id' => '2','category_id' => '8','content' => '{"title":"mollie","description":"","currency":"","api_key":""}','status' => '0','created_at' => '2021-03-17 20:20:57','updated_at' => '2021-03-17 20:20:57'),

  array('id' => '5','user_id' => '2','category_id' => '6','content' => '{"title":"stripe","description":"","currency":"","stripe_key":"","stripe_secret":"","env":"production"}','status' => '0','created_at' => '2021-03-17 20:55:24','updated_at' => '2021-03-17 20:55:24'),


  array('id' => '6','user_id' => '3','category_id' => '6','content' => '{"title":"stripe","description":"","currency":"","stripe_key":"","stripe_secret":"","env":"production"}','status' => '0','created_at' => '2021-03-17 22:11:51','updated_at' => '2021-03-17 22:11:51'),

  array('id' => '7','user_id' => '5','category_id' => '4','content' => '{"title":"razorpay","description":"","currency":"","key_id":"","key_secret":""}','status' => '0','created_at' => '2021-03-17 23:35:11','updated_at' => '2021-03-17 23:35:11'),
  
  array('id' => '8','user_id' => '3','category_id' => '3','content' => '{"title":"instamojo","env":"production","purpose":"","private_api_key":"","private_auth_token":""}','status' => '0','created_at' => '2021-03-18 00:08:10','updated_at' => '2021-03-18 00:08:10'),
  array('id' => '9','user_id' => '2','category_id' => '5','content' => '{"title":"paypal","description":"","currency":"","ClientID":"","ClientSecret":"","env":"production"}','status' => '0','created_at' => '2021-03-18 01:20:11','updated_at' => '2021-03-18 01:20:11'),
  array('id' => '10','user_id' => '4','category_id' => '6','content' => '{"title":"stripe","description":"","currency":"","stripe_key":"","stripe_secret":"","env":"production"}','status' => '0','created_at' => '2021-03-18 02:51:05','updated_at' => '2021-03-18 02:51:05'),
  array('id' => '11','user_id' => '4','category_id' => '7','content' => '{"title":"toyyibpay","description":"","currency":"","user_secretkey":"","category_code":"","env":"production"}','status' => '0','created_at' => '2021-03-18 02:51:52','updated_at' => '2021-03-18 02:51:52'),
  array('id' => '12','user_id' => '2','category_id' => '2','content' => '{"title":"Cash On Delivery (COD)","additional_details":""}','status' => '0','created_at' => '2021-03-18 02:52:31','updated_at' => '2021-03-18 02:52:31'),
  array('id' => '13','user_id' => '3','category_id' => '2','content' => '{"title":"Cash On Delivery (COD)","additional_details":""}','status' => '0','created_at' => '2021-03-18 03:50:58','updated_at' => '2021-03-18 03:50:58'),
  array('id' => '14','user_id' => '4','category_id' => '4','content' => '{"title":"razorpay","description":"","currency":"","key_id":"","key_secret":""}','status' => '0','created_at' => '2021-03-18 11:10:39','updated_at' => '2021-03-18 11:10:39'),
  array('id' => '15','user_id' => '4','category_id' => '8','content' => '{"title":"mollie","description":"","currency":"","api_key":""}','status' => '0','created_at' => '2021-03-18 12:55:35','updated_at' => '2021-03-18 12:55:35'),
  array('id' => '16','user_id' => '2','category_id' => '3','content' => '{"title":"instamojo","env":"production","purpose":"","private_api_key":"","private_auth_token":""}','status' => '0','created_at' => '2021-03-18 16:09:06','updated_at' => '2021-03-18 16:09:06'),
  array('id' => '17','user_id' => '5','category_id' => '6','content' => '{"title":"stripe","description":"","currency":"","stripe_key":"","stripe_secret":"","env":"production"}','status' => '0','created_at' => '2021-03-18 17:09:02','updated_at' => '2021-03-18 17:09:02'),
  array('id' => '18','user_id' => '3','category_id' => '9','content' => '{"title":"paystack","description":"","currency":"","public_key":"","secret_key":""}','status' => '0','created_at' => '2021-03-18 18:57:02','updated_at' => '2021-03-18 18:57:02'),
  array('id' => '19','user_id' => '3','category_id' => '5','content' => '{"title":"paypal","description":"","currency":"","ClientID":"","ClientSecret":"","env":"production"}','status' => '0','created_at' => '2021-03-19 01:53:19','updated_at' => '2021-03-19 01:53:19'),
  array('id' => '20','user_id' => '4','category_id' => '3','content' => '{"title":"instamojo","env":"production","purpose":"","private_api_key":"","private_auth_token":""}','status' => '0','created_at' => '2021-03-19 12:55:31','updated_at' => '2021-03-19 12:55:31'),
  array('id' => '21','user_id' => '4','category_id' => '9','content' => '{"title":"paystack","description":"","currency":"","public_key":"","secret_key":""}','status' => '0','created_at' => '2021-03-19 17:22:51','updated_at' => '2021-03-19 17:22:51'),
  array('id' => '22','user_id' => '3','category_id' => '4','content' => '{"title":"razorpay","description":"","currency":"","key_id":"","key_secret":""}','status' => '0','created_at' => '2021-03-19 18:55:45','updated_at' => '2021-03-19 18:55:45'),
  array('id' => '23','user_id' => '5','category_id' => '3','content' => '{"title":"instamojo","env":"production","purpose":"","private_api_key":"","private_auth_token":""}','status' => '0','created_at' => '2021-03-20 21:33:55','updated_at' => '2021-03-20 21:33:55'),
  array('id' => '24','user_id' => '2','category_id' => '9','content' => '{"title":"paystack","description":"","currency":"","public_key":"","secret_key":""}','status' => '0','created_at' => '2021-03-21 01:09:28','updated_at' => '2021-03-21 01:09:28'),
  array('id' => '25','user_id' => '5','category_id' => '5','content' => '{"title":"paypal","description":"","currency":"","ClientID":"","ClientSecret":"","env":"production"}','status' => '0','created_at' => '2021-03-21 06:21:29','updated_at' => '2021-03-21 06:21:29'),
  array('id' => '26','user_id' => '2','category_id' => '4','content' => '{"title":"razorpay","description":"","currency":"","key_id":"","key_secret":""}','status' => '0','created_at' => '2021-03-21 13:44:31','updated_at' => '2021-03-21 13:44:31'),
  array('id' => '27','user_id' => '2','category_id' => '7','content' => '{"title":"toyyibpay","description":"","currency":"","user_secretkey":"","category_code":"","env":"production"}','status' => '0','created_at' => '2021-03-21 14:21:51','updated_at' => '2021-03-21 14:21:51'),
  array('id' => '28','user_id' => '3','category_id' => '8','content' => '{"title":"mollie","description":"","currency":"","api_key":""}','status' => '0','created_at' => '2021-03-22 16:10:51','updated_at' => '2021-03-22 16:10:51'),
  array('id' => '29','user_id' => '5','category_id' => '9','content' => '{"title":"paystack","description":"","currency":"","public_key":"","secret_key":""}','status' => '0','created_at' => '2021-03-26 10:17:42','updated_at' => '2021-03-26 10:17:42'),
  array('id' => '30','user_id' => '5','category_id' => '7','content' => '{"title":"toyyibpay","description":"","currency":"","user_secretkey":"","category_code":"","env":"production"}','status' => '0','created_at' => '2021-03-27 03:23:02','updated_at' => '2021-03-27 03:23:02'),
  array('id' => '31','user_id' => '3','category_id' => '7','content' => '{"title":"toyyibpay","description":"","currency":"","user_secretkey":"","category_code":"","env":"production"}','status' => '0','created_at' => '2021-03-29 15:16:15','updated_at' => '2021-03-29 15:16:15'),
  array('id' => '32','user_id' => '5','category_id' => '8','content' => '{"title":"mollie","description":"","currency":"","api_key":""}','status' => '0','created_at' => '2021-03-31 12:57:33','updated_at' => '2021-03-31 12:57:33')
);
        Getway::insert($getways);
    }
}
