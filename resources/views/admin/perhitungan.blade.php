@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perhitungan</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if (isset($error))
      <div class="alert alert-danger">
        {{ $error }}
      </div>
    @endif

    <!-- Bagian untuk menampilkan widget -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div>
                  Widget 1: {{ $W1['kriteria'] }}
                </div>
                <div>
                  Widget 2: {{ $W2['kriteria'] }}
                </div>
                <div>
                  Widget 3: {{ $W3['kriteria'] }}
                </div>
                <div>
                  Widget 4: {{ $W4['kriteria'] }}
                </div>
                <div>
                  Widget 5: {{ $W5['kriteria'] }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content for other sections -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>{{ $W1['kriteria'] }}</th>
                      <th>{{ $W2['kriteria'] }}</th>
                      <th>{{ $W3['kriteria'] }}</th>
                      <th>{{ $W4['kriteria'] }}</th>
                      <th>{{ $W5['kriteria'] }}</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content for other sections -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Normalisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Kode Alternatif</th>
                      <th>C1</th>
                      <th>C2</th>
                      <th>C3</th>
                      <th>C4</th>
                      <th>C5</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alternatif as $alt)
                      <tr>
                        <td>{{ $alt->kode_alternatif }}</td>
                        <td>{{ $alt->kriteria_1 / $C1max['alternatif'] }}</td>
                        <td>{{ $alt->kriteria_2 / $C2min['alternatif'] }}</td>
                        <td>{{ $alt->kriteria_3 / $C3max['alternatif'] }}</td>
                        <td>{{ $alt->kriteria_4 / $C4max['alternatif'] }}</td>
                        <td>{{ $alt->kriteria_5 / $C5max['alternatif'] }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content for other sections -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Kode Alternatif</th>
                      <th>Hasil</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alternatif as $alt)
                      <tr>
                        <td>{{ $alt->kode_alternatif }}</td>
                        <td>
                          {{ (($alt->kriteria_1 / $C1max['alternatif']) * $W1['kriteria']) +
                             (($alt->kriteria_2 / $C2max['alternatif']) * $W2['kriteria']) +
                             (($alt->kriteria_3 / $C3max['alternatif']) * $W3['kriteria']) +
                             (($alt->kriteria_4 / $C4max['alternatif']) * $W4['kriteria']) +
                             (($alt->kriteria_5 / $C5max['alternatif']) * $W5['kriteria']) }}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>
  
@endsection
