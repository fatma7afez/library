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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/books/create')}}">
                    <i class="fas fa-plus-circle fa-lg text-primary"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        {{-- navbar section --}}

    <h1 class="text-primary text-decoration-underline p-5 text-center">Book</h1>
    <section class="container h-100 flex justify-content-center align-content-center p-2 shadow ">
        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">{{$book->name}}</h5>
              <p class="card-text">{{$book->description}}</p>
              <p class="card-text"><span class="text-danger">price : </span>{{$book->price}}</p>

                {{-- update book --}}
              <div class="card-footer d-flex justify-content-end">
                <button type="button" class="btn btn-light">
                <a href="{{url("book/edit/".$book->id)}}"><i class="fas fa-edit text-warning fa-lg "></i><a>
                </button>

                {{-- delete book --}}
                <form action="{{url("book/".$book->id)}}" method="POST">
                    @csrf
                    @method('Delete')
                   <button type="submit"  class="btn btn-light">
                    <i class="fas fa-trash-alt text-danger fa-lg"></i>
                   </button>
                </form>
              </div>
            </div>
          </div>
    </section>
</body>
</html>
@endsection
