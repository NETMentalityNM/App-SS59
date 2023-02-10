@extends('layouts.master')
@section('judul' ,'Form Data Rekam Medik')
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
        <form method="POST" action="/pasien/{{$psn->id}}">
          @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No. Kartu</label>
              <input type="number" value="{{$psn->no_kartu}}" name="No_kartu" class="form-control" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">NIK Pasien</label>
              <input type="number" value="{{$psn->nik_pas}}"  name="Nik_pasien" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama Pasien</label>
              <input type="text" value="{{$psn->nm_pas}}" name="nama_pas" class="form-control" id="exampleInputPassword1"  required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Umur</label>
              <input type="number" value="{{$psn->umur_pas}}" name="umur" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Diagnosa</label>
              <select name="diagnosa" class="form-control" id="">
                <option value="">--Pilih Diagnosa --</option>
                @foreach ($rekamMedik as $data)
                <option value="{{$data->id}}" @selected($psn->rekam_mediks_id == $data->id)> {{$data->no_rekmed}} {{$data->diagnosa}}</option>
                @endforeach
              </select>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No. HP</label>
                <input type="number" value="{{$psn->hp_pas}}" name="no_hp" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat Pasien</label>
                <input type="text" value="{{$psn->alamat_pas}}" name="alamat_pasien" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <input type="text" value="{{$psn->status_pas}}" name="status_pasien" class="form-control" id="exampleInputPassword1" required>
              </div>
              
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
      </div>
      
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
@endsection