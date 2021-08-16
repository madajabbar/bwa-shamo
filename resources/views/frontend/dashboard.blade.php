@extends('layouts.frontend')
@section('header')
<title>Systhon | Dashboard</title>
@endsection


@section('content')
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
@endsection
