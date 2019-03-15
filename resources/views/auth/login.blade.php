<style>
body{
    background-image:url('img/1.jpg');
    background-size:cover;
    background-attachment:fixed;
    background-position:center;
    box-shadow: 10px 10px 25px black;
}
.login{
    border-radius:50px;
}
</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="login">
                    <!-- Default form login -->
                    <form class="text-center  p-5" method="post" action="{{route('login')}}">
                    @csrf

                        <p class="h4 mb-4">Sign in</p>

                        <!-- Email -->
                        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <!-- Password -->
                        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        

                        <!-- Sign in button -->
                        <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <!-- Register -->
                        <p>Not a member?
                            <a href="register">Register</a>
                        </p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Default form login -->
@endsection