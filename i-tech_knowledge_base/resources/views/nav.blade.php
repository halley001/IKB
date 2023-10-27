<nav class="navbar bg-body-tertiary mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" style="font-size: 3rem">Explore</a>
      
      <div class="dropdown">
        <button class="btn btn-success dropdown-toggle text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{Auth::user()->name}}
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item text-dark" href="#">Action</a></li>
          <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
          <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </nav>
