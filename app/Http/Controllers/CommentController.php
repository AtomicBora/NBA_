<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentReceived;
use App\Models\Team;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Team $team, CreateCommentRequest $request)
    {
        $data = $request->validated();
        $comment = $team->comments()->create($data);
        
        Mail::to($team->email)->send(new CommentReceived(auth()->user(), $comment));
        return back();
    }
}
