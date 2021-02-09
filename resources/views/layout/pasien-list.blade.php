@extends('layout.dashboard')

@section('title', 'Daftar Pasien | Rumah Sakit UNS')

@section('name', 'Daftar Pasien')

@section('navbar')
    <a href="pasien/create" class="btn btn-lg btn-primary" tabindex="-1" role="button"><b style="color: white;">Tambah Pasien</b></a>
    <!-- <button type="submit" class="btn btn-primary btn-lg" href="pasien/create">Tambah Pasien</button> -->
    <!-- <a class="btn btn-primary" href="/pasien/create" role="button">Tambah Pasien</a> -->
    <!-- <button>
    <a href="pasien/create">Tambah Pasien</a></button> -->
@stop

@section('search')
    <form action="{{url('pasien')}}" role="search" class="app-search d-none d-md-block mr-3">
        <input type="text" placeholder="Search..." class="form-control mt-0">
        <a href="{{url('pasien')}}" class="active">
        <i class="fa fa-search"></i>
        </a>
    </form>
@stop

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
                <h3 class="box-title mb-0">Pasien</h3>
                <div style="width: 100%; margin-left: 35%;">
                    <form action="{{url('pasien')}}" method="GET">
                        @csrf
                        <table>
                            <tr>
                                <td>
                                    <input type="text" name="search" placeholder="Search..." class="form-control" style="width: 250px;">
                                </td>
                                <td>
                                    <select name="kolom" class="form-control" style="width: 250px;">
                                        <option value="" disabled selected>Urutkan Berdasarkan</option>
                                        <option name="nama" value="nama">Nama</option>
                                        <option name="nik" value="nik">NIK</option>
                                        <option name="alamat" value="alamat">Alamat</option>
                                        <option name="jk" value="jk">Jenis Kelamin</option>
                                        <option name="tgl_lahir" value="tgl_lahir">Tanggal Lahir</option>
                                        <option name="no_hp" value="no_hp">No HP</option>
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
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>No HP</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_pasien as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->nik}}</td>
                            <td>{{$row->alamat}}</td>
                            <td>{{$row->jk}}</td>
                            <td>{{$row->tgl_lahir}}</td>
                            <td>{{$row->no_hp}}</td>
                            <td>
                            <a href="pasien/edit/{{$row->id}}"><button type="button" class="btn btn-success btn-sm" style="color: white;">Edit</button></a>
                            <a href="pasien/delete/{{$row->id}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div style="margin-left: 45%;">
    {{ $data_pasien -> appends(Request::all()) -> links() }}
</div>

@endsection




