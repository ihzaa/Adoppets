@extends('admin/master')

@section('title')
Dashboard
@endsection

{{-- my css --}}
@section('custom-style')

<!--STYLESHEET-->
<!--=================================================-->

<!--Open Sans Font [ OPTIONAL ]-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


<!--Bootstrap Stylesheet [ REQUIRED ]-->
<link href="{{asset('admin/asset/css/bootstrap.min.css')}}" rel="stylesheet">


<!--Nifty Stylesheet [ REQUIRED ]-->
<link href="{{asset('admin/asset/css/nifty.min.css')}}" rel="stylesheet">


<!--Nifty Premium Icon [ DEMONSTRATION ]-->
<link href="{{asset('admin/asset/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">
<link href="premium/icon-sets/icons/line-icons/premium-line-icons.min.css" rel="stylesheet">

<!--=================================================-->


<!--Pace - Page Load Progress Par [OPTIONAL]-->
<link href="{{asset('admin/asset/plugins/pace/pace.min.css')}}" rel="stylesheet">
{{-- <script src="{{asset('admin/asset/plugins/pace/pace.min.js')}}"></script> --}}

<!--Demo [ DEMONSTRATION ]-->
<link href="{{asset('admin/asset/css/demo/nifty-demo.min.css')}}" rel="stylesheet">


<style>
//Large devices (desktops, 992px and up)
/* @media (min-width: 992px) {
        .card-informasi {
            margin-top: 150px
        }
    } */

.panel {
    width: 90px;
    height: 200px;
}
</style>


<!--Font Awesome [ OPTIONAL ]-->
<link href="{{asset('admin/asset/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

@endsection

{{-- judul halaman pada bagian atas halaman --}}
@section('page-head')
<div id="page-head">
    <div class="pad-all text-center">
        <h3>Selamat Datang Admin Pada Halaman Kelola Website Adopt Pets.</h3>
        <p>Berikut Adalah Informasi Umum Website</p>
    </div>
</div>
@endsection

{{-- content halaman --}}
@section('content')
<div class="page-content">

    {{-- card informasi --}}
    <div class="row card-informasi">
        <div class="col-md-3 col-md-offset-3">
            <div class="panel panel-warning panel-colorful media middle pad-all">
                <div class="media-left">
                    <div class="pad-hor">
                        <i class="demo-pli-male-female icon-3x"></i>
                    </div>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold">{{number_format($data['counter']->users,0,"",".")}}</p>
                    <p class="mar-no">Pengguna</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info panel-colorful media middle pad-all">
                <div class="media-left">
                    <div class="pad-hor">
                        <i class="demo-pli-camera-2 icon-3x"></i>
                    </div>
                </div>
                <div class=" media-body">
                    <p class="text-2x mar-no text-semibold">
                        {{number_format($data['counter']->postings,0,"",".")}}</p>
                    <p class="mar-no">Postingan</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-3">
            <div class="panel panel-mint panel-colorful media middle pad-all">
                <div class="media-left">
                    <div class="pad-hor">
                        <i class="demo-pli-speech-bubble-5 icon-3x"></i>
                    </div>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold">{{number_format($data['counter']->blogs,0,"",".")}}</p>
                    <p class="mar-no">Blog</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-danger panel-colorful media middle pad-all">
                <div class="media-left">
                    <div class="pad-hor">
                        <i class="demo-pli-building icon-3x"></i>
                    </div>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold">{{number_format($data['counter']->clinics,0,"",".")}}
                    </p>
                    <p class="mar-no">Clinic</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- akhir card informasi --}}
</div>
@endsection

{{-- cutom java script --}}
@section('custom-js')


<!--jQuery [ REQUIRED ]-->
<script src="{{asset('admin/asset/js/jquery.min.js')}}"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('admin/asset/js/bootstrap.min.js')}}"></script>

<script src="{{asset('admin/asset/plugins/pace/pace.min.js')}}"></script>
<!--NiftyJS [ RECOMMENDED ]-->
<script src="{{asset('admin/asset/js/nifty.min.js')}}"></script>

<!--=================================================-->

<!--Demo script [ DEMONSTRATION ]-->
<script src="{{asset('admin/asset/js/demo/nifty-demo.min.js')}}"></script>


@endsection