<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

protected $fillable = [
        'name',
        'description',
        'image',
        'category_id',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
}
