<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PostedController extends Controller
{
    public function portfolio()
    {
        $post = new Portfolio();


        return view('home', [
            'data' => $post->with('images')->get()
        ]);
    }
    public function ShowOnePortfolio(int $id)
    {
        $post = new Portfolio();
        return view('portfolio', [
            'data' => $post->with('images')->find($id)
            ]);
    }
}
