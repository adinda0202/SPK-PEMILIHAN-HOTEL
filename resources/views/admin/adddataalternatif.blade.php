@extends('layout.page')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Data Alternatif</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Data Alternatif</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Data Alternatif</h3>
                        </div>
                        <form method="POST" action="{{ route('alternatif.store') }}" class="form-horizontal">
                          @csrf
                          <div class="form-group">
                              <label for="id">Id</label>
                              <input type="text" class="form-control" id="id" name="id" required>
                          </div>
                          <div class="form-group">
                              <label for="kode_alternatif">Kode Alternatif</label>
                              <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif" required>
                          </div>
                          <div class="form-group">
                              <label for="alternatif">Alternatif</label>
                              <input type="text" class="form-control" id="alternatif" name="alternatif" required>
                          </div>
                          <div class="form-group">
                              <label for="c1">C1</label>
                              <input type="number" class="form-control" id="c1" name="c1" required>
                          </div>
                          <div class="form-group">
                              <label for="c2">C2</label>
                              <input type="number" class="form-control" id="c2" name="c2" required>
                          </div>
                          <div class="form-group">
                              <label for="c3">C3</label>
                              <input type="number" class="form-control" id="c3" name="c3" required>
                          </div>
                          <div class="form-group">
                              <label for="c4">C4</label>
                              <input type="number" class="form-control" id="c4" name="c4" required>
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>                      
                    </div>
                </div>
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
                        </aside>
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
