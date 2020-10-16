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
        <form action="/reviews" method="POST">
            @csrf

            <!-- Title -->
            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="" placeholder="title">
            </div>

            <!-- Stars -->
            <div class="my-2">
                <select name="score" id="score" class="test">
                    <option value="⭐️">⭐️</option>
                    <option value="⭐️⭐️">⭐️⭐️</option>
                    <option value="⭐️⭐️⭐️">⭐️⭐️⭐️</option>
                    <option value="⭐️⭐️⭐️⭐️">⭐️⭐️⭐️⭐️</option>
                    <option value="⭐️⭐️⭐️⭐️⭐️">⭐️⭐️⭐️⭐️⭐️</option>
                </select>
            </div>

            <!-- Author -->
            <div class="form-group">
                <label for="email">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
            </div>

            <!-- Content -->
            <div class="form-group">
                <label for="comment">Content:</label>
                <textarea class="form-control" id="comment" name="comment" rows="4" value=""></textarea>
            </div>

            <button value="Submit" name="submit" type="submit" class="button btn btn-primary">Hit me!</button>
    </div>
</div>
@endsection


@section ('reviews')
<div class="container">


    <div class="review">

        @foreach ($reviews as $review)
        <div class="form  bg-light  p-4 mt-4 rounded shadow p-3 scale-in-hor-center">
            <h4>{{ $review->title}}</h4>
            <h5>Rating: {{ $review->score}}</h5>
            <p class="names">{{ $review->name}}</p>
            <hr>
            <p>{{ $review->comment}}</p>
        </div>
        @endforeach



    </div>
</div>
@endsection