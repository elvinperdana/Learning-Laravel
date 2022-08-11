@extends('shop.apps')

@section('title',"Shopping Page - Dashboard")

@section('meta')
    @include('shop.partial.meta')
@endsection

@section('header')
    @include('shop.partial.header')
@endsection

@section('menu')
    @include('shop.partial.menu')
@endsection

@section('content')
<div class="container">
    <h1> About Us </h1>
</div>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100 ">
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to Cart</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection

@section('footer')
    
@endsection

@section('custom-script')
    <script>
        $(document).ready(function () {
            $('#table_product').DataTable({
                aLengthMenu: [[25, 50, 75, -1], [25, 50, 75, "Semua"]],
            });
        });
    </script>
@endsection
