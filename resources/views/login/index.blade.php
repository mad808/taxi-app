@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    {{-- Success Message For Driver Register --}}
    @if (session()->has('success'))
        <script>
            Swal.fire(
                '{{ __("messages.Good job!") }}',
                '{{ session('success') }}',
                'success'
            )
        </script>
    @endif

    @if (session()->has('loginError'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ __("messages.Oops...") }}',
                text: '{{ session('loginError') }}'
            })
        </script>
    @endif

    <!-- Start: Login Form Clean -->
    <section class="login-clean" style="padding-top: 180px;">
        <form action="/login" method="POST">
            @csrf

            <div class="illustration">
                <h1 style="font-size: 30px;color: rgb(197,173,50);">{{ __('messages.Admin Login') }}</h1><i class="la la-taxi"
                    style="color: rgb(254,209,54);"></i>
            </div>

            <div class="mb-3">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"
                    placeholder="{{ __('messages.Username') }}" autofocus required value="{{ old('username') }}">

                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <input type="password" name="password" placeholder="{{ __('messages.Password') }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(254,209,54);">{{ __('messages.Log In') }}</button>
            </div>

            <a class="already" href="/register">{{ __("messages.You dont have an account yet? Register here.") }}</a>
        </form>
    </section>
    <!-- End: Login Form Clean -->
@endsection