<a class="nav-link icon @if(strpos(Route::currentRouteName(), 'account') !== false ) active @endif"
    href="{{route('account')}}">
    <i class="fa fa-user"></i>Profil Saya
</a>
<a class="nav-link icon @if(strpos(Route::currentRouteName(), 'edit_posting') !== false ) active @endif"
    href="{{route('edit_posting')}}">
    <i class="fa fa-paw"></i>Postingan Hewan
</a>
</a>
<a class="nav-link icon @if(strpos(Route::currentRouteName(), 'posting_blog') !== false ) active @endif"
    href="{{route('posting_blog')}}">
    <i class="fa fa-book"></i>Postingan Blog
</a>
<a class="nav-link icon @if(strpos(Route::currentRouteName(), 'posting_clinic') !== false ) active @endif"
    href="{{route('posting_clinic')}}">
    <i class="fa fa-hospital-o"></i>Postingan Clinic
</a>
<a class="nav-link icon @if(strpos(Route::currentRouteName(), 'alreadyadopt') !== false ) active @endif"
    href="{{route('alreadyadopt')}}">
    <i class="fa fa-check"></i>Menunggu Disetujui
</a>
<a class="nav-link icon @if(strpos(Route::currentRouteName(), 'logout') !== false ) active @endif"
    href="{{route('logout')}}">
    <i class="fa fa-sign-out"></i>Logout
</a>
