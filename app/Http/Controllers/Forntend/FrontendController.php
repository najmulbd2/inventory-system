<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    //home page view method
    public function Home(){
        $data['allData'] = Product::where('status',1)->get();
        return view('app.frontend.index',$data);
    }


    //add to cart method
    public function AddCustomer(Request $request){

        $data['product_id'] = $request->product_id;
        $data['price'] = $request->price;

        return view('app.frontend.customer.add_customer',$data);
    }

    public function StoreOrder(Request $request){

        $validateData = $request->validate([
            'name'      => 'required|max:255',
            'mobile'    => 'required|digits:11|unique:orders',
            'email'     => 'unique:orders',
            'address'   => 'required',
        ]);

        //dd($request->toArray());
        $data             = new Order();
        $data->name       = $request->name;
        $data->mobile     = $request->mobile;
        $data->quantity   = 1;
        $data->product_id = $request->product_id;
        $data->price      = $request->price;
        $data->email      = $request->email;
        $data->address    = $request->address;
        $data->status     = 0;

        $name     = $request->name;
        $mobile   = $request->mobile;
        $address  = $request->address;

        $get_to_mail = User::where('usertype',1)->first();
        $to_mail = $get_to_mail->email;

        //dd($to_mail);

        $send_mail = $to_mail;
        Mail::to($send_mail)->send(new SendMail($name, $mobile, $address));


        $data->save();

        $notification = array(
            'message'    => 'Your order has been Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);

    }



}
