@extends('admin.dashboard')
@section('admin')

<!-- Content Wrapper. Contains page content -->
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
                <a href="{{ route('absen.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">absen</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Guru ID</th>
                              <th>Waktu</th>
                              <th>Masuk</th>
                              <th>Pulang</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataPr as $key => $pr)
                          <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $pr->guru_id }}</td>
                              <td>{{ $pr->waktu }}</td>
                              <td>{{ $pr->masuk }}</td>
                              <td>{{ $pr->pulang }}</td>
                              <td>
                                <a href="{{ route('absen.edit', $pr->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('absen.delete', $pr->id) }}" id= "delete" class="btn btn-danger">Delete</a>
                                <a href="{{ route('absen.rekap', $pr->guru_id) }}" id= "rekap" class="btn btn-warning">Rekap</a>
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
<!-- /.content-wrapper -->


@endsection