@extends('admin.dashboard')
@section('admin')

<div class="content-wrapper mt-4">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row justify-content-end"> 

          <div class="col-lg-9">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Presensi</h3>
                <a href="{{ route('movie.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">tambah movie</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Film</th>
                              <th>Director</th>
                              <th>Cast</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($movie as $key => $mv)
                          <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $mv->name }}</td>
                              <td>{{ $mv->director }}</td>
                              <td>{{ $mv->cast }}</td>
                              <td>
                                <a href="{{ route('movie.show', $mv->id) }}" class="btn btn-info">lihat</a>
                                <a href="{{ route('movie.edit', $mv->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('movie.delete', $mv->id) }}" id= "delete" class="btn btn-danger">Delete</a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

           
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
@endsection