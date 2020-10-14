<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Reviews;

class ReviewsController
{
    public function show()
    {
        $posts = Reviews::all();
        return view('reviews', ['posts' => $posts]);
    }
}
