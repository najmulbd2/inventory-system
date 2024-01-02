@extends('app.backend.backend_master')
@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Report /</span>Stock Report</h4>
        <div class="row">
            <!-- Website Analytics-->
            <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body pb-2">

                        <div class="table-responsive text-nowrap table-min-height">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Cost Price</th>
                                    <th>Regular Price</th>
                                    <th>Sale Price</th>
                                    <th>Total Sale Price</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach($allData as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td><div class="avatar avatar-md me-2"><img src="{{  (!empty($value->image))? url('upload/backend/product_images/'.$value->image):url('upload/no_image.jpg') }}" alt="Avatar" class="rounded-circle"></div></td>
                                        <td>{{ $value->description }}</td>
                                        <td>{{ $value->quantity }}</td>
                                        <td>{{ number_format($value->cost_price,2) }}</td>
                                        <td>{{ number_format($value->regular_price,2) }}</td>
                                        <td>{{ number_format($value->sale_price,2) }}</td>
                                        <td>
                                            @php
                                            $get_sale_price = \App\Models\Product::where('id',$value->id)->first()->sale_price;
                                            $get_quantity = \App\Models\Product::where('id',$value->id)->first()->quantity;
                                            $total_sale_price = $get_sale_price * $get_quantity;
                                            @endphp

                                            {{ number_format($total_sale_price,2) }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
#
