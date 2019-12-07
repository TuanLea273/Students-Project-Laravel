@extends('master-page')

@section('page-content')

<h1>Thêm mới cấu hình</h1>

<div class="row ">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body ">
            
            <form class="form-horizontal" action="{{ route('xu-ly-them-moi-cau-hinh') }}" method="POST">
            @csrf     
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Thứ tự</label>
                            <input name="thu_tu" type="text" class="form-control" placeholder="Thứ tự" class="@error('thu_tu') is-invalid @enderror">
                         @error('thu_tu')
                         <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{$message}}
                         </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Điểm</label>
                            <input name="diem" type="text" class="form-control" placeholder="Điểm" class="@error('diem') is-invalid @enderror">
                            @error('diem')
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>{{$message}}</div>  
                            @enderror
                        </div>
                    </div>
                   
            
                    <!-- <div class="form-group text-right mb-0"> -->
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Thêm </button>
                            <a href="{{ route('danh-sach-cau-hinh' )}}"  class="btn btn-danger btn-rounded  waves-effect waves-light">Hủy</a>
                    <!-- </div> -->
                        </div>
                    </div>
                </form>      
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

@endsection