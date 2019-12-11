@extends('master-page')

@section('page-content')

<h1>Chỉnh sửa cấu hình app</h1>

<div class="row ">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body ">
            
            <form class="form-horizontal" action="{{ route('xu-ly-chinh-sua-app',['id'=>$cauHinhApp->id]) }}" method="POST">
            @csrf     
                    <div class="form-group row mb-3">
                            @error('co_hoi_sai')
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">×</span>
                               </button>
                               {{$message}}
                            </div>
                               @enderror
                        <div class="col-12">
                            <label for="exampleInputEmail1">Cơ hội sai</label>
                        <input name="co_hoi_sai" type="text" class="form-control" placeholder="Cơ hội sai" value={{$cauHinhApp->co_hoi_sai}} class="@error('co_hoi_sai') is-invalid @enderror">
                        
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                            @error('thoi_gian_tra_loi')
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>{{$message}}</div>  
                            @enderror
                        <div class="col-12">
                            <label for="exampleInputEmail1">Thời gian trả lời</label>
                            <input name="thoi_gian_tra_loi" type="text" class="form-control" placeholder="Thời gian trả lời" value={{$cauHinhApp->thoi_gian_tra_loi}} class="@error('thoi_gian_tra_loi') is-invalid @enderror">
                           
                        </div>
                    </div>
                   
            
                    <!-- <div class="form-group text-right mb-0"> -->
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Thêm </button>
                            <a href="{{ route('danh-sach-app' )}}"  class="btn btn-danger btn-rounded  waves-effect waves-light">Hủy</a>
                    <!-- </div> -->
                        </div>
                    </div>
                </form>      
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

@endsection