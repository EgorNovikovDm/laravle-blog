<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug'];
    protected $guarded = [];


//    Отношение к коментариям 1 к многим
    public function comments() {
        return $this->hasMany(Comment::class);
    }

//  Отношение к статистике 1 к 1
    public function state() {
        return $this->hasOne(State::class);
    }

//    Отношение с тегами многие ко многим
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
