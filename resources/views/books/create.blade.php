@extends('layout')
@section('content')

  {{-- navbar section --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <i class="fas fa-book-open fa-lg  text-primary p-2"></i>Library
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/books')}}">
                    <i class="fas fa-home fa-lg text-primary"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      {{-- add book section --}}

    <h1 class="text-primary text-decoration-underline  text-center p-5">Add Book</h1>
    <section class="container h-100 flex justify-content-center align-content-center p-3 shadow ">
        @if ($errors->any)
         @foreach ($errors->all() as $error)
           <p class="alert alert-danger ">
              {{$error}}
           </p>
         @endforeach
        @endif
        <form action="{{url('books')}}" method="POST" class="p-2">
            @csrf
            <div class="mb-3">
              <label for="bookName" class="form-label">Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="bookName" name="name">
            </div>
            <div class="mb-3">
                <label for="bookDesc" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea type="text" class="form-control" id="bookDesc" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="bookPrice" class="form-label">price <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="bookPrice" name="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>


@endsection
