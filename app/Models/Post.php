<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'contoh';
    protected $fillable = [
        'image',
        'judul',
        'isi',
    ];

}
