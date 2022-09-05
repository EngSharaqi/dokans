<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Stock;
class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = array(
  array('id' => '1','term_id' => '35','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '2','term_id' => '36','stock_manage' => '1','stock_status' => '1','stock_qty' => '10','sku' => '#123d'),
  array('id' => '3','term_id' => '37','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '4','term_id' => '38','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '5','term_id' => '39','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '6','term_id' => '40','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '7','term_id' => '41','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '8','term_id' => '42','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '9','term_id' => '43','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '10','term_id' => '44','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '11','term_id' => '45','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '12','term_id' => '46','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '13','term_id' => '47','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '14','term_id' => '48','stock_manage' => '1','stock_status' => '1','stock_qty' => '9','sku' => '#123d5'),
  array('id' => '15','term_id' => '49','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => '#assd'),
  array('id' => '16','term_id' => '50','stock_manage' => '1','stock_status' => '1','stock_qty' => '12','sku' => '#123d5'),
  array('id' => '17','term_id' => '51','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => '#12344'),
  array('id' => '18','term_id' => '60','stock_manage' => '1','stock_status' => '1','stock_qty' => '100','sku' => '#assd'),
  array('id' => '19','term_id' => '61','stock_manage' => '1','stock_status' => '1','stock_qty' => '7','sku' => '#assd'),
  array('id' => '20','term_id' => '62','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '21','term_id' => '63','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '22','term_id' => '64','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '23','term_id' => '65','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '24','term_id' => '66','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '25','term_id' => '67','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '26','term_id' => '68','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '27','term_id' => '69','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '28','term_id' => '70','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '29','term_id' => '71','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '30','term_id' => '72','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '31','term_id' => '73','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '32','term_id' => '74','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '36','term_id' => '81','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '37','term_id' => '82','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '38','term_id' => '83','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '39','term_id' => '84','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '40','term_id' => '85','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '41','term_id' => '86','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '42','term_id' => '87','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '43','term_id' => '88','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '44','term_id' => '89','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '45','term_id' => '90','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '46','term_id' => '91','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '47','term_id' => '92','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '48','term_id' => '93','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '49','term_id' => '96','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '50','term_id' => '97','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '51','term_id' => '98','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '52','term_id' => '99','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '53','term_id' => '100','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '54','term_id' => '101','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '55','term_id' => '102','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '56','term_id' => '103','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '57','term_id' => '104','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '58','term_id' => '105','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '59','term_id' => '106','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '60','term_id' => '107','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '61','term_id' => '108','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '62','term_id' => '109','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL),
  array('id' => '63','term_id' => '110','stock_manage' => '0','stock_status' => '1','stock_qty' => '999','sku' => NULL)
);

	Stock::insert($stocks);
    }
}
