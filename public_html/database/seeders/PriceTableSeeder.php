<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;
class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$prices = array(
    		array('id' => '1','term_id' => '35','price' => '95','regular_price' => '100','special_price' => '5','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-04-22'),
    		array('id' => '2','term_id' => '36','price' => '100','regular_price' => '100','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '3','term_id' => '37','price' => '50','regular_price' => '50','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '4','term_id' => '38','price' => '50','regular_price' => '50','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '5','term_id' => '39','price' => '100','regular_price' => '100','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '6','term_id' => '40','price' => '37.5','regular_price' => '37.5','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '7','term_id' => '41','price' => '50','regular_price' => '50','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '8','term_id' => '42','price' => '60','regular_price' => '60','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '9','term_id' => '43','price' => '150','regular_price' => '150','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '10','term_id' => '44','price' => '200','regular_price' => '200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '11','term_id' => '45','price' => '120','regular_price' => '120','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '12','term_id' => '46','price' => '-40','regular_price' => '160','special_price' => '200','price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '13','term_id' => '47','price' => '150','regular_price' => '150','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '14','term_id' => '48','price' => '90','regular_price' => '100','special_price' => '10','price_type' => '1','starting_date' => '2021-03-07','ending_date' => '2021-12-07'),
    		array('id' => '15','term_id' => '49','price' => '170','regular_price' => '200','special_price' => '15','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-02-25'),
    		array('id' => '16','term_id' => '50','price' => '475','regular_price' => '500','special_price' => '5','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-06-30'),
    		array('id' => '17','term_id' => '51','price' => '90','regular_price' => '100','special_price' => '10','price_type' => '1','starting_date' => '2021-03-07','ending_date' => '2022-06-07'),
    		array('id' => '18','term_id' => '60','price' => '90','regular_price' => '100','special_price' => '10','price_type' => '1','starting_date' => '2021-03-07','ending_date' => '2022-10-07'),
    		array('id' => '19','term_id' => '61','price' => '1990','regular_price' => '2000','special_price' => '10','price_type' => '1','starting_date' => '2021-03-07','ending_date' => '2022-02-24'),
    		array('id' => '20','term_id' => '62','price' => '2000','regular_price' => '2000','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '21','term_id' => '63','price' => '1500','regular_price' => '1500','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '22','term_id' => '64','price' => '1800','regular_price' => '1800','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '23','term_id' => '65','price' => '1800','regular_price' => '1800','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '24','term_id' => '66','price' => '2200','regular_price' => '2200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '25','term_id' => '67','price' => '1800','regular_price' => '1800','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '26','term_id' => '68','price' => '1400','regular_price' => '1400','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '27','term_id' => '69','price' => '500','regular_price' => '500','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '28','term_id' => '70','price' => '237.5','regular_price' => '250','special_price' => '5','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-02-07'),
    		array('id' => '29','term_id' => '71','price' => '1200','regular_price' => '1200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '30','term_id' => '72','price' => '2375','regular_price' => '2500','special_price' => '5','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-06-07'),
    		array('id' => '31','term_id' => '73','price' => '200','regular_price' => '200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '32','term_id' => '74','price' => '150','regular_price' => '150','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '36','term_id' => '81','price' => '1200','regular_price' => '1200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '37','term_id' => '82','price' => '1800','regular_price' => '1900','special_price' => '100','price_type' => '1','starting_date' => '2021-03-07','ending_date' => '2022-10-18'),
    		array('id' => '38','term_id' => '83','price' => '1000','regular_price' => '1000','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '39','term_id' => '84','price' => '999','regular_price' => '999','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '40','term_id' => '85','price' => '1710','regular_price' => '1800','special_price' => '5','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-10-07'),
    		array('id' => '41','term_id' => '86','price' => '1710','regular_price' => '1800','special_price' => '5','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-03-07'),
    		array('id' => '42','term_id' => '87','price' => '1500','regular_price' => '1500','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '43','term_id' => '88','price' => '1200','regular_price' => '1200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '44','term_id' => '89','price' => '1020','regular_price' => '1200','special_price' => '15','price_type' => '0','starting_date' => '2021-03-07','ending_date' => '2022-06-07'),
    		array('id' => '45','term_id' => '90','price' => '1000','regular_price' => '1000','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '46','term_id' => '91','price' => '1200','regular_price' => '1200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '47','term_id' => '92','price' => '1200','regular_price' => '1200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '48','term_id' => '93','price' => '1200','regular_price' => '1200','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '49','term_id' => '96','price' => '50','regular_price' => '50','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '50','term_id' => '97','price' => '23','regular_price' => '23','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '51','term_id' => '98','price' => '40','regular_price' => '50','special_price' => '10','price_type' => '1','starting_date' => '2021-03-08','ending_date' => '2022-12-08'),
    		array('id' => '52','term_id' => '99','price' => '50','regular_price' => '50','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '53','term_id' => '100','price' => '60','regular_price' => '60','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '54','term_id' => '101','price' => '60','regular_price' => '60','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '55','term_id' => '102','price' => '60','regular_price' => '60','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '56','term_id' => '103','price' => '57','regular_price' => '60','special_price' => '5','price_type' => '0','starting_date' => '2021-03-08','ending_date' => '2022-06-08'),
    		array('id' => '57','term_id' => '104','price' => '55','regular_price' => '55','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '58','term_id' => '105','price' => '63.01','regular_price' => '66.33','special_price' => '5','price_type' => '0','starting_date' => '2021-03-08','ending_date' => '2022-09-08'),
    		array('id' => '59','term_id' => '106','price' => '99','regular_price' => '99','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '60','term_id' => '107','price' => '66','regular_price' => '66','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '61','term_id' => '108','price' => '56','regular_price' => '66','special_price' => '10','price_type' => '1','starting_date' => '2021-03-08','ending_date' => '2022-07-08'),
    		array('id' => '62','term_id' => '109','price' => '66','regular_price' => '66','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL),
    		array('id' => '63','term_id' => '110','price' => '88.4','regular_price' => '88.4','special_price' => NULL,'price_type' => '1','starting_date' => NULL,'ending_date' => NULL)
    	);
		
		Price::insert($prices);
}
}
