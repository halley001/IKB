<nav class="flex items-center justify-between flex-wrap bg-gray-900 p-3">
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-sky-600 mr-4">
      <img src="{{ asset('images/itech.png')}}" hieght="" width="70px" alt="I-Tech"
      style="margin-left: 1.25rem"
      >
    </a>
    <div class="text-sm lg:flex-grow">
     
      <div class="float-left">
        <h1 class="text-gray-300 text-xl"
        style="padding-left: 8rem">
        Bienvenue {{ Auth::user()->name }}</h1>
      </div>
      
    </div>
    
    <div>
      
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <i class="fa fa-search"></i><input type="search" class="p-5px border rounded border-transparent bg-gray-700 m-2 p-1" placeholder="search">
        <button type="submit" class="text-gray-300 px-4">Logout</button>
    </form>
    </div>
  </div>
</nav>