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
                <th scope="row">{{$nomor++}}</th>
                <td>{{$item->no_rekmed}}</td>
                <td>{{$item->no_kartu}}</td>
                <td>{{$item->tgl_berobat}}</td>
                <td>{{$item->diagnosa}}</td>
                <td>
                    <a href="/rekam-medik/edit/{{$item->id}}" class="btn btn-sm btn-info">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                      Hapus
                    </button>

                    {{-- Menu Modal Konfirmasi --}}
                    <div class="modal fade" id="modal-default{{$item->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Peringatan!</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Yakin data Rekam Medik {{$item->diagnosa}} ingin dihapus ?&hellip;</p>
                          </div>
                          {{-- Proses Hapus --}}
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <form action="/rekam-medik/{{$item->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary">Yakin</button>
                          </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
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