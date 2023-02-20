<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get berita
        $com = company::get();

        //render view with company
        return view('admin.pages.company.company', compact('com'));
    }
    /**
     * create
     *
     * @return void
     */
    public function edit()
    {
        return view('admin.pages.company.create');
    }
    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        // validate form
        $this->validate($request, [
            'foto_b' => 'image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'nama_c' => 'required|',
            'co_' => 'required|'
        ]);

        $image = $request->file('foto_b');
        if ($image->storeAs('company/', $image->hashName(), 'public')) {
            $storeCompany = company::create([
                'foto_b'     => $image->hashName(),
                'nama_c'     => $request->nama_c,
                'co_'   => $request->co_
            ]);
            if ($storeCompany) {
                //
                return redirect('/web-admin/jurusan')->with(['success' => 'data berhasil disimpan!']);
            } else {
                // kalo gagal masuk ke database
                return redirect()->back()->withInput()->withErrors('data gagal disimpan!');
            }
        }
    }
    public function update(Request $request, company $com)
    {
        $this->validate($request, [
            'foto_b' => 'image|mimes:png,jpg,jpeg|max:2048',
            'nama_c' => 'required|min:3',
            'co_' => 'required|min:10'
        ]);
        if ($request->hasFile('foto_b')) {
            $foto = $request->file('foto_b');
            $foto->storeAs('public/company/', $foto->hashName());
            Storage::delete(['public/company/' . $com->foto_b]);

            $com->update([
                'foto_b' => 'image|mimes:png,jpg,jpeg|max:2048',
                'nama_c' => 'required|min:5',
                'co_' => 'required|min:10'
            ]);
        } else {
            $com->update([
                'nama_c' => 'required|min:5',
                'co_' => 'required|min:10'
            ]);
        }
    }
    public function destroy($id, company $com)
    {
        Storage::delete(['public/company/' . $com->foto_b]);
        //     Storage::delete('public/company/'.$com->foto_b):
        $hapus = $com->where('id_c', '=', $id)->delete();
        if ($hapus) {
            return redirect('/web-admin/company')->with(['success' => 'data berhasil di hapus!']);
        } else {
            return redirect('/web-admin/company')->with(['success' => 'data gagal di hapus!']);
        }
    }
}
