@extends('admin.dashboard')
@section('admin')

<section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-6">

        <div class="card mt-5">
          <div class="card-body">
            <h5 class="card-title">Edit</h5>

            <!-- General Form Elements -->
            <form method="post" action="{{ route('movie.update', ['id' => $movie->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" id="name" value="{{ old('name', $movie->name) }}" class="form-control">
                    </div>
                  </div>
    
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Case</label>
                    <div class="col-sm-10">
                      <input type="text" name="cast" id="cast" value="{{ old('cast', $movie->cast) }}" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                    
                    <div class="col-sm-10">
                      <input type="file" name="img_url" id="img_url" value="{{ old('img_url', $movie->img_url) }}" class="form-control">
                    </div>

                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                      <input type="text" name="sinopsis" id="sinopsis" value="{{ old('sinopsis', $movie->sinopsis) }}" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Direction</label>
                    <div class="col-sm-10">
                      <input type="text" name="director" id="director" value="{{ old('director', $movie->director) }}" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                      <input type="number" name="age" id="age" value="{{ old('age', $movie->age) }}" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                      <input type="time" name="duration" id="duration" value="{{ old('duration', $movie->duration) }}" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Trailer</label>
                    <div class="col-sm-10">
                      <input type="text" name="trailer_url" id="trailer_url" value="{{ old('trailer_url', $movie->trailer_url ) }}" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" name="price" id="price" value="{{ old('price', $movie->price) }}" class="form-control">
                    </div>
                  </div>

              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection