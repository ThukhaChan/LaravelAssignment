@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-shadow">
              <div class="mb-3">
                <a href="{{ route('movie.create') }}" class="btn btn-outline-success">
                    <i class="fas fa-plus"></i>
                </a>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Director</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Rating</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie )
                        <tr>
                          <th scope="row">{{$movie->id}}</th>
                          <td>{{$movie->title}}</td>
                          <td>{{$movie->director}}</td>
                          <td>{{$movie->year}}</td>
                          <td>{{$movie->genre}}</td>
                          <td>{{$movie->rating}}</td>
                          <td>
                              <div class="d-flex justify-content-center">
                                  <a href="{{ route('movie.edit',$movie->id) }}" class="btn btn-outline-warning me-1">
                                      <i class="fa-solid fa-pen-to-square"></i>
                                  </a>
                                  <a href="{{ route('movie.show',$movie->id) }}" class="btn btn-outline-info me-1">
                                    <i class="fa-solid fa-info"></i>
                                  </a>
                                  <form method="POST" action="{{ route('movie.destroy',$movie->id) }}" class="d-inline-block">
                                      @method('delete')
                                      @csrf
                                     <button href="" class="btn btn-outline-danger"onclick="return confirm('Are you sure?')">
                                       <i class="fa-solid fa-trash"></i>
                                     </button>
                                  </form>
                              </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
