@extends('master-page')

<!-- CSS -->
@include('Body.css')
<!-- Page Content -->
@section('page-content')
@if(isset($hienThi))
@if($hienThi == 1)
<h1>Danh sách người chơi</h1>
@else
<h1>Danh sách người chơi đã xóa</h1>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if($hienThi == 1)
                <a href="{{route('danh-sach-nguoi-choi-da-xoa')}}" style="margin-bottom: 10px; color:black"
                    class="btn btn-warning waves-effect waves-light">
                    <i class="fas fa-database" style="padding-right:10px"></i> Danh sách người chơi đã xóa</a>
                <a href="{{route('lich-su-mua-credit')}}" style="margin-bottom: 10px;color:black;"
                class="btn btn-warning waves-effect waves-light">
                    <i class="fas fa-database" style="padding-right:10px"></i>Danh sách lịch sử mua credit</a>
                @endif
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">Tên Đăng Nhập</th>
                            <th style="color:white">Email</th>
                            <th style="color:white">Ảnh Đại Diện</th>
                            <th style="color:white">Điểm Cao Nhất</th>
                            <th style="color:white">Credit</th>          
                            <th style="color:white"></th>
                        </tr>
                    </thead>


                    <tbody>
                        @if($hienThi == 1)
                        @foreach($nguoiChoi as $value)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $value->ten_dang_nhap}}</td>
                            <td>{{ $value->email}}</td>
                            <td>{{ $value->hinh_dai_dien}}</td>
                            <td>{{  $value->diem_cao_nhat}}</td>
                            <td>{{      $value->credit}}</td>
                            <td>  
                                <a href="{{ route('them-moi-nguoi-choi') }}"
                                class="btn btn-primary btn-x" id="sa-params">
                                <i class="mdi mdi-pencil color" style="padding-right:5px"></i>Thêm mới
                            </a>
                                <a href="{{ route('chinh-sua-nguoi-choi',['id' => $value->id ]) }}"
                                    class="btn btn-success btn-x" id="sa-params">
                                    <i class="mdi mdi-pencil color" style="padding-right:5px"></i>Chỉnh sửa
                                </a>
                                <a href="{{ route('lich-su-cua-nguoi-choi',['id' => $value->id ]) }}"
                                    class="btn btn-success btn-x" id="sa-params" style="margin-left:5px">
                                    <i class="mdi mdi-history color" style="padding-right:5px"></i>Lịch sử
                                </a>
                                <a href="{{ route('xoa-nguoi-choi',['id' => $value->id ]) }}"
                                    class="btn btn-danger btn-x" id="sa-params"style="margin-left:5px">
                                    <i class="mdi mdi-trash-can-outline color" style="padding-right:5px"></i>Xóa
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($nguoiChoi as $value)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <  <td>{{ $value->ten_dang_nhap}}</td>
                            <td>{{ $value->email}}</td>
                            <td>{{ $value->hinh_dai_dien}}</td>
                            <td>{{  $value->diem_cao_nhat}}</td>
                            <td>{{      $value->credit}}</td>
                        
                            <td>
                                <a href="{{ route('phuc-hoi-nguoi-choi',['id' => $value->id ])  }}"
                                    class="btn btn-success waves-effect waves-light ">
                                    <i class="la la-history" style="padding-right:10px"></i> Phục hồi
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                @if($hienThi == 2)
                <a href="{{route('danh-sach-nguoi-choi')}}" class="btn btn-info waves-effect waves-light"><i
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