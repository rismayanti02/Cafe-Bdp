<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafe BDP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #fff;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://smkwikrama.sch.id/frontend/assets/wikrama-logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
                <a style="color: #050505; font-size: 23px"><strong>Cafe Wikrama</strong></a>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">SHOP</a>
                        </li>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">CONTACT</a>
                            </li>
                        </ul>
            </div>
        </div>
    </nav>

    <div class="bg">
        <div class="container mt-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-6 ">
                    WELCOME TO<br>
                    <h1>Cafe Wikrama</h1>
                    <strong>
                        <h4>Fresh And<br>
                            Delicious Food Every Day!
                    </strong></h4><br><br>
                    <a href="/product" class="btn btn-outline-warning">Order Now!!</a>
                </div>
                <div class="col-lg-6 mb-6">
                    <img src="{{asset('images/bg.png')}}">
                </div>
            </div>
        </div>

        {{-- card --}}
<section style="background-color: white;">
    <div class="container mt-3">
    <div class="row text-center">
    <h2 class="mt-2">Menu Makanan</h2>
    <hr class="solid">
    <div class="row mt-4 ms-5">
    <div class="col-lg-4 mb-3">
    <div class="card" style="width: 18rem;">
        <img src="https://i.pinimg.com/564x/e2/a2/aa/e2a2aa374101bf6116524f6ec229a74a.jpg"
        class="card-img-top" alt="..." style="max-height: 450px">
        <div class="card-body">
        <h5 class="card-title">Kebab</h5>
        <p class="card-text">Rp.15.000</p>
        <a href="#" class="btn btn-dark w-50">Buy Now</a>
        </div>
        </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/736x/73/a6/3d/73a63dec9d98629fa1ed2158937db714.jpg"
            class="card-img-top" alt="..." style="max-height: 450px">
            <div class="card-body">
            <h5 class="card-title">Es Matcha</h5>
            <p class="card-text">Rp.15.000</p>
            <a href="#" class="btn btn-dark w-50">Buy Now</a>
            </div>
            </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/19/ee/48/19ee484e00569a75db6dad23678629f9.jpg"
                class="card-img-top" alt="..." style="max-height: 450px">
                <div class="card-body">
                <h5 class="card-title">Baso Pangsit</h5>
                <p class="card-text">Rp.10.000</p>
                <a href="#" class="btn btn-dark w-50">Buy Now</a>
                </div>
                </div>
                </div>
                </div>
                </section>
                {{-- Akhir Card --}}