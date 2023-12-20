@extends('base')

@section('content')
<div class="container col-md-5 offset-md-3 mt-5">
    <h1 class="text-center">Request Movie</h1>

    <form action="{{'/movies/request'}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group mb-3 mt-4">
            <input type="text" name="title" id="title" class="form-control" placeholder="Title">
        </div>

        <div class="form-group mb-3">
            <input type="number" name="year_released" id="year_released" class="form-control" placeholder="Year Released">
        </div>

        <div class="flex-grow-1 d-flex justify-content-end mt-3">
            <button class="btn btn-danger px-4 request-btn" type="submit">Send</button>
            <a href="{{ url('/movies') }}" class="btn btn-dark ml-5 cancel-btn">Cancel</a>
        </div>
    </form>
</div>
@endsection

<style scoped>
    .request-btn {
        width: 125px;
        height: 40px;
        margin-top:15px;
        margin-right: 5px;
        background-color: red;
    }

    .cancel-btn {
        width: 125px;
        height: 40px;
        margin-top:15px;
    }
</style>
