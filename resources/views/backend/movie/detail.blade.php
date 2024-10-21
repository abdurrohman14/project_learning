@extends('admin.dashboard')
@section('admin')

<section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-6">

        <div class="card mt-5">
          <div class="card-body">
            <h5 class="card-title">Detail</h5>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Cast</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->cast }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                     <img src="{{ asset('storage/movie/' . $movie->img_url) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->sinopsis }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Director</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->director }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->age }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->duration }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Trailer</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->trailer_url }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                     <p>{{ $movie->price }}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection