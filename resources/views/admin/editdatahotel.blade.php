@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Hotel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Hotel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('datahotel.update', $datahotel->id) }}" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                      <label for="id" class="col-sm-2 col-form-label">ID</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" value="{{ $datahotel->id }}" readonly>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="kode_hotel" class="col-sm-2 col-form-label">Kode Hotel</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="kode_hotel" name="kode_hotel" placeholder="Kode Hotel" value="{{ $datahotel->kode_hotel }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nama_hotel" class="col-sm-2 col-form-label">Nama Hotel</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama_hotel" placeholder="Nama Hotel" value="{{ $datahotel->nama_hotel }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="alamat_hotel" class="col-sm-2 col-form-label">Alamat Hotel</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="alamat_hotel" placeholder="Alamat Hotel" value="{{ $datahotel->alamat_hotel }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                      <div class="col-sm-10">
                          <input type="number" class="form-control" name="rating" placeholder="Rating" value="{{ $datahotel->rating }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="jenis_hotel" class="col-sm-2 col-form-label">Jenis Hotel</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="jenis_hotel" placeholder="Jenis Hotel" value="{{ $datahotel->jenis_hotel }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="fasilitas_umum" class="col-sm-2 col-form-label">Fasilitas Umum</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" name="fasilitas_umum" placeholder="Fasilitas Umum" rows="4" required>{{ $datahotel->fasilitas_umum }}</textarea>
                      </div>
                  </div>
                  <!-- Tambahkan field lainnya sesuai kebutuhan -->
              </div>
              
                  <!-- Tambahkan field lainnya sesuai kebutuhan -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
