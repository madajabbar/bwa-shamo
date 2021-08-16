<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('header')
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/icons/logo.png')}}" type="image/x-icon">
    <link rel="manifest" href="{{asset('frontend/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('frontend/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{asset('frontend/assets/css/theme.css')}}" rel="stylesheet" />
  </head>
  @yield('style')
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
              <li class="nav-item"><a class="nav-link" href="{{url('/form')}}">Tes Psikologi</a></li>
              <li class="nav-item"><a class="nav-link" href="#articles">Tips & Articles</a></li>
              <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                @if (Auth::user())
                    <li class="nav-item">
                        <a class="btn btn-lg btn-outline-primary rounded-pill" href="{{ route('login') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                @else
                    <li class="nav-item"><a class="btn btn-lg btn-outline-primary rounded-pill" href="{{ route('login') }}">Masuk </a></li>
                @endif


            </ul>
          </div>
        </div>
      </nav>
      @yield('content')

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
