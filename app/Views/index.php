<?=$this->extend('layout/template')?>

<?=$this->section('content')?>
    <!-- jumbotron -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/service_slide2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img/service_slide2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img/service_slide2.jpg" alt="Third slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="img/service_slide2.jpg" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->

    <!-- carousel -->
    <div class="container mt-4">
        <h5 class="text-darkblue"><i class="bi bi-border-all text-darkblue me-2"></i>Kategori</h5>        
        <div class="container p-5">
            <div class="d-flex gap-4">
                <div class="d-grid">
                    <a href="../item.html" class="text-decoration-none">
                        <div class="rounded-circle p-4 bg-light">
                            <i class="fa fa-shopping-basket fa-3x text-black"></i>
                        </div>
                        <p class="text-center mt-2">Coba</p>
                    </a>
                    <div class="rounded-circle p-4 bg-light">
                        <i class="fa fa-shopping-basket fa-3x text-black"></i>
                    </div>
                </div>
                <div class="d-grid">
                    <div>
                        <div class="rounded-circle p-4 bg-light">
                            <i class="fa fa-shopping-basket fa-3x text-black"></i>
                        </div>
                        <p class="text-center text-white mt-2">COba</p>
                    </div>
                    <div class="rounded-circle p-4 bg-light">
                        <i class="fa fa-shopping-basket fa-3x text-black"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end carousel -->
    <!-- product -->
    <div class="container mt-2">
        <div class="row">
            <h5><i class="bi bi-bag text-darkblue me-2"></i>Produk terbaru</h5>
            <!-- produk -->
            <div class="col mt-4">
                <div class="row g-2">
                    <div class="col-md-2 col-xs-6">
                        <a class="card shadow-sm border-0 rounded-3 text-decoration-none" href="../../layout/product.html">
                            <img src="../../img/car.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-normal">Mobil</h5>
                                <p class="card-text fw-bold">Rp.355.000.000</p>
                                <p class="fw-light">Surabaya</p>
                                <span class="badge border border-primary text-primary">Produk lokal</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="card shadow-sm border-0 rounded-3">
                            <img src="../../img/car.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-normal">Mobil</h5>
                                <p class="card-text fw-bold">Rp.355.000.000</p>
                                <p class="fw-light">Surabaya</p>
                                <span class="badge border border-primary text-primary">Produk lokal</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-6">
                        <div class="card shadow-sm border-0 rounded-3">
                            <img src="../../img/car.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-normal">Mobil</h5>
                                <p class="card-text fw-bold">Rp.355.000.000</p>
                                <p class="fw-light">Surabaya</p>
                                <span class="badge border border-primary text-primary">Produk lokal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->

    <!-- card -->
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-default border-0 rounded-5 p-3">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Mengikuti Tender dari BUMN</h4>
                        <p class="card-text">
                        Dapatkan penawaran terbaik untuk kebutuhan pengadaan Anda melalui fitur tender yang terdapat di PaDi UMKM. 
                        Pengadaan dilakukan secara online, transparan dan efisien. 
                        Para BUMN dan UMKM dapat mengakses dan menggunakan fitur Tender melalui dashboard pengguna.                            
                        </p>
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-primary">Ikut tender 
                                <i class="bi bi-arrow-right"></i>
                            </button>
                            <button type="button" class="btn border-0 nohover text-primary fw-semibold">
                                Buat tender<i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 p-3">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Membuat Tender Baru</h4>
                        <p class="card-text">
                            Belanja langsung dari UMKM-UMKM yang sudah terafiliasi dengan BUMN Anda
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Nama BUMN">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu dropdown-menu-end w-100">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-primary">Ikut tender 
                                <i class="bi bi-arrow-right"></i>
                            </button>
                            <button type="button" class="btn border-0 nohover text-primary fw-semibold">
                                Buat tender<i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end card -->
    <!-- news -->
    <div class="container my-4">
        <h4><i class="bi bi-newspaper"></i> Berita</h4>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/service_slide2.jpg" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/service_slide2.jpg" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/service_slide2.jpg" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/service_slide2.jpg" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end news -->
    <!-- benefit -->
    <div class="container my-4">
        <h3>Keuntungan Bergabung di PaDi UMKM</h3>
        <div class="row">
            <div class="col">
                <i class="bi bi-wallet fa-2x"></i>
                <p class="fw-semibold">Kemudahan pembiayaan</p>
                <p>Pembiayaan dari BUMN terpercaya: Bank BRI, Pegadaian dan PNM</p>
            </div>
            <div class="col">
                <i class="bi bi-wallet fa-2x"></i>
                <p class="fw-semibold">Kemudahan pembiayaan</p>
                <p>Pembiayaan dari BUMN terpercaya: Bank BRI, Pegadaian dan PNM</p>
            </div>
            <div class="col">
                <i class="bi bi-wallet fa-2x"></i>
                <p class="fw-semibold">Kemudahan pembiayaan</p>
                <p>Pembiayaan dari BUMN terpercaya: Bank BRI, Pegadaian dan PNM</p>
            </div>
        </div>
    </div>
    <!-- end benefit -->
<?= $this->endSection() ?>