@extends('dashboard.layouts.app')

@section('content')

    <div class="container">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Property Inquery </h1>
            {{-- <a 
            href="{{route('properties.create')}}" 
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Property</a> --}}
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- DataTales Example -->
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Property Order Table</h6>
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
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($inquiries as $inquiry)
                                        <tr>
                                            <td>{{ $inquiry->property_id }}</td>
                                            <td>{{ $inquiry->full_name }}</td>
                                            <td>{{ $inquiry->email }}</td>
                                            <td>{{ $inquiry->phone }}</td>
                                            <td>{{ $inquiry->message }}</td>
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