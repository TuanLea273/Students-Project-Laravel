@extends('master-page')
<!-- CSS  -->
<!-- Page Content -->
@section('page-content')
<h1>Danh sách cấu hình app</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">     
                <table id="tech-companies-1-clone" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">ID</th>
                            <th style="color:white">Cơ Hội Sai</th>
                            <th style="color:white">Thời gian trả lời</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if($hienThi == 1) --}}
                        @foreach($cauHinhApp as $danhSachApp)
                        <tr style="font-size: 120%; font-weight: bold;">
                            <td>{{ $danhSachApp->id }}</td>
                            <td>{{ $danhSachApp->co_hoi_sai }}</td>
                            <td>{{ $danhSachApp->thoi_gian_tra_loi }}</td>
                            <td>
                                    <a href="{{route('them-moi-app')}}" class="btn btn-primary waves-effect waves-light "><i class="mdi mdi-plus mr-1"style="padding-right:5px"></i>Thêm mới</a> 
                                <a href="{{ route('chinh-sua-app',['id'=>$danhSachApp->id ])}}"
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
