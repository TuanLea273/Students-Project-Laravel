@extends('master-page')

@section('page-content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 header-title">Chỉnh Sửa Câu Hỏi</h4>

                <form class="form-horizontal" action="{{ route('xu-ly-chinh-sua-cau-hoi',['id' => $cauHoi->id]) }}" method="POST">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                    <div class="form-group row mb-3">
                        <div class="col-12">
                        	<label for="exampleInputEmail1">Nội dung câu hỏi</label>
                            <input name="noi_dung" type="text" class="form-control"  value="{{ $cauHoi->noi_dung }}" placeholder="Nhập nội dung">
                        </div>
                    </div>  
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Lĩnh vực ID:</label>
                            <!-- <dd>   -->
                            <select name="linh_vuc_id">
                            @foreach($getLinhVucID as $value) 
                            <option value="{{ $value->id }}">{{$value->ten_linh_vuc}}</option> 
                            @endforeach
                            </select>
                            <!-- </dd> -->
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                        	<label for="exampleInputEmail1">Phương án a</label>
                            <input name="phuong_an_a" type="text" class="form-control"  value="{{ $cauHoi->phuong_an_a }}" placeholder="Nhập phương án a">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                        	<label for="exampleInputEmail1">Phương án b</label>
                            <input name="phuong_an_b" type="text" class="form-control"  value="{{ $cauHoi->phuong_an_b }}" placeholder="Nhập phương án b">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                        	<label for="exampleInputEmail1">Phương án c</label>
                            <input name="phuong_an_c" type="text" class="form-control"  value="{{ $cauHoi->phuong_an_c }}" placeholder="Nhập phương án c">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                        	<label for="exampleInputEmail1">Phương án d</label>
                            <input name="phuong_an_d" type="text" class="form-control"  value="{{ $cauHoi->phuong_an_d }}" placeholder="Nhập phương án d">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Đáp án:</label>
                            <select name="dap_an">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                            </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Chỉnh Sửa </button>
                            <a href="{{ route('danh-sach-cau-hoi' )}}"  class="btn btn-danger btn-rounded  waves-effect waves-light">Trở về</a>
                        </div>
                    </div>
                    
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endsection