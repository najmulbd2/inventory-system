<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Stock Report view method
    public function ViewStockReport(){
        $data['allData'] = Product::all();
        return view('app.backend.report.view_stock_report',$data);
    }


}
