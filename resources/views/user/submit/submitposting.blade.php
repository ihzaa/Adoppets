@extends('user/master')

@section('include-css')
{{-- data picker --}}

<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

{{-- for maps --}}
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>

{{-- form informasi vaksin --}}
<style>
    .delete {
        background-color: #fd1200;
        border: none;
        color: white;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .add_form_field {
        background-color: #1c97f3;
        border: none;
        color: white;
        padding: 8px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border: 1px solid #186dad;
    }
</style>
@endsection

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="center">
            Submit Hewan Peliharaan Anda untuk Diadopsi
        </h1>
    </div>
    <!--end container-->
</div>
@endsection

@section('nama-hero')

@endsection

@section('brand-logo')
{{asset('user/assets/img/include_image/logo_adoptpets-inverted.png')}}
@endsection

@section('hero-form')

@endsection

@section('background')
@endsection

@section('include-css')
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <form class="form form-submit" action="{{route('post_posting')}}" method="POST" id="submitposting">
            <section>
                <h2>Informasi Pemilik</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="col-form-label required">Your Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="col-form-label required">Your Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone" class="col-form-label required">Your Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                </div>
            </section>
            <!--end basic information-->

            <section>
                <div class="row">
                    <div class="col-md-4">
                        <h2>Jenis Hewan</h2>
                        <div class="form-group">
                            <label for="submit-category" class="col-form-label">Kategori</label>
                            <select class="change-tab" data-change-tab-target="category-tabs" name="submit_category"
                                id="submit-category" data-placeholder="Select Category">
                                <option value="">Pilih Jenis Hewan</option>
                                @foreach ($data as $item)
                                <option @if ($item->id == old("submit_category"))
                                    {{ "selected" }}
                                    @endif value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->

                    <!--end col-md-8-->
                </div>
                <!--end row-->
            </section>
            <!--end category information-->

            <section>
                <h2>Details</h2>
                <div class="form-group">
                    <label for="ras" class="col-form-label">Ras</label>
                    <input name="ras" type="text" class="form-control @error('ras') is-invalid @enderror" id=" ras"
                        placeholder="contoh : persia" required value="">
                </div>

                <div class=" form-group">
                    <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                    <input name="jenis_kelamin" type="text"
                        class="form-control @error('jenis_kelamin') is-invalid @enderror" id=" jenis_kelamin"
                        placeholder="contoh : betina" required value="">
                </div>

                <div class="form-group">
                    <label for="umur" class="col-form-label">Umur</label>
                    <input name="umur" type="text" class="form-control @error('umur') is-invalid @enderror" id=" umur"
                        placeholder="contoh : 1 Tahun" value="{{old('umur')}}">
                </div>

                <div class="form-group">
                    <label for="makanan" class="col-form-label">Makanan</label>
                    <input name="makanan" type="text" class="form-control @error('makanan') is-invalid @enderror" id="
                        makanan" placeholder="contoh : Makanan Kering/Basah" required value="">
                </div>

                <div class="form-group">
                    <label for="warna" class="col-form-label">Warna</label>
                    <textarea name="warna" id="warna" class="form-control @error('warna') is-invalid @enderror" rows="
                        4" placeholder="contoh : abu mix putih" required value=""> </textarea>
                </div>

                <div class="form-group">
                    <label for="kondisi_fisik" class="col-form-label">Kondisi Fisik</label>
                    <textarea name="kondisi_fisik" id="kondisi_fisik"
                        class="form-control @error('kondisi_fisik') is-invalid @enderror" rows=" 4"
                        placeholder="contoh : ada luka dibagian telinga" required value=""></textarea>
                </div>

                <div class="form-group container1">
                    {{-- button tambah vaksin --}}
                    <label for="informasi_vaksin" class="col-form-label">Informasi Vaksin</label><br>
                    <button type="button" class="btn add_form_field btn-info small icon float-left">Tambah
                        Vaksin</i></button>
                    {{-- akhir button tambah vaksin --}}

                    {{-- <input name="informasi_vaksin[]" type="text"
                        class="form-control @error('informasi_vaksin') is-invalid @enderror" id=" informasi_vaksin"
                        placeholder="" value="">
                    <small class="form-text">Masukkan Nama Vaksin</small>
                    <input name="tanggal[]" id="datepicker" type="text"
                        class="form-control @error('tanggal') is-invalid @enderror" id=" tanggal" placeholder=""
                        value="">
                    <small class="form-text">Masukkan Tanggal Vaksin</small> --}}
                </div>

                <!--end form-group-->
            </section>

            <section>
                <h2>Lokasi</h2>
                <!--end row-->
                <div class="form-group">
                    <label for="input-location" class="col-form-label">Detail Lokasi</label>
                    <input name="city" type="text" class="form-control" id="city" placeholder="Location" disabled
                        value="Jakarta">
                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top"
                        title="Find My Position"><i class="fa fa-map-marker"></i></span>
                </div>
                <!--end form-group-->
                <label>Map</label>
                <div id="map" style="width: 100%; height: 480px"></div>
                {{-- <div class="map height-400px" id="map-submit"></div> --}}
                <input name="latitude" type="text" class="form-control" id="latitude" hidden>
                <input name="longitude" type="text" class="form-control" id="longitude" hidden>
            </section>
            <!--end location-->

            <section>
                <h2>Pilih Gambar</h2>
                <div class="file-upload-previews"></div>
                <div class="file-upload">
                    <input type="file" name="files[]" class="file-upload-input with-preview" multiple
                        title="Click to add files" maxlength="10" accept="gif|jpg|png">
                    <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                </div>
            </section>
            <!--end gallery-->

            <section>
                <h2>Informasi Tambahan</h2>
                <h3>Informasi Lain Tentang Hewan<span class="note">(optional)</span></h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-heading-1">
                            <h4 class="panel-title">
                                <div class="form-group">
                                    <textarea name="informasi_lain" id="informasi_lain" class="form-control" rows="4"
                                        placeholder="contoh : kebiasaan kucing suka makan daun"></textarea>
                                </div>
                            </h4>
                        </div>
                        <!--end panel-collapse-->
                    </div>
                    <!--end panel-->
                </div>
                <!--end panel-group-->
            </section>
            <!--end additional informatian-->

            <section class="clearfix">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary large icon float-right">Submit</i></button>
                </div>
            </section>
        </form>
        <!--end form-submit-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection

@section('js_after')
<script src="{{asset('user/assets/js/page/submitpostingan.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
{{-- js datepicker --}}
<script>
    // add form dynamic
    $(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".container1");
    var add_button      = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(wrapper).append('<div><input name="informasi_vaksin[]" type="text" class="form-control @error('informasi_vaksin') is-invalid @enderror" id=" informasi_vaksin" placeholder="" value=""> <small class="form-text">Masukkan Nama Vaksin</small> @error('informasi_vaksin') <div class="alert alert-danger">{{ $message }}</div> @enderror <input name="tanggal[]" id="datepicker" type="text" class="form-control @error('tanggal') is-invalid @enderror" id=" tanggal" placeholder="" value=""/><small class="form-text">Masukkan Tanggal Vaksin</small> <br> @error('tanggal') <div class="alert alert-danger">{{ $message }}</div> @enderror <a href="#" class=" btn small btn-danger delete">Delete</a></div>'); //add input box
        }
  else
  {
  alert('You Reached the limits')
  }
    });

    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>

<script>
    // datepicker
$('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
});
</script>
{{-- end datepicker --}}
@endsection
