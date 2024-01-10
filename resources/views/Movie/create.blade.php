@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                      <h1 class="text-center">Movie Store</h1>
                        <form method="POST" action="{{ route('movie.store') }}">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Title<small class="text-danger">*</small></label>
                                <input type="text" name="title" class="form-control @error('title')is-invalid @enderror" value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Director<small class="text-danger">*</small></label>
                                <input type="director" name="director" class="form-control @error('director')is-invalid @enderror" value="{{old('director')}}">
                                @error('director')
                                    <div class="text-danger">{{ $message }}></div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Year<small class="text-danger">*</small></label>
                                <input type="year" name="year" class="form-control @error('year')is-invalid @enderror" value={{old('year')}}>
                                @error('year')
                                   <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label  class="form-label">Genre<small class="text-danger">*</small></label>
                              <input type="genre" name="genre" class="form-control @error('genre')is-invalid @enderror" value={{old('genre')}}>
                              @error('genre')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Rating<small class="text-danger">*</small></label>
                            <input type="rating" name="rating" class="form-control @error('rating')is-invalid @enderror" value={{old('rating')}}>
                            @error('rating')
                               <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="mb-4 ">
                                <a href="{{ route('movie.index') }}" class="btn btn-outline-dark m-left">
                                    <i class="fa-solid fa-backward"></i>
                                </a>
                                <button class="btn btn-outline-primary ">Add</button>
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
