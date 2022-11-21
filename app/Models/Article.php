<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author',
        'text',
    ];

    public function article() {
        return $this->hasMany('Comment');
    }
}
