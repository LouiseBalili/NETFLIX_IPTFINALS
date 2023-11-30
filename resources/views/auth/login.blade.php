@extends('base')

@section('content')

<div class="container col-md-6 offset-md-3 mt-5">

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h1 class="text-start">Sign In</h1>

    <form action="{{'/login'}}" method="POST">
        {{csrf_field()}}

        <div class="form-group mb-3 mt-4">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email or phone number" style="width: 350px; height: 45px;">
        </div>

        <div class="form-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" style="width: 350px; height: 45px;">
        </div>

            <button class="btn btn-danger px-5" type="submit" style="width: 350px; height: 45px; margin-top:15px; background-color: red">Sign in</button>

            <div class="flex-grow-1 mt-5">
                <a href="{{'/register'}}" style="color: gray; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Sign up now.</a>
            </div>

        @method('POST')
    </form>
</div>
@endsection
