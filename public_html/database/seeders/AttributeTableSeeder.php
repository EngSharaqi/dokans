<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$attributes = array(
    		array('id' => '1','category_id' => '113','variation_id' => '118','term_id' => '35'),
    		array('id' => '2','category_id' => '113','variation_id' => '119','term_id' => '35'),
    		array('id' => '3','category_id' => '113','variation_id' => '121','term_id' => '35'),
    		array('id' => '7','category_id' => '113','variation_id' => '118','term_id' => '49'),
    		array('id' => '8','category_id' => '113','variation_id' => '119','term_id' => '49'),
    		array('id' => '9','category_id' => '113','variation_id' => '120','term_id' => '49'),
    		array('id' => '10','category_id' => '113','variation_id' => '121','term_id' => '49'),
    		array('id' => '11','category_id' => '112','variation_id' => '114','term_id' => '42'),
    		array('id' => '12','category_id' => '112','variation_id' => '115','term_id' => '42'),
    		array('id' => '13','category_id' => '112','variation_id' => '116','term_id' => '42'),
    		array('id' => '14','category_id' => '112','variation_id' => '117','term_id' => '42'),
    		array('id' => '15','category_id' => '148','variation_id' => '150','term_id' => '62'),
    		array('id' => '16','category_id' => '148','variation_id' => '151','term_id' => '62'),
    		array('id' => '17','category_id' => '148','variation_id' => '152','term_id' => '62'),
    		array('id' => '18','category_id' => '149','variation_id' => '153','term_id' => '64'),
    		array('id' => '19','category_id' => '149','variation_id' => '154','term_id' => '64'),
    		array('id' => '20','category_id' => '149','variation_id' => '155','term_id' => '64'),
    		array('id' => '21','category_id' => '148','variation_id' => '150','term_id' => '64'),
    		array('id' => '22','category_id' => '148','variation_id' => '151','term_id' => '64'),
    		array('id' => '23','category_id' => '148','variation_id' => '150','term_id' => '65'),
    		array('id' => '24','category_id' => '148','variation_id' => '151','term_id' => '65'),
    		array('id' => '25','category_id' => '148','variation_id' => '152','term_id' => '65'),
    		array('id' => '26','category_id' => '148','variation_id' => '150','term_id' => '73'),
    		array('id' => '27','category_id' => '148','variation_id' => '151','term_id' => '73'),
    		array('id' => '28','category_id' => '148','variation_id' => '152','term_id' => '73'),
    		array('id' => '29','category_id' => '201','variation_id' => '202','term_id' => '81'),
    		array('id' => '30','category_id' => '201','variation_id' => '203','term_id' => '81'),
    		array('id' => '31','category_id' => '201','variation_id' => '204','term_id' => '81'),
    		array('id' => '32','category_id' => '201','variation_id' => '202','term_id' => '83'),
    		array('id' => '33','category_id' => '201','variation_id' => '203','term_id' => '83'),
    		array('id' => '34','category_id' => '201','variation_id' => '204','term_id' => '83'),
    		array('id' => '35','category_id' => '234','variation_id' => '237','term_id' => '103'),
    		array('id' => '36','category_id' => '234','variation_id' => '238','term_id' => '103'),
    		array('id' => '37','category_id' => '233','variation_id' => '235','term_id' => '105'),
    		array('id' => '38','category_id' => '233','variation_id' => '236','term_id' => '105')
    	);

    	\App\Attribute::insert($attributes);

    }
}
