<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function GuruView() {
        // $allDataUser=User::all();
        $data['allDataGuru']=guru::all();
        return view('backend.guru.view_guru', $data);
    }

    public function GuruAdd() {
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.guru.add_guru');
    }

    public function GuruStore(Request $request) {

        $data=new guru();
        $data->nip=$request->nip;
        $data->nama=$request->nama;
        $data->email=$request->email;
        $data->jabatan_id=$request->jabatan_id;
        $data->save();

        return redirect()->route('guru.view')->with('info', 'Tambah Guru berhasil');
    }

    public function GuruEdit($id) {
        // dd('berhasil masuk ke controller edit');

        $editData= guru::find($id);
        return view('backend.guru.edit_guru', compact('editData'));
    }

    public function GuruUpdate(Request $request, $id) {

        $data=guru::find($id);
        $data->nip=$request->nip;
        $data->nama=$request->nama;
        $data->email=$request->email;
        $data->jabatan_id=$request->jabatan_id;
        $data->save();

        return redirect()->route('guru.view')->with('info', 'Update guru berhasil');
    }

    public function GuruDelete($id) {
        // dd('berhasil masuk ke controller edit');

        $deleteData= guru::find($id);
        $deleteData->delete();

        return redirect()->route('guru.view')->with('info', 'Delete guru berhasil');
    }
}
