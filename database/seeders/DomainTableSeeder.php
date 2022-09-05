<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Userplan;
use App\Option;
use Str;
use App\Domain;
class DomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$info=\App\Plan::latest()->first();
    	

    	$exp_days =  $info->days;
    	$expiry_date = \Carbon\Carbon::now()->addDays($exp_days)->format('Y-m-d');

    	$max_order=Userplan::max('id');
    	$order_prefix=Option::where('key','order_prefix')->first();


    	$order_no = $order_prefix->value.$max_order;

         $userplan = new Userplan;
         $userplan->order_no=$order_no;
         $userplan->amount=0;
         $userplan->tax=0;
         $userplan->trx=Str::random(15).$max_order;
         $userplan->will_expire=$expiry_date;
         $userplan->user_id=2;
         $userplan->plan_id=$info->id;
         $userplan->category_id=2;
         $userplan->status=1;
         $userplan->payment_status=1;
         $userplan->save();

        $dom=new Domain;
    	$dom->domain='bigbag.'.env('APP_PROTOCOLESS_URL');
    	$dom->full_domain='https://bigbag.'.env('APP_PROTOCOLESS_URL');
    	$dom->status=1;
    	$dom->user_id=2;
        $dom->is_trial=0;
        $dom->type=1;
        $dom->data=$info->data;
        $dom->will_expire=$expiry_date;
        $dom->userplan_id=$userplan->id;
    	$dom->save();

    	// $user=User::find($user->id);
    	// $user->domain_id=$dom->id;
    	// $user->save();
        $dom->orderlog()->create(['userplan_id'=>$userplan->id,'domain_id'=>$dom->id]);



        //arafa cart
       

    	$exp_days =  $info->days;
    	$expiry_date = \Carbon\Carbon::now()->addDays($exp_days)->format('Y-m-d');

    	$max_order=Userplan::max('id');
    	$order_prefix=Option::where('key','order_prefix')->first();


    	 $order_no = $order_prefix->value.$max_order;

         $userplan = new Userplan;
         $userplan->order_no=$order_no;
         $userplan->amount=0;
         $userplan->tax=0;
         $userplan->trx=Str::random(15).$max_order;
         $userplan->will_expire=$expiry_date;
         $userplan->user_id=3;
         $userplan->plan_id=$info->id;
         $userplan->category_id=2;
         $userplan->status=1;
         $userplan->payment_status=1;
         $userplan->save();

        $dom=new Domain;
    	$dom->domain='arafa-cart.'.env('APP_PROTOCOLESS_URL');
    	$dom->full_domain='https://arafa-cart.'.env('APP_PROTOCOLESS_URL');
    	$dom->status=1;
    	$dom->user_id=3;
        $dom->is_trial=0;
        $dom->type=1;
        $dom->data=$info->data;
        $dom->will_expire=$expiry_date;
        $dom->userplan_id=$userplan->id;
    	$dom->save();

    	// $user=User::find($user->id);
    	// $user->domain_id=$dom->id;
    	// $user->save();
        $dom->orderlog()->create(['userplan_id'=>$userplan->id,'domain_id'=>$dom->id]);


        //saka cart
       

    	$exp_days =  $info->days;
    	$expiry_date = \Carbon\Carbon::now()->addDays($exp_days)->format('Y-m-d');

    	$max_order=Userplan::max('id');
    	$order_prefix=Option::where('key','order_prefix')->first();


    	 $order_no = $order_prefix->value.$max_order;

         $userplan = new Userplan;
         $userplan->order_no=$order_no;
         $userplan->amount=0;
         $userplan->tax=0;
         $userplan->trx=Str::random(15).$max_order;
         $userplan->will_expire=$expiry_date;
         $userplan->user_id=4;
         $userplan->plan_id=$info->id;
         $userplan->category_id=2;
         $userplan->status=1;
         $userplan->payment_status=1;
         $userplan->save();

        $dom=new Domain;
    	$dom->domain='saka-cart.'.env('APP_PROTOCOLESS_URL');
    	$dom->full_domain='https://saka-cart.'.env('APP_PROTOCOLESS_URL');
    	$dom->status=1;
    	$dom->user_id=4;
        $dom->is_trial=0;
        $dom->type=1;
        $dom->data=$info->data;
        $dom->will_expire=$expiry_date;
        $dom->userplan_id=$userplan->id;
    	$dom->save();

    	// $user=User::find($user->id);
    	// $user->domain_id=$dom->id;
    	// $user->save();
        $dom->orderlog()->create(['userplan_id'=>$userplan->id,'domain_id'=>$dom->id]);


        //bazar
        

    	$exp_days =  $info->days;
    	$expiry_date = \Carbon\Carbon::now()->addDays($exp_days)->format('Y-m-d');

    	$max_order=Userplan::max('id');
    	$order_prefix=Option::where('key','order_prefix')->first();


    	 $order_no = $order_prefix->value.$max_order;

         $userplan = new Userplan;
         $userplan->order_no=$order_no;
         $userplan->amount=0;
         $userplan->tax=0;
         $userplan->trx=Str::random(15).$max_order;
         $userplan->will_expire=$expiry_date;
         $userplan->user_id=5;
         $userplan->plan_id=$info->id;
         $userplan->category_id=2;
         $userplan->status=1;
         $userplan->payment_status=1;
         $userplan->save();

        $dom=new Domain;
    	$dom->domain='bazar.'.env('APP_PROTOCOLESS_URL');
    	$dom->full_domain='https://bazar.'.env('APP_PROTOCOLESS_URL');
    	$dom->status=1;
    	$dom->user_id=5;
        $dom->is_trial=0;
        $dom->type=1;
        $dom->data=$info->data;
        $dom->will_expire=$expiry_date;
        $dom->userplan_id=$userplan->id;
    	$dom->save();

    	// $user=User::find($user->id);
    	// $user->domain_id=$dom->id;
    	// $user->save();
        $dom->orderlog()->create(['userplan_id'=>$userplan->id,'domain_id'=>$dom->id]);

    	

    	

    }
}
