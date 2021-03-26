@extends('admin/master')

@section('title')
Data Kategori Hewan
@endsection

{{-- my css --}}
@section('custom-style')
<meta name="csrf-token" content="{{ csrf_token() }}">

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

<!--Animate.css [ OPTIONAL ]-->
<link href="{{asset('admin/asset/plugins/animate-css/animate.min.css')}}" rel="stylesheet">

@endsection

{{-- judul halaman pada bagian atas halaman --}}
@section('page-head')
<div id="page-head">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Data Kategori Hewan</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li class="active">Data Kategori Hewan</li>
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
        <div id="demo-custom-toolbar2" class="table-toolbar-left" data-toggle="modal" data-target="#exampleModal">
            <button id="btn_tambah" class="btn btn-primary"><i class="demo-pli-plus"></i> Add Category</button>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            @foreach ($data as $item)
                            <tbody>
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        <form action="{{route('delete_category', ['id'=>$item->id])}}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" onclick=" return ConfirmDelete() "
                                                class="btn btn-danger btn-rounded">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
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


<!--Bootbox Modals [ OPTIONAL ]-->
<script src="{{asset('admin/asset/plugins/bootbox/bootbox.min.js')}}"></script>


<!--Modals [ SAMPLE ]-->
{{-- <script src="{{asset('admin/asset/js/demo/ui-modals.js')}}"></script> --}}


<!--DataTables Sample [ SAMPLE ]-->
<script src="{{asset('admin/asset/js/demo/tables-datatables.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

<script>
    $('#btn_tambah').on('click', function () {
        bootbox.confirm({
            message: `<p class='text-semibold text-main'>Tambah Kategori</p> <input class="form-control" type="text" placeholder="Nama Kategori" id="input_category">`,
            buttons: {
                confirm: {
                    label: "Save"
                }
            },
            callback: function (result) {
                fetch("{{route('admin.add.category')}}", {
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: JSON.stringify({cat:$("#input_category").val()}) // body data type must match "Content-Type" header
            })
            .then(response => {
                    return response.json()
            })
            .then(data => {
                if (data.status != "ok") {
                    swal({
                        icon: "error",
                        title: "Maaf!",
                        text: "Kategori Sudah Ada!",
                    });
                } else {
                    location.reload();
                }
            })
            .catch(err => console.log(err))
            },
            animateIn: 'zoomInDown',
            animateOut: 'zoomOutUp'
        });
    });
</script>

@if(Session::get('icon_delete'))
<script>
    swal({
    icon: "success",
    title: "{{Session::get('title')}}",
    text: "{{Session::get('text')}}",
});
</script>
@endif

@endsection
