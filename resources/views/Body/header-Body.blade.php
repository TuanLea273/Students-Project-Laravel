<header id="topnav">

    <!-- Topbar Start -->
    @include('Body.topbar-Body')
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="{{route('danh-sach-linh-vuc')}}">
                            <i class="la la-cube" style="color:red"></i>Lĩnh Vực <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('them-moi-linh-vuc')}}">Thêm Lĩnh Vực</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('danh-sach-cau-hoi')}}">
                            <i class=" fas fa-question-circle" style="color:yellow"></i>Câu Hỏi <div class="arrow-down">
                            </div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('them-moi-cau-hoi')}}">Thêm Câu Hỏi</a>
                            </li>

                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('danh-sach-nguoi-choi')}}"> <i class="fas fa-users"
                                style="color:PowderBlue"></i>Người Chơi <div class="arrow-down"></div></a>
                        {{-- <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="">Danh Sách Người Chơi</a>
                                    </li>                   
                                </ul>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('danh-sach-goi-credit') }}">
                            <i class="fe-package" style="color:DarkTurquoise"></i>Gói Credit <div class="arrow-down">
                            </div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('them-moi-goi-credit') }}">Thêm gói credit</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('danh-sach-luot-choi') }}"> <i class="la la-gamepad"
                                style="color:GreenYellow"></i>Lượt Chơi <div class="arrow-down"></div></a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('danh-sach-cau-hinh') }}"> <i class="la la-gamepad"
                                style="color:GreenYellow"></i>Cấu Hình Điểm <div class="arrow-down"></div></a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('danh-sach-app') }}"> <i class="la la-gamepad"
                                style="color:GreenYellow"></i>Cấu Hình App <div class="arrow-down"></div></a>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>