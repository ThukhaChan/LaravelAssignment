@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Director</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{$movie->id}}</th>
                            <td>{{$movie->title}}</td>
                            <td>{{$movie->director}}</td>
                            <td>{{$movie->year}}</td>
                            <td>{{$movie->genre}}</td>
                            <td>{{$movie->rating}}</td>
                          </tr>
                        </tbody>
                    </table>
                    <div class="mb-1 mt-3">
                        <a href="{{ route('movie.index') }}" class="btn btn-outline-dark">
                            <i class="fa-solid fa-backward"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
