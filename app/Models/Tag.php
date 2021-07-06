<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $fillable = ['label'];

    public $timestamps = false;

    public function  articles() {
        return $this->belongsTo(Article::class);
    }
}
