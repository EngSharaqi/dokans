<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Notification;
class NotificationController extends Controller
{
    

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan=user_limit();
        $plan=filter_var($plan['push_notification']);
        if($plan == false){
            $errors['errors']['error']=__('Push Notification Doesn\'t Supported In Your Plan');
           return response()->json($errors,401);

        } 
        $tokens=Notification::pluck('token')->all();
       if (count($tokens ?? []) == 0) {
            $errors['errors']['error']=__('Subscribers not available');
            return response()->json($errors,401);
       }

       $sent=$this->fmc($request->title,$request->description,url('/'),asset('uploads/'.auth()->id.'/notification.png'),$tokens);
        if ($sent == false) {
            $errors['errors']['error']='Something wrong';
            return response()->json($errors,401);
        }

       return response()->json([__('Notification successfully delivered')]);
    }

    public static function fmc($title,$description,$link,$icon,$user_tokens)
    {
            
        if (env('FMC_SERVER_API_KEY') == nul) {
            return false;
        }
        try {
            
            $data = [
                "registration_ids" => $user_tokens,
                "notification" => [
                    "title" => $title,
                    "body" => $description,
                    "icon" => $icon,
                    "click_action"=> $link

                ],

            ];


            $dataString = json_encode($data);

            $headers = [
                'Authorization: key=' . env('FMC_SERVER_API_KEY'),
                'Content-Type: application/json',
            ];

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

            $response = curl_exec($ch);
            
            return true;

        } catch (Exception $e) {
            return false;
        }


    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Notification::where('user_id',Auth::id())->whereIn('id',$request->id)->delete();

        return response()->json([__('Successfully Deleted')]);
    }
}
