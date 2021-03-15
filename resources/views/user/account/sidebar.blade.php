<a class="nav-link icon @if(Route::currentRouteName() == 'account') active @endif" href="{{route('account')}}">
    <i class="fa fa-user"></i>Profil Saya
</a>
<a class="nav-link icon @if(Route::currentRouteName() == 'edit_posting') active @endif"
    href="{{route('edit_posting')}}">
    <i class="fa fa-paw"></i>Postingan Hewan
</a>
</a>
<a class="nav-link icon @if(Route::currentRouteName() == 'posting_blog') active @endif"
    href="{{route('posting_blog')}}">
    <i class="fa fa-book"></i>Postingan Blog
</a>
<a class="nav-link icon @if(Route::currentRouteName() == 'posting_clinic') active @endif"
    href="{{route('posting_clinic')}}">
    <i class="fa fa-hospital-o"></i>Postingan Clinic
</a>
<a class="nav-link icon @if(Route::currentRouteName() == 'alreadyadopt') active @endif"
    href="{{route('alreadyadopt')}}">
    <i class="fa fa-check"></i>Menunggu Disetujui
</a>
<a class="nav-link icon @if(Route::currentRouteName() == 'logout') active @endif" href="{{route('logout')}}">
    <i class="fa fa-sign-out"></i>Logout
</a>
