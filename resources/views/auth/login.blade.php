<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <p class="login-text">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-lock fa-stack-1x"></i>
          </span>
        </p>
        <input type="email" name="email" class="login-username @error('email') is-invalid @enderror" autofocus="true" required="true" placeholder="Email" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" name="password" class="login-password @error('password') is-invalid @enderror" required="true" placeholder="Password" />
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="submit" name="Login" value="Login" class="login-submit" />
      </form>
      <a href="{{ route('password.request') }}" class="login-forgot-pass">Forgot password?</a>
      <div class="underlay-photo"></div>
      <div class="underlay-black"></div> 
</body>
</html>