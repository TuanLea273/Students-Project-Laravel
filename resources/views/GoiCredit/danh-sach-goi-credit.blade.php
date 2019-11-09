@extends('master-page')

<!-- CSS -->
@include('Body.css')
<!-- Page Content -->
@section('page-content')
@if(isset($hienThi))
@if($hienThi == 1)
<h1>Danh sách gói Credit</h1>
@else
<h1>Danh sách gói Credit đã xóa</h1>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if($hienThi == 1)
                <a href="{{route('them-moi-goi-credit')}}" style="margin-bottom: 10px"
                    class="btn btn-info waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i>Thêm mới</a>
                <a href="{{route('danh-sach-goi-credit-da-xoa')}}" style="margin-bottom: 10px;color:black;"
                    class="btn btn-warning waves-effect waves-light">
                    <i class="fas fa-database" style="padding-right:10px"></i>Danh sách gói credit đã xóa</a>
                @endif
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">Tên gói</th>
                            <th style="color:white">Credit</th>
                            <th style="color:white">Số Tiền</th>
                            <th style="color:white"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($hienThi == 1)
                        @foreach($dsGoiCredit as $value)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $value->ten_goi}}</td>
                            <td>{{ $value->credit}} </td>
                            <td>{{ $value->so_tien}}</td>
                            <td>
                                <a href="{{route('chinh-sua-goi-credit',['id' => $value->id]) }}"
                                    class="btn btn-success waves-effect waves-light">
                                    <i class="mdi mdi-pencil color"></i>
                                    Sửa
                                </a>
                                <a href="{{ route('xoa-goi-credit',['id' => $value->id]) }}" class="btn btn-info btn-x"
                                    id="sa-params">
                                    <i class="mdi mdi-trash-can-outline color"></i>Xóa
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($goiCredit as $value)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $value->ten_goi}}</td>
                            <td>{{ $value->credit}} </td>
                            <td>{{ $value->so_tien}}</td>
                            <td>
                                <a href="{{ route('phuc-hoi-goi-credit',['id' => $value->id]) }}"
                                    class="btn btn-success waves-effect waves-light">
                                    <i class="la la-history"></i>
                                    Phục hồi
                                </a>

                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                @if($hienThi == 2)
                <a href="{{route('danh-sach-goi-credit')}}" class="btn btn-info waves-effect waves-light"><i
                        class="mdi mdi-keyboard-return" style="padding-right:10px"></i>Quay lại</a>
                @endif
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
</div>
@endif
@endsection
<!--End Page Content -->
<!-- JS -->
@include('Body.js')