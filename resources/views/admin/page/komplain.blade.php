@extends('admin.apps')

@section('title',"Admin Page - Complain Customer")

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
<div class="col-lg-9">
        <div class="container mt-5">
            <h2 style="margin-bottom: 20px;">Complain Customer</h2>

            <table id="table_product" class="table table-striped" style="width:100%;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Message</th>
                </tr>
                </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($message as $m)
                        <tr>
                            <td style="vertical-align: middle;">{{ $i }}</td>
                            <td style="vertical-align: middle;">{{ $m->name }}</td>
                            <td style="vertical-align: middle;">{{ $m->email }}</td>
                            <td style="vertical-align: middle;">{{ $m->contact }}</td>
                            <td style="vertical-align: middle;">{{ $m->msg }}</td>
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
