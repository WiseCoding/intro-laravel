<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Reviews;

class ReviewsController
{
    public function index()
    {
        $posts = Reviews::orderBy('id', 'DESC')->get()->take(10);
        return view('reviews', ['posts' => $posts]);
    }
    public function show()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store()
    {
        request()->validate([
            'rating' => 'required',
            'name' => ['required', 'min:2', 'max:100']
        ]);

        $reviews = new Reviews();
        $reviews->rating = request('rating');
        $reviews->name = request('name');
        $reviews->message = request('message');
        $reviews->save();

        return redirect('/reviews');
    }
    public function edit()
    {
        //
    }
    public function update()
    {
        //
    }
    public function destroy()
    {
        //
    }
}
