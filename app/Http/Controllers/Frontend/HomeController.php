<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni;
use App\Models\Admin\Berita;
use App\Models\Admin\jurusan;
use App\Models\Admin\company;
use App\Models\Admin\kontak;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "berita" =>Berita::all(),
            "jurusan" =>jurusan::all(),
            "company" =>company::all(),
            "kontak" =>Kontak::all(),
            "alumni" => Alumni::all()
        ];
        return view('frontend.main', compact('data'));
    }
}
