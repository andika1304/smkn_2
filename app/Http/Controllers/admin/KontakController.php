<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()

    {
        $kontak = Kontak::get();
        return view('admin.pages.kontak.kontak', compact('kontak'));

    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.pages.kontak.create');
    }
    /**
     * store
     *
     * @param Request $request
     * @return void
     */
     public function store(Request $request)

    {
        $this->validate($request, [
            'sekolah' => 'required|min:5',
            'no' => 'required|min:11',
            'email' => 'required|min:6',
            'alamat' => 'required|min:6'
        ]);
        return redirect('/web-admin/kontak')->with(['success' => 'data berhasil di tambah!']);
    }
    public function edit(kontak $kontak )
    {

    }
    public function update(Kontak $kontak, Request $request )
    {
        $this->validate($request, [
            'sekolah' => 'required|min:5',
            'no' => 'required|min:11',
            'email' => 'required|min:6',
            'alamat' => 'required|min:6'
        ]);
        $kontak->update([
            'sekolah' => 'required|min:5',
            'no' => 'required|min:11',
            'email' => 'required|min:6',
            'alamat' => 'required|min:6'
        ]);
    }
    public function destroy($id, kontak $kontak )
    {
        $hapus = $kontak->where('id_k','=',$id)->delete();
        if ($hapus) {
            return redirect('/web-admin/kontak')->with(['success' => 'data berhasil di hapus']);
        }else{
            return redirect('/web-admin/kontak')->with(['eror' => 'data gagal di hapus!']);
        }
    }
}
