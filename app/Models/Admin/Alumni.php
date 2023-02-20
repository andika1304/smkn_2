<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;


    protected $table = 'alumni';
    
    protected $fillable = [
        'id_alumni',
        'nama',
        'jurusan',
        'angkatan',
        'jk',
        'foto',
    ];

}
