@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-1 py-5 mx-auto">
    <span class="publish">Publish</span>
    <div class="row d-flex justify-content-center m-5">
      <form action="/" method="POST">@csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User ID</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->id}}" readonly>

          </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Enter title">
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Cover-image</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Category</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search category ...">
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
            </datalist></div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter datail explanation..."></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content Solution</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Proposed Solution"></textarea>
          </div>
          <div class="mb-3">
          <label for="formFileLg" class="form-label">Media</label>
          <input class="form-control form-control-lg" id="formFileLg" type="file">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->name}}" readonly>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Author id</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->id}}" readonly>
          </div>

          <div class="mb-3">
          <button class="btn btn-primary  text-dark mt-4" type="submit">Submit form</button>
          </div>
      </form>
    </div>
</div>
@endsection