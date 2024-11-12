@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Properties</h1>
        <a 
        href="{{route('properties.create')}}" 
        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Property</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Property Table</h6>
                </div>
                @session('success')
                    <div class="alert alert-success" role="alert"> {{ $value }} </div>
                @endsession
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Property Id</th>
                                    <th>Property Image</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Bed</th>
                                    <th>Bath</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($properties as $property)
                                    <tr>
                                        <td>{{ $property->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $property->propertyImage) }}" width="100px">
                                        </td>
                                        <td>{{ $property->propertyName }}</td>
                                        <td>{{ $property->location }}</td>
                                        <td>{{ $property->bed }}</td>
                                        <td>{{ $property->bath }}</td>
                                        <td>
                                            <form action="{{ route('properties.destroy', $property->id) }}" method="POST">  
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-primary btn-sm" href="{{ route('properties.edit', $property->id) }}">
                                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">There are no data.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
@endsection