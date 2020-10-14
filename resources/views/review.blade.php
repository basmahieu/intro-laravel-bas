@extends ('layout/layout')

@section('main-title', 'YUMI - REVIEWS')
@section('title', 'REVIEWS')

@section('image')
<img class="kanji mx-auto d-block  " src="img/japan-kanji-review.png" alt="Kanji">
@endsection

@section ('content')


<div class="container">

    <h2>5 star reviews!</h2>



    <!-- Form -->
    <div class="form  bg-light  p-4 mt-4 rounded shadow p-3 scale-in-hor-center">
        <form action="">

            <!-- Title -->
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="">
                <div class="error">
                </div>
            </div>

            <!-- Author -->
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control" value="">
                <div class="error">
                </div>
            </div>

            <!-- Content -->
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="4" value=""></textarea>
                <div class="error">
                </div>
            </div>



            <button name="submit" type="submit" class="button btn btn-primary">Hit me!</button>
    </div>
</div>
@endsection