<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use Illuminate\Support\Facades\Storage;

class moviecontroller extends Controller
{
    // menampilkan ke halaman index yang berbentuk tabel
    public function index() {
        $movie = movie::all();
        return view('backend.movie.index', [
            'title' => 'Movie',
            'movie' => $movie,
        ]);
    }

    public function create() {
        return view('backend.movie.create', [
            'title' => 'Tambah Movie'
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|string',
            'cast' => 'required|string',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
            'sinopsis' => 'required',
            'director' => 'required',
            'age' => 'required|integer',
            'duration' => ['required', 'date_format:H:i'],
            'trailer_url' => 'required|string',
            'price' => 'required|integer',       
        ]);

        // Upload File
        if ($request->hasFile('img_url')) {
            $image = $request->file('img_url');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/movie', $imageName);
            $image->storeAs('movie', $imageName,'public');
            $validateData['img_url'] = $imageName;
        }

        $movie = new movie();
        $movie->name = $validateData['name'];
        $movie->cast = $validateData['cast'];
        $movie->sinopsis = $validateData['sinopsis'];
        $movie->director = $validateData['director'];
        $movie->age = $validateData['age'];
        $movie->duration = $validateData['duration'];
        $movie->trailer_url = $validateData['trailer_url'];
        $movie->price = $validateData['price'];
        $movie->img_url = $imageName;
        $movie->save();

        return redirect()->route('movie.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id) {
        $movie = movie::find($id);
        return view('backend.movie.detail', [
            'title' => 'Detail',
            'movie' => $movie,
        ]);
    }

    public function edit($id) {
        $movie = movie::find($id);
        return view('backend.movie.edit', [
            'title' => 'Edit Movie',
            'movie' => $movie,
        ]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'name' => 'required|string',
            'cast' => 'required|string',
            'img_url' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:5120', 
            'sinopsis' => 'required',
            'director' => 'required',
            'age' => 'required|integer',
            'duration' => ['required', 'date_format:H:i'],
            'trailer_url' => 'required|string',
            'price' => 'required|integer',   
        ]);

        $movie = movie::find($id);

        if ($request->hasFile('img_url')) {
            if ($movie->img_url && Storage::exists('public/movie/' . $movie->img_url)) {
                Storage::delete('public/movie/' . $movie->img_url);
            }
            $image = $request->file('img_url');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/movie', $imageName);
            $validateData['img_url'] = $imageName;
        }

        $movie->fill($validateData);

        $movie->save();

        return redirect()->route('movie.index')->with('success', 'Data berhasil diubah');
    }

    public function delete($id) {
        $movie = movie::find($id);
        Storage::delete('public/movie/' . $movie->img_url);
        $movie->delete();

        return redirect()->route('movie.index')->with('success', 'Data berhasil dihapus');
    }
}
