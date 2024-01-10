@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <form method="POST" action="{{ route('movie.update',$movie->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label  class="form-label">Title</label>
                                <input type="text" name="title" class="form-control @error('title')
                                is-invalid @enderror " value="{{old('title'),$movie->title}}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Director</label>
                                <input type="director" name="director" class="form-control @error('direction')
                                is-invalid @enderror " value="{{ old('director'),$movie->director}}">
                                @error('director')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Year</label>
                                <input type="year" name="year" class="form-control @error('year')
                                is-invalid @enderror " value="{{old('year'),$movie->year }}">
                                @error('year')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Genre</label>
                                <input type="genre" name="genre" class="form-control @error('genre')
                                is-invalid @enderror " value="{{old('genre'),$movie->genre }}">
                                @error('genre')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Rating</label>
                                <input type="rating" name="rating" class="form-control @error('rating')
                                is-invalid @enderror " value="{{ old('rating'),$movie->rating }}">
                                @error('rating')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('movie.index') }}" class="btn btn-outline-dark">
                                    <i class="fa-solid fa-backward"></i>
                                </a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
