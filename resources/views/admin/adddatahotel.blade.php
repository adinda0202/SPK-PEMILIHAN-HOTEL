@extends('layout.page')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-plus-circle"></i> Add Data Hotel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Data Hotel</li>
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
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Data Hotel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ url('/datahotel/store') }}" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nomor_hotel" class="col-sm-4 col-form-label">id</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="id" placeholder="Id Hotel" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="kode_hotel" class="col-sm-4 col-form-label">Kode Hotel</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="kode_hotel" placeholder="Kode Hotel" required>
                                  </div>
                              </div>
                                <div class="form-group row">
                                    <label for="nama_hotel" class="col-sm-4 col-form-label">Nama Hotel</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_hotel" placeholder="Nama Hotel" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_hotel" class="col-sm-4 col-form-label">Alamat Hotel</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="alamat_hotel" placeholder="Alamat Hotel" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="rating" placeholder="Rating" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_hotel" class="col-sm-4 col-form-label">Jenis Hotel</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="jenis_hotel" placeholder="Jenis Hotel" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fasilitas_utama" class="col-sm-4 col-form-label">Fasilitas Utama</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="fasilitas_utama" placeholder="Fasilitas Utama" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Create</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->

                <!-- Sidebar -->
                <div class="col-md-6">
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- Brand Logo -->
                        <!-- Sidebar Menu -->
                        <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <span class="brand-text font-weight-light">HOTEL</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/datahotel" class="nav-link">
                    <i class="nav-icon fas fa-hotel"></i>
                    <p>
                      Data Hotel
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/alternatif" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        Alternatif
                    </p>
                </a>
                </li>
                <li class="nav-item">
                  <a href="kriteria" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                      Kriteria
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="perhitungan" class="nav-link">
                    <i class="nav-icon fas fa-calculator"></i>
                    <p>
                      Perhitungan
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                      Logout
                    </p>
                  </a>
                </li>
              </ul>
            </nav>
          <!-- /.sidebar-menu -->
      </div>
                        <div class="sidebar">
                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Menu items -->
                                </ul>
                            </nav>
                        </div>
                        <!-- /.sidebar -->
                    </aside>
                </div>
                <!-- /.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
