<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hotel</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">

    <!-- Additional stylesheets -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/styles.css"> <!-- Adjust path as necessary -->

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <!-- Include your navbar here -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <!-- Dropdown menu for messages -->
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- Message Start -->
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="#" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <!-- /.dropdown-menu -->
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
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
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/datahotel" class="nav-link">
                            <i class="nav-icon fas fa-hotel"></i>
                            <p>Data Hotel</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/alternatif" class="nav-link">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>Alternatif</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kriteria" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Kriteria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/perhitungan" class="nav-link">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>Perhitungan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Hotel</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DATA HOTEL</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered">
                        <thead class="bg-dark">
                            <tr>
                                <th>id</th>
                                <th>Kode Hotel</th>
                                <th>Nama Hotel</th>
                                <th>Alamat Hotel</th>
                                <th>Rating</th>
                                <th>Jenis Hotel</th>
                                <th>Fasilitas Utama</th>
                                <th>Aksi</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tbody>
                                @foreach($datahotel as $i => $datahotel)
                                  <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $datahotel->kode_hotel }}</td>
                                    <td>{{ $datahotel->nama_hotel }}</td>
                                    <td>{{ $datahotel->alamat_hotel }}</td>
                                    <td>{{ $datahotel->rating  }}</td>
                                    <td>{{ $datahotel->jenis_hotel }}</td>
                                    <td>{{ $datahotel->fasilitas_utama }}</td>
                                    <td>
                                      <a href="{{ url('datahotel/edit/'.$datahotel->id) }}" class="btn-xs btn-primary">Edit</a>
                                      <!-- Form untuk delete -->
                                      <form action="{{ url('datahotel/delete/'.$datahotel->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </form>
                                    
                                    </td>
                                  </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <li class="nav-item">
                                    <a href="/adddatahotel" class="btn btn-block btn-primary">Add Data Hotel</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="http://127.0.0.1:8000/alternatif/hotel" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="L71thnruSTecWAcPO4YwJhWHKjP7jm5bsMyPEtv4" autocomplete="off">                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Tambah Hotel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <!-- Tambahkan input lainnya sesuai kebutuhan -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="http://127.0.0.1:8000/alternatif/hotel" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="L71thnruSTecWAcPO4YwJhWHKjP7jm5bsMyPEtv4" autocomplete="off">                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Hotel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <!-- Tambahkan input lainnya sesuai kebutuhan -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="http://127.0.0.1:8000/alternatif/hotel" method="POST">
                    <input type="hidden" name="_token" value="L71thnruSTecWAcPO4YwJhWHKjP7jm5bsMyPEtv4" autocomplete="off">                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Hotel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus hotel ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

<!-- Additional scripts -->
<script>
    // Your custom JavaScript code goes here
</script>

</body>
</html>
