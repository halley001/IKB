@extends('layouts.app')


@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div id="main-wrapper" class="container">
  <div class="row pt-10 mt-10">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="row no-gutters">
            <div class="p-5">
                <div class="mb-2 ms-5 ps-5 ">
                    <img src="{{ asset('images/itech.png')}}" alt="i-tech" hieght="70px" width="100px">
                </div>

                <form>
                    <div class="form-group text-white">
                        <label for="email">{{__('Email Address')}}</label>
                        <input type="email" class="form-control mb-2 @error('email') is-invalid @enderror" id="email" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group mb-3 text-white">
                        <label for="password">{{__('Password')}}</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary text-white">{{__('Login')}}</button>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-link float-right text-white btn-disable">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </form>
        </div>
    </div>
    </div>
    <div class="col-4"></div>
      <!-- end col -->
  </div>
  <!-- Row -->
</div>

@endsection
