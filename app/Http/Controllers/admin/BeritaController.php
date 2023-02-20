<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Berita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get berita
        $berita = Berita::get();

        //render view with berita
        return view('admin.pages.berita.berita', compact('berita'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.pages.berita.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {

        //validate form
        $this->validate($request, [
            'foto_b' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_b' => 'required|min:5',
            'desk_b' => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('foto_b');

        // die($image->getClientOriginalName());

        if ($image->storeAs('berita/', $image->hashName(), 'public')) {
            //create post
            Berita::create([
                'foto_b'     => $image->hashName(),
                'nama_b'     => $request->nama_b,
                'desk_b'   => $request->desk_b
            ]);
        } else {
            echo "gagal";
        }


        //redirect to index
        return redirect('/web-admin/berita')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function edit(Berita $berita)
    {
        
    }
    public function update(Request $request, Berita $berita)
    {
        $this->validate($request, [
            'foto_b' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_b' => 'required|min:5',
            'desk_b' => 'required|min:10'
        ]);
        if ($request->hasFile('foto_b')) {
            $image = $request->file('foto_b');
            $image->storeAs('public/berita/', $image->hashName());

            Storage::delete(['public/berita/' . $berita->foto_b]);

            $berita->update([
                'foto_b' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'nama_b' => 'required|min:5',
                'desk_b' => 'required|min:10'
            ]);
        } else {
            $berita->update([
                'nama_b' => 'required|min:5',
                'desk_b' => 'required|min:10'
            ]);
        }
    }
    public function destroy($id, Berita $berita)
    {

        Storage::delete('pubic/berita/'.$berita->foto_b);
        $hapus = $berita->where('id','=',$id)->delete();
        if ($hapus) {
            return redirect('/web-admin/berita')->with(['success' => 'DATA BERHASIL DI HAPUS!']);
        }else {
            return redirect('/web-admin/berita')->with(['error' => 'DATA GAGAL DI HAPUS']);
        }
    }
}
