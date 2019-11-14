@extends('master-page')

<!-- CSS -->
@include('Body.css')
<!-- Page Content -->
@section('page-content')
<h1>Chi Tiết Lượt Chơi</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                        <tr>
                            <th style="color:white">ID</th>
                            <th style="color:white">Người Chơi </th>
                            <th style="color:white">Câu Hỏi</th>
                            <th style="color:white">Phương Án</th>
                            <th style="color:white">Điểm </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cauHoi as $chiTiet)
                        <tr>
                            <td>{{ $chiTiet->id}}</td>
                            <td>{{ $chiTiet->pivot->luot_choi_id}} </td>
                            <td>{{ $chiTiet->noi_dung}}</td>
                            <td>{{ $chiTiet->pivot->phuong_an}}</td>
                            <td>{{ $chiTiet->pivot->diem}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
</div>
@endsection
<!--End Page Content -->
<!-- JS -->
@include('Body.js')