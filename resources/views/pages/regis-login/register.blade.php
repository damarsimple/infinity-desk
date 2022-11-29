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
                <label for="birth_date" style="margin-bottom: 1rem;">Birth Date:</label>
                <br />
                <input type="birth_date" class="form-control mb-3" id="birth_date" name="birth_date" value="" required>
            </div>
            <div class="form-group text-center">
                <label for="sex" style="margin-bottom: 1rem;">Sex:</label>
                <br />
                <select name="sex" id="sex"  class="form-control mb-3" required>
                    <option selected></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group text-center">
                <label for="phone_number" style="margin-bottom: 1rem;">Phone Number:</label>
                <br />
                <input type="phone_number" class="form-control mb-3" id="phone_number" name="phone_number" value="" required>
            </div>
            <div class="form-group text-center">
                <label for="country" style="margin-bottom: 1rem;">Country:</label>
                <br />
                <input type="country" class="form-control mb-3" id="country" name="country" value="" required>
            </div>
            <div class="form-group text-center">
                <label for="language" style="margin-bottom: 1rem;">Language:</label>
                <br />
                <input type="language" class="form-control mb-3" id="language" name="language" value="" required>
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