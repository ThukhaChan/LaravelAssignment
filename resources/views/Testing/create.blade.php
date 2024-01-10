@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                      <h1 class="text-center">Movie Store</h1>
                        <form method="POST" action="{{ route('testing.store') }}">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name<small class="text-danger">*</small></label>
                                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" value="{{old('name')}}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Age<small class="text-danger">*</small></label>
                                <input type="age" name="age" class="form-control @error('age')is-invalid @enderror" value="{{old('age')}}">
                                @error('age')
                                    <div class="text-danger">{{ $message }}></div>
                                @enderror
                            </div>
                            <div class="mb-4 ">
                                <a href="{{ route('testing.index') }}" class="btn btn-outline-dark m-left">
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
