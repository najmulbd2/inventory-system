<?php

namespace App\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Order view method
    public function ViewOrder(){
        $data['allData'] = Order::all();
        return view('app.backend.order.view_order',$data);
    }

    public function OrderDetails($id){
        $data['product'] = Order::where('id',$id)->first();
//        dd($product->toArray());
        return view('app.backend.order.details_order',$data);
    }

    public function StoreApprove(Request $request, $id){

        $product_id = $request->product_id;

        $get_quantity = Order::where('id',$id)->first();
        $per_quantity = $get_quantity->quantity;
        //Start Product quantity update
        $get_product_quantity = Product::where('id',$product_id)->first();
        $product_quantity = $get_product_quantity->quantity;

        $final_quantity = $product_quantity - $per_quantity;

        $product_qty_update = Product::find($product_id);
        $product_qty_update->quantity = $final_quantity;
        $product_qty_update->save();
        //End Product quantity update

        $data = Order::find($id);
        $data->status  = 1;
        $data->save();

        $notification = array(
            'message'    => 'Approved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function StoreReject(Request $request, $id){

        $data = Order::find($id);
        $data->status  = 2;
        $data->save();

        $notification = array(
            'message'    => 'Rejected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


}
