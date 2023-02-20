<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $table = 'company';

    public $timestamp = false;

    protected $fillable = [
        'foto_b',
        'nama_c',
        'co_',
    ];

}
