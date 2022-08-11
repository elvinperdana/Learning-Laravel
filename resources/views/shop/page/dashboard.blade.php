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
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($product as $p)
            <div class="col mb-5">
                <div class="card h-100 ">
                    <div class="embed-responsive embed-responsive-16by9">    
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ ($p->product_image != null) ? asset($p->product_image) : asset('uploads/example_image/no_image.jpg') }}" alt="..." style="width: 100%;height: 10vw;object-fit: cover;"/>
                    </div>  
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $p->title }}</h5>
                            <!-- Product price-->
                            @money($p->price)
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to Cart</a></div>
                    </div>
                </div>
            </div>
            @endforeach
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
