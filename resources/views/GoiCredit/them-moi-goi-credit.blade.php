@extends('master-page')

@section('page-content')

<h1>Thêm mới câu hỏi</h1>

<div class="row ">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body ">
            
            <form class="form-horizontal" action="{{ route('xl-them-moi-goi-credit') }}" method="POST">
            @csrf
                    
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <!-- thuộc tính for cho biết
                             Thẻ label được sử dụng cho thẻ input có id="TenGoiCredit" -->
                            <label for="TenGoiCredit">Tên gói credit</label>
                            <input id="TenGoiCredit" name="txtTenGoiCredit" type="text" class="form-control" placeholder="Nhập tên của gói credit">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Credit</label>
                            <input name="txtCredit" type="text" class="form-control" placeholder="Nhập số credit">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-12">
                            <label for="exampleInputEmail1">Số tiền</label>
                            <input name="txtSoTien" type="text" class="form-control" placeholder="Nhập số tiền">
                        </div>
                    </div>
                    <!-- <div class="form-group text-right mb-0"> -->
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Thêm </button>
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