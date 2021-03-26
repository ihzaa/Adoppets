@extends('admin/master')

@section('title')
Data Kategori Hewan
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
            <button id="demo-bootbox-zoom" class="btn btn-primary"><i class="demo-pli-plus"></i> Add Category</button>
        </div>

        <!-- Modal -->
        <!--Default Bootstrap Modal-->
        <!--===================================================-->
        <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
            aria-hidden="true">
            <div class="modal-dialog animated zoomInDown">
                <div class="modal-content">

                    <!--Modal header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i
                                class="pci-cross pci-circle"></i></button>
                        <h4 class="modal-title">Modal Heading</h4>
                    </div>

                    <!--Modal body-->
                    <div class="modal-body">
                        <p class="text-semibold text-main">Bootstrap Modal Vertical Alignment Center</p>
                        <textarea name="" id="" cols="30"
                            rows="10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae et eum eveniet vel. Cupiditate in est asperiores natus odit perspiciatis. ulfa</textarea>
                        <br>
                        
                        <p class="text-semibold text-main">Popover in a modal</p>
                        <p>This
                            <button class="btn btn-sm btn-warning demo-modal-popover add-popover" data-toggle="popover"
                                data-trigger="focus"
                                data-content="And here's some amazing content. It's very engaging. right?"
                                data-original-title="Popover Title">button</button>
                            should trigger a popover on click.
                        </p>
                        <br>
                        <p class="text-semibold text-main">Tooltips in a modal</p>
                        <p>
                            <a class="btn-link text-bold add-tooltip" href="#" data-original-title="Tooltip">This
                                link</a> and
                            <a class="btn-link text-bold add-tooltip" href="#" data-original-title="Tooltip">that
                                link</a> should have tooltips on hover.
                        </p>
                    </div>

                    <!--Modal footer-->
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End Default Bootstrap Modal-->

        {{-- akhir modal --}}
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-8">
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

                            <tbody>
                                <td class="text-center"></td>
                                <td></td>
                                <td>
                                    <a action="" method="" class="d-inline">
                                        <button type="submit" onclick="  "
                                            class="btn btn-danger btn-rounded">Hapus</button>
                                    </a>
                                </td>
                            </tbody>
                        </table>
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
<script src="{{asset('admin/asset/js/demo/ui-modals.js')}}"></script>


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
