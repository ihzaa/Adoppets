<div id="mainnav-menu-wrap">
    <div class="nano">
        <div class="nano-content">

            <!--Profile Widget-->
            <!--================================-->
            <div id="mainnav-profile" class="mainnav-profile">
                <div class="profile-wrap text-center">
                    <div class="pad-btm">
                        <img class="img-circle img-md" src="{{asset('admin/asset/img/profile-photos/1.png')}}"
                            alt="Profile Picture">
                    </div>
                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                        <span class="pull-right dropdown-toggle">
                            <i class="dropdown-caret"></i>
                        </span>
                        <p class="mnp-name">{{Auth::guard('admin')->user()->name}}</p>
                        {{-- <span class="mnp-desc">aaron.cha@themeon.net</span> --}}
                    </a>
                </div>
                <div id="profile-nav" class="collapse list-group bg-trans">
                    {{-- <a href="#" class="list-group-item">
                        <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="demo-pli-information icon-lg icon-fw"></i> Help
                    </a> --}}
                    <a href="{{route('logout')}}" class="list-group-item">
                        <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                    </a>
                </div>
            </div>


            <!--Shortcut buttons-->
            <!--================================-->
            <div id="mainnav-shortcut" class="hidden">
                <ul class="list-unstyled shortcut-wrap">
                    <li class="col-xs-3" data-content="My Profile">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                <i class="demo-pli-male"></i>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-3" data-content="Messages">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                <i class="demo-pli-speech-bubble-3"></i>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-3" data-content="Activity">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                <i class="demo-pli-thunder"></i>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-3" data-content="Lock Screen">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                <i class="demo-pli-lock-2"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--================================-->
            <!--End shortcut buttons-->


            <ul id="mainnav-menu" class="list-group">

                <!--Category name-->
                <li class="list-header">Navigation</li>

                <!--Dashboard Menu list item-->
                <li class="@if(strpos(Route::currentRouteName(), 'home_admin') !== false ) active-sub @endif ">
                    <a href="{{route('home_admin')}}">
                        <i class="demo-pli-home"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                {{-- akhir menu dashboard --}}
                <li class=" ">
                    <a href="{{route('pengguna_list')}}">
                        <i class="demo-pli-home"></i>
                        <span class="menu-title">List User</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class="demo-pli-receipt-4 icon-lg"></i>
                        <span class="menu-title">
                            Postingan
                            <span class="pull-right badge badge-warning"></span>
                            <i class="arrow"></i>
                        </span>
                    </a>

                    {{-- submenu --}}
                    <!--Submenu-->
                    <ul class="collapse">
                        <li class="">
                            <a href="{{route('admin_posting_hewan')}}">Posting Hewan</a>
                        </li>
                        <li class="">
                            <a href="{{route('admin_posting_blog')}}">Blog</a>
                        </li>
                        <li class="">
                            <a href="{{route('admin_posting_clinic')}}">Informasi Klinik</a>
                        </li>
                    </ul>
                    {{-- akhir submenu --}}
                </li>
                <!--Menu list item-->
                <li class="sub @if(strpos(Route::currentRouteName(), 'report') !== false ) active-sub active @endif">
                    <a href="#">
                        <i class="demo-pli-receipt-4 icon-lg"></i>
                        <span class="menu-title">
                            Report
                            <span class="pull-right badge badge-warning"></span>
                            <i class="arrow"></i>
                        </span>
                    </a>

                    {{-- submenu --}}
                    <!--Submenu-->
                    <ul class="collapse">
                        <li
                            class="@if(strpos(Route::currentRouteName(), 'report_hewan_') !== false ) active-link @endif">
                            <a href="{{route('report_hewan_list')}}">Posting Hewan</a>
                        </li>
                        <li
                            class="@if(strpos(Route::currentRouteName(), 'report_blog_') !== false ) active-link @endif">
                            <a href="{{route('report_blog_list')}}">Blog</a>
                        </li>
                        <li
                            class="@if(strpos(Route::currentRouteName(), 'report_klinik_') !== false ) active-link @endif">
                            <a href="{{route('report_klinik_list')}}">Informasi Klinik</a>
                        </li>
                    </ul>
                    {{-- akhir submenu --}}
                </li>

                <!--Contact-->
                <li class="">
                    <a href="{{route('contact_list')}}">
                        <i class="demo-pli-mail"></i>
                        <span class="menu-title">Contact</span>
                    </a>
                </li>
                {{-- akhir Contact --}}

                {{-- <li class="list-divider">Contact</li> --}}

                <li class="">
                    <a href="{{route('category_list')}}">
                        <i class="demo-pli-pen-5"></i>
                        <span class="menu-title">Category</span>
                    </a>
                </li>

                <!--End widget-->

        </div>
    </div>
</div>