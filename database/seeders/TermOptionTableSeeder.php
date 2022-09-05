<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Termoption;
class TermOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $termoptions = array(
  array('id' => '1','user_id' => '2','term_id' => '49','name' => 'Select Body Type','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '2','user_id' => '2','term_id' => '49','name' => 'Metal Body','type' => '0','amount' => '20','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '1'),
  array('id' => '3','user_id' => '2','term_id' => '49','name' => 'Plastic Body','type' => '0','amount' => '0','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '1'),
  array('id' => '4','user_id' => '2','term_id' => '50','name' => 'Select HDD','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '5','user_id' => '2','term_id' => '50','name' => '256gb','type' => '0','amount' => '0','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '4'),
  array('id' => '6','user_id' => '2','term_id' => '50','name' => '525','type' => '0','amount' => '100','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '4'),
  array('id' => '7','user_id' => '4','term_id' => '62','name' => 'Ram','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '8','user_id' => '4','term_id' => '62','name' => 'HDD','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '9','user_id' => '4','term_id' => '62','name' => '16GB','type' => '0','amount' => '100','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '7'),
  array('id' => '10','user_id' => '4','term_id' => '62','name' => '32GB','type' => '0','amount' => '150','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '7'),
  array('id' => '11','user_id' => '4','term_id' => '62','name' => '64GB','type' => '0','amount' => '300','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '7'),
  array('id' => '12','user_id' => '4','term_id' => '62','name' => '256gb','type' => '0','amount' => '300','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '8'),
  array('id' => '13','user_id' => '4','term_id' => '62','name' => '500GB','type' => '0','amount' => '400','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '8'),
  array('id' => '14','user_id' => '4','term_id' => '66','name' => 'Ram','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '15','user_id' => '4','term_id' => '66','name' => '16GB','type' => '0','amount' => '100','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '14'),
  array('id' => '16','user_id' => '4','term_id' => '66','name' => '32GB','type' => '0','amount' => '200','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '14'),
  array('id' => '17','user_id' => '5','term_id' => '105','name' => 'Size','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '18','user_id' => '5','term_id' => '105','name' => 'Six Pack','type' => '0','amount' => '40','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '17'),
  array('id' => '19','user_id' => '5','term_id' => '105','name' => 'Three pack','type' => '0','amount' => '50','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '17'),
  array('id' => '20','user_id' => '5','term_id' => '105','name' => 'Extra Meet','type' => '0','amount' => '60','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '17'),
  array('id' => '21','user_id' => '5','term_id' => '98','name' => 'Claudio Burgos','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '22','user_id' => '5','term_id' => '98','name' => 'Extra Salad','type' => '0','amount' => '20','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '21'),
  array('id' => '23','user_id' => '5','term_id' => '98','name' => 'Extra Sauce','type' => '0','amount' => '10','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '21'),
  array('id' => '24','user_id' => '5','term_id' => '98','name' => 'Otto Raymond','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '1','p_id' => NULL),
  array('id' => '25','user_id' => '5','term_id' => '98','name' => 'Emerald','type' => '0','amount' => '20','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '24'),
  array('id' => '26','user_id' => '5','term_id' => '98','name' => 'Sharon Mann','type' => '0','amount' => '10','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '24'),
  array('id' => '27','user_id' => '5','term_id' => '108','name' => 'Rosalyn Casey','type' => '1','amount' => NULL,'amount_type' => '1','is_required' => '1','select_type' => '0','p_id' => NULL),
  array('id' => '28','user_id' => '5','term_id' => '108','name' => 'Hayfa Conway','type' => '0','amount' => '10','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '27'),
  array('id' => '29','user_id' => '5','term_id' => '108','name' => 'Ulla Byrd','type' => '0','amount' => '75','amount_type' => '1','is_required' => '0','select_type' => '0','p_id' => '27')
);	
	Termoption::insert($termoptions);
    }
}
