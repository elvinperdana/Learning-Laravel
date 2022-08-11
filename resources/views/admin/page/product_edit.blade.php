@extends('admin.apps')

@section('title',"Admin Page - Edit Product")

@section('meta')
    @include('admin.partial.meta')
@endsection

@section('header')
    @include('admin.partial.header')
@endsection

@section('menu')
    @include('admin.partial.menu')
@endsection

@section('content')
    <!-- Content Menu -->
    <div class="col-lg-9">
        <div class="container mt-5">
            <h2 style="margin-bottom: 40px;">Edit Product</h2>

            <form action="{{route('admin.product.update')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" class="form-control" id="id_product" name="id" value="{{$product->id}}" readonly hidden>

                <div class="mb-3">
                    <label for="ProductNameID" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="ProductNameID" name="product_name" value="{{$product->name}}">
                </div>
                <div class="mb-3">
                    <label for="ProductQuantityID" class="form-label">Product Quantity</label>
                    <input type="number" class="form-control" id="ProductQuantityID" name="quantity" value="{{$product->quantity}}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ProductPriceID">Product Price</label>
                    <div class="row">
                        <div class="col-sm-1">
                            <select name="mata_uang" class="form-select" aria-label="Default select example">
                            <option value="$">$</option>
                            <option value="Rp">Rp</option>
                            </select>
                        </div>
                        <div class="col-sm-11">
                            <input type="number" class="form-control" id="ProductPriceID" name="price"  value="{{$product->price}}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ProductImageID" class="form-label">Product Image</label>
                    <div class = mb-3>
                      <img src="{{ ($product->product_image != null) ? asset($product->product_image) : asset('uploads/example_image/no_image.jpg')}}" style="width: 250px;height: 10vw;object-fit: cover;">
                    </div>
                    <input type="file" class="form-control" id="ProductImageID" name="product_image">
                </div>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
    </div>

@endsection

@section('footer')
    
@endsection

@section('custom-script')

@endsection
