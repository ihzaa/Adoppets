@extends('admin/master')

@section('title')
Dashboard
@endsection

{{-- my css --}}
@section('custom-style')
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
        <p1>Beriku Adalah Informasi Umum Website</p>
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
                        <i class="demo-ion-ionic icon-5x"></i>
                    </div>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold">241</p>
                    <p class="mar-no">Pengguna</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info panel-colorful media middle pad-all">
                <div class="media-left">
                    <div class="pad-hor">
                        <i class="demo-pli-file-zip icon-3x"></i>
                    </div>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold">241</p>
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
                        <i class="demo-pli-camera-2 icon-3x"></i>
                    </div>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold">241</p>
                    <p class="mar-no">Iklan</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-danger panel-colorful media middle pad-all">
                <div class="media-left">
                    <div class="pad-hor">
                        <i class="demo-pli-video icon-3x"></i>
                    </div>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold">241</p>
                    <p class="mar-no">Report</p>
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

@endsection