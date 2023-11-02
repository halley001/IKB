@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-1 py-5 mx-auto">
    <span class="publish">Publish</span>
    <div class="row d-flex justify-content-center m-5">
      @if(Session::get('success'))
      <div class="alert alert-success">
        {{ Session::get('success')}}
      </div>
      @endif

      @if(Session::get('fail'))
        <div class="alert alert-success">
          {{Session::get('fail')}}
        </div>
      @endif 
      <form action="publish" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user-id" class="form-label">User ID</label>
            <input type="text" name="user-id" class="form-control" id="user-id" placeholder="{{$user->id}}" readonly>
          </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control " id="title" placeholder="Enter title" value="{{ old('title')}}">
            <span style="color:red">@error('title'){{$message}}@enderror</span>
          </div>
          <div class="mb-3">
            <label for="cover-image" class="form-label">Cover-image</label>
            <input class="form-control" name="cover-image" type="file" id="cover-image">
            <span style="color:red">@error('cover-image'){{$message}}@enderror</span>

          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input class="form-control" list="datalistOptions" id="category" name="category" placeholder="Type to search category ...">
            <datalist id="datalistOptions">
              <option value="Alpha Microfinance">
              <option value="Alpha I-Collect">
              <option value="Alpha Bank">
              <option value="Alpha Admin">
              <option value="Alpha Report">
              <option value="Alpha Mobile">
              <option value="Alpha SMS">
              <option value="Alpha Web">
              <option value="Alpha Xpress">
              <option value="Virtual Alpha">
              <option value="Alpha Monetics">
            </datalist>
            <span style="color:red">@error('category'){{$message}}@enderror</span>
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter datail explanation..."></textarea>
            <span style="color:red">@error('content'){{$message}}@enderror</span>
          </div>
          <div class="mb-3">
            <label for="content-sol" class="form-label">Content Solution</label>
            <textarea class="form-control" name="content-sol" id="content-sol" rows="4" placeholder="Proposed Solution"></textarea>
            <span style="color:red">@error('content-sol'){{$message}}@enderror</span>

          </div>
          <div class="mb-3">
          <label for="media" class="form-label">Media</label>
          <input class="form-control form-control-md" name="media" id="media" type="file">
          <span style="color:red">@error('media'){{$message}}@enderror</span>
          </div>
          <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" name="media" id="author" placeholder="{{$user->name}}" readonly>
          </div>
          <div class="mb-3">
            <label for="author-id" class="form-label">Author id</label>
            <input type="text" class="form-control" name="media" id="author-id" placeholder="{{ $user->id}}" readonly>
          </div>

          <div class="mb-3">
          <button class="btn bg-gray-800 text-gray-300 mt-4" type="submit">Submit form</button>
          </div>
      </form>
    </div>
</div>
@endsection