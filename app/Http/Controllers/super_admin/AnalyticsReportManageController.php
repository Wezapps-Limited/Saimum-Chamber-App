<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryManage;
use App\Models\GoogleAnalyticsScript;
use App\Models\ProductManage;
use App\Models\OrderDetails;
use App\Models\OrderManage;
use Illuminate\Support\Carbon;
use App\Models\TopSallerProduct;
class AnalyticsReportManageController extends Controller
{
    //

    public function AnalyticsOverview(){

        $data['category'] =CategoryManage::get();
        $data['top_sell_product'] =TopSallerProduct::get();
        return view('Server.Analytics.overview',$data);
    }

    public function AnalyticsProduct(){
        // $data['index'] = ProductManage::where('status','2')->get();
        $data['order'] = OrderDetails::distinct('product_id')->pluck('product_id');
        $data['index'] = ProductManage::whereIn('id',$data['order'])->get();
        // dd($data['index']);
        return view('Server.Analytics.product_overview',$data);
    }

    public function AnalyticsProductStock(){

        $data['index'] = ProductManage::where('status','2')->get();
        return view('Server.Analytics.product_stock_overview',$data);
    }

    public function AnalyticsRevenue(){

        $revenueData = [];

        // Get unique months from OrderManage to loop through
        $uniqueMonths = OrderManage::where('status','4')->distinct()
            ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month')
            ->orderBy('month')
            ->pluck('month');


        foreach ($uniqueMonths as $month) {
            $startOfMonth = Carbon::parse($month)->startOfMonth();
            $endOfMonth = Carbon::parse($month)->endOfMonth();

            $orders = OrderManage::where('status','4')->whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();
            $revenue = 0;
            $revenue_purches = 0;
            $revenue_total_sell_item = 0;
            $revenue_total_sell_text = 0;

            foreach ($orders as $order) {
                $orderDetails = OrderDetails::where('order_id', $order->id)->get();

                foreach ($orderDetails as $orderDetail) {
                    $revenue += $orderDetail->product_price * $orderDetail->qty;
                    $revenue_purches += $orderDetail->Product->purchase_price * $orderDetail->qty;
                    $revenue_total_sell_item +=  $orderDetail->qty;
                    $revenue_total_sell_text +=  $orderDetail->tax_amount;
                }
            }

            $revenueData[$month] = [
                'month' => $month,
                'revenue' => $revenue,
                'revenue_purches' => $revenue_purches,
                'revenue_total_sell_item' => $revenue_total_sell_item,
                'revenue_total_sell_text' => $revenue_total_sell_text,
                // Add more fields here if needed (e.g., item sold, orders, tax)
            ];
        }

        return view('Server.Analytics.revinue', compact('revenueData'));
    }



    public function AnalyticScript(){

        $data['index'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Server.Analytics.analytics_script',$data);
    }

    public function GooglePixel(Request $request){
        
        $update = GoogleAnalyticsScript::where('id','1')->first();
        $update->pixel_analytics = $request->pixel_analytics;
        $update->save();

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
    }
    public function GoogleTag(Request $request){
        
        $update = GoogleAnalyticsScript::where('id','1')->first();
        $update->google_tag_manager = $request->google_tag_manager;
        $update->save();

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
    }
}

