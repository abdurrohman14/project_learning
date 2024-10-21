<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function AbsenView() {
        // $allDataUser=User::all();
        $data['allDataPr']=presensi::all();
        return view('backend.presensi.view_presensi', $data);
    }

    public function AbsenAdd() {
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.presensi.add_presensi');
    }

    public function AbsenStore(Request $request) {

        $data=new presensi();
        $data->guru_id=$request->guru_id;
        $data->waktu=$request->waktu;
        $data->masuk=$request->masuk;
        $data->pulang=$request->pulang;
        $data->save();

        return redirect()->route('absen.view')->with('info', 'Tambah Presensi berhasil');
    }

    public function AbsenEdit($id) {
        // dd('berhasil masuk ke controller edit');

        $editData= presensi::find($id);
        return view('backend.presensi.edit_presensi', compact('editData'));
    }

    public function AbsenUpdate(Request $request, $id) {

        $data=presensi::find($id);
        $data->guru_id=$request->guru_id;
        $data->waktu=$request->waktu;
        $data->masuk=$request->masuk;
        $data->pulang=$request->pulang;
        $data->save();

        return redirect()->route('absen.view')->with('info', 'Update Presensi berhasil');
    }

    public function AbsenDelete($id) {
        // dd('berhasil masuk ke controller edit');

        $deleteData= presensi::find($id);
        $deleteData->delete();

        return redirect()->route('absen.view')->with('info', 'Delete Presensi berhasil');
    }
}
