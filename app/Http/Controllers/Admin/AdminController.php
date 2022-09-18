<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Userplan;
use App\Models\Requestdomain;
use Spatie\Analytics;
use Spatie\Analytics\Period;
use App\Domain;
use Carbon\Carbon;
class AdminController extends Controller
{

    public function login_form(){
        return view('admin.auth.login');
    }

    public function login(Request $request){

        $credentials = array(
            'email' => $request->email,
            'password' =>$request->password
        );
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard.static');
        }
        else{
            return redirect()->route('admin.login.form')->with('error','Login failed, please try again!');
        }
    }

    public function settings(){
        return view('seller.settings');
    }

    public function dashboard()
    {
//        if (!Auth()->user()->can('dashboard')) {
//        return abort(401);
//        }
        $request_users=User::where([
            ['role_id',3],
            ['status',3]
        ])->latest()->take(4)->get();
        $orders=Userplan::with('user','plan_info','category')->where('status',2)->latest()->take(20)->get();

        return view('admin.dashboard',compact('request_users','orders'));
    }

    public function staticData()
    {
        $total_subscribers=User::where('role_id',3)->count();
        $total_domain_request=Domain::where('status',3)->count();
        $total_earnings=Userplan::where('status','!=',0)->sum('amount');
        $total_expired=Userplan::where('status',3)->count();
        $total_custom_domain_request=Requestdomain::where('status',2)->count();
        $total_domain_request=$total_domain_request+$total_custom_domain_request;

        $year=Carbon::parse(date('Y'))->year;
        $today=Carbon::today();

        $earnings=Userplan::whereYear('created_at', '=',$year)->where('status','!=',0)->orderBy('id', 'asc')->selectRaw('year(created_at) year, monthname(created_at) month, sum(amount) total')->groupBy('year', 'month')->get();
        $total_earnings_this_year=Userplan::where('status','!=',0)->whereYear('created_at', '=',$year)->sum('amount');


        $orders=Userplan::whereYear('created_at', '=',$year)->orderBy('id', 'asc')->selectRaw('year(created_at) year, monthname(created_at) month, count(*) orders')
                ->groupBy('year', 'month')
                ->get();
        $total_order_this_year=Userplan::where('status','!=',0)->whereYear('created_at', '=',$year)->count();

        $data['total_subscribers']=number_format($total_subscribers);
        $data['total_domain_request']=number_format($total_domain_request);
        $data['total_expired']=number_format($total_expired);
        $data['total_earnings']=amount_admin_format($total_earnings);
        $data['earnings']=$earnings;
        $data['total_earnings_this_year']=amount_admin_format($total_earnings_this_year);
        $data['orders']=$orders;
        $data['total_order_this_year']=number_format($total_order_this_year);

        return response()->json($data);

    }

    public function perfomance($period)
    {
        if ($period != 365) {
            $earnings=Userplan::whereDate('created_at', '>', Carbon::now()->subDays($period))->where('status','!=','canceled')->orderBy('id', 'asc')->selectRaw('year(created_at) year, date(created_at) date, sum(amount) total')->groupBy('year','date')->get();
        }
        else{
            $earnings=Userplan::whereDate('created_at', '>', Carbon::now()->subDays($period))->where('status','!=','canceled')->orderBy('id', 'asc')->selectRaw('year(created_at) year, monthname(created_at) month, sum(amount) total')->groupBy('year','month')->get();
        }


        return response()->json($earnings);
    }

    public function order_statics($month)
    {
        $month=Carbon::parse($month)->month;
        $year=Carbon::parse(date('Y'))->year;

        $total_orders=Userplan::whereYear('created_at', '=',$year)->whereMonth('created_at', '=',$month)->count();

        $total_pending=Userplan::whereYear('created_at', '=',$year)->whereMonth('created_at', '=',$month)->where('status',2)->count();

        $total_completed=Userplan::whereYear('created_at', '=',$year)->whereMonth('created_at', '=',$month)->where('status',1)->count();

        $total_expired=Userplan::whereYear('created_at', '=',$year)->whereMonth('created_at', '=',$month)->where('status',3)->count();

        $data['total_orders']=number_format($total_orders);
        $data['total_pending']=number_format($total_pending);
        $data['total_completed']=number_format($total_completed);
        $data['total_processing']=number_format($total_expired);

        return response()->json($data);
    }


    public function google_analytics($days)
    {
        if (file_exists('uploads/service-account-credentials.json')) {
            $info=google_analytics_for_user();

            \Config::set('analytics.view_id', $info['view_id']);
            \Config::set('analytics.service_account_credentials_json', $info['service_account_credentials_json']);
            $data['TotalVisitorsAndPageViews']=$this->fetchTotalVisitorsAndPageViews($days);
            $data['MostVisitedPages']=$this->fetchMostVisitedPages($days);
            $data['Referrers']=$this->fetchTopReferrers($days);
            $data['fetchUserTypes']=$this->fetchUserTypes($days);
            $data['TopBrowsers']=$this->fetchTopBrowsers($days);
        }
        else{
            $data['TotalVisitorsAndPageViews']=[];
            $data['MostVisitedPages']=[];
            $data['Referrers']=[];
            $data['fetchUserTypes']=[];
            $data['TopBrowsers']=[];
        }

        return response()->json($data);
    }


    public function fetchTotalVisitorsAndPageViews($period)
    {

        return \Analytics::fetchTotalVisitorsAndPageViews(Period::days($period))->map(function($data)
        {
            $row['date']=$data['date']->format('Y-m-d');
            $row['visitors']=$data['visitors'];
            $row['pageViews']=$data['pageViews'];
            return $row;
        });

    }
    public function fetchMostVisitedPages($period)
    {
        return \Analytics::fetchMostVisitedPages(Period::days($period));

    }

    public function fetchTopReferrers($period)
    {
        return \Analytics::fetchTopReferrers(Period::days($period));

    }

    public function fetchUserTypes($period)
    {
        return \Analytics::fetchUserTypes(Period::days($period));

    }

    public function fetchTopBrowsers($period)
    {
        return \Analytics::fetchTopBrowsers(Period::days($period));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (Auth()->user()->can('admin.list')) {
            //$users = User::where('role_id',1)->where('id','!=',1)->latest()->get();
            $admins=Admin::where('id','!=' , Auth::guard('admin')->user()->id)->with('roles')->get();
            return view('admin.admin.index', compact('admins'));
//        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //if (Auth()->user()->can('admin.create')) {
            $roles  =Role::where('id' , '!=' , 1)->get();
            return view('admin.admin.create', compact('roles'));
        //}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'roles' => 'required',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create New User
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
//        $user->role_id = 1;
        $admin->password = Hash::make($request->password);
        $admin->save();

        if ($request->roles) {
            $admin->assignRole($request->roles);
        }


        return response()->json(['Admin has been created !!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if (Auth()->user()->can('admin.edit')) {
            $admin = Admin::whereId($id)->first();
            $roles  = Role::where('id' , '!=' , 1)->get();
        $admintoedit['roles']=DB::table('model_has_roles')->whereModel_id($id)->whereModel_type('App\Models\Admin')->select('role_id')->pluck('role_id');
            return view('admin.admin.edit', compact('admin', 'roles','admintoedit'));
        //}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Create New User
        $admin = Admin::find($id);

        // Validation Data
//        $request->validate([
//            'name' => 'required|max:50',
//            'email' => 'required|max:100|email|unique:users,email,' . $id,
//            'password' => 'nullable|min:6|confirmed',
//        ]);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->status = $request->status;
        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }
        $admin->save();

        $admin->roles()->detach();
        if ($request->roles) {
            $admin->assignRole($request->roles);
        }


        return response()->json(['Admin has been updated !!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

//        if (Auth()->user()->can('admin.delete')) {

                if ($request->status == 'delete') {
                    if ($request->ids) {
                        foreach ($request->ids as $id) {
                            Admin::destroy($id);
                        }
                    }
                }
                else{
                    if ($request->ids) {
                        foreach ($request->ids as $id) {
                            $post = Admin::find($id);
                            $post->status = $request->status;
                            $post->save();
                        }
                    }
                }

//        }

//        return response()->json('Success');
        return  redirect()->route('admin.admins.index')->with('success','تم تعديل حالة المدير بنجاح');
    }

    public function EditProfile(){
        return view('admin.auth.editprofile');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login.form');

    }
}
