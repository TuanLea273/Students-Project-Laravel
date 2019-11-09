@extends('master-page')

<!-- CSS  -->
@include('Body.css')
<!-- Page Content -->
@section('page-content')

@if(isset($hienThi))

@if($hienThi == 1)
<h1>Danh sách lĩnh vực</h1>
@else
<h1>Danh sách lĩnh vực đã xóa</h1>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if($hienThi == 1)
                <a href="{{route('them-moi-linh-vuc')}}" style="margin-bottom: 10px ; color:black"
                    class="btn btn-info waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i>Thêm mới</a>
                <a href="{{route('danh-sach-da-xoa-linh-vuc')}}" style="margin-bottom:10px; color:black;"
                    class="btn btn-warning waves-effect waves-light"><i class="fas fa-database"></i>Danh sách lĩnh vực
                    đã xóa</a>
                @endif
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">ID</th>
                            <th style="color:white">Tên Lĩnh Vực</th>
                            <th style="color:white">Tùy Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($hienThi == 1)
                        @foreach($linhVuc as $danhSachLinhVuc)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $danhSachLinhVuc->id }}</td>
                            <td>{{ $danhSachLinhVuc->ten_linh_vuc }}</td>
                            <td>
                                <a href="{{ route('chinh-sua-linh-vuc',['id'=>$danhSachLinhVuc->id ])}}"
                                    class="btn btn-success waves-effect waves-light "><i class="mdi mdi-pencil color  "
                                        style="padding-right:5px"></i>Sửa</a>
                                <a href="{{route('xoa-linh-vuc',['id' => $danhSachLinhVuc -> id ])}}" id="btnXoa"
                                    class="btn btn-danger waves-effect waves-light "><i
                                        class="mdi mdi-trash-can-outline color"></i>Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($linhVuc as $danhSachLinhVuc)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $danhSachLinhVuc->id }}</td>
                            <td>{{ $danhSachLinhVuc->ten_linh_vuc }}</td>
                            <td>
                                <a href="{{ route('phuc-hoi-linh-vuc',['id'=>$danhSachLinhVuc->id ])}}"
                                    class="btn btn-success waves-effect waves-light "><i class=" la la-history"></i>
                                    Phục hồi</a>
                            </td>
                        </tr>

                        @endforeach
                        @endif
                    </tbody>
                </table>
                @if($hienThi == 2)
                <a href="{{route('danh-sach-linh-vuc')}}" class="btn btn-info waves-effect waves-light"><i
                        class="mdi mdi-keyboard-return" style="padding-right:10px"></i>Quay lại</a>
                @endif
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endif
<!-- end row-->
@endsection
<!-- End Pagecontent -->
<!-- JS -->
@include('Body.js')