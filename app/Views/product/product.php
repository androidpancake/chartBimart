<?= $this->extend('layout/template')?>
<?= $this->section('content')?>
    
    <div class="container-fluid p-5 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
        
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                  <img class="card-img img-fluid" src="img/car.jpg" alt="Title">
                </div>
                <div class="row mt-2 align-items-center">
                    <!-- controls -->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-dark fa fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <!-- end controls -->
                    <!-- carousel -->
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <!--Start Slides-->
                        <div class="carousel-inner product-links-wap" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img rounded-1" src="img/car.jpg" alt="Product Image 1">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 2">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 3">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 4">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 5">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 6">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->

                            <!--Third slide-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 7">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 8">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="img/car.jpg" alt="Product Image 9">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.Third slide-->
                        </div>
                        <!--End Slides-->
                    </div>
                    <!-- end carousel -->
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="next">
                            <i class="text-dark fa fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
            <div class="col-lg-7">
                <h1>Mobil</h1>
                <div class="d-flex align-items-center gap-3 ">
                    <p>Brand : </p>
                    <p>Toyota</p>
                    <p>Pajak : </p>
                    <p>PPh22</p>
                    <p>Brand : </p>
                    <p><span class="align-self-center badge border border-primary text-primary">Produk dalam negeri</span></p>
                </div>
                
                <hr class="dotted">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" placeholder="Masukkan jumlah">
                <div class="d-flex justify-content-between mt-3">
                    <p class="fw-bold">Harga</p>
                    <p class="fw-bold">Rp.450.000</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="fw-bold">Total</p>
                    <p class="fw-bold">Rp.450.000</p>
                </div>

                <div class="row d-flex g-1">
                    <div class="col">
                        <button class="btn btn-primary w-100">Tambah ke keranjang</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-primary w-100">Tanya penjual</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-5 py-2 bg-light">
        
        <ul class="nav nav-tabs d-flex justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Detail produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ulasan produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profil UMKM</a>
            </li>
        </ul>
        
        <div class="row mt-2 mx-5">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                <h5 class="card-title fw-bold mb-3">Informasi</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 20%;" class="bg-light">
                                Kategori
                            </th>
                            <td>..</td>
                            <td>..</td>
                        </tr>
                        <tr>
                            <th class="bg-light">TKDN</th>
                            <td>Coba</td>
                            <td>Coba</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Jenis TKDN</th>
                            <td>Coba</td>
                            <td>Coba</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Dokumen TKDN</th>
                            <td>Coba</td>
                            <td>Coba</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Brand</th>
                            <td>Coba</td>
                            <td>Coba</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Berat</th>
                            <td>Coba</td>
                            <td>Coba</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Dimensi</th>
                            <td>Coba</td>
                            <td>Coba</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Min. Pembelian</th>
                            <td>Coba</td>
                            <td>Coba</td>
                        </tr>
                    </tbody>
                </table>
                <h5>Deskripsi</h5>
                <p>Ini adalah deskripsi</p>
                </div>
            </div>
        </div>
    </div>

<?= $this->endsection();?>