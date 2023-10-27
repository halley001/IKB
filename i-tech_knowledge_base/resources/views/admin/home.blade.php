@extends('layouts.dashboard')
@section('content')

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

@endsection