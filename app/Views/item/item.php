<?= $this->extend('layout/template')?>
<?= $this->section('content')?>

    <div class="container my-4">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
            <!-- sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-white">Filter</div>
                    <div class="card-body">
                        <p class="card-title fw-bold text-primary">Kategori</p>
                        <p class="card-text fw-semibold">Peralatan</p>
                        <div class="row">
                            <p>Kategori</p>
                            <p>Kategori</p>
                        </div>
                        <hr class="solid">
                        <div class="row">
                            <p class="fw-bold text-primary">Harga</p>
                            <div class="d-grid gap-3">
                              <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="Minimal">
                                <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="Minimal">
                            </div>
                        </div>
                        <hr class="solid">
                        <div class="row">
                            <p class="fw-bold text-primary">Lokasi</p>
                            <div class="d-grid gap-3">
                                <div class="dropdown w-100">
                                    <button class="btn btn-light dropdown-toggle w-100" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                                Pilih provinsi
                                    </button>
                                    <div class="dropdown-menu px-2" aria-labelledby="triggerId">
                                        <div class="d-grid">
                                          <input type="search" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Cari..">
                                        </div>
                                        <button class="dropdown-item" href="#">Action</button>
                                        <button class="dropdown-item disabled" href="#">Disabled action</button>
                                    </div>
                                </div>
                                <div class="dropdown open">
                                    <button class="btn btn-light dropdown-toggle w-100" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                                Pilih Kabupaten
                                            </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <button class="dropdown-item" href="#">Action</button>
                                        <button class="dropdown-item disabled" href="#">Disabled action</button>
                                    </div>
                                </div>
                                <div class="dropdown open">
                                    <button class="btn btn-light dropdown-toggle w-100" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                                Pilih Kecamatan
                                            </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <button class="dropdown-item" href="#">Action</button>
                                        <button class="dropdown-item disabled" href="#">Disabled action</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="solid">
                        <p class="fw-bold text-primary">Lokasi</p>
                        <div class="row">
                            <div class="d-grid gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Produk Dalam Negeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        TKDN
                                    </label>
                                </div>
                                <input type="number" class="form-control" name="" id="" placeholder="Kadar TKDN">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk -->
            <div class="col-md-9">
                <div class="row g-2">
                    <div class="d-flex justify-content-end align-items-center gap-3">
                        Urutkan
                        <div class="dropdown open">
                            <button class="btn bg-white border border-1 dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Relevansi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <button class="dropdown-item" href="#">Action</button>
                                <button class="dropdown-item disabled" href="#">Disabled action</button>
                            </div>
                        </div>
                    </div>
                    <p>Kategori ....</p>
                    <div class="col-md-3 col-xs-6">
                        <a class="card shadow-sm border-0 rounded-3 text-decoration-none" href="../layout/product.html">
                            <img src="img/car.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-normal">Mobil</h5>
                                <p class="card-text fw-bold">Rp.355.000.000</p>
                                <p class="fw-light">Surabaya</p>
                                <span class="badge border border-primary text-primary">Produk lokal</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="card shadow-sm border-0 rounded-3">
                            <img src="img/car.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-normal">Mobil</h5>
                                <p class="card-text fw-bold">Rp.355.000.000</p>
                                <p class="fw-light">Surabaya</p>
                                <span class="badge border border-primary text-primary">Produk lokal</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="card shadow-sm border-0 rounded-3">
                            <img src="img/car.jpg" class="card-img-top" alt="...">
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

<?= $this->endsection();?>