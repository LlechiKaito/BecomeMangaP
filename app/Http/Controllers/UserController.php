<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show ( User $user )
    {
        return view('users.show', [
            'user' => $user,
        ]);
        // return view('posts.index', [
        //     'posts' => $post->getPaginateByLimit(),
        //     'questions' => $questions['questions'],
        // ]);
    }
}
