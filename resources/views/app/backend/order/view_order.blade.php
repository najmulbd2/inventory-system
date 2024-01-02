@extends('app.backend.backend_master')
@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Order /</span>Order List</h4>
        <div class="row">
            <!-- Website Analytics-->
            <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Order List<i class='bx bx-loader bx-spin text-primary fw-bold'></i></h5>
                        <a href="#" class="btn btn-outline-info d-none">Add Product</a>
                    </div>

                    <div class="card-body pb-2">

                        <div class="table-responsive text-nowrap table-min-height">
                            <label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Customer Name</th>
                                    <th>Mobile</th>
                                    <th>Product Name</th>
                                    <th>Status</th>
                                    {{--                                    <th>Added By</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach($allData as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->mobile }}</td>
                                        <td>{{ $value['products']['name'] }}</td>
                                        <td>@if($value->status == 0)<span class="badge bg-warning">Pending</span>@elseif($value->status == 1)<span class="badge bg-success">Approved</span>@elseif($value->status == 2)<span class="badge bg-danger">Rejected</span> @endif</td>
                                        {{--                                        <td>{{ ($value->added_by == 1)? "Admin" : (($value->added_by == 2)? "Employee" : "Others") }}</td>--}}
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('order.details',$value->id) }}"><i class="bx bxs-eyedropper me-1"></i> Details</a>
                                                </div>
                                            </div>
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
