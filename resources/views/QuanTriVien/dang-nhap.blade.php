 <!-- App css -->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

<body class="authentication-bg authentication-bg-pattern">
<div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="26"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <h5 class="auth-title">Đăng Nhập</h5>

                                <form action="{{ route('xu-ly-dang-nhap') }}" method="POST">
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
                                @elseif(isset($mess))
                                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                   <p>{{$mess}}</p>
                                </div>
                                 @endif
                                    <div class="form-group mb-3">
                                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                                        <input name="ten_dang_nhap" id="ten_dang_nhap" class="form-control" type="text"  placeholder="Nhập tên đăng nhập">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Mật khẩu </label>
                                        <input name="mat_khau" id="mat_khau" class="form-control" type="password"   placeholder="Nhập mật khẩu ">
                                    </div>
                              

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit">Đăng nhập </button>
                                    </div>

                                </form>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Đăng nhập với</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Quên mật khẩu?</a></p>
                                <p class="text-muted">Bạn không có tài khoản? <a href="pages-register.html" class="text-muted ml-1"><b class="font-weight-semibold">Đăng kí</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
</body>
 <!-- Vendor js -->
 <script src="{{asset('assets/js/vendor.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.min.js')}}"></script>
@include('sweetalert::alert')