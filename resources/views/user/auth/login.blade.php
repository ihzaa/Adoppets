@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Sign In</h1>
    </div>
    <!--end container-->
</div>
@endsection

@section('brand-logo')
{{asset('user/assets/img/include_image/logo_adoptpets.png')}}
@endsection

@section('hero-form')

@endsection

@section('background')
<div class="background">
    <div class="background-image">
        <img src="{{asset('user/assets/img/include_image/bg_login.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
<!--end background-->
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
                @endif
                <form class="form clearfix" method="POST" action="{{route('post_login')}}">
                    @csrf
                    <div class="form-group">
                        <label for="username"
                            class="col-form-label required @error('username') is-invalid @enderror">Username</label>
                        <input name=" username" type="text" class="form-control" id="username"
                            placeholder="Your Username" required>
                    </div>
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="password"
                            class="col-form-label required @error('password') is-invalid @enderror">Password</label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Enter Your Password" required>
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->
                    <div class="d-flex justify-content-between align-items-baseline">
                        <label>
                            <input type="checkbox" name="remember" value="1">
                            Remember Me
                        </label>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
                <hr>
                <p>
                    Don't have an account? <a href="{{route('register')}}" class="link">Click here.</a>
                </p>
            </div>
            <!--end col-md-6-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection

@section('js_after')
@if(Session::get('icon'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal({
        icon: "{{Session::get('icon')}}",
        title: "{{Session::get('title')}}",
        text: "{{Session::get('text')}}",
    });
</script>
@endif

@endsection
