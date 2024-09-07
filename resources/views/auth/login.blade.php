@extends('layouts.auth')

@section('title', 'Login')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Login</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid

                    @enderror" name="email"
                        tabindex="1" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                        <div class="float-right">
                            <a href="{{ route('password.request') }}" class="text-small">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" tabindex="2" required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-eye" id="togglepassword"></i>
                            </span>
                        </div>
                    </div>

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
            </form>

        </div>
    </div>
    <div class="text-muted mt-5 text-center">
        Don't have an account? <a href="{{ route('register') }}">Create One</a>
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
    </script>
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
