@extends('base')

@section('content')

    <div class="background-overlay"></div>

    <div class="logo-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Logonetflix.png" alt="Netflix Logo" style="height: 60px; width: auto;">
    </div>

    <div class="login-container col-md-4 offset-md-3 border border-dark rounded mx-auto px-4 py-4">

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h1 class="text-start text-white">Sign In</h1>

    <form action="{{'/login'}}" method="POST">
        {{csrf_field()}}

        <div class="container">
            <div class="form-group mb-3 mt-4">
                <input type="email" name="email" id="email" class="form-control input-form" placeholder="Email">
            </div>

            <div class="form-group mb-3">
                <input type="password" name="password" id="password" class="form-control input-form" placeholder="Password">
            </div>

                <button class="btn btn-danger px-5 login-btn" type="submit">Sign in</button>

                <div class="flex-grow-1 mt-5">
                    <p style="color: #a19696">New to Netflix?
                    <a href="{{'/register'}}" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Sign up now.</a>
                    <p>
                </div>

        @method('POST')
    </form>
</div>

<style scoped>
    .login-container {
        background-color: rgba(0, 0, 0, 0.7);
        margin-top: 150px;
        position: relative;
    }

    .input-form {
        width: 350px;
        height: 45px;
    }

    .login-btn {
        width: 350px;
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
@endsection
