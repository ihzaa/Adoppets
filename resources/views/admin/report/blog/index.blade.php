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
        <h1 class="page-header text-overflow">Data Report Posting Blog</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li><a href="#">Report</a></li>
        <li class="active">Data Report Posting Blog</li>
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
            <h3 class="panel-title">Report Posting Blog</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Judul Postingan</th>
                        <th>Jumlah Laporan</th>
                        <th class="min-tablet">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['reportList'] as $item)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$item->title}}</td>
                        <td>{{$item->total_report}}</td>
                        <td>
                            <button class="btn btn-danger btn-rounded btn_delete" data-id="{{$item->id}}">
                                Hapus
                            </button>
                            <a href=" {{route('report_blog_detail',$item->id)}}" class="btn btn-warning btn-rounded">
                                Detail
                            </a>
                            <button class="btn btn-danger btn-rounded btn_block" data-id="{{$item->id}}">
                                Blokir
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
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


<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(Session::get('icon'))
<script>
    Swal.fire({
        icon: "{{Session::get('icon')}}",
        title: "{{Session::get('title')}}",
        text: "{{Session::get('text')}}",
    });
</script>
@endif

<script>
    const URL = {
        delete : "{{route('admin.delete.report.blog','astaga')}}",
        block : "{{route('admin.block.report.blog','astaga')}}"
    }

    $(".btn_delete").click(function(){
        let id = $(this).data('id')
        Swal.fire({
            icon:"question",
            title: 'Yakin menghapus report?',
            showCancelButton: true,
            confirmButtonText: `Ya, Hapus!`,
            cancelButtonText: `Batal`,
        }).then((result) => {
            if (result.isConfirmed) {
                tmpUrl = URL.delete
                window.location.replace(tmpUrl.replace('astaga',id));
            }
        })

    })

    $(".btn_block").click(function(){
        let id = $(this).data('id')
        Swal.fire({
            icon:"question",
            title: 'Yakin memblokir blog?',
            showCancelButton: true,
            confirmButtonText: `Ya, Blokir!`,
            cancelButtonText: `Batal`,
        }).then((result) => {
            if (result.isConfirmed) {
                tmpUrl = URL.block
                window.location.replace(tmpUrl.replace('astaga',id));
            }
        })
    })
</script>
@endsection
