@extends('app.frontend.master_frontend')
@section('content')



<!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
            <form method="post" action="{{ route('store.order') }}">
                @csrf
                <div class="bg-light p-30 mb-5">
                <div class="row">
                    <input class="form-control" name="product_id" value="{{ $product_id }}" type="text" hidden="">
                    <input class="form-control" name="price" value="{{ $price }}" type="text" hidden="">
                    <div class="col-md-6 form-group">
                        <label>Your Name</label>
                        <input class="form-control" name="name" type="text" placeholder="John Doe">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="example@email.com">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" name="mobile" type="text" placeholder="017xxxxxxxx">
                        @error('mobile')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address</label>
                        <input class="form-control" name="address" type="text" placeholder="Address">
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
