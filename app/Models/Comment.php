<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $fillable = ['subject', 'body', 'article_id'];

//    Взаимоотношение со статьёй
    public function article() {
        return $this->belongsTo(Article::class);
    }
}
