<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\CareerManage;
use App\Models\ContactForm;
use App\Models\BlogManage;
use App\Models\JoinUs;
use App\Models\NewsManage;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 
         $data['total_contcat_msg'] = ContactForm::get()->count();
         $data['total_resume'] = CareerManage::get()->count();
         $data['total_join_us'] = JoinUs::get()->count();
         $data['total_user'] = User::where('id','!=',1)->get()->count();

         $today = date('Y-m-d');
         $one_day_ago = date('Y-m-d', strtotime("-1 days"));
 
         $two_day_ago = date('Y-m-d', strtotime("-2 days"));
         $three_day_ago = date('Y-m-d', strtotime("-3 days"));
         $four_day_ago = date('Y-m-d', strtotime("-4 days"));
         $five_day_ago = date('Y-m-d', strtotime("-5 days"));
 
         $day_array = [$today,$one_day_ago,$two_day_ago,$three_day_ago,$four_day_ago,$five_day_ago];
         $visitor = DB::table('visitor_counts');
         $visitor->select('created_at',DB::raw('SUM(viewcount) as total'))->groupBy('created_at');
         for ($i=0; $i<count($day_array); $i++){
          $visitor->orwhereDate('created_at',$day_array[$i]);
         }
         $data['All']=$visitor->pluck('total');


        return view('Server.main',$data);
    }
}
