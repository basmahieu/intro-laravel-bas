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
        <form action="#" method="GET">


            <!-- Title -->
            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" name="name" id="name" class="form-control" value="">
            </div>

            <!-- Author -->
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" name="firstName" class="form-control" id="fistName" placeholder="First Name" required>
            </div>

            <!-- Content -->
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="4" value=""></textarea>
            </div>

            <button name="submit" type="submit" class="button btn btn-primary">Hit me!</button>
    </div>
</div>
@endsection


@section ('reviews')
<div class="container">

    <div class="form  bg-light  p-4 mt-4 rounded shadow p-3 scale-in-hor-center">

        <div class="review">
            <ul>
                @foreach ($reviews as $review)
                <li>
                    <p>{{ $review->title}}</p>
                    <p>{{ $review->email}}</p>
                    <p>{{ $review->comment}}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection