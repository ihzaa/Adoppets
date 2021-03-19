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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-user"></i> Profile Pengguna</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td width="10">:</td>
                                    <td>{{$data['user']->name}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekarang</td>
                                    <td>:</td>
                                    <td>{{$data['user']->alamat_asal}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Domisili</td>
                                    <td>:</td>
                                    <td>{{$data['user']->domisili_sekarang}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{$data['user']->email}}</td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td>{{$data['user']->nomor_telpon}}</td>
                                </tr>
                                <tr>
                                    <td>No Whatsapp</td>
                                    <td>:</td>
                                    <td>{{$data['user']->no_wa}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-user"></i> Alasan Mengadopsi</h3>
                    </div>
                    <div class="card-body">
                        <p>pernahkah anda memelihara hewan?</p>
                        <p>{{$data['adoptInfo']->pertanyaan_1}}</p>
                    </div>
                    <div class="card-body">
                        <p>jika pernah hewan apakah itu?</p>
                        <p>{{$data['adoptInfo']->pertanyaan_2}}</p>
                    </div>
                    <div class="card-body">
                        <p>Deskripsikan alasan ingin mnegadopsi hewan ini</p>
                        <p>{{$data['adoptInfo']->pertanyaan_3}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-history"></i> Riwayat Pengguna</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>Gambar</th> -->
                                    <th>Tanggal</th>
                                    <th>Hewan</th>
                                    {{-- <th>Status</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data['history']) == 0)
                                <tr>
                                    <td colspan="2" class="text-center"><strong>User Belum Memiliki Riwayat
                                            Adopsi.</strong></td>
                                </tr>
                                @endif
                                @foreach ($data['history'] as $item)
                                <tr>
                                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('d.m.Y')}}</td>
                                    <td>{{$item->hewan}}</td>
                                    {{-- <td>{{$item->status == 0 ? 'Menunggu' : 'Diadopsi'}}</td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <section class="clearfix">
                    <div class="form-group">
                        <a href="{{route('detail_alreadyadopt',['id'=>$data['posting_id']])}}"
                            class="btn btn-info large icon float-right">Back</i></a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
