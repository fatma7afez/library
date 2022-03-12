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
            <a class="nav-link active" aria-current="page" href="{{url('/books/create')}}">
                <i class="fas fa-plus-circle fa-lg text-primary"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    {{-- diplay books section --}}

    <h1 class="text-primary text-decoration-underline text-center p-5">All Books</h1>
    <section class="container text-center h-100 flex justify-content-center align-content-center p-2 shadow ">
        @foreach ($books as $book)
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$book->name}}</h5>
              <p class="card-text">{{$book->description}}</p>
              <a href="{{url("book/show/".$book->id)}}" class="btn btn-primary float-end">Details</a>
            </div>
          </div>
          @endforeach
    </section>

    @endsection

