@extends('master-page')

@section('page-content')

<h1>Thêm mới câu hỏi</h1>

<div class="row ">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body ">
            
            <form class="form-horizontal" action="{{ route('xu-ly-them-moi-cau-hoi') }}" method="POST">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
             @endif
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Nội dung câu hỏi</label>
                            <input name="noi_dung" type="text" class="form-control" placeholder="Nội dung câu hỏi">
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
                            <label for="exampleInputEmail1">Phương án A</label>
                            <input name="phuong_an_a" type="text" class="form-control" placeholder="Phương án A">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Phương án B</label>
                            <input name="phuong_an_b" type="text" class="form-control" placeholder="Phương án B">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Phương án C</label>
                            <input name="phuong_an_c" type="text" class="form-control" placeholder="Phương án C">
                        </div>  
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Phương án D</label>
                            <input name="phuong_an_d" type="text" class="form-control" placeholder="Phương án D">
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
                    <!-- <div class="form-group text-right mb-0"> -->
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Thêm </button>
                            <a href="{{ route('danh-sach-cau-hoi' )}}"  class="btn btn-danger btn-rounded  waves-effect waves-light">Hủy</a>
                    <!-- </div> -->
                        </div>
                    </div>
                </form>
        
                

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

@endsection