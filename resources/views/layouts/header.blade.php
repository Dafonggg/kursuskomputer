<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>KURSUS RYAN KOMPUTER</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/two-tone-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('images/logokrk.png') }}" alt="Kursus Ryan Komputer" style="height: 50px; width: 50px; object-fit: contain; d-flex align-items: center; diplay: flex;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"{{ request()->is('/') ? 'active' : '' }}><a href="{{ url('/') }}">Home</a></li>
                      <li class="scroll-to-section"{{ request()->is('/layanan') ? 'active' : '' }}><a href="{{ url('/layanan') }}">Layanan</a></li>
                      <li class="scroll-to-section"{{ request()->is('/kursus') ? 'active' : '' }}><a href="{{ url('/kursus') }}">Kursus</a></li>
                      <li class="scroll-to-section"{{ request()->is('/timkami') ? 'active' : '' }}><a href="{{ url('/timkami') }}">Tim Kami</a></li>
                      <li class="scroll-to-section"{{ request()->is('/katalog') ? 'active' : '' }} ><a href="{{ url('/katalog') }}">Katalog</a></li>
                      <li class="scroll-to-section has-sub">
                        <a href="#">Account <i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                      </li>
                  </ul>
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach End ***** -->   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

