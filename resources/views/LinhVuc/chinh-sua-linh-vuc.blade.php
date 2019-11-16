@extends('master-page')

@section('page-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 header-title">Chỉnh Sửa Lĩnh Vực</h4>

                <form class="form-horizontal" action="{{ route('xu-ly-chinh-sua-linh-vuc',['id'=>$linhVuc->id])}}" method="POST">
                @csrf
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
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
                            @if(isset($linhVuc))
                            <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" value="{{ $linhVuc->ten_linh_vuc }}" placeholder="Nhập tên lĩnh vực">
                            @else
                            <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" value="" placeholder="Nhập tên lĩnh vực">
                            @endif
                        </div>
                    </div>

                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" id="btnSua" class="btn btn-success btn-rounded waves-effect waves-light">Chỉnh Sửa </button>
                            <a href="{{ route('danh-sach-linh-vuc' )}}"  class="btn btn-danger btn-rounded  waves-effect waves-light">Hủy</a>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
@endsection