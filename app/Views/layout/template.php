<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="css/style/style.css"> -->
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BS icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- HighCharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style/style.css">
</head>
  <style>
    #navBar {
      width: 100%;
      /* height: 50px; */
      display: flex;
      transition: 0.2s;
    }

    .navbarShadow {
      width: calc(100vh - 100px); 
      border-radius: 2px;
      box-shadow: 0px 2px 10px rgb(0, 0, 0);
    }
  </style>
  <body>
    <!-- top nav -->
        <ul class="nav nav-pills justify-content-end navAtas bg-blue">
          <li class="nav-item">
            <a class="nav-link active rounded-0 text-white" aria-current="page" href="#">
              <i class="bi bi-shop"></i>
              Marketplace
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
            <i class="bi bi-file-earmark"></i>  
            E-Procurement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
            <i class="bi bi-info-circle"></i>
              Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white">
            <i class="bi bi-person-square"></i>  
            Tender
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white">
            <i class="bi bi-question-circle"></i>
            Bantuan
            </a>
          </li>
        </ul>
    <!-- end top nav -->
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top" id="navBar" aria-label="Main navigation">
      <div class="container-fluid">
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand bima" href="#"><img src="img/logo.png" style="width: 86px;" alt=""></a>
    
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown">Kategori</a>
              <ul class="dropdown-menu mt-3">
                <li><a class="dropdown-item d-flex justify-content-between" href="#">Mechanical<i class="bi bi-chevron-right"></i></a>
                  <ul class="submenu dropdown-menu">
                    <li><a href="#" class="dropdown-item">Wirerope</a></li>
                    <li><a href="#" class="dropdown-item">Tyre</a></li>
                    <li><a href="#" class="dropdown-item">Bolt, Nut, Washer, Klem</a></li>
                    <li><a href="#" class="dropdown-item">Gasket, Seal, Packing</a></li>
                    <li><a href="#" class="dropdown-item">Fabrication, Repair</a></li>
                    <li><a href="#" class="dropdown-item">Hose, Pipe</a></li>
                    <li><a href="#" class="dropdown-item">Pump, Compressor</a></li>
                    <li><a href="#" class="dropdown-item">Radiator</a></li>
                    <li><a href="#" class="dropdown-item">Valve</a></li>
                    <li><a href="#" class="dropdown-item">Brake</a></li>
                    <li><a href="#" class="dropdown-item">Bearing, roller</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <div>
            <form action="">
              <div class="input-group">
                <button class="btn btn-outline bg-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Produk</a></li>
                  <li><a class="dropdown-item" href="#">Penjual</a></li>
                </ul>
                <input type="text" class="form-control bg-default border-0" aria-label="Text input with 2 dropdown buttons" placeholder="Cari">
                <button class="btn btn-primary rounded-end" type="button" aria-expanded="false"><i class="bi bi-search"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
            </form>
          </div>
        </div>
        
        <ul class="navbar-nav login gap-2">
          <div class="d-flex align-items-center gap-3">
            <a type="button" class="btn btn-primary" href="/register">Register</a>
            <a class="link-primary text-decoration-none" href="/login">Login</a>
          </div>
        </ul>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <!-- content -->
    
    <?= $this->renderSection('content')?>

    <!-- end content -->

    <!-- footer -->
      <footer class="p-5 bg-darkblue text-white">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>BIMA</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Marketplace</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">E-Procurement</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Info</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Tender</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Bantuan</a></li>
            </ul>
          </div>
    
          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
            </ul>
          </div>
    
          <div class="col-6 col-md-2 mb-3">
            <h5>Kontak</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-white">
                Jl. Perak Timur No.428, Perak Utara, Kec. Pabean Cantikan, Kota SBY, Jawa Timur 60165
                </a>
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">mail@bima.com</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Jam layanan : <br> Senin-Jumat <br> 08.30-17.00</a></li>
            </ul>
          </div>
    
          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Informasi lebih lanjut</h5>
              <p>Informasi terkini dari kami.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-success" type="button">Berlangganan</button>
              </div>
            </form>
          </div>
        </div>
    
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2022 PT BIMART, All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          </ul>
        </div>
      </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>