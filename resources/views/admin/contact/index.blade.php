@extends('admin/master')

@section('title')
List Report Postingan Blog
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
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                        <th class="min-tablet">Aksi</th>
                    </tr>
                </thead>
                @foreach ($data as $item)
                <tbody>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user[$item->user_id]}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->message}}</td>
                    <td>
                        <form action="{{route('delete_contact', ['id'=>$item->id])}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick=" return ConfirmDelete() "
                                class="btn btn-danger btn-rounded">Hapus</button>
                        </form>
                        <a href="{{route('contact_detail',['id'=>$item->id])}}"
                            class="btn btn-warning btn-rounded">Detail</a>
                    </td>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->

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

{{-- confirm delete --}}
<script>
    function ConfirmDelete() {
    var x = confirm("Are you sure you want to delete?");
    if (x)
    return true;
    else
    return false;
    }
</script>
{{-- akhir confirm delete --}}

@if(Session::get('icon_delete'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal({
        icon: "success",
        title: "{{Session::get('title')}}",
        text: "{{Session::get('text')}}",
    });
</script>
@endif

@endsection
