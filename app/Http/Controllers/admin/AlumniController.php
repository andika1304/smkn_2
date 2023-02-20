<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{


    public function index()
    {
        //get berita
        $alumni = Alumni::get();

        //render view with berita
        return view('admin.pages.alumni.alumni', compact('alumni'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.pages.alumni.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $uuid = Factory::create('id_ID')->uuid();
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:5',
            'angkatan' => 'required',
            'jk' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload image
        $image = $request->file('foto');

        // die($image->getClientOriginalName());

        if ($image->storeAs('alumni/', $image->hashName(), 'public')) {
            //create post

            $data = $request->all();
            $data['id_alumni'] = $uuid;
            $data['foto'] = $image->hashName();

            $createAlumni = Alumni::create($data);
            if ($createAlumni) {
                //redirect to index
                return redirect('/web-admin/alumni')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                return redirect()->back()->withInput()->withErrors('Data Gagal Disimpan!');
            }
        } else {
            return redirect()->back()->withInput()->withErrors('Gagal Upload Foto');
        }
    }


    public function edit($id_alumni)
    {
        $alumni = Alumni::firstWhere('id_alumni', $id_alumni);
        // return $alumni;
        return view('admin.pages.alumni.edit', compact('alumni'));
    }
    public function update(Request $request, Alumni $alumni, $id_alumni)
    {
        $this->validate($request, [
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:5',
            'angkatan' => 'required',
            'jk' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/alumni/', $image->hashName());

            Storage::delete(['public/alumni/' . $alumni->foto]);

            $data = $request->all();

            $data['foto'] = $image->hashName();
            // $data['id_alumni'] = $id_alumni;
            // unset($data['_token']);
            // unset($data['_method']);

            // try {
            //     $alumni->where('id_alumni', $id_alumni);
            //     $updateAlumni = $alumni->update($data);
            // } catch (\Illuminate\Database\QueryException $ex) {
            //     return redirect('/web-admin/alumni')->withErrors($ex);
            // }

            $updateAlumni = $alumni->where('id_alumni', $id_alumni);
            $updateAlumni->update([
                "nama" => $request->nama,
                "jurusan" => $request->jurusan,
                "angkatan" => $request->angkatan,
                "jk" => $request->jk,
                "foto" => $image->hashName(),
            ]);


            // dd(DB::getQueryLog());
            if ($updateAlumni) {
                //redirect to index
                return redirect('/web-admin/alumni')->with(['success' => 'Data Berhasil Diedit!']);
            } else {
                return redirect()->back()->withInput()->withErrors('Data Gagal Diedit!');
            }
        } else {
            $data = $request->all();
            unset($data['foto']);
            $alumni->where('id_alumni', $id_alumni);
            $alumni->update($data);
        }
    }
    public function destroy($id, Alumni $alumni)
    {

        Storage::delete('pubic/alumni/' . $alumni->foto);
        $hapus = $alumni->where('id_alumni', '=', $id)->delete();
        if ($hapus) {
            return redirect('/web-admin/alumni')->with(['success' => 'DATA BERHASIL DI HAPUS!']);
        } else {
            return redirect('/web-admin/alumni')->with(['error' => 'DATA GAGAL DI HAPUS']);
        }
    }
}
