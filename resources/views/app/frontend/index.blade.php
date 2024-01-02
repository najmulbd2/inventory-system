@extends('app.frontend.master_frontend')
@section('content')

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Products</span></h2>
    <div class="row px-xl-5">
        @foreach($allData as $value)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{  (!empty($value->image))? url('upload/backend/product_images/'.$value->image):url('upload/no_image.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ route('add.customer',['product_id'=>$value->id,'price'=>$value->sale_price]) }}"><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                    </div>
                </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{ $value->name }}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>৳ {{ $value->sale_price }}</h5><h6 class="text-muted ml-2"><del>৳ {{ $value->regular_price }}</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
