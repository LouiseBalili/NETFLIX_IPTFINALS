@extends('base')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="mb-0">Create TV Show</h2>
</div>
    <hr class="mt-2 mb-0">

    <form action="{{ '/tvshows' }}" method="POST">
        {{ csrf_field() }}

    <div class="container mt-5 d-flex justify-content-center">

        <!-- Left column for Add TV Show Images -->
        <div class="mx-5">
            <p>Add TV Show Image</p>

            <div>
                <label for="dropzone-file" class="file-input-label">
                    <div class="file-input-content">
                        <div class="border border  mb-3 svg-img">
                            <svg class="mb-4 col-md-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                        </div>
                        <p>SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input type="file" name="tvshow_pic" id="tvshow_pic" class="form-control">
                </label>
            </div>
        </div>

        <!-- Right column for the form -->
        <div class="ms-4 col-md-5 offset-md-5 mt-5">

            <div class="form-group mb-3">
                <label for="title" class="text-secondary ms-2"><i>Title</i></label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="genres" class="text-secondary ms-2"><i>Genres</i></label>
                <input type="text" name="genres" id="genres" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="release_date" class="text-secondary ms-2"><i>Release Date</i></label>
                <input type="date" name="release_date" id="release_date" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="summary" class="text-secondary ms-2"><i>Summary</i></label>
                <textarea name="summary" id="summary" class="form-control summ-form"></textarea>
            </div>

            <div class="flex-grow-1 d-flex justify-content-end mt-3">
                <button class="btn btn-danger px-4 add-btn" type="submit">Add</button>
                <a href="{{ url('/tvshows') }}" class="btn btn-dark ml-5 cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</form>
@endsection

<style scoped>
    .add-btn {
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

    .svg-img {
        width: 350px;
        height: 275px;
        text-align: center;
        display: flex;
        justify-content: center;
    }
</style>
