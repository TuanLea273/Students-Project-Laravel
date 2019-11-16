@extends('master-page')

<!-- CSS -->
@include('Body.css')
<!-- Page Content -->
@section('page-content')
@if(isset($hienThi))
@if($hienThi == 1)
<h1>Danh sách câu hỏi</h1>
@else
<h1>Danh sách câu hỏi đã xóa</h1>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if($hienThi == 1)
                <a href="{{route('them-moi-cau-hoi')}}" style="margin-bottom: 10px;color:black"
                    class="btn btn-info waves-effect waves-light">
                    <i class="mdi mdi-plus mr-1" style="padding-right:10px"></i>Thêm mới
                </a>
                <a href="{{route('danh-sach-da-xoa-cau-hoi')}}" style="margin-bottom: 10px;color:black;"
                    class="btn btn-warning waves-effect waves-light">
                    <i class="fas fa-database" style="padding-right:10px"></i>Danh sách câu hỏi đã xóa</a>
                @endif
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                             
                            <th style="color:white">ID</th>
                            <th style="color:white">Nội dung câu hỏi</th>
                            <th style="color:white"th>ID lĩnh vực</th>
                            <th style="color:white">Phương án A</th>
                            <th style="color:white">Phương án B</th>
                            <th style="color:white">Phương án C</th>
                            <th style="color:white">Phương án D</th>
                            <th style="color:white">Đáp án</th>
                            <th style="color:white"></th>
                        </tr>
                    </thead>


                    <tbody>
                        @if($hienThi == 1)
                        @foreach($cauHoi as $value)
                        <tr style="font-size: 120%; font-weight: bold;">
                            
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->noi_dung}}</td>
                            <td>{{ $value->linhVuc->ten_linh_vuc }}</td>
                            <td>{{ $value->phuong_an_a }}</td>
                            <td>{{ $value->phuong_an_b }}</td>
                            <td>{{ $value->phuong_an_c }}</td>
                            <td>{{ $value->phuong_an_d }}</td>
                            <td>{{ $value->dap_an }}</td>
                            <td>
                                <a href="{{ route('chinh-sua-cau-hoi',['id' => $value->id]) }}"
                                    class="btn btn-success waves-effect waves-light">
                                    <i class="mdi mdi-pencil color" style="padding-right:5px"></i>
                                    Sửa
                                </a>
                                <a href="{{route('xoa-cau-hoi',['id' => $value->id ])}}"
                                    class="btn btn-danger waves-effect waves-light" style="color:white"><i
                                        class="mdi mdi-trash-can-outline color " style="padding-right:5px"></i>Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($cauHoi as $value)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->noi_dung}}</td>
                            <td>{{ $value->linhVuc->ten_linh_vuc }}</td>
                            <td>{{ $value->phuong_an_a }}</td>
                            <td>{{ $value->phuong_an_b }}</td>
                            <td>{{ $value->phuong_an_c }}</td>
                            <td>{{ $value->phuong_an_d }}</td>
                            <td>{{ $value->dap_an }}</td>
                            <td>
                                <a href="{{ route('phuc-hoi-cau-hoi',['id' => $value->id]) }}"
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
                <a href="{{route('danh-sach-cau-hoi')}}" class="btn btn-info waves-effect waves-light"><i
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