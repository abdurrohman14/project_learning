@extends('admin.dashboard')
@section('admin')

<section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-6">

        <div class="card mt-5">
          <div class="card-body">
            <h5 class="card-title">Tambah Movie</h5>

            <!-- General Form Elements -->
            <form method="post" action="{{ route('movie.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" id="name" class="form-control">
                    </div>
                  </div>
    
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Case</label>
                    <div class="col-sm-10">
                      <input type="text" name="cast" id="cast" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file" name="img_url" id="img_url" class="form-control">
                    </div>

                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                      <input type="text" name="sinopsis" id="sinopsis" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Direction</label>
                    <div class="col-sm-10">
                      <input type="text" name="director" id="director" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                      <input type="number" name="age" id="age" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                      <input type="time" name="duration" id="duration" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Trailer</label>
                    <div class="col-sm-10">
                      <input type="text" name="trailer_url" id="trailer_url" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" name="price" id="price" class="form-control">
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