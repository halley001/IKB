<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ( 'IKB | I-Tech Kwoledge Base') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- other head elements -->
        @stack('styles')
        <style>

        </style>
        
  </head>
<body @if(Request::is('login', '/')) class="loginbody fixed-top" @endif>
    
    <div id="app">
        <main class="">

@include('sidenav')
@yield('content')
<div class="container text-center p-5 hello">
    <div class="row">
      @include('nav')
    </div>
    <div class="row">
      <div class="col">
        <a routerLink="/alpha-bank">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                  <img src="{{ asset('images/bank.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Alpha Bank</h5>
                      <p class="card-text">This is a wider card with supporting text</p>
                    </div>
                  </div>
                </div>
              </div>
              </a>
      </div>
      <div class="col">
        <a routerLink="/i-collect">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                  <img src="{{ asset('images/i-admin.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">I-Collect</h5>
                      <p class="card-text">This is a wider card with supporting text</p>
                    </div>
                  </div>
                </div>
              </div>
              </a>
      </div>
      <div class="col">
        <a routerLink="/alpha-admin">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                  <img src="{{ asset('images/admin.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Alpha Admin</h5>
                      <p class="card-text">This is a wider card with supporting text</p>
                    </div>
                  </div>
                </div>
              </div>
              </a>
      </div>
    </div>
    
    <div class="row pt-4">
        <div class="col">
          <a routerLink="/alpha-microfinance">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/micro.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Alpha Microfinance</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
        <div class="col">
          <a routerLink="/alpha-mobile">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/mobile2.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Alpha Mobile</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
        <div class="col">
          <a routerLink="/alpha-monetics">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/monetic.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Alpha Monetics</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
      </div>
    
      <div class="row pt-4">
        <div class="col">
          <a routerLink="/alpha-report">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/report.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Alpha Report</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
        <div class="col">
          <a routerLink="/alpha-sms">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/sms.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Alpha Sms</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
        <div class="col">
          <a routerLink="/virtual-alpha">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/virtual.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Virtual Alpha</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
      </div>
    
      <div class="row pt-4">
        <div class="col">
          <a routerLink="/alpha-web">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/web.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Alpha Web</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
        <div class="col">
          <a routerLink="/alpha-xpress">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/xpress.png') }}" alt="description of myimage" style="max-width: 80px; height=90px">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Alpha Xpress</h5>
                        <p class="card-text">This is a wider card with supporting text</p>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
        </div>
        <div class="col">
        
        </div>
      </div>
    </div>
{{-- Dashboard Components --}}
</main>
</div>
</body>
</html>
