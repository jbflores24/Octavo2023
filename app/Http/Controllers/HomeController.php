<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function __invoke(){
        $ids = auth()->user()->followings->pluck('id')->toArray();
        $post = Post::whereIn('user_id', $ids)->latest()->paginate(4);
        return view('home',[
            'posts' => $post
        ]);
    }
}
