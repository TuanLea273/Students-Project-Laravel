@extends('master-page')

<!-- CSS -->
@include('Body.css')
<!-- Page Content -->
@section('page-content')
<h1>Lịch sử mua credit</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">Lượt mua</th>
                            <th style="color:white">Người chơi</th>
                            <th style="color:white">Tên gói</th>
                            <th style="color:white">Credit</th>
                            <th style="color:white">Số Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($dsNguoiChoi as $nguoiChoi)
                            @foreach($nguoiChoi->dsGoiCredit as $credit)
                            <tr style="font-size: 120%; font-weight: bold;">
                                <td>{{ $dem = $dem + 1 }}</td>
                                <td>{{ $nguoiChoi->ten_dang_nhap }}</td>
                                <td>{{ $credit->ten_goi }}</td>
                                <td>{{ $credit->credit }}</td>
                                <td>{{ $credit->so_tien }}</td>
                            </tr>
                            @endforeach
                        @endforeach
                        
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