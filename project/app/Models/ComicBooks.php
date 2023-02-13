<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComicBooks extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'comic_books';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'count_chapters',
        'count_views',
        'author',
        'status',
    ];

    public function chapters(){
        return $this->hasMany(Chapters::class, 'comic_book_id');
    }
}
