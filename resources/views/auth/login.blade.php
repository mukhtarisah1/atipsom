@extends('layouts.loginlayout')
  
@section('content')
<style>
  *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    background: linear-gradient(
      45deg,
      rgba(9, 151, 38, 0.3),  /* Greenish color with reduced blue and increased green */
      rgba(9, 151, 38, 0.3)
    ),url('assets/images/scott.jpg');
    background-size:cover;
  }
  .form-div{
    width: 34%;
    height:100%;
    background: white;
    padding:20px;
    position: absolute;
    right:0;
  }
  .main{
    height:100%;
  }
  .footer{
    position:absolute;
    bottom: 10px;
    margin:20px;
    color: #fff;
    
  }
  .name{
    position:absolute;
    bottom: 30px;
    margin:50px 20px;
    color:#fff;
    font-size: 1.6em
  }

</style>

<main class="main">

      <header>
     
        
      </header><!-- form -->
      <div class= "form-div">
        <div class="d-flex mb-3" >
        <img class="img-fluid mt-5" src="{{url('assets/incident.png')}}" alt="incident management" height="200" width="">
        </div>
        
        <form class="" method="POST" action="{{ route('login') }}">
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
          <div class="text-center pt-1">
             <a href="/password/reset" class="link">Forgot Password?</a>
          </div><!-- /recovery links -->
        </form><!-- /.auth-form -->
       <div class="text-center">
          <img class="rounded" src="{{url('assets/nhis.jpg')}}" alt="" height="40" width="100">
       </div>
      </div>
      <!-- copyright -->
      
      <div class="name footer">
        incident Management Solution
      </div>
      <footer class="footer">
           ©2024 All Rights Reserved.
      </footer>
    </main><!-- /.auth -->
@endsection
    