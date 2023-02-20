<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $table = 'keahlian';

    // ini buat disable created_at sama updated_at
    // pada saat insert atau update
    public $timestamps = false;


    protected $fillable = [
        'foto_k',
        'nama_k',
        'desk_k',
    ];

}
