@extends('layout.dashboard')

@section('title', 'Daftar Poliklinik | Rumah Sakit UNS')

@section('name', 'DAFTAR POLIKLINIK')

@section('navbar')
<a href="poli/create" class="btn btn-lg btn-primary" tabindex="-1" role="button"><b style="color: white;">Tambah Poli</b></a>
@stop

{{-- @section('search')

<form name="search" action="{{url('poli')}}" method="GET" role="search" class="app-search d-none d-md-block mr-3">
    <input type="text" placeholder="Search..." class="form-control mt-0">
    <button type="submit" value="1" name="btn" class="active"><i class="fa fa-search"></i></button>
</form>

@endsection --}}



@section('content')

@if ($message = Session::get('sukses'))
	<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
	</div>
@endif

@if ($message = Session::get('gagal'))
	<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
	</div>
@endif

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Poliklinik</h3>
                        <div style="width: 100%; margin-left: 35%;">
                            <form action="{{url('poli')}}" method="GET">
                                @csrf
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" name="search" placeholder="Search..." class="form-control" style="width: 250px;">
                                        </td>
                                        <td>
                                            <select name="kolom" class="form-control" style="width: 250px;">
                                                <option value="" disabled selected>Urutkan Berdasarkan</option>
                                                <option name="id_pasien" value="id_pasien">ID Pasien</option>
                                                <option name="keluhan" value="keluhan">Keluhan</option>
                                                <option name="jenis_poli" value="jenis_poli">Jenis Poli</option>
                                                <option name="status" value="status">Status</option>
                                                <option name="penyakit" value="penyakit">Penyakit</option>
                                                <option name="catatan_medis_poli" value="catatan_medis_poli">Catatan Medis Poli</option>
                                        </select>
                                        </td>
                                        <td>
                                            <select name="urutan" class="form-control " style="width: 250px;">
                                                <option value="" disabled selected>Urutan</option>
                                                <option name="asc" value="asc">ASC</option>
                                                <option name="desc" value="desc">DESC</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" value="1" name="btn"  class="btn btn-dark"><i class="fa fa-search"></i></button>
                                        </td>
                                    </tr>
                            </table>
                        </form>
                    </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Jenis Poli</th>
                            <th>Status</th>
                            <th>Penyakit</th>
                            <th>Catatan Medis Poli</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_poli as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><?php echo date ('l, d-m-Y') ?></td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->keluhan}}</td>
                            <td>{{$row->jenis_poli}}</td>
                            <td>{{$row->status}}</td>
                            <td>{{$row->penyakit}}</td>
                            <td>{{$row->catatan_medis_poli}}</td>
                            <td>
                                <a href="/poli/edit/{{$row->id}}"><button type="button" class="btn btn-success btn-sm" style="color: white;">Edit</button></a>
                                <a href="/poli/delete/{{$row->id}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    </div>
</div>
<div style="margin-left: 45%;">
    {{ $data_poli -> appends(Request::all()) -> links() }}
</div>
@endsection
