<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\buku;

class bukuController extends Controller
{
    public function bukuView() {
        // $allDataUser=User::all();
        $data['allDataBuku']=buku::all();
        return view('backend.buku.view_buku', $data);
    }

    public function BukuAdd() {
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.buku.add_buku');
    }

    public function bukuStore(Request $request) {

        $data=new buku();
        $data->kodeBuku=$request->kodeBuku;
        $data->judulBuku=$request->judulBuku;
        $data->namaPengarang=$request->namaPengarang;
        $data->save();

        return redirect()->route('buku.view')->with('info', 'Tambah buku berhasil');
    }

    public function bukuEdit($id) {
        // dd('berhasil masuk ke controller edit');

        $editData= buku::find($id);
        return view('backend.buku.edit_buku', compact('editData'));
    }

    public function bukuUpdate(Request $request, $id) {

        $data=buku::find($id);
        $data->kodeBuku=$request->kodeBuku;
        $data->judulBuku=$request->judulBuku;
        $data->namaPengarang=$request->namaPengarang;
        $data->save();

        return redirect()->route('buku.view')->with('info', 'Update buku berhasil');
    }

    public function bukuDelete($id) {
        // dd('berhasil masuk ke controller edit');

        $deleteData= buku::find($id);
        $deleteData->delete();

        return redirect()->route('buku.view')->with('info', 'Delete buku berhasil');
    }
}

