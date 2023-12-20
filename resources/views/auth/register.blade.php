@extends('base')

@section('content')

<div class="background-overlay"></div>

<div class="logo-container">
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Logonetflix.png" alt="Netflix Logo" style="height: 60px; width: auto;">
</div>

<div class="signup-container col-md-4 offset-md-3 border border-dark rounded mx-auto px-4 py-4">
    <h1 class="text-start text-white">Create Account</h1>

    <form action="{{'/register'}}" method="POST">
        {{csrf_field()}}

    <div class="container">
        <div class="form-group mb-3 mt-4">
            <input type="text" name="name" id="name" class="form-control input-form" placeholder="Username">
        @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
        </div>

        <div class="form-group mb-3">
            <input type="email" name="email" id="email" class="form-control input-form" placeholder="Email">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <input type="password" name="password" id="password" class="form-control input-form" placeholder="Password">
        @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
        </div>

        <div class="form-group mb-3">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-form" placeholder="Confirm Password">
        </div>

        <button class="btn btn-danger px-5 signup-btn" type="submit">Get Started -></button>

        <div class="flex-grow-1 mt-5">
            <p style="color: #a19696">Already have an account?
            <a href="{{'/'}}" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Log in now.</a>
            <p>
        </div>
    </form>
</div>
@endsection

<style scoped>
    .signup-container {
        background-color: rgba(0, 0, 0, 0.7);
        margin-top: 90px;
        position: relative;
    }

    .input-form {
        width: 200px;
        height: 45px;
    }

    .signup-container .signup-btn  {
        width: 358px;
        height: 45px;
        margin-top:15px;
        background-color: red;
    }

    body {
        position: relative;
        margin: 0;
        background-image: url('https://assets.nflxext.com/ffe/siteui/vlv3/ca6a7616-0acb-4bc5-be25-c4deef0419a7/5e37ba12-c915-458f-8215-9e73c4961cbc/PH-en-20231211-popsignuptwoweeks-perspective_alpha_website_small.jpg');
    }

    .background-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .logo-container {
        position: absolute;
        top: 20px;
        left: 20px;
    }
</style>
