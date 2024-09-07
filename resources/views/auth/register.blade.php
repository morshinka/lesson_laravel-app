@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <label for="frist_name">Username</label>
                        <input id="frist_name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" autofocus>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="password" class="d-block">Password</label>
                        <div class="input-group">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-eye" id="togglepassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="password" class="d-block">Konfirmasi Password</label>
                        <div class="input-group">
                            <input id="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-eye" id="togglepassword_confirmation"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let password = document.getElementById('password');
        let togglepassword = document.getElementById('togglepassword');
        togglepassword.onclick = function() {
            if (password.type === 'password') {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        }

        let password_confirmation = document.getElementById('password_confirmation');
        let togglepassword_confirmation = document.getElementById('togglepassword_confirmation');
        togglepassword_confirmation.onclick = function() {
            if (password_confirmation.type === 'password') {
                password_confirmation.type = 'text';
            } else {
                password_confirmation.type = 'password';
            }
        }
    </script>
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
