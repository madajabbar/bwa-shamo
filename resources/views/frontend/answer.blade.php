@extends('layouts.frontend')

@section('title')



        <link rel="shortcut icon" href="{{asset('frontend/assets/img/icons/logo.png')}}" type="image/x-icon">
        <link rel="manifest" href="{{asset('frontend/assets/img/favicons/manifest.json')}}">
        <meta name="msapplication-TileImage" content="{{asset('frontend/assets/img/favicons/mstile-150x150.png')}}">
@endsection
@section('style')
    <style>
        .jawaban {
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .jawaban .jwb {
            background: #fff;
            color: rgb(166, 193, 201);
            border: 1px solid rgb(184, 215, 223);
            width: 40rem;
            height: 5rem;
            border-radius: 1rem;
            transition: 0.6s;
            box-shadow: 0 0 .7rem 0 rgb(164, 201, 211);
            margin: 1rem 0;
        }
        .jawaban .jwb:hover {
            box-shadow: 0 0 1.5rem 0 rgb(164, 201, 211);
        }
        .jawaban h4 {
            position: relative;
            top: 1.5rem;
            left: 2rem;
            font-family: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
        .jawaban .jwb a {
            display: block;
            text-decoration: none;
        }
        p{
            text-align: center;
        }
    </style>
@endsection

@section('content')
        <section id="tes-psikologi" class="py-8">
        <div class="bg-holder" style="background-image:url({{asset('frontend/assets/img/illustrations/services-bg.png')}});background-position:center left;background-size:auto;">
        </div>
        <div class="bg-holder" style="background-image:url({{asset('frontend/assets/img/illustrations/dot-2.png')}});background-position:center right;background-size:auto;margin-left:-180px;margin-top:20px;">
        </div>
        <div class="container-lg">
            <div class="row justify-content-center">
            <div class="col-3 text-center">
                <h2 class="fw-bold">3/10</h2>
                <hr class="w-25 mx-auto text-dark" style="height:2px;" />
                <p style="font-size: 1rem; font-weight: bolder;">{{$answer->answer}}</p>
            </div>
            </div>
                <div class="jawaban">
                        <a href="{{url('/')}}">
                            <div class="jwb">
                                <p>Semangat ya tetap terus berjuang walau mental kamu hancur</p>
                                <p>Aplikasi ini masih dalam tahap pengembangan</p>
                            </div>
                        </a>
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
