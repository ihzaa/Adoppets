@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1><strong>Daftar Calon Pengadopsi</strong></h1>
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
        <img src="{{asset('user/assets/img/include_image/bg_akunsaya.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-user"></i> Daftar Pengadopsi</h3>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Peminat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['requestList'] as $item)
                                <tr>
                                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y h:i')}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <button class="btn btn-framed btn-danger small btn-rounded btn_detail"
                                            data-1="{{$item->p1}}" data-2="{{$item->p2}}"
                                            data-3="{{$item->p3}}">Detail</button>
                                        <button class="btn btn-framed btn-danger small btn-rounded btn_accept"
                                            data-id="{{$item->id}}">Accept</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="modal_detail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Title</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="row">
                            <div class="col" id="jawaban_1"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12 mb-2">
                        <div class="row">
                            <div class="col-10" id="jawaban_2"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12 mb-2">
                        <div class="row">
                            <div class="col-10" id="jawaban_3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_after')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session::get('icon'))
<script>
    swal({
        icon: "{{Session::get('icon')}}",
        title: "{{Session::get('title')}}",
        text: "{{Session::get('text')}}",
    });
</script>
@endif
<script>
    $(".btn_detail").on('click',function(){
        $("#modal_detail").modal('show');
        $(".modal-backdrop").hide();
        $("#jawaban_1").html('Pertanyaan 1 :\t'+$(this).data("1"))
        $("#jawaban_2").html('Pertanyaan 2 :\t'+$(this).data("2"))
        $("#jawaban_3").html('Pertanyaan 3 :\t'+$(this).data("3"))
    })
    $(".btn_accept").on("click",function(){
        let data = {
            id: $(this).data('id')
        }
        swal({
            title: "Yakin memberikan izin adopsi?",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $("#main_loading").show();
                fetch("{{route('accept.adoption')}}", {
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                        // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: JSON.stringify(data) // body data type must match "Content-Type" header
                }).then((result) => {
                    return result.json()
                }).then((data) => {
                    window.location.replace(data.next);
                })
                .catch((err) => {
                    console.log(err);
                });
            }
        });
    });
</script>
@endsection
