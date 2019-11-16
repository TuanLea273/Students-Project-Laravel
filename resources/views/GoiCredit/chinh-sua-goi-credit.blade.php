@extends('master-page')

@section('page-content')

<h1>Chỉnh sửa gói credit </h1>

<div class="row ">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body ">
            
            <form class="form-horizontal" action="{{ route('xl-chinh-sua-goi-credit',['id' => $goiCredit->id]) }}" method="POST">
            @csrf
            @if($errors->any())
<<<<<<< HEAD
                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
=======
                <div class="alert alert-danger bg-danger text-white border-1" role="alert">
>>>>>>> 2959f8959fb38cc77a866ee9fe66fd91cd6bba34
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
                            <label for="exampleInputEmail1">Tên gói credit</label>
                            <input name="txtTenGoiCredit" type="text" class="form-control" placeholder="Nhập tên của gói credit" value="{{ $goiCredit->ten_goi }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Credit</label>
                            <input name="txtCredit" type="text" class="form-control" placeholder="Nhập số credit" value="{{ $goiCredit->credit }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Số tiền</label>
                            <input name="txtSoTien" type="text" class="form-control" placeholder="Nhập số tiền" value="{{ $goiCredit->so_tien }}">
                        </div>
                    </div>
                    <!-- <div class="form-group text-right mb-0"> -->
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Sửa </button>
                            <a href="{{ route('danh-sach-goi-credit')}}"  class="btn btn-danger btn-rounded  waves-effect waves-light">Trở về</a>
                    <!-- </div> -->
                        </div>
                    </div>
                </form>
        
                

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

@endsection