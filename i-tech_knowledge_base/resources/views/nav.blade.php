<div class="container-flex">
  <nav class="flex items-center justify-between flex-wrap bg-gray-900">
    <div class="col-3">
      <a href="#responsive-header" class="block m-2 lg:inline-block lg:mt-0 text-white hover:text-sky-600 mr-4">
        <img src="{{ asset('images/itech.png')}}" hieght="" width="70px" alt="I-Tech"
        style="margin-left: 1.25rem"
        >
      </a>
    </div>
    <div class="col-6">
      
    </div>
    <div class="col-3">
      <div class="dropdown">
        <a class="btn text-light dropdown-toggle bg-inherit" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          {{Auth::user()->name}}
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">{{Auth::user()->email}}</a></li>
          <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>