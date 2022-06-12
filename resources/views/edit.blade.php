@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <span class="anchor" id="formUserEdit"></span>
                <!-- form user info -->
                <div class="card card-outline-secondary">
                    <div class="card-header">
                        <h3 class="mb-0">Edit User</h3>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" class="form" role="form" method="POST" action="{{ route('user.update', $user['id']) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="my-3 text-center">
                                <img src="{{ asset($user['avatar']) }}" width="100px" alt>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="avatar">Photo</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="avatar" id="avatar" type="file" placeholder="">
                                    @error('avatar')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="first_name">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="first_name" value="{{ old('first_name') ?? $user['first_name']}}" id="first_name" type="text" placeholder="">
                                    @error('first_name')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="last_name">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="last_name" value="{{ old('last_name') ?? $user['last_name']}}" id="last_name" type="text" placeholder="">
                                    @error('last_name')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="middle_name">Middle name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="middle_name" value="{{ old('middle_name') ?? $user['middle_name']}}" id="middle_name" type="text" placeholder="">
                                    @error('middle_name')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="email">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="email" id="email" value="{{ old('email') ?? $user['email']}}" type="email" placeholder="">
                                    @error('email')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="state">State</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="state" value="{{ old('state') ?? $user['state']}}" id="state" type="text" placeholder="">
                                    @error('state')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="region">Region</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="region" value="{{ old('region') ?? $user['region']}}" id="region" type="text" placeholder="">
                                    @error('region')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="phone">Phone</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="phone" id="phone" value="{{ old('phone') ?? $user['phone']}}" type="text" placeholder="">
                                    @error('phone')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 align-items-center">
                                <label class="col-lg-3 col-form-label form-control-label" for="gender">Gender</label>
                                <div class="col-lg-9 d-flex">
                                    <div>
                                        <input type="radio" id="male" name="gender" value="Male" @if ($user['gender'] === 'Male') checked @endif>
                                        <label for="male">Male</label><br>
                                    </div>
                                    <div class="ms-3">
                                        <input type="radio" id="female" name="gender" value="Female" @if ($user['gender'] === 'Female') checked @endif>
                                        <label for="female">Female</label><br>
                                    </div>
                                </div>
                                @error('gender')
                                <span class="text-danger small" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="address">Address</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="address" id="address" value="{{ old('address') ?? $user['address']}}" type="text" placeholder="">
                                    @error('address')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-sm btn-primary">Update User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /form user info -->
            </div>
        </div>

        </form>
    </div>
</div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {


        })
    </script>
@endsection
