@extends('admin/master')

@section('title')
Detail Data Keluhan Pengguna
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


<!--=================================================-->



<!--Pace - Page Load Progress Par [OPTIONAL]-->
<link href="{{asset('admin/asset/plugins/pace/pace.min.css')}}" rel="stylesheet">
<script src="{{asset('admin/asset/plugins/pace/pace.min.js')}}"></script>


<!--Demo [ DEMONSTRATION ]-->
<link href="{{asset('admin/asset/css/demo/nifty-demo.min.css')}}" rel="stylesheet">



<!--DataTables [ OPTIONAL ]-->
<link href="{{asset('admin/asset/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('admin/asset/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css')}}"
    rel="stylesheet">

@endsection

{{-- judul halaman pada bagian atas halaman --}}
@section('page-head')
<div id="page-head">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Data Keluhan Pengguna</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Data Keluhan Pengguna</li>
        <li class="active">Detail</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->
</div>
@endsection

{{-- content halaman --}}
@section('content')
<div id="page-content">
    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data Keluhan Pengguna</h3>
        </div>
        <div class="panel-body">
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Detail Pesan</h3>
                        </div>
                        <form class="form-horizontal">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4 mar-btm">
                                        <input type="text" class="form-control" value="{{$user[0]->name}}">
                                    </div>
                                    <div class="col-md-4 mar-btm">
                                        <input type="email" class="form-control" value="{{$user[0]->email}}">
                                    </div>
                                    <div class="col-md-4 mar-btm">
                                        <input type="url" class="form-control" value="{{$user[0]->nomor_telpon}}">
                                    </div>
                                </div>
                                <textarea placeholder="Message" rows="13" class="form-control">Subject : {{$data->subject}}
                                    Message : {{$data->message}}</textarea>
                            </div>
                            <div class="panel-footer text-right">
                                <button class="btn btn-info">BACK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

{{-- cutom java script --}}
@section('custom-js')

<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{asset('admin/asset/js/jquery.min.js')}}"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('admin/asset/js/bootstrap.min.js')}}"></script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="{{asset('admin/asset/js/nifty.min.js')}}"></script>




<!--=================================================-->

<!--Demo script [ DEMONSTRATION ]-->
<script src="{{asset('admin/asset/js/demo/nifty-demo.min.js')}}"></script>


<!--DataTables [ OPTIONAL ]-->
<script src="{{asset('admin/asset/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/asset/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin/asset/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}">
</script>


<!--DataTables Sample [ SAMPLE ]-->
<script src="{{asset('admin/asset/js/demo/tables-datatables.js')}}"></script>

@endsection
