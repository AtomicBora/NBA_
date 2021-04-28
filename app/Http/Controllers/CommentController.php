<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Team;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Team $team, CreateCommentRequest $request)
    {
        $data = $request->validated();
        $team->comments()->create($data);
        
        return back();
    }
}
