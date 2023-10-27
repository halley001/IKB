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



@include('footer')
