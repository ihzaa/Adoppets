@extends('user/master')

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="center">
            ini submmit
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
<div class="background">
    <div class="background-image">
        <img src="{{asset('user/assets/img/include_image/bg_landingpage.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <form class="form form-submit">
            <section>
                <h2>Informasi Pemilik</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="col-form-label required">Your Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="col-form-label required">Your Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email"
                                required>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone" class="col-form-label required">Your Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone"
                                required>
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
                        <h2>Kategori Hewan</h2>
                        <div class="form-group">
                            <label for="submit-category" class="col-form-label">Kategori</label>
                            <select class="change-tab" data-change-tab-target="category-tabs" name="submit_category"
                                id="submit-category" data-placeholder="Select Category">
                                <option value="">Pilih Kategori</option>
                                <option value="computers">Anjing</option>
                                <option value="real_estate">Kucing</option>
                                <option value="cars_motorcycles">Ular</option>
                                <option value="furniture">Hamster</option>
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-8">
                        <h2>Features</h2>
                        <div class="form-slides" id="category-tabs">
                            <div class="form-slide default">
                                <h3>Please Select a Category</h3>
                            </div>
                            <div class="form-slide" id="computers">
                                <h3>Computers</h3>
                                <figure class="category-icon">
                                    <img src="assets/icons/computer.png" alt="">
                                </figure>
                                <!--end category-icon-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="computers___processor" class="col-form-label">Processor</label>
                                            <select name="computers___processor" id="computers___processor"
                                                data-placeholder="Select Processor">
                                                <option value="">Select Processor</option>
                                                <option value="1">Intel Core i5</option>
                                                <option value="2">Intel Core i7</option>
                                                <option value="3">AMD FX-8300</option>
                                                <option value="4">AMD Ryzen</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="computers___frequency" class="col-form-label">Frequency</label>
                                            <input name="computers___frequency" type="text" class="form-control"
                                                id="computers___frequency">
                                            <span class="input-group-addon">GHz</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="computers___cores" class="col-form-label">Cores</label>
                                            <input name="computers___cores" type="text" class="form-control"
                                                id="computers___cores">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="computers___ram" class="col-form-label">RAM</label>
                                            <input name="computers___ram" type="text" class="form-control"
                                                id="computers___ram">
                                            <span class="input-group-addon">GB</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="computers___main_board" class="col-form-label">Main
                                                Board</label>
                                            <input name="computers___main_board" type="text" class="form-control"
                                                id="computers___main_board">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="computers___os" class="col-form-label">OS</label>
                                            <select name="computers___os" id="computers___os"
                                                data-placeholder="Select OS">
                                                <option value="">Select OS</option>
                                                <option value="1">Windows 10</option>
                                                <option value="2">Windows 7</option>
                                                <option value="3">Mac OS</option>
                                                <option value="4">Linux</option>
                                                <option value="5">No OS</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="computers___other_details" class="col-form-label">Other Details</label>
                                    <textarea name="computers___other_details" id="computers___other_details"
                                        class="form-control" rows="4"></textarea>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end computers.form-slide-->

                            <div class="form-slide" id="real_estate">
                                <h3>Real Estate</h3>
                                <figure class="category-icon">
                                    <img src="assets/icons/real-estate.png" alt="">
                                </figure>
                                <!--end category-icon-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="real_estate___type" class="col-form-label">Property Type</label>
                                            <select name="real_estate___type" id="real_estate___type"
                                                data-placeholder="Property Type">
                                                <option value="">Property Type</option>
                                                <option value="1">Apartment</option>
                                                <option value="2">Condominium</option>
                                                <option value="3">Cabin</option>
                                                <option value="4">House</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="real_estate___status" class="col-form-label">Status</label>
                                            <select name="real_estate___status" id="real_estate___status"
                                                data-placeholder="Status">
                                                <option value="">Status</option>
                                                <option value="1">Sale</option>
                                                <option value="2">Rent</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="real_estate___area" class="col-form-label">Area</label>
                                            <input name="real_estate___area" type="text" class="form-control"
                                                id="real_estate___area">
                                            <span class="input-group-addon">m<sup>2</sup></span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="real_estate___bedrooms" class="col-form-label">Bedrooms</label>
                                            <input name="real_estate___bedrooms" type="text" class="form-control"
                                                id="real_estate___bedrooms">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="real_estate___bathrooms"
                                                class="col-form-label">Bathrooms</label>
                                            <input name="real_estate___bathrooms" type="text" class="form-control"
                                                id="real_estate___bathrooms">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->

                                <h4>Property Features</h4>
                                <ul class="list-unstyled columns-2">
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="1">
                                            Air conditioning
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="2">
                                            Heating
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="3">
                                            Terrace
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="4">
                                            Balcony
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="5">
                                            Garage
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="6">
                                            Central Heating
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="7">
                                            Laundry Room
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="real_estate___features[]" value="8">
                                            Alarm
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!--end real_estate.form-slide-->

                            <div class="form-slide" id="cars_motorcycles">
                                <h3>Cars & Motorcycles</h3>
                                <figure class="category-icon">
                                    <img src="assets/icons/car.png" alt="">
                                </figure>
                                <!--end category-icon-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cars_motorcycles___type" class="col-form-label">Vehicle
                                                Type</label>
                                            <select name="cars_motorcycles___type" id="cars_motorcycles___type"
                                                data-placeholder="Vehicle Type">
                                                <option value="">Vehicle Type</option>
                                                <option value="1">Car</option>
                                                <option value="2">Motorcycle</option>
                                                <option value="3">Truck</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cars_motorcycles___status" class="col-form-label">Status</label>
                                            <select name="cars_motorcycles___status" id="cars_motorcycles___status"
                                                data-placeholder="Status">
                                                <option value="">Status</option>
                                                <option value="1">New</option>
                                                <option value="2">Used</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cars_motorcycles___brand" class="col-form-label">Vehicle
                                                Type</label>
                                            <select name="cars_motorcycles___brand" id="cars_motorcycles___brand"
                                                data-placeholder="Brand">
                                                <option value="">Brand</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BWM</option>
                                                <option value="3">GMC</option>
                                                <option value="4">Ford</option>
                                                <option value="5">Toyota</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cars_motorcycles___model" class="col-form-label">Model</label>
                                            <select name="cars_motorcycles___model" id="cars_motorcycles___model"
                                                data-placeholder="Model">
                                                <option value="">Model</option>
                                                <option value="1">Focus</option>
                                                <option value="2">Ranger</option>
                                                <option value="3">Mustang</option>
                                                <option value="4">Edge</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cars_motorcycles___year" class="col-form-label">Year</label>
                                            <input name="cars_motorcycles___year" type="text" class="form-control"
                                                id="cars_motorcycles___year">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->

                            </div>
                            <!--end cars.form-slide-->

                            <div class="form-slide" id="furniture">
                                <h3>Furniture</h3>
                                <figure class="category-icon">
                                    <img src="assets/icons/furniture.png" alt="">
                                </figure>
                                <!--end category-icon-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="furniture___type" class="col-form-label">Type</label>
                                            <select name="furniture___type" id="furniture___type"
                                                data-placeholder="Type">
                                                <option value="">Type</option>
                                                <option value="1">Bed</option>
                                                <option value="2">Wardrobe</option>
                                                <option value="3">Table</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="furniture___status" class="col-form-label">Status</label>
                                            <select name="furniture___status" id="furniture___status"
                                                data-placeholder="Status">
                                                <option value="">Status</option>
                                                <option value="1">New</option>
                                                <option value="2">Used</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="furniture___material" class="col-form-label">Material</label>
                                            <select name="furniture___material" id="furniture___material"
                                                data-placeholder="Material">
                                                <option value="">Material</option>
                                                <option value="1">Wood</option>
                                                <option value="2">Leather</option>
                                                <option value="2">Metal</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->

                                <h4>Size & Weigth</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="furniture___length" class="col-form-label">Length</label>
                                            <input name="furniture___length" type="text" class="form-control"
                                                id="furniture___length">
                                            <span class="input-group-addon">mm</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="furniture___width" class="col-form-label">Width</label>
                                            <input name="furniture___width" type="text" class="form-control"
                                                id="furniture___width">
                                            <span class="input-group-addon">mm</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="furniture___height" class="col-form-label">Height</label>
                                            <input name="furniture___height" type="text" class="form-control"
                                                id="furniture___height">
                                            <span class="input-group-addon">mm</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="furniture___weight" class="col-form-label">Weight</label>
                                            <input name="furniture___weight" type="text" class="form-control"
                                                id="furniture___weight">
                                            <span class="input-group-addon">kg</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end furniture.form-slide-->
                        </div>
                        <!--end form-slides-->
                    </div>
                    <!--end col-md-8-->
                </div>
                <!--end row-->
            </section>

            <section>
                <h2>Details</h2>
                <div class="form-group">
                    <label for="ras" class="col-form-label">Ras</label>
                    <input name="ras" type="text" class="form-control" id="ras" placeholder="contoh : persia">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                    <input name="jk" type="text" class="form-control" id="jk" placeholder="contoh : betina">
                </div>

                <div class="form-group">
                    <label for="umur" class="col-form-label">Umur</label>
                    <input name="umur" type="text" class="form-control" id="umur" placeholder="contoh : 1 Tahun">
                </div>

                <div class="form-group">
                    <label for="makanan" class="col-form-label">Makanan</label>
                    <input name="makanan" type="text" class="form-control" id="makanan"
                        placeholder="contoh : Makanan Kering/Basah">
                </div>

                <div class="form-group">
                    <label for="warna" class="col-form-label">Warna</label>
                    <textarea name="warna" id="warna" class="form-control" rows="4"
                        placeholder="contoh : abu mix putih"></textarea>
                </div>

                <div class="form-group">
                    <label for="kodisi_fisik" class="col-form-label">Kondisi Fisik</label>
                    <textarea name="kodisi_fisik" id="kodisi_fisik" class="form-control" rows="4"
                        placeholder="contoh : ada luka dibagian telinga"></textarea>
                </div>

                <div class="form-group">
                    <label for="kodisi_fisik" class="col-form-label">Informasi Vaksin</label>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal Vaksin</th>
                                <th>Jenis Vaksin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>25-02-2021</td>
                            <td>Vaksin Rabies</td>
                        </tbody>
                    </table>
                </div>

                <!--end form-group-->
            </section>

            <section>
                <h2>Lokasi</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city" class="col-form-label required">Provinsi</label>
                            <select name="city" id="city" data-placeholder="Select City" required>
                                <option value="">Provinsi</option>
                                <option value="1">London</option>
                                <option value="2">New York</option>
                                <option value="3">Paris</option>
                                <option value="4">Moscow</option>
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="district" class="col-form-label required">Kota</label>
                            <select name="district" id="district" data-placeholder="Select District" required>
                                <option value="">Kota</option>
                                <option value="1">Manhattan</option>
                                <option value="2">Brooklyn</option>
                                <option value="3">Queens</option>
                                <option value="4">The Bronx</option>
                                <option value="5">Staten Island</option>
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
                <div class="form-group">
                    <label for="input-location" class="col-form-label">Detail Lokasi</label>
                    <input name="location" type="text" class="form-control" id="input-location"
                        placeholder="Enter Location">
                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top"
                        title="Find My Position"><i class="fa fa-map-marker"></i></span>
                </div>
                <!--end form-group-->
                <label>Map</label>
                <div class="map height-400px" id="map-submit"></div>
                <input name="latitude" type="text" class="form-control" id="latitude" hidden>
                <input name="longitude" type="text" class="form-control" id="longitude" hidden>
            </section>

            <section>
                <h2>Pilih Gambar</h2>
                <div class="file-upload-previews"></div>
                <div class="file-upload">
                    <input type="file" name="files[]" class="file-upload-input with-preview" multiple
                        title="Click to add files" maxlength="10" accept="gif|jpg|png">
                    <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                </div>
            </section>

            <section>
                <h2>Informasi Tambahan</h2>
                <h3>Informasi Lain Tentang Hewan<span class="note">(optional)</span></h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-heading-1">
                            <h4 class="panel-title">
                                <div class="form-group">
                                    <textarea name="info_lain" id="info_lain" class="form-control" rows="4"
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

            <section class="clearfix">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary large icon float-right">Preview<i
                            class="fa fa-chevron-right"></i></button>
                </div>
            </section>
        </form>
        <!--end form-submit-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection