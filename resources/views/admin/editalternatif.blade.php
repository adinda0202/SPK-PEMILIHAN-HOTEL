@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Alternatif</li>
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
                <h3 class="card-title">Edit Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('alternatif.update', $alternatif->id) }}" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                      <label for="id" class="col-sm-2 col-form-label">ID</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" value="{{ $alternatif->id }}" readonly>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="kode_alternatif" class="col-sm-2 col-form-label">Kode Alternatif</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif" placeholder="Kode Alternatif" value="{{ $alternatif->kode_alternatif }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nama_alternatif" class="col-sm-2 col-form-label">Nama Alternatif</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama_alternatif" placeholder="Nama Alternatif" value="{{ $alternatif->nama_alternatif }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" value="{{ $alternatif->lokasi }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="fasilitas" class="col-sm-2 col-form-label">Fasilitas</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" name="fasilitas" placeholder="Fasilitas" rows="4" required>{{ $alternatif->fasilitas }}</textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="jarak_terdekat" class="col-sm-2 col-form-label">Jarak Terdekat</label>
                      <div class="col-sm-10">
                          <input type="number" class="form-control" name="jarak_terdekat" placeholder="Jarak Terdekat" value="{{ $alternatif->jarak_terdekat }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                      <div class="col-sm-10">
                          <input type="number" class="form-control" name="rating" placeholder="Rating" value="{{ $alternatif->rating }}" required>
                      </div>
                  </div>
                  <!-- Add other fields as needed -->
              </div>
              
                  <!-- Add other fields as needed -->
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
