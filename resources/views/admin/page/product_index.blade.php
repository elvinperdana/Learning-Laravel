@extends('admin.apps')

@section('title',"Admin Page - Master Product")

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
            <h2 style="margin-bottom: 20px;">Master Product</h2>

            <div style="margin-bottom:20px">
                <a href="{{route('admin.product.add')}}" class="d-flex justify-content-end" style="text-decoration:none"><button type="button" class="btn btn-success"><i class="fas fa-add" style="color:white"></i> Add New Product</button></a>
            </div>

            <table id="table_product" class="table table-striped" style="width:100%;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price per Product</th>
                    <th>Product Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($product as $p)
                        <tr>
                            <td style="vertical-align: middle;">{{ $i }}</td>
                            <td style="vertical-align: middle;">{{ $p->name }}</td>
                            <td style="vertical-align: middle;">{{ $p->quantity }}</td>
                            <td style="vertical-align: middle;">@money($p->price)</td>
                            <td style="vertical-align: middle;">
                                <div class="embed-responsive embed-responsive-16by9">    
                                    <img class="card-img-top" src="{{ ($p->product_image != null) ? asset($p->product_image) : asset('uploads/example_image/no_image.jpg') }}" alt="..." style="width: 70%;height: 7vw;object-fit: cover;"/>
                                </div> 
                            </td>
                            <td style="vertical-align: middle;">
                                <a href="{{route('admin.product.edit' , $p->id)}}"><button type="button" class="btn btn-warning"><i class="fas fa-edit" style="color:white"></i></button></a>
                                
                                <button type="submit" class="btn btn-danger" onClick="deleteData('{{$p->id}}','{{$p->name}}')"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
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

        function deleteData(id,name){
            var result = confirm("Are you sure delete product "+name+"?");
            if (result) {
                $.ajax({
                    url: '{{route('admin.product.destroy' , '')}}/'+id,
                    type: 'DELETE',
                    data : {"_token":"{{ csrf_token() }}"},
                    success: function(result) {
                        alert("Delete Successfully");
                        window.location.reload();
                    }
                });
            }

            
        }
    </script>
@endsection
