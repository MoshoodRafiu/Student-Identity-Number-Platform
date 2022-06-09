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
                        <h3 class="mb-0">Register User</h3>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" class="form" role="form" method="POST" action="{{ route('user.store') }}">
                            @csrf
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="first_name">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="first_name" id="first_name" type="text" placeholder="Abdulmalik">
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
                                    <input class="form-control" name="last_name" id="last_name" type="text" placeholder="Adebayo">
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
                                    <input class="form-control" name="middle_name" id="middle_name" type="text" placeholder="Adeola">
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
                                    <input class="form-control" name="email" id="email" type="email" placeholder="milikiadbay@gmail.com">
                                    @error('email')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="nationality">Nationality</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="nationality" id="nationality" type="text" placeholder="Nigerian">
                                    @error('nationality')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label form-control-label" for="phone">Phone</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="phone" id="phone" type="text" placeholder="09039561875">
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
                                        <input type="radio" id="male" name="gender" value="Male">
                                        <label for="male">Male</label><br>
                                    </div>
                                    <div class="ms-3">
                                        <input type="radio" id="female" name="gender" value="Female">
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
                                    <input class="form-control" name="address" id="address" type="text" placeholder="Epe,Lagos">
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
                                    <button type="submit" class="btn btn-sm btn-primary">Register</button>
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
