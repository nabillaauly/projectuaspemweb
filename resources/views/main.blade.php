@extends('layout.page')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Welcome Nabilla AZ!</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Brand </h3>

                <p>Data brand</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ url('brand') }}" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Kriteria </h3>

                <p>Kriteria</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('kriteria') }}" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Alternatif</h3>

                <p>Alternatif</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('alternatif') }}" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Perhitungan</h3>

                <p>Perhitungan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('hitung') }}" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
      
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
      <div>
        <h3>Nilai Stamina</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nilai</th>
              <th scope="col">Level Stamina</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Sangat Rendah</th>              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Rendah</td> 
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Cukup</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Baik</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Sangat Baik</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <h3>Tingkat Event </h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nilai</th>
              <th scope="col">Level Event</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Kabupaten/Kota</th>              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Karesidenan</td> 
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Nasional</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Regional</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Internasional</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <h3>Tingkat Kejuaraan </h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Juara</th>
              <th scope="col">Level Kejuaraan</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>3</th>              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>2</td> 
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>1</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  