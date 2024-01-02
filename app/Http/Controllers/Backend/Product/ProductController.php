<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //Start of Product view method
    public function ViewProduct(){
        $data['allData'] = Product::all();
        return view('app.backend.product.view_product',$data);
    }
    //End of Product view method

    //Start of Add Product method
    public function AddProduct(){
        return view('app.backend.product.add_product');
    }
    //End of Add Product method

    //Start of Product insert Method
    public function StoreProduct(Request $request){

        $validatedData  = $request->validate([
            'name'              => 'required|max:255|unique:products',
            'description'       => 'max:255',
            'quantity'          => 'required',
            'cost_price'        => 'required',
            'regular_price'     => 'required',
            'sale_price'        => 'required'
        ]);

        ###-----START data insert in User Table-----###
        $data                = new Product();
        $data->name          = $request->name;
        $data->description   = $request->description;
        $data->quantity      = $request->quantity;
        $data->cost_price    = $request->cost_price;
        $data->regular_price = $request->regular_price;
        $data->sale_price    = $request->sale_price;
        $data->status        = 1;
        $data->added_by      = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/backend/product_images'),$filename);
            $data['image'] = $filename;
        }
        $data->save();
        ###-----END data insert in User Table-----###

        $notification = array(
            'message'    => 'Product added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End of Product Insert Method

    //Start of Product Edit Method
    public function EditProduct($id){
        $data['editData'] = Product::find($id);
        return view('app.backend.product.edit_product',$data);
    }
    //End of Product Edit Method

    //Start of Product Update Method
    public function UpdateProduct(Request $request, $id){

        $data = Product::find($id);
        $validatedData  = $request->validate([
            'name'              => 'required|max:255|unique:products,name,'.$data->id,
            'description'       => 'max:255',
            'quantity'          => 'required',
            'cost_price'        => 'required',
            'regular_price'     => 'required',
            'sale_price'        => 'required'
        ]);

        ###-----START data Update in User Table-----###
        $data->name          = $request->name;
        $data->description   = $request->description;
        $data->quantity      = $request->quantity;
        $data->cost_price    = $request->cost_price;
        $data->regular_price = $request->regular_price;
        $data->sale_price    = $request->sale_price;
        $data->status        = $request->status;
        $data->updated_by    = Auth::user()->id;
//        dd($request->image);
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/backend/product_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/backend/product_images'),$filename);
            $data['image'] = $filename;
        }
        $data->save();
        ###-----END data Update in User Table-----###

        $notification = array(
            'message'    => 'Product updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End of Product Update Method

    //Start of Product Remove method
    public function DeleteProduct($id){
        $data = Product::find($id);
        $data->delete();

        $notification = array(
            'message'    => 'Product Removed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }
    //End of Product Remove method






}
