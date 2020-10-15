<?php

namespace App\Http\Controllers;

use App\Models\Review;


class ReviewsController extends Controller
{
    public function show()
    {
        return view('reviews', ['reviews' => Review::all()]);
    }
}
