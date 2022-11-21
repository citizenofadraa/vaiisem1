<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'article',
        'text',
    ];

    public function user() {
        return $this->belongsTo('User');
    }

    public function article() {
        return $this->belongsTo('Article');
    }
}
