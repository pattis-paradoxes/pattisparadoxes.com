<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
