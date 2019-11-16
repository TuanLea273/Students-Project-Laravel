@extends('master-page')
@section('page-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
               
                <form action="{{ route('xu-ly-chinh-sua-nguoi-choi', ['id' => $nguoiChoi->id]) }}" method="POST">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <div class="alert alert-danger bg-danger text-white border-1" role="alert">
                        <div class="alert alert-danger bg-danger text-white border-1" role="alert">
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
                    <div class="form-group">
                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="{{ $nguoiChoi->ten_dang_nhap }}">
                    </div>
                    <div class="form-group">
                        <label for="mat_khau">Mật khẩu</label>
                        <input type="password" class="form-control" id="mat_khau" name="mat_khau" value="{{ $nguoiChoi->mat_khau }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"  value="{{ $nguoiChoi->email }}" >
                    </div>
                    <!-- START -->
                    <div class="form-group">
                        <label for="hinh_dai_dien">Hình đại diện</label><br />
                        <input type="file" id="hinh_dai_dien" name="hinh_dai_dien" value="{{ $nguoiChoi->hinh_dai_dien }}">
                    </div>
                    <!-- END -->
    
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật</button>
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
@endsection