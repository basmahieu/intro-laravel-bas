<?php

namespace App\Http\Controllers;

use App\Models\Review;


class ReviewsController extends Controller
{
    public function show()
    {
        $reviews = Review::latest()->get();

        return view('reviews', ['reviews' => $reviews]);
    }

    // public function create()
    // {
    //     $reviews = Review::all();
    //     return view('reviews.create');
    // }

    public function store()
    {
        $review = new Review();

        $review->name = request('name');
        $review->email = request('email');
        $review->comment = request('comment');

        $review->save();

        return redirect('/reviews');
    }
}
