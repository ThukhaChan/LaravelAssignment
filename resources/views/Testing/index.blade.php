@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-shadow">
                <div class="card-body">
                    <table class="table table-striped" style="color: rgb(9, 255, 0); --bs-table-striped-color: rgb(9, 255, 0)">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($testings as $testing )
                            
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $testing->name }}</td>
                                    <td>{{ $testing->age }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-outline-warning">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-outline-danger">
                                                <i class="fa-solid fa-ban"></i>
                                            </a>
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
</div>
@endsection
