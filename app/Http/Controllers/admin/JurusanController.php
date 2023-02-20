<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\jurusan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    public function uploadGambar()
    {
        // untuk upload gambar
    }
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $jurusan = Jurusan::get();
        return view('admin.pages.jurusan.jurusan', compact('jurusan'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.pages.jurusan.create');
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
            'foto_k' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_k' => 'required|min:3',
            'desk_k' => 'required|min:10'
        ]);
        $image = $request->file('foto_k');
        if ($image->storeAs('jurusan/', $image->hashName(), 'public')) {
            $storeJurusan = Jurusan::create([
                'foto_k'     => $image->hashName(),
                'nama_k'     => $request->nama_k,
                'desk_k'   => $request->desk_k
            ]);
            if ($storeJurusan) {
                //
                return redirect('/web-admin/jurusan')->with(['success' => 'data berhasil disimpan!']);
            }else {
                // kalo gagal masuk ke database
                return redirect()->back()->withInput()->withErrors('data gagal disimpan!');
            }

        } else {
            echo "gagal upload gambar";
        }

    }

    public function edit(Jurusan $jr)
    {

    }

    public function update(Request $request, Jurusan $jurusan)

    {
        $this->validate($request, [
            'foto_k' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_k' => 'required|min:3',
            'desk_k' => 'required|min:10'
        ]);

        if ($request->hasFile('')) {
            $image = $request->file('');
            $image->storeAs('public/jurusan/', $image->hashName());

            Storage::delete(['public/jurusan/' . $jurusan->foto_k]);

            $jurusan->update([
                'foto_k' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'nama_k' => 'required|min:3',
                'desk_k' => 'required|min:10'
            ]);
        } else {
            $jurusan->update([
                'nama_k' => 'required|min:3',
                'desk_k' => 'required|min:10'
            ]);
        }
    }
    public function destroy($id, Jurusan $jurusan)
    {
        Storage::delete('public/jurusan/' . $jurusan->foto_k);
        $hapus = $jurusan->where('id_k', '=', $id)->delete();
        if ($hapus) {
            return redirect('/web-admin/jurusan')->with(['success' => 'data berhasil di hapus!']);
        } else {
            return redirect('/web-admin/jurusan')->with(['success' => 'data gagal di hapus!']);
        }
    }
}
