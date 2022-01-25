@extends('layouts.auth')
@section('content')
<div class="container mt-auto">
    <div class="header mt-auto">
        <h4 class="text-center" style="margin-top: 5rem;">Register</h4>
    </div>
    <div class="error"></div>
    <div class="form">
        <form action="/register" method="POST">
            @csrf
            @if($errors->has('message'))
            <div class="error">{{ $errors->first('message') }}</div>
            @endif
            <div class="form-group text-center">
                <label for="name" style="margin-top: 3rem; margin-bottom: 1rem;">Your Name:</label>
                <input type="name" class="form-control mb-3" id="name" name="name" value="" required>
            </div>
            <div class="form-group text-center">
                <label for="email" style="margin-bottom: 1rem;">Email:</label>
                <br />
                <input type="email" class="form-control mb-3" id="email" name="email" value="" required>
            </div>
            <div class="form-group text-center">
                <label for="password" style="margin-bottom: 1rem;">Password :</label>
                <input type="password" class="form-control" id="password" name="password" value="" required>
            </div>
            <input class="input-single button text-center" style="margin-top: 5rem;" type="submit" value="Register">
        </form>
        <div class="text-center">
            <a href="#">
                Already Have an Account? <span class="text-bold">Sign In</span>
            </a>
        </div>
    </div>
</div>
@endsection