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
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekarang</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alamat Domisili</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>No Whatsapp</td>
                                    <td>:</td>
                                    <td></td>
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
                        <h3>pernahkah anda memelihara hewan?</h3>
                        <p></p>
                    </div>
                    <div class="card-body">
                        <h3></i>jika pernah hewan apakah itu?</h3>
                        <p></p>
                    </div>
                    <div class="card-body">
                        <h3>Deskripsikan alasan ingin mnegadopsi hewan ini</h3>
                        <p></p>
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
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <section class="clearfix">
                    <div class="form-group">
                        <button type="submit" class="btn btn-info large icon float-right">Back</i></button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection