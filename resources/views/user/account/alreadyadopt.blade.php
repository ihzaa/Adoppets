@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1><strong>Postingan Telah Teradopsi</strong></h1>
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
        <div class="row">
            <div class="col-md-3">
                <nav class="nav flex-column side-nav">
                    @include('user.account.sidebar')
                </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
                <!--============ Section Title===================================================================-->
                <div class="section-title clearfix">
                    <div class="float-left float-xs-none">
                        <label class="mr-3 align-text-bottom">Sort by: </label>
                        <select name="sorting" id="sorting" class="small width-200px"
                            data-placeholder="Default Sorting">
                            <option value="">Default Sorting</option>
                            <option value="1">Newest First</option>
                            <option value="2">Oldest First</option>
                        </select>

                    </div>
                    <div class="float-right d-xs-none thumbnail-toggle">
                        <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid"
                            data-parent-class="items">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#" class="change-class active" data-change-from-class="grid"
                            data-change-to-class="list" data-parent-class="items">
                            <i class="fa fa-th-list"></i>
                        </a>
                    </div>
                </div>
                <!--============ Items ==========================================================================-->
                <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
                    @foreach ($edit as $item)
                    @php
                    if($item->isAdopted)
                    continue;
                    @endphp
                    <div class="item">

                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="{{route('detail_alreadyadopt', ['id'=>$item->id])}}"
                                        class="tag category">{{$category[$item->category_id]}}</a>
                                    <a href="{{route('detail_alreadyadopt', ['id'=>$item->id])}}"
                                        class="title">{{$item->title}}</a>
                                </h3>
                                <a href="{{route('detail_alreadyadopt', ['id'=>$item->id])}}"
                                    class="image-wrapper background-image">
                                    <img src="{{asset($aset_posting[$item->id])}}" alt="">
                                </a>
                            </div>
                            <h4 class="location">
                                <a href="#">{{$item->lokasi}}</a>
                            </h4>
                            <div class="price">{{$item->ras}}</div>

                            <!--end image-->
                            <div class="additional-info">
                                <ul>
                                    <li>
                                        <aside class="fas fa-calendar-alt"></aside>
                                    </li>
                                </ul>
                            </div>
                            <div class="description">
                                <p>{{$item->kondisi_fisik}}</p>
                            </div>
                            <!-- <div class="admin-controls">
                                <a href="">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>

                                <form action="" method="" class="form-hapus">
                                </form>

                            </div> -->
                            <!--end admin-controls-->

                            <!--end description-->
                            <!--end addition-info-->
                            <a href="{{route('detail_alreadyadopt', ['id'=>$item->id])}}"
                                class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->
                    @endforeach
                </div>
                <!--end items-->
            </div>
            <!--end col-md-9-->
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
