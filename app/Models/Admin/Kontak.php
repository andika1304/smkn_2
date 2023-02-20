<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';

    public $timestamps = false;

    protected $fillable = [
        'sekolah',
        'no',
        'email',
        'alamat'
    ];

}
