@extends('layouts.master')
@section('judul' ,'Edit Data Rekam Medik')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Rekam Medik</h1>
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
        <form method="POST" action="/rekam-medik/{{$rekamMedik->id}}">
          @method('PUT')  {{-- Khusus Methode Edit--}}
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No. Rekam Medik</label>
              <input type="number" readonly value="{{$rekamMedik->no_rekmed}}" name="No_rekmed" class="form-control" id="exampleInputEmail1" required>
                              {{-- ^^^^^^ --}}
            </div>              {{--Hanya Bisa dibaca/Tdk bisa diedit--}} 
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">No. Kartu</label>
              <input type="text" name="No_kartu" value="{{$rekamMedik->no_kartu}}" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal Berobat</label>
              <input type="date" name="tgl_brobat" value="{{$rekamMedik->tgl_berobat}}" class="form-control" id="exampleInputPassword1"  required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Diagnosa</label>
              <input type="text" name="Diagnosa" value="{{$rekamMedik->diagnosa}}" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
      </div>
      
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
@endsection