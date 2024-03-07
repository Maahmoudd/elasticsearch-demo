<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {
        $user = Auth::user();
        Post::create(array_merge($request->validated(), ['user_id' => $user->id]));
        return redirect('/');
    }
}
