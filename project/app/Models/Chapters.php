<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapters extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'chapters';

    protected $fillable = [
        'id',
        'comic_book_id',
        'user_id',
        'title',
    ];
}
