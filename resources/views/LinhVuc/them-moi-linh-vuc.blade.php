
@extends('master-page')

@section('page-content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="header-title"> Thêm Mới Lĩnh Vực </h3>
                <form class="form-horizontal" action="{{route('xu-ly-them-moi-linh-vuc')}}" method="POST" >
                 @csrf
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <input type="text" class="form-control" id="" name="ten_linh_vuc" placeholder="Nhập tên lĩnh vực">
                        </div>
                    </div>

                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" id="btnThem" class="btn btn-primary btn-rounded waves-effect waves-light" value="them-moi">Thêm </button>
                            <a href="{{ route('danh-sach-linh-vuc') }}" class="btn btn-danger btn-rounded waves-effect waves-light">Hủy</a>
                        </div>
                    </div>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>

@endsection