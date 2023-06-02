<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Font -->
    <link href="assets/font/Poppins/Poppins-ExtraBold.ttf" rel="stylesheet">

    <title>Tempat Transit</title>

    <link rel="icon" href="assets/img/Logo_Transit.png"
    type="image/x-icon">

    <!-- Leaflet -->
    <link rel="stylesheet" href="leaflet/leaflet.css">

    <!-- My Style -->
    <link rel="stylesheet" href="style.css">

  </head> 
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary position-fixed w-100" style>
        <div class="container">
          <a class="navbar-brand" href="#">Tempat Transit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Layanan</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Tipe Rumah</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Peta Komplek</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Kontak</a>
              </li>
            </ul>
            <div>
                <button class="button-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</button>
            </div>
          </div>
        </div>
      </nav>

       <!-- Hero Section -->

      <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1> Ayo Lihat Rumah Yang 
                        Sesuai dengan Stylemu !</h1>
                    <p><span class="fw-bold"> Transit hadir</span> Transit hadir untuk temukan rumah terbaik
                        untukmu, untuk di jual ataupun di sewa dengan sumber 
                        terpercaya. </p>

                        <button class="button-lg-primary">Temukan Rumah</button>
                        <a href="#">
                            <img src="assets/img/arrow.png" alt="">
                        </a>
                </div>
            </div>
            <img src="assets/img/Logo_Transit.png" alt="" class=" logo-img h-50 position-absolute top-0 start-0">
            <img src="assets/img/Hero_Rumah.png" alt="" class="position-absolute end-0 bottom-0
            img-hero">
            <img src="assets/img/Linear.png" alt="" class=" accsent-img h-100 position-absolute top-0 start-0">
        </div> 
      </section>

    
 
    <!-- Layanan Section -->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub=title">Rumah Impian Hadir Menjadi Solusi Bagi Kamu !</span>
                </div> 
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/house1_logo.png" alt="" 
                            class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Property Baru</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli 
                            rumah baru dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/house2_logo.png" alt="" 
                            class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Sewa Rumah</h3>
                        <p class="mt-3">Sewa rumah yang indah untuk keluarga 
                            anda, pilihan terbaik untuk tempat 
                            tinggal keluarga mu.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/house3_logo.png" alt="" 
                            class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Beli Rumah</h3>
                        <p class="mt-3">Beli Rumah sempurna dengan harga 
                            terbaik kualitas terjamin dari sumber 
                            terpercaya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- search section-->

    <section id="search" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>
              Temukan Rumah Impianmu
            </h2>
            <p>
              Sekarang Anda Dapat Memiliki Rumah Impian Dengan Kualitas Terbaik Dan Tentunya Dengan Harga Yang Sangat Terjangkau
            </p>
          </div>
          
      <div class="col-10 mx-auto mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jual" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Jual</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sewa" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Sewa</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#properti" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Properti Baru</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <!--dropdown Tipe-->
            <div class="input-group input-cari mb-3">
              <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tipe Rumah</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <!-- <dropdown Range> -->
              <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Range Harga</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan nama, id, properti">
              <button class="button-primary" type="button" id="button-addon2">Cari</button>
            </div>
          </div>
          <!-- sewa -->
          <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="input-group input-cari mb-3">
              <!-- waktu -->
              <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Jangka Waktu</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <!-- <tipe> -->
              <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tipe Rumah</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan nama, id, properti">
              <button class="button-primary" type="button" id="button-addon2">Cari</button>
            </div>
          </div>

          <div class="tab-pane fade" id="properti" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <div class="input-group input-cari mb-3">
              <!-- waktu -->
              <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Properti Tipe </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan nama, id, properti">
              <button class="button-primary" type="button" id="button-addon2">Cari</button>
            </div>
          </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </section>

    <!-- Rekomendasi -->

    <section id="rekomendasi">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center mt-5"> 
            <h2>Rekomendasi Rumah Terbaik Untuk Mu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-4 mb-4">
            <div class="card rekomen p-2" style="width: 22rem;">
              <img src="assets/img/rumah1.jpg" alt="">
              <div class="card-body">
                <h4>IDR. 200.000.000</h4>
                <P class="mb-4 lh-sm">Jl.Soekarno Hatta <br><span class="text-danger mb-5">Sewa</span></P>
              </div>
              <div class="card-fasilitas d-flex justify-content-between px-4 text-center">
                <span>
                  <img src="./assets/img/Vector.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector2.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector1.png" alt=""> 300m
                   <p> Luas Rumah</p>
                 </span>
              </div>
            </div>
          </div>
          
          <div class="col-4 mb-4">
            <div class="card rekomen p-2" style="width: 22rem;">
              <img src="assets/img/rumah2.jpg" alt="">
              <div class="card-body">
                <h4>IDR. 200.000.000</h4>
                <P class="mb-4 lh-sm">Jl.Mandala <br><span class="text-danger mb-5">Sewa</span></P>
              </div>
              <div class="card-fasilitas d-flex justify-content-between px-4 text-center">
                  <span>
                   <img src="./assets/img/Vector.png" alt=""> 3
                    <p>Kamar Tidur</p>
                  </span>
                  <span>
                    <img src="./assets/img/Vector2.png" alt=""> 3
                    <p>Kamar Tidur</p>
                  </span>
                  <span>
                    <img src="./assets/img/Vector1.png" alt=""> 300m
                    <p> Luas Rumah</p>
                  </span>
              </div>
            </div>
          </div>
          
          <div class="col-4 mb-4">
            <div class="card rekomen p-2" style="width: 22rem;">
              <img src="assets/img/rumah3.jpg" alt="">
              <div class="card-body">
                <h4>IDR. 150.000.000</h4>
                <P class="mb-4 lh-sm">Jl.Gatot Subroto <br><span class="text-danger mb-5">Sewa</span></P>
              </div>
              <div class="card-fasilitas d-flex justify-content-between px-4 text-center">
                <span>
                  <img src="./assets/img/Vector.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector2.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector1.png" alt=""> 300m
                   <p> Luas Rumah</p>
                 </span>
              </div>
            </div>
          </div>
          
          <div class="col-4 mb-4">
            <div class="card rekomen p-2" style="width: 22rem;">
              <img src="assets/img/rumah4.jpg" alt="">
              <div class="card-body">
                <h4>IDR. 300.000.000</h4>
                <P class="mb-4 lh-sm">Jl.Mohammad Toha <br><span class="text-danger mb-5">Sewa</span></P>
              </div>
              <div class="card-fasilitas d-flex justify-content-between px-4 text-center">
                <span>
                  <img src="./assets/img/Vector.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector2.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector1.png" alt=""> 300m
                   <p> Luas Rumah</p>
                 </span>
              </div>
            </div>
          </div>
          
          <div class="col-4 mb-4">
            <div class="card rekomen p-2" style="width: 22rem;">
              <img src="assets/img/rumah1.jpg" alt="">
              <div class="card-body">
                <h4>IDR. 200.000.000</h4>
                <P class="mb-4 lh-sm">Jl.Soekarno Hatta <br><span class="text-danger mb-5">Sewa</span></P>
              </div>
              <div class="card-fasilitas d-flex justify-content-between px-4 text-center">
                <span>
                  <img src="./assets/img/Vector.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector2.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector1.png" alt=""> 300m
                   <p> Luas Rumah</p>
                 </span>
              </div>
            </div>
          </div>
          
          <div class="col-4 mb-4">
            <div class="card rekomen p-2" style="width: 22rem;">
              <img src="assets/img/rumah1.jpg" alt="">
              <div class="card-body">
                <h4>IDR. 200.000.000</h4>
                <P class="mb-4 lh-sm">Jl.Soekarno Hatta <br><span class="text-danger mb-5">Sewa</span></P>
              </div>
              <div class="card-fasilitas d-flex justify-content-between px-4 text-center">
                <span>
                  <img src="./assets/img/Vector.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector2.png" alt=""> 3
                   <p>Kamar Tidur</p>
                 </span>
                 <span>
                   <img src="./assets/img/Vector1.png" alt=""> 300m
                   <p> Luas Rumah</p>
                 </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- peta -->
    <section id="fitur" class="container-fluid p-5">
      <div class="peta" style="position: auto;">
        <div class="card drop-shadow">
          <div class="card-title text-center my-2 border-bottom">
            <h2> Peta Lokasi</h2>
          </div>
          <div class="card-body">
            <div id="map" style="top: 0; left:0; right:0; bottom: 0; width: 100%; height: 440px;">

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Info Unit -->
    <?php include('infoDialog.php') ?>
    <!-- End Info Unit -->

    <!-- Modal Login -->
    <?php include('loginDialog.php') ?>

    <!-- kontak -->
    <section class="" style="background-image: url(assets/img/Mask\ Group.png);">
      <div class="container-fluid">
        <div class="container" style="height: 100vh !important;">
          <div class="row align-items-center  h-100">
            <div class="col-md-6 my-5 w-50">
              <div class="m-5 text-white">
                <div>
                  <img src="assets/img/Logo_Transit.png" alt="" style="height: 170px;">
                </div>
                <h3>Butuh Konsultasi..?<br/> 
                  Silahkan kontak kami <br/>
                  Kami Siap Membantu</h3><br>
                  <div class="kontak">
                    <h6>Kontak</h6>
                    <div>
                      <img src="assets/img/gb1.png" alt="">
                      <a href="#">STT Mandala Bandung</a>
                    </div>
                    <div>
                      <img src="assets/img/gb2.png" alt="">
                      <a href="#">STT Mandala Bandung</a>
                    </div>
                    <div>
                      <img src="assets/img/gb3.png" alt="">
                      <a href="#">STT Mandala Bandung</a>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-lg " style="height: 350px !important; width: 470px !important;">
                    <div class="card-title text-center text-primary fs-2 mt-3 mb-3">
                      ada pertanyaan..?
                    </div>
                    <div class="card-body">
                      <form class="">
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
                          <label for="floatingInputValue">Masukan Email Anda Disini . . .</label>
                        </div>
                        <div class="form-floating mb-3">
                          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                          <label for="floatingTextarea">Pertanyaan Anda . . .</label>
                        </div>
                        <button class="btn btn-primary w-100">Kirim</button>
                      </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer style="background-color: #3C76CD; height: 200px;">
      <div class="container px-4">
        <div class="row gx-5 text-white">
          <div class="col">
           <div class="p-3">Tempat Transit</div>
          </div>
          <div class="col d-flex me-6" style="width: 300%;">
            <div class="p-3"><a>Bera</div>
            <div class="p-3"><a>Layanan</div>
            <div class="p-3"><a>Telp Rumah</div>
            <div class="p-3"><a>Peta Komplek</div>
            <div class="p-3"><a>Kontak</div>
            <div class="p-3"><a>Masuk</div>
          </div>
          <div>
            <p>Copyright by Transit Creative All Right Reserved.</p>
          </div>
        </div>
      </div>
    </footer>    
  
    <!-- <script src="script.js"></script> -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    
    <script src="style/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>

    <!-- Mapping -->
    <script src="Mapping/Pointer_font_point.js"></script>
    <script src="Mapping/Zona_region.js"></script>

    <!-- Leaflet -->
    <script src="leaflet/leaflet.js"></script>
    
    <!-- MyScript -->
    <script src="style/script.js"></script>


  </body>
</html>