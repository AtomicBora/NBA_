<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;
    private $author;
    private $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $author, Comment $comment)
    {
        $this->author = $author;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('You have a new comment')
                ->view('emails.comment-received')
                ->with([
                    'author' => $this->author->name,
                    'comment' => $this->comment->content
                ]);
    }
}
