<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\guru;
use App\Models\User;
<<<<<<< HEAD
// use App\Models\jabatan;
// use App\Models\kelas;
// use App\Models\siswa;
=======
use App\Models\kelas;
use App\Models\siswa;
use App\Models\jabatan;
use App\Models\presensi;
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use App\models\buku;
use App\models\film;
// use App\models\bahanbakar;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'email' => 'email | required | unique:users',
            'password' => 'required | confirmed'
        ]);

        // create user
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json($user, 201);
    }

    public function login(Request $request) {
        $validateData = $request->validate([
            'email' => 'email | required',
            'password' => 'required'
        ]);

        $login_detail = request(['email','password']);

        if(!Auth::attempt($login_detail)) {
            return response()->json([
                'error' => 'login gagal. Cek lagi detail login'
            ],401);
        }

        $user = $request->user();

        $tokenResult = $user->createToken('AccessToken');
        $token = $tokenResult->token;
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_id' => $token->id,
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ], 200);
    }

<<<<<<< HEAD
    // public function createJb(Request $request) {
    //     $jabatan = new jabatan();

    //     $jabatan->nama_jabatan=$request->input('nama_jabatan');

    //     $jabatan->save();
    //     return response()->json($jabatan);
    // }

    // public function readJb() {
    //     $jabatan = jabatan::all();
    //     return response()->json($jabatan);
    // }

    // public function readbyIdJb($id) {
    //     $jabatan = jabatan::find($id);
    //     return response()->json($jabatan);
    // }

    // public function updateJb(Request $request, $id) {
    //     $jabatan = jabatan::find($id);

    //     $jabatan->nama_jabatan=$request->input('nama_jabatan');

    //     $jabatan->save();
    //     return response()->json($jabatan);
    // }

    // public function deletebyIdJb(Request $request, $id) {
    //     $jabatan = jabatan::find($id);
    //     $jabatan->delete();

    //     return response()->json($jabatan);
    // }

    // // KELAS
    // public function createKelas(Request $request) {
    //     $kelas = new kelas();

    //     $kelas->nama_kelas=$request->input('nama_kelas');
    //     $kelas->jumlah_siswa=$request->input('jumlah_siswa');

    //     $kelas->save();
    //     return response()->json($kelas);
    // }

    // public function readKelas() {
    //     $kelas = kelas::all();
    //     return response()->json($kelas);
    // }

    // public function readbyIdKelas($id) {
    //     $kelas = kelas::find($id);
    //     return response()->json($kelas);
    // }

    // public function updateKelas(Request $request, $id) {
    //     $kelas = kelas::find($id);

    //     $kelas->nama_kelas=$request->input('nama_kelas');
    //     $kelas->jumlah_siswa=$request->input('jumlah_siswa');

    //     $kelas->save();
    //     return response()->json($kelas);
    // }

    // public function deletebyIdKelas(Request $request, $id) {
    //     $kelas = kelas::find($id);
    //     $kelas->delete();

    //     return response()->json($kelas);
    // }

    // // Siswa
    // public function createSiswa(Request $request) {
    //     $siswa = new siswa();

    //     $siswa->kelas_id=$request->input('kelas_id');
    //     $siswa->nama_siswa=$request->input('nama_siswa');

    //     $siswa->save();
    //     return response()->json($siswa);
    // }

    // public function readSiswa() {
    //     $siswa = siswa::all();
    //     return response()->json($siswa);
    // }

    // public function readbyIdSiswa($id) {
    //     $siswa = siswa::find($id);
    //     return response()->json($siswa);
    // }

    // public function updateSiswa(Request $request, $id) {
    //     $siswa = siswa::find($id);

    //     $siswa->kelas_id=$request->input('kelas_id');
    //     $siswa->nama_siswa=$request->input('nama_siswa');

    //     $siswa->save();
    //     return response()->json($siswa);
    // }

    // public function deletebyIdSiswa(Request $request, $id) {
    //     $siswa = siswa::find($id);
    //     $siswa->delete();

    //     return response()->json($siswa);
    // }

    //  // Buku
    //  public function createBuku(Request $request) {
    //     $buku = new buku();

    //     $buku->kodeBuku=$request->input('kodeBuku');
    //     $buku->judulBuku=$request->input('judulBuku');
    //     $buku->namaPengarang=$request->input('namaPengarang');

    //     $buku->save();
    //     return response()->json($buku);
    // }

    // public function readbuku() {
    //     $buku = buku::all();
    //     return response()->json($buku);
    // }

    // public function readbyIdbuku($id) {
    //     $buku = buku::find($id);
    //     return response()->json($buku);
    // }

    // public function updatebuku(Request $request, $id) {
    //     $buku = buku::find($id);

    //     $buku->kodeBuku=$request->input('kodeBuku');
    //     $buku->judulBuku=$request->input('judulBuku');
    //     $buku->namaPengarang=$request->input('namaPengarang');

    //     $buku->save();
    //     return response()->json($buku);
    // }

    // public function deletebyIdbuku(Request $request, $id) {
    //     $buku = buku::find($id);
    //     $buku->delete();

    //     return response()->json($buku);
    // }
    
    // Film
    public function createFilm(Request $request) {
        $film = new film();

        $film->judulfilm=$request->input('judulFilm');
        $film->jenisfilm=$request->input('jenisFilm');

        $film->save();
        return response()->json($film);
    }

    public function readfilm() {
        $film = film::all();
        return response()->json($film);
    }

    public function readbyIdfilm($id) {
        $film = film::find($id);
        return response()->json($film);
    }

    public function updatefilm(Request $request, $id) {
        $film = film::find($id);

        $film->judulFilm=$request->input('judulFilm');
        $film->jenisFilm=$request->input('jenisFilm');

        $film->save();
        return response()->json($film);
    }

    public function deletebyIdfilm(Request $request, $id) {
        $film = film::find($id);
        $film->delete();

        return response()->json($film);
    }
    
 // Bahan Bakar
//  public function createBahanBakar(Request $request) {
//     $bahanbakar = new bahanbakar();

//     $bahanbakar->kodeBBM=$request->input('kodeBBM');
//     $bahanbakar->namaBBM=$request->input('namaBBM');
//     $bahanbakar->hargaBBM=$request->input('hargaBBM');

//     $bahanbakar->save();
//     return response()->json($bahanbakar);
// }

// public function readbahanbakar() {
//     $bahanbakar = bahanbakar::all();
//     return response()->json($bahanbakar);
// }

// public function readbyIdbahanbakar($id) {
//     $bahanbakar = bahanbakar::find($id);
//     return response()->json($bahanbakar);
// }

// public function updatebahanbakar(Request $request, $id) {
//     $bahanbakar = bahanbakar::find($id);

//     $bahanbakar->kodeBBM=$request->input('kodeBBM');
//     $bahanbakar->namaBBM=$request->input('namaBBM');
//     $bahanbakar->hargaBBM=$request->input('hargaBBM');

//     $bahanbakar->save();
//     return response()->json($bahanbakar);
// }

// public function deletebyIdbahanbakar(Request $request, $id) {
//     $bahanbakar = bahanbakar::find($id);
//     $bahanbakar->delete();

//     return response()->json($bahanbakar);
// }

}
=======
    // GURU
    public function create(Request $request) {
        $guru = new guru();

        $guru->nip=$request->input('nip');
        $guru->nama=$request->input('nama');
        $guru->email=$request->input('email');
        $guru->jabatan_id=$request->input('jabatan_id');

        $guru->save();
        return response()->json($guru);
    }

    public function read() {
        $guru = guru::all();
        return response()->json($guru);
    }

    public function readbyId($id) {
        $guru = guru::find($id);
        return response()->json($guru);
    }

    public function update(Request $request, $id) {
        $guru = guru::find($id);

        $guru->nip=$request->input('nip');
        $guru->nama=$request->input('nama');
        $guru->email=$request->input('email');
        $guru->jabatan_id=$request->input('jabatan_id');

        $guru->save();
        return response()->json($guru);
    }

    public function deletebyId(Request $request, $id) {
        $guru = guru::find($id);
        $guru->delete();

        return response()->json($guru);
    }

    // JABATAN
    public function createJb(Request $request) {
        $jabatan = new jabatan();

        $jabatan->nama_jabatan=$request->input('nama_jabatan');

        $jabatan->save();
        return response()->json($jabatan);
    }

    public function readJb() {
        $jabatan = jabatan::all();
        return response()->json($jabatan);
    }

    public function readbyIdJb($id) {
        $jabatan = jabatan::find($id);
        return response()->json($jabatan);
    }

    public function updateJb(Request $request, $id) {
        $jabatan = jabatan::find($id);

        $jabatan->nama_jabatan=$request->input('nama_jabatan');

        $jabatan->save();
        return response()->json($jabatan);
    }

    public function deletebyIdJb(Request $request, $id) {
        $jabatan = jabatan::find($id);
        $jabatan->delete();

        return response()->json($jabatan);
    }

    // KELAS
    public function createKelas(Request $request) {
        $kelas = new kelas();

        $kelas->nama_kelas=$request->input('nama_kelas');
        $kelas->jumlah_siswa=$request->input('jumlah_siswa');

        $kelas->save();
        return response()->json($kelas);
    }

    public function readKelas() {
        $kelas = kelas::all();
        return response()->json($kelas);
    }

    public function readbyIdKelas($id) {
        $kelas = kelas::find($id);
        return response()->json($kelas);
    }

    public function updateKelas(Request $request, $id) {
        $kelas = kelas::find($id);

        $kelas->nama_kelas=$request->input('nama_kelas');
        $kelas->jumlah_siswa=$request->input('jumlah_siswa');

        $kelas->save();
        return response()->json($kelas);
    }

    public function deletebyIdKelas(Request $request, $id) {
        $kelas = kelas::find($id);
        $kelas->delete();

        return response()->json($kelas);
    }

    // Siswa
    public function createSiswa(Request $request) {
        $siswa = new siswa();

        $siswa->kelas_id=$request->input('kelas_id');
        $siswa->nama_siswa=$request->input('nama_siswa');

        $siswa->save();
        return response()->json($siswa);
    }

    public function readSiswa() {
        $siswa = siswa::all();
        return response()->json($siswa);
    }

    public function readbyIdSiswa($id) {
        $siswa = siswa::find($id);
        return response()->json($siswa);
    }

    public function updateSiswa(Request $request, $id) {
        $siswa = siswa::find($id);

        $siswa->kelas_id=$request->input('kelas_id');
        $siswa->nama_siswa=$request->input('nama_siswa');

        $siswa->save();
        return response()->json($siswa);
    }

    public function deletebyIdSiswa(Request $request, $id) {
        $siswa = siswa::find($id);
        $siswa->delete();

        return response()->json($siswa);
    }

    // Presensi
    public function createPresensi(Request $request) {
        $presensi = new presensi();

        $presensi->guru_id=$request->input('guru_id');
        $presensi->waktu=$request->input('waktu');
        $presensi->masuk=$request->input('masuk');
        $presensi->pulang=$request->input('pulang');

        $presensi->save();
        return response()->json($presensi);
    }

    public function readPresensi() {
        $presensi = presensi::all();
        return response()->json($presensi);
    }

    public function readbyIdPresensi($id) {
        $presensi = presensi::find($id);
        return response()->json($presensi);
    }

    public function updatePresensi(Request $request, $id) {
        $presensi = presensi::find($id);

        $presensi->guru_id=$request->input('guru_id');
        $presensi->waktu=$request->input('waktu');
        $presensi->masuk=$request->input('masuk');
        $presensi->pulang=$request->input('pulang');

        $presensi->save();
        return response()->json($presensi);
    }

    public function deletebyIdPresensi(Request $request, $id) {
        $presensi = presensi::find($id);
        $presensi->delete();

        return response()->json($presensi);
    }

}
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e
