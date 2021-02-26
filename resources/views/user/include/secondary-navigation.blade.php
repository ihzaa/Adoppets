<div class="secondary-navigation">
    <div class="container">
        <!-- <ul class="left">
            <li>
                <span>
                    <i class="fa fa-phone"></i> +1 123 456 789
                </span>
            </li>
        </ul> -->
        <!--end left-->
        <ul class="right">
            @if (Auth::guard('admin')->check())
            <li>
                <a class="nav-link" href="{{route('home_admin')}}">
                    <i class="fa fa-user-plus"></i>Admin
                </a>
            </li>
            @endif

            @if (Auth::guard('admin')->check() ||Auth::guard('user')->check())

            <li>
                <a href="{{route('account')}}">
                    <i class="fa fa-heart"></i>Akun Saya
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <i class="fa fa-sign-out"></i>Logout
                </a>
            </li>
            @else
            <li>
                <a href="{{route('get_login')}}">
                    <i class="fa fa-sign-in"></i>Sign In
                </a>
            </li>
            <li>
                <a href="{{route('register')}}">
                    <i class="fa fa-pencil-square-o"></i>Register
                </a>
            </li>
            @endif
        </ul>
        <!--end right-->
    </div>
    <!--end container-->
</div>