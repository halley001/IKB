<!-- Well begun is half done. - Aristotle -->
@extends('layouts.app')
@include('nav')
<nav class="navbar navbar-light px-5 pt-5">
  <div class="container-fluid">
    <a class="navbar-brand"><h1>Explore</h1></a>
    <ul class="nav justify-content-end">
    <!-- Authentication Links -->
    @guest
    
    <button type="button" class="btn btn-dark">
    @if (Route::has('login'))
    <li class="nav-item">
    <a class="nav-link active text-light" aria-current="page" href="{{ route('login') }}">Login</a>
  </li>
  @endif
    </button>
  

  @if (Route::has('register'))
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
  </li>
  @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
</ul>
  </div>
</nav>

<div class="container text-center p-5 hello">
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

@include('footer')
