@extends('admin.apps')

@section('title',"Admin Page - Transaction")

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
            <h2 style="margin-bottom: 50px;">TRANSACTION</h2>

            <table id="table_product" class="table table-striped" style="width:100%;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Customer Email</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($transaction as $t)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $t->customer_email }}</td>
                            <td>{{ $t->customer_name }}</td>
                            <td>{{ $t->product_name }}</td>
                            <td>{{ $t->quantity}}</td>
                            <td>{{ $t->quantity*$t->price }}</td>
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
    </script>

@endsection