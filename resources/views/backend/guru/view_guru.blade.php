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
                <h3 class="box-title">Data Guru</h3>
                <a href="{{ route('guru.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Guru</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>NIP</th>
                              <th>Nama Guru</th>
                              <th>Email</th>
                              <th>Jabatan ID</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataGuru as $key => $guru)
                          <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $guru->nip }}</td>
                              <td>{{ $guru->nama }}</td>
                              <td>{{ $guru->email }}</td>
                              <td>{{ $guru->jabatan_id }}</td>
                              <td>
                                <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('guru.delete', $guru->id) }}" id= "delete" class="btn btn-danger">Delete</a>
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