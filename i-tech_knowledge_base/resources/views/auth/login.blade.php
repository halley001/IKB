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

<div class="gradient-form h-full p-0 m-0">
  <div class="container h-full p-10">
    <div
      class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
      <div class="w-full">
        <div
          class="block rounded-lg bg-white shadow-lg ligth:bg-neutral-800">
          <div class="g-0 lg:flex lg:flex-wrap">
            <!-- Left column container-->
            <div class="px-4 md:px-0 lg:w-6/12">
              <div class="md:mx-6 md:p-12">
                <!--Logo-->
                <div class="text-center">
                  <img
                    class="mx-auto w-30 h-20"
                    src="{{ asset('images/itech.png')}}"
                    alt="i-tech" />
                </div>

                <form method="POST" action="{{ route('login') }}">@csrf
                  <!--Email input-->
                  <div class="relative mb-4" data-te-input-wrapper-init>
                    <input
                      type="email"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] 
                      outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 
                      motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0
                      form-control @error('email') is-invalid @enderror"
                      name="email" 
                      value="{{ old('email') }}" 
                      required autocomplete="email" autofocus
                      id="email"
                      placeholder="email" />
                    <label
                      for="email"
                      class=" text-black pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] 
                      truncate pt-[0.37rem] leading-[1.6]  transition-all duration-200 ease-out 
                      peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem]
                       peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                      >{{ __('Email Address') }}
                    </label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>

                  <!--Password input-->
                  <div class="relative mb-4" data-te-input-wrapper-init>
                    <input
                      type="password"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] 
                      leading-[1.6] outline-none transition-all duration-200 ease-linear 
                      focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 
                      motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0
                      form-control @error('password') is-invalid @enderror form-control @error('password') is-invalid @enderror"
                      name="password" 
                      required 
                      autocomplete="current-password"
                      id="password"
                      placeholder="Password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <label
                      for="password"
                      class="text-black pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] 
                      origin-[0_0] truncate pt-[0.37rem] leading-[1.6]  transition-all duration-200 ease-out 
                      peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary 
                      peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] 
                      motion-reduce:transition-none "
                      >{{ __('Password') }}
                    </label>
                  </div>

                  <!--Submit button-->
                  <div class="mb-12 pb-1 pt-1 text-center">
                    <button
                      class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase 
                      leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out 
                      hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] 
                      focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none 
                      focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                      type="submit"
                      data-te-ripple-init
                      data-te-ripple-color="light"
                      style="
                        background: linear-gradient(to right, #171717, #171717, #171717, #171717);
                      ">
                      {{__('Login')}}
                    </button>

                    <!--Forgot password link-->
                    @if (Route::has('password.request'))
                    <a class="text-black" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>

                  <!--Register button-->
                  <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 mr-2 text-black">Don't have an account?</p>
                    <button
                      type="button"
                      class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase 
                      leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 
                      hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 
                      focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 
                      dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 disabled"
                      data-te-ripple-init
                      data-te-ripple-color="light">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <!-- Right column container with background and description-->
            <div
              class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
              style="background: linear-gradient(to right, #171717, #0D0D0D, #010203, #000000)">
              <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                <h4 class="mb-4 text-xl font-semibold">
                  Innovative Technologies. <br>
                  Where Problems meet Solutions!
                </h4>
                <p class="text-sm">
                Unable to register? Contact Admin
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
