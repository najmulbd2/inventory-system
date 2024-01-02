@extends('app.backend.backend_master')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Product /</span> Edit Product</h4>
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header">Product Information<i class='bx bx-loader bx-spin text-primary fw-bold'></i></h5>
                <div class="card-body">
                    <form method="post" action="{{ route('update.product',$editData->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                            <label class="form-label" for="basic-default-fullname">Product Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="basic-default-fullname" value="{{ $editData->name }}" placeholder="Product Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $editData->description }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                            <label class="form-label" for="basic-default-fullname">Quantity<span class="text-danger">*</span></label>
                            <input type="number" name="quantity" class="form-control" id="basic-default-fullname" value="{{ $editData->quantity }}" placeholder="Quantity">
                            @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                            <label class="form-label" for="basic-default-fullname">Cost Price<span class="text-danger">*</span></label>
                            <input type="text" name="cost_price" class="form-control" id="basic-default-fullname" value="{{ $editData->cost_price }}" placeholder="Cost Price">
                            @error('cost_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                            <label class="form-label" for="basic-default-fullname">Regular Price<span class="text-danger">*</span></label>
                            <input type="text" name="regular_price" class="form-control" id="basic-default-fullname" value="{{ $editData->regular_price }}" placeholder="Regular Price">
                            @error('regular_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-md-6 col-sm-12 mb-4">
                            <label class="form-label" for="basic-default-fullname">Sale Price<span class="text-danger">*</span></label>
                            <input type="text" name="sale_price" class="form-control" id="basic-default-fullname" value="{{ $editData->sale_price }}" placeholder="Sale Price">
                            @error('sale_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file"/>
                            <td><div class="avatar avatar-md me-2"><img src="{{  (!empty($editData->image))? url('upload/backend/product_images/'.$editData->image):url('upload/no_image.jpg') }}" alt="Avatar" ></div></td>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12 form-check-success mb-4">
                            <input type="radio" name="status" class="form-check-input" id="allow" value="1" @if($editData->status == 1) checked @endif>
                            <label class="form-check-label" for="allow">Allow</label>
                            <input type="radio" name="status" class="form-check-input" id="not allow" value="0" @if($editData->status == 0) checked @endif>
                            <label class="form-check-label" for="not allow" >Not Allow</label>
                        </div>



                        <div class="col-xl-2 col-md-6 col-sm-12">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

