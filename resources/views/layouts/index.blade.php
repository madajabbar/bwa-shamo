<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Systhon | Monitoring Kesehatan Mental</title>
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/icons/logo.png')}}" type="image/x-icon">
    <link rel="manifest" href="{{asset('frontend/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('frontend/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{asset('frontend/assets/css/theme.css')}}" rel="stylesheet" />
  </head>
  <body>
    <!-- Main Content-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="{{url('/')}}">
            <img class="d-inline-block me-3" src="{{asset('frontend/assets/img/icons/logo.png')}}" width="50"alt="" />Systhon
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link fw-bold active" aria-current="page" href="#">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="#tes-psikologi">Tes Psikologi</a></li>
              <li class="nav-item"><a class="nav-link" href="#articles">Tips & Articles</a></li>
              <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
              <li class="nav-item"><a class="btn btn-lg btn-outline-primary rounded-pill" href="{{ route('login') }}">Masuk </a></li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="py-0">
        <div class="bg-holder" style="background-image:url({{asset('frontend/assets/img/illustrations/dot.png')}});background-position:left;background-size:auto;margin-top:-105px;">
        </div>
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-md-1 pt-8"><img class="img-fluid" src="assets/img/illustrations/header-bg.png"  width="500" alt="" /></div>
            <div class="col-md-7 col-lg-6 text-center text-md-start pt-5 pt-md-9">
              <h1 class="mb-4 display-3 fw-bold">Monitoring kesehatan <br class="d-block d-lg-none d-xl-block" />mental anda.</h1>
              <p class="mt-3 mb-4 fs-1">Selalu pantau tingkat kesehatan mental<br class="d-none d-lg-block" />dimanapun dan kapanpun<br class="d-none d-lg-block" />anda berada</p>
              <a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Daftar Sekarang</a>
            </div>
          </div>
        </div>
      </section>
      <section id="tes-psikologi" class="py-8">
        <div class="bg-holder" style="background-image:url({{asset('frontend/assets/img/illustrations/services-bg.png')}});background-position:center left;background-size:auto;">
        </div>
        <div class="bg-holder" style="background-image:url({{asset('frontend/assets/img/illustrations/dot-2.png')}});background-position:center right;background-size:auto;margin-left:-180px;margin-top:20px;">
        </div>
        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-3 text-center">
              <h2 class="fw-bold">Tes Psikologi</h2>
              <hr class="w-25 mx-auto text-dark" style="height:2px;" />
            </div>
          </div>
          <div class="row justify-content-center h-100 pt-7 g-4">
            <div class="col-sm-9 col-md-4">
              <div class="card h-100 w-100 shadow rounded-lg p-3 p-md-2 p-lg-3 p-xl-5">
                <div class="card-body text-center text-md-start">
                <div class="py-3"><img class="img-fluid" src="{{asset('frontend/assets/img/illustrations/consultation.png')}}" height="90" alt="" /></div>
                  <div class="py-3">
                    <h4 class="fw-bold card-title">Tes Love Language: Temukan Tipe Bahasa Cintamu</h4>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                  </div>
                </div>
                <a class="stretched-link text-decoration-none " href="#" role="button">Ikuti tes
                  <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-9 col-md-4">
              <div class="card h-100 w-100 shadow rounded-lg p-h3 p-md-2 p-lg-3 p-xl-5">
                <div class="card-body text-center text-md-start">
                  <div class="py-3"><img class="img-fluid" src="{{asset('frontend/assets/img/illustrations/anxiety.png"')}} height="90" alt="" /></div>
                  <div class="py-3">
                    <h4 class="fw-bold card-title">Tes Tingkat Keparahan Stres: Mengenal Diri Lebih Dalam</h4>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                  </div>
                </div>
                <a class="stretched-link text-decoration-none" href="#" role="button">Ikuti tes
                  <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-9 col-md-4">
              <div class="card h-100 w-100 shadow rounded-lg p-3 p-md-2 p-lg-3 p-xl-5">
                <div class="card-body text-center text-md-start">
                  <div class="py-3"><img class="img-fluid" src="{{asset('frontend/assets/img/illustrations/psychology-symbol.png')}}" height="90" alt="" /></div>
                  <div class="py-3">
                    <h4 class="fw-bold card-title">Tes Layanan Konsultasi yang Paling Sesuai dengan Kebutuhanmu</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                  </div>
                </div>
                <a class="stretched-link text-decoration-none" href="#" role="button">Ikuti tes
                  <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-9 col-md-4">
              <div class="card h-100 w-100 shadow rounded-lg p-3 p-md-2 p-lg-3 p-xl-5">
                <div class="card-body text-center text-md-start">
                  <div class="py-3"><img class="img-fluid" src="{{asset('frontend/assets/img/illustrations/bipolar.png')}}" height="90" alt="" /></div>
                  <div class="py-3">
                    <h4 class="fw-bold card-title">Tes Sehat Mental</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <a class="stretched-link text-decoration-none" href="#" role="button">Ikuti tes
                  <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-9 col-md-4">
              <div class="card h-100 w-100 shadow rounded-lg p-3 p-md-2 p-lg-3 p-xl-5">
                <div class="card-body text-center text-md-start">
                  <div class="py-3"><img class="img-fluid" src="{{asset('frontend/assets/img/illustrations/anxiety2.png')}}" height="90" alt="" /></div>
                  <div class="py-3">
                    <h4 class="fw-bold card-title">Tes Kejujuran: Mungkin Kamu Pernah Berbohong</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia. </p>
                  </div>
                </div>
                <a class="stretched-link text-decoration-none" href="#" role="button">Ikuti tes
                  <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
              </svg></a>
              </div>
            </div>
            <div class="col-sm-9 col-md-4">
              <div class="card h-100 w-100 shadow rounded-lg p-3 p-md-2 p-lg-3 p-xl-5">
                <div class="card-body text-center text-md-start">
                  <div class="py-3"><img class="img-fluid" src="{{asset('frontend/assets/img/illustrations/pusing.png')}}" height="90" alt="" /></div>
                  <div class="py-3">
                    <h4 class="fw-bold card-title">Tes Kecemasan Public Speaking: Bantu Dirimu Mengatasinya</h4>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio! </p>
                  </div>
                </div>
                <a class="stretched-link text-decoration-none" href="#" role="button">Ikuti tes
                  <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="text-center py-4">
              <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Lihat semua tes </button>
            </div>
          </div>
        </div>
      </section>
      <section class="py-6 py-lg-8" id="about">
        <div class="bg-holder" style="background-image:url({{asset('frontend/assets/img/illustrations/services-bg.png')}});background-position:center left;background-size:auto;">
        </div>

        <div class="container">
          <div class="row g-xl-0 align-items-center">
            <div class="col-md-6"><img class="img-fluid mb-5 mb-md-0" src="{{asset('frontend/ssets/img/illustrations/about-1.png')}}" width="400" alt="" /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold lh-base">Monitoring kesehatan <br />mental</h2>
              <hr class="text-dark mx-auto mx-md-0" style="height:2px;width:50px" />
              <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti vitae iusto incidunt optio illum dignissimos ipsa, assumenda doloremque, consequuntur perspiciatis, est molestiae ipsam exercitationem nemo!</p>
              <div class="py-3">
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Selanjutnya </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="articles">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/article-bg.png);background-position:right center;background-size:auto;">
        </div>
        <div class="container-lg">
          <div class="bg-holder" style="background-image:url({{asset('frontend/assets/img/illustrations/dot-2.png')}});background-position:left top;background-size:initial;margin-top:120px;margin-left:-35px;">
          </div>
          <div class="row flex-center">
            <div class="col-auto text-center">
              <h2 class="fw-bold">Lihat artikel terbaru kami</h2>
              <hr class="mx-auto text-dark" style="height:2px;width:50px" />
            </div>
          </div>
          <div class="row h-100 justify-content-center pt-6">
            <div class="col-12 col-sm-9 col-md-4 mt-4">
              <div class="card h-100 rounded-3 shadow"><img src="{{asset('frontend/assets/img/gallery/artikel-1.jfif')}}" alt="" />
                <div class="card-body p-4 text-center text-md-start">
                  <h5 class="fw-bold">Bakso Pimpong</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam iure accusantium voluptatem...</p><a class="stretched-link text-decoration-none" href="#" role="button">Baca selengkapnya
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-9 col-md-4 mt-4">
              <div class="card h-100 rounded-3 shadow"><img src="{{asset('frontend/assets/img/gallery/artikel-2.jfif')}}" alt="" />
                <div class="card-body p-4 text-center text-md-start">
                  <h5 class="fw-bold">Tee satee nya dek </h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, neque. Arne aknero hagre...</p><a class="stretched-link text-decoration-none" href="#" role="button">Baca selengkapnya
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-9 col-md-4 mt-4">
              <div class="card h-100 rounded-3 shadow"><img src="{{asset('frontend/assets/img/gallery/artikel-3.jfif')}}" alt="" />
                <div class="card-body p-4 text-center text-md-start">
                  <h5 class="fw-bold">Martabak Telor euy </h5>
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, officia? Reiciendis?.</p><a class="stretched-link text-decoration-none" href="#" role="button">Baca selengkapnya
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="text-center pt-4 z-index-2">
              <button class="btn btn-lg btn-outline-primary rounded-pill z-index-2 hover-top" type="submit">Lihat semua</button>
            </div>
          </div>
        </div>
      </section>
      <section class="py-6 pt-7 bg-primary-gradient">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot.png);background-position:left bottom;background-size:auto;filter:contrast(1.5);">
        </div>
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot-2.png);background-position:right top;background-size:auto;margin-top:-75px;">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 order-0 order-sm-0 pe-6"><a class="text-decoration-none" href="#">
              <img class="img-fluid me-2" src="assets/img/icons/logo.png" width="55" alt="" /><span class="fw-bold fs-1 text-light">Systhon</span></a>
              <p class="mt-3 text-white">Systhon memberikan sebuah pltform pelayanan untuk memonitoring kesehatan mental bagi semua orang</p>
            </div>
            <div class="col-4 col-md-4 col-lg mb-3 order-2 order-sm-1">
              <h6 class="lh-lg fw-bold text-light">Start up</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Tentang kami</a></li>
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Ikuti kami</a></li>
              </ul>
            </div>
            <div class="col-4 col-md-4 col-lg mb-3 order-3 order-sm-2">
              <h6 class="lh-lg fw-bold text-light"> Wilayah </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Indonesia</a></li>
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Singapore</a></li>
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Guide</a></li>
              </ul>
            </div>
            <div class="col-4 col-md-4 col-lg mb-3 order-1 order-sm-3">
              <h6 class="lh-lg fw-bold text-light">Bantuan </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Customer Service</a></li>
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Cara</a></li>
                <li class="lh-lg"><a class="text-light fs--1 text-decoration-none" href="#!">Instruksi</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="py-2">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="text-center">
                <p class="mb-0">
                  Copyright @ Systhon - Re Master 2021
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--    End of Main Content-->
    <!--    JavaScripts-->
    <script src="{{asset('frontend/assets/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('frontend/assets/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&amp;display=swap" rel="stylesheet">
  </body>

</html>
