@extends('layouts.master')
@section('judul' ,'Data Rekam Medik')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Rekam Medik</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a href="/rekam-medik/form" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">No. Rekam Medik</th>
                <th scope="col">No. Kartu</th>
                <th scope="col">Tgl Berobat</th>
                <th scope="col">Diagnosa</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($rekamMedik as $item)
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="" class="btn btn-sm btn-info">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
              </tr>
                @endforeach
                
            </tbody>
          </table>
      </div>
      
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
@endsection