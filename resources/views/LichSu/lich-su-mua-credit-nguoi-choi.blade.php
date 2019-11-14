@extends('master-page')

<!-- CSS -->
@include('Body.css')
<!-- Page Content -->
@section('page-content')
@if($hienThi == 1)
<h1>Danh sách lịch sử mua credit</h1>
@else
<h1>Lịch sử mua credit của người chơi</h1>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">ID</th>
                            <th style="color:white">Người chơi</th>
                            <th style="color:white">Tên gói</th>
                            <th style="color:white">Credit</th>
                            <th style="color:white">Số Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($hienThi == 1)
                            @foreach($dsNguoiChoi as $nguoiChoi)
                                @foreach($nguoiChoi->dsGoiCredit as $credit)
                                <tr style="font-size: 120%; font-weight: bold;">
                                    <td>{{ $credit->pivot->id }}</td>
                                    <td>{{ $nguoiChoi->ten_dang_nhap }}</td>
                                    <td>{{ $credit->ten_goi }}</td>
                                    <td>{{ $credit->pivot->credit }}</td>
                                    <td>{{ $credit->pivot->so_tien }}</td>
                                </tr>
                                @endforeach
                            @endforeach
                        @else
                             @foreach($goiCredit as $credit)
                                <tr style="font-size: 120%; font-weight: bold;">
                                    <td>{{ $credit->pivot->id }}</td>
                                    <td>{{ $nguoiChoi->ten_dang_nhap }}</td>
                                    <td>{{ $credit->ten_goi }}</td>
                                    <td>{{ $credit->pivot->credit }}</td>
                                    <td>{{ $credit->pivot->so_tien }}</td>
                                </tr>
                                @endforeach
                        @endif
                        
                    </tbody>
                </table>
                <a href="{{route('danh-sach-nguoi-choi')}}" class="btn btn-info waves-effect waves-light"><i
                        class="mdi mdi-keyboard-return" style="padding-right:10px"></i>Quay lại</a>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
</div>
@endsection
<!--End Page Content -->
<!-- JS -->
@include('Body.js')