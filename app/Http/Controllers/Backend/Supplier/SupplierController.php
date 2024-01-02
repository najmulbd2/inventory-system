<?php

namespace App\Http\Controllers\Backend\Supplier;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    //Supplier view
    public function ViewSupplier(){
        $data['allData'] = User::where('usertype', 3)->get();
        return view('app.backend.supplier.view_supplier',$data);
    }

    //Supplier add method
    public function AddSupplier(){
        return view('app.backend.supplier.add_supplier');
    }

    //Supplier Store method
    public function StoreSupplier(Request $request){

        $validatedData = $request->validate([
            'name'    => 'required|max:255',
            'mobile'  => 'required|digits:11',
            'address' => 'required'
        ]);


        $data = new User();
        $data->name         = $request->name;
        $data->usertype     = 3;
        $data->email        = $request->email;
        $data->mobile       = $request->mobile;
        $data->organization = $request->organization;
        $data->image        = $request->image;
        $data->address      = $request->address;
        $data->added_by     = Auth::user()->id;


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/backend/supplier_images'),$filename);
            $data['image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Supplier added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }






}
