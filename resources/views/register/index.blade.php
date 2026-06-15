@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <!-- Start: Registration Form with Photo -->
    <section class="register-photo" style="margin-top: 60px;">
        <!-- Start: Form Container -->
        <div class="form-container">
            <!-- Start: Image -->
            <div class="image-holder"></div>
            <!-- End: Image -->
            <form action="register" method="POST">
                @csrf

                <h2 class="text-center" style="margin-top: -18px;"><strong>{{ __('messages.Create') }}</strong> {{ __('messages.an account.') }}</h2>
                <p class="text-center" style="margin-top: 1px;">{{ __('messages.Partner with us to drive your own livelihood and more.') }}<br>
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>{{ __("messages.Whoops!") }}</strong> {{ __("messages.There were some problems with your input.") }}<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <input type="email" name="email" placeholder="{{ __('messages.Email') }}"
                        class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" name="username" placeholder="{{ __('Username') }}"
                        class="form-control @error('username') is-invalid @enderror" required
                        value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="{{ __('Password') }}"
                        class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" name="confirm_password" placeholder="{{ __('Password (repeat)') }}"
                        class="form-control @error('confirm_password') is-invalid @enderror" required>
                    @error('confirm_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <p><strong>{{ __('messages.Select Car You Have') }}</strong><br></p>


                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" required>{{ __('messages.I agree to the license terms.') }}</label>
                    </div>
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary d-block w-100" type="submit" name="signUp-button"
                        style="background: rgb(254,209,54);" value="{{ __('Sign Up') }}">
                </div>
                <a class="already" href="/login">{{ __('messages.Already have an account? Login here.') }}</a>
            </form>
        </div>

        <!-- End: Form Container -->
    </section>
    <!-- End: Registration Form with Photo -->
@endsection