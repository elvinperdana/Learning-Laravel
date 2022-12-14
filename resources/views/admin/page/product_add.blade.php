@extends('admin.apps')

@section('title',"Admin Page - Add Product")

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
            <h2 style="margin-bottom: 40px;">Add Product</h2>

            <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="ProductTitleID" class="form-label">Title Book</label>
                    <input type="text" class="form-control" id="ProductTitleID" name="title">
                </div>
                <div class="mb-3">
                    <label for="ProductAuthorID" class="form-label">Author Book</label>
                    <input type="text" class="form-control" id="ProductAuthorID" name="author">
                </div>
                <div class="mb-3">
                    <label for="ProductPublishID" class="form-label">Publish Book</label>
                    <input type="text" class="form-control" id="ProductPublishID" name="publish">
                </div>
                <div class="mb-3">
                    <label for="ProductQuantityID" class="form-label">Product Quantity</label>
                    <input type="number" class="form-control" id="ProductQuantityID" name="quantity">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ProductPriceID">Product Price</label>
                    <input type="number" class="form-control" id="ProductPriceID" name="price">
                </div>
                <div class="mb-3">
                    <label for="ProductImageID" class="form-label">Product Image</label>
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
