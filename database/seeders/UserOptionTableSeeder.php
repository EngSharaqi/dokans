<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Useroption;
class UserOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useroptions = array(
  array('id' => '1','key' => 'shop_name','value' => 'Bigbag','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '2','key' => 'shop_description','value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '3','key' => 'store_email','value' => 'bigbag@email.com','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '4','key' => 'order_prefix','value' => 'bigbag','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '5','key' => 'local','value' => 'en','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '6','key' => 'currency','value' => '{"currency_position":"left","currency_name":"USD","currency_icon":"$"}','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '7','key' => 'languages','value' => '{"English":"en"}','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '8','key' => 'tax','value' => '1','status' => '1','created_at' => '2021-03-07 06:46:00','updated_at' => '2021-03-07 06:46:00','user_id' => '2'),
  array('id' => '9','key' => 'location','value' => '{"company_name":"Morales Wooten Plc","address":"Incididunt et et cum","city":"Omnis autem autem ma","state":"Beatae aut amet qui","zip_code":"47950","email":"koce@mailinator.com","phone":"123456789","invoice_description":"Suscipit rerum amet"}','status' => '1','created_at' => '2021-03-07 06:46:25','updated_at' => '2021-03-07 06:46:25','user_id' => '2'),
  array('id' => '10','key' => 'theme_color','value' => 'rgb(220, 53, 69)','status' => '1','created_at' => '2021-03-07 06:54:22','updated_at' => '2021-03-07 06:56:15','user_id' => '2'),
  array('id' => '11','key' => 'socials','value' => '[{"icon":"fab fa-facebook","url":"https:\\/\\/www.facebook.com"},{"icon":"fab fa-instagram","url":"https:\\/\\/www.instagram.com"},{"icon":"fab fa-youtube","url":"https:\\/\\/www.youtube.com"}]','status' => '1','created_at' => '2021-03-07 06:54:22','updated_at' => '2021-03-07 06:54:22','user_id' => '2'),
  array('id' => '12','key' => 'seo','value' => '{"title":"Bigbag","twitterTitle":"@bigbag","canonical":"https:\\/\\/bigbag.amwork.xyz","tags":"bigbag,shop,amwork,amcoders","description":"testing bigbag site"}','status' => '1','created_at' => '2021-03-07 07:02:38','updated_at' => '2021-03-07 07:03:24','user_id' => '2'),
  array('id' => '13','key' => 'whatsapp','value' => '{"phone_number":"8801830617500","shop_page_pretext":"i want to purchase this product","other_page_pretext":"Hello I have a query"}','status' => '1','created_at' => '2021-03-07 07:06:09','updated_at' => '2021-03-07 07:06:09','user_id' => '2'),
  array('id' => '14','key' => 'shop_name','value' => 'Saka Cart','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:24:00','user_id' => '4'),
  array('id' => '15','key' => 'shop_description','value' => 'Exercitation sunt teExercitation sunt teExercitation sunt teExercitation sunt teExercitation sunt teExercitation sunt tevExercitation sunt teExercitation sunt teExercitation sunt te','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:23:51','user_id' => '4'),
  array('id' => '16','key' => 'store_email','value' => 'saka@email.com','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:23:51','user_id' => '4'),
  array('id' => '17','key' => 'order_prefix','value' => 'SAKA','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:23:51','user_id' => '4'),
  array('id' => '18','key' => 'local','value' => 'en','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:23:51','user_id' => '4'),
  array('id' => '19','key' => 'currency','value' => '{"currency_position":"left","currency_name":"USD","currency_icon":"$"}','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:23:51','user_id' => '4'),
  array('id' => '20','key' => 'languages','value' => '{"English":"en"}','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:23:51','user_id' => '4'),
  array('id' => '21','key' => 'tax','value' => '1.5','status' => '1','created_at' => '2021-03-07 11:23:51','updated_at' => '2021-03-07 11:23:51','user_id' => '4'),
  array('id' => '22','key' => 'location','value' => '{"company_name":"nimixuzi","address":"Agrabad chittagong","city":"Rerum sunt reprehend","state":"chittagong","zip_code":"4400","email":"mdamruf@gmail.com","phone":"0123456789","invoice_description":"Exercitation sunt te Exercitation sunt te Exercitation sunt teExercitation sunt teExercitation sunt teExercitation sunt teExercitation sunt te"}','status' => '1','created_at' => '2021-03-07 11:24:29','updated_at' => '2021-03-07 11:24:29','user_id' => '4'),
  array('id' => '23','key' => 'theme_color','value' => 'rgb(232, 30, 30)','status' => '1','created_at' => '2021-03-07 11:26:27','updated_at' => '2021-03-07 11:27:13','user_id' => '4'),
  array('id' => '24','key' => 'socials','value' => '[{"icon":"fab fa-facebook-square","url":"https:\\/\\/www.facebook.com"},{"icon":"fab fa-instagram","url":"https:\\/\\/www.instagram.com"},{"icon":"fa fa-twitter","url":"https:\\/\\/www.facebook.com"}]','status' => '1','created_at' => '2021-03-07 11:26:27','updated_at' => '2021-03-07 11:26:27','user_id' => '4'),
  array('id' => '25','key' => 'seo','value' => '{"title":"saka cart","twitterTitle":"@sakacart","canonical":"https:\\/\\/saka-cart.amwork.xyz","tags":"sakacart,amwork","description":"test description"}','status' => '1','created_at' => '2021-03-07 11:27:39','updated_at' => '2021-03-07 11:28:15','user_id' => '4'),
  array('id' => '26','key' => 'shop_name','value' => 'Arafa Cart','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '27','key' => 'shop_description','value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '28','key' => 'store_email','value' => 'mdmaruf782@gmail.com','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '29','key' => 'order_prefix','value' => '#arafacart','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '30','key' => 'local','value' => 'en','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '31','key' => 'currency','value' => '{"currency_position":"left","currency_name":"USD","currency_icon":"$"}','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '32','key' => 'languages','value' => '{"English":"en"}','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '33','key' => 'tax','value' => '1.6','status' => '1','created_at' => '2021-03-07 17:06:39','updated_at' => '2021-03-07 17:06:39','user_id' => '3'),
  array('id' => '34','key' => 'location','value' => '{"company_name":"Arafa Cart","address":"Agrabad chittagong","city":"chittagong","state":"chittagong","zip_code":"4100","email":"mdamruf@gmail.com","phone":"0123457896","invoice_description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took"}','status' => '1','created_at' => '2021-03-07 17:07:09','updated_at' => '2021-03-07 17:07:09','user_id' => '3'),
  array('id' => '35','key' => 'theme_color','value' => 'rgb(255, 69, 0)','status' => '1','created_at' => '2021-03-07 17:09:07','updated_at' => '2021-03-07 17:09:07','user_id' => '3'),
  array('id' => '36','key' => 'socials','value' => '[{"icon":"fab fa-facebook-square","url":"https:\\/\\/www.facebook.com"},{"icon":"fa fa-instagram","url":"https:\\/\\/www.instagram.com\\/"},{"icon":"fa fa-twitter","url":"https:\\/\\/twitter.com\\/"}]','status' => '1','created_at' => '2021-03-07 17:09:07','updated_at' => '2021-03-07 17:10:08','user_id' => '3'),
  array('id' => '37','key' => 'seo','value' => '{"title":"arafa cart","twitterTitle":"@arafatcart","canonical":"https:\\/\\/arafa-cart.amwork.xyz\\/","tags":"a,b,c","description":"test"}','status' => '1','created_at' => '2021-03-07 17:16:43','updated_at' => '2021-03-07 17:17:14','user_id' => '3'),
  array('id' => '38','key' => 'whatsapp','value' => '{"phone_number":"8801830617500","shop_page_pretext":"i want to purchase this","other_page_pretext":"i have a query"}','status' => '1','created_at' => '2021-03-07 17:23:00','updated_at' => '2021-03-07 17:23:00','user_id' => '3'),
  array('id' => '39','key' => 'theme_color','value' => 'rgb(236, 19, 49)','status' => '1','created_at' => '2021-03-08 05:02:15','updated_at' => '2021-03-08 05:02:15','user_id' => '5'),
  array('id' => '40','key' => 'socials','value' => '[{"icon":"fab fa-facebook-square","url":"https:\\/\\/www.facebook.com"},{"icon":"fab fa-instagram","url":"#"},{"icon":"fa fa-twitter","url":"https:\\/\\/twitter.com\\/"}]','status' => '1','created_at' => '2021-03-08 05:02:15','updated_at' => '2021-03-08 05:02:15','user_id' => '5'),
  array('id' => '41','key' => 'location','value' => '{"company_name":"Bazar","address":"Agrabad chittagong","city":"chittagong","state":"chittagong","zip_code":"4100","email":"mdamruf@gmail.com","phone":"0123457896","invoice_description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printe"}','status' => '1','created_at' => '2021-03-08 05:05:32','updated_at' => '2021-03-08 05:05:32','user_id' => '5'),
  array('id' => '42','key' => 'shop_name','value' => 'Bazar','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '43','key' => 'shop_description','value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '44','key' => 'store_email','value' => 'mdmaruf782@gmail.com','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '45','key' => 'order_prefix','value' => '#bazar','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '46','key' => 'local','value' => 'en','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '47','key' => 'currency','value' => '{"currency_position":"left","currency_name":"USD","currency_icon":"$"}','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '48','key' => 'languages','value' => '{"English":"en"}','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '49','key' => 'tax','value' => '5','status' => '1','created_at' => '2021-03-08 05:07:01','updated_at' => '2021-03-08 05:07:01','user_id' => '5'),
  array('id' => '50','key' => 'whatsapp','value' => '{"phone_number":"8801830617500","shop_page_pretext":"I want to order this","other_page_pretext":"i have query"}','status' => '1','created_at' => '2021-03-08 06:48:23','updated_at' => '2021-03-08 06:48:23','user_id' => '5'),
  array('id' => '51','key' => 'seo','value' => '{"title":"","twitterTitle":"","canonical":"","tags":"","description":""}','status' => '1','created_at' => '2021-03-18 04:14:54','updated_at' => '2021-03-18 04:14:54','user_id' => '5'),
  array('id' => '52','key' => 'order_receive_method','value' => 'whatsapp','status' => '1','created_at' => '2021-05-21 05:00:38','updated_at' => '2021-05-21 05:00:38','user_id' => '3')
);
	
	Useroption::insert($useroptions);
    }
}
