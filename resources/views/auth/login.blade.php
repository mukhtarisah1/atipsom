@extends('layouts.loginlayout')
  
@section('content')
<style>
  .image-container {
    width: 100%;
    height: 340px;
    overflow: hidden;
  }

  .image-container img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  /* Media query for screens with a maximum width of 768px (typical for mobile devices) */
  @media (max-width: 768px) {
    .image-container {
      height: 80px; /* Adjust the container height for smaller screens */
    }
  }
</style>

<main class="auth">
<div class="image-container">
  <img src="assets/ATIPSOMLogin.jpeg" alt="">
</div>
      <header>
     
        
      </header><!-- form -->
      <form class="auth-form" method="POST" action="{{ route('login') }}">
        @csrf
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus> <label for="inputUser">Email</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
            
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="Password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"> <label for="inputPassword">Password</label>
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
         
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember-me"> <label class="custom-control-label" for="remember-me">Keep me signed in</label>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <div class="text-center pt-3">
          <a href="auth-recovery-username.html" class="link">Forgot Username?</a> <span class="mx-2">·</span> <a href="auth-recovery-password.html" class="link">Forgot Password?</a>
        </div><!-- /recovery links -->
      </form><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © 2023 All Rights Reserved.
      </footer>
    </main><!-- /.auth -->
@endsection
    