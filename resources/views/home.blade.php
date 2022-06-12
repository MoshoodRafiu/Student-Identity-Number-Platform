@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="{{ route('user.register') }}" class="btn btn-sm btn-outline-primary">Register</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <img src="{{ asset('assets/photos/nimc_logo.png') }}" alt="Nimc Logo" width="70px">
                    <div>
                        <h1 class="text-center pb-3">Search for Registered Users</h1>
                        <div class="d-flex justify-content-between">
                            <input type="search" class="form-control w-100">
                            <button class="btn btn-sm ms-3 btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Table --}}

        <div class="mt-5">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Middle name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>State</th>
                        <th>Region</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key=>$user )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user['nin'] }}</td>
                            <td>{{ $user['first_name'] }}</td>
                            <td>{{ $user['last_name'] }}</td>
                            <td>{{ $user['middle_name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['phone'] }}</td>
                            <td>{{ $user['gender'] }}</td>
                            <td>{{ $user['state'] }}</td>
                            <td>{{ $user['region'] }}</td>
                            <td class="d-flex"><a href="{{route('user.edit', [$user['id']])}}" class="btn btn-sm btn-primary me-2">Edit</a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
