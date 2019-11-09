@extends('master-page')
<!-- CSS -->
@include('Body.css')
<!-- third party css end -->
<!-- END CSS -->

@section('page-content')
<div class="row">
    <div class="col-12">
        <h1>Danh Sách Lượt Chơi</h1>
        <div class="card">  
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">ID</th>
                            <th style="color:white">Lượt Chơi ID </th>
                            <th style="color:white">Số Câu</th>
                            <th style="color:white">Điểm</th>
                            <th style="color:white"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($luotChoi as $danhSachLuotChoi)
                        <tr>
                            <td>{{$danhSachLuotChoi->id}}</td>
                            <td>{{$danhSachLuotChoi->nguoiChoi->ten_dang_nhap}} </td>
                            <td>{{$danhSachLuotChoi->so_cau}}</td>
                            <td>{{$danhSachLuotChoi->diem}}</td>
                            <td>
                            <a href="{{route('chi-tiet-mot-luot-choi',['id'=>$danhSachLuotChoi->id ])}}"  class="btn btn-success waves-effect waves-light "><i class="mdi mdi-pencil color"></i> Chi Tiết Lượt Chơi</a>
                            </td>
                       </tr>
                    @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection
<!-- JS -->
@include('Body.js')
<!-- END JS -->