@extends('master-page')
<!-- CSS  -->
<!-- Page Content -->
@section('page-content')
{{-- @if(isset($hienThi))
@if($hienThi == 1) --}}
<h1>Danh sách cấu hình điểm</h1>
{{-- @endif --}}

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">     
                <table id="tech-companies-1-clone" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">ID</th>
                            <th style="color:white">Thứ Tự</th>
                            <th style="color:white">Điểm</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if($hienThi == 1) --}}
                        @foreach($listDiemCauHoi as $danhSachCauHinh)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $danhSachCauHinh->id }}</td>
                            <td>{{ $danhSachCauHinh->thu_tu }}</td>
                            <td>{{ $danhSachCauHinh->diem }}</td>
                            <td>
                                    <a href="{{route('them-moi-cau-hinh')}}" class="btn btn-primary waves-effect waves-light "><i class="mdi mdi-plus mr-1"style="padding-right:5px"></i>Thêm mới</a> 
                                <a href="{{ route('chinh-sua-cau-hinh',['id'=>$danhSachCauHinh->id ])}}"
                                    class="btn btn-success waves-effect waves-light "><i class="mdi mdi-pencil color  "
                                        style="padding-right:5px"></i>Sửa</a> 
                                
                            </td>
                        </tr>
                        @endforeach      
                        {{-- @endif             --}}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
{{-- @endif --}}
<!-- end row-->
@endsection
<!-- End Pagecontent -->
