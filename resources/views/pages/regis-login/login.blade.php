@extends('layouts.app')
@section('content')
<section class="section-login">
    <div class="form-login">
      <div class="row g-0">
        <div class="col-md-4 d-none d-md-block">
          <img src="images/img_pendamping_login.png" alt="..." />
        </div>
        <div class="col-md-8">
          <div class="login-body bg-white h-100">
            <h5 class="login-title text-center">Login</h5>
            <div class="login-inner">
              <div class="form-group pb-4">
                <label class="pb-2" for="email">Email Address :</label>
                <br />
                <input type="email" class="form-control" id="email" name="email" value="" required />
              </div>
              <div class="form-group">
                <label class="pb-2" for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" value="" required />
              </div>
              <button type="submit" class="btn btn-login">Login</button>
              <br />
              <a href="#" class="sign-up">
                <p>Don't have an account yet? <span>Sign Up</span></p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection