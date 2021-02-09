@extends('layout.dashboard')

@section('title', 'Daftar Obat | Rumah Sakit UNS')

@section('name', 'Apotek')

@section('navbar')
<a href="apotek/create" class="btn btn-lg btn-primary" tabindex="-1" role="button"><b style="color: white;">Tambah Obat</b></a>
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
                <h3 class="box-title mb-0">Obat</h3>
                        <div style="width: 100%; margin-left: 35%;">
                            <form action="{{url('apotek')}}" method="GET">
                                @csrf
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" name="search" placeholder="Search..." class="form-control" style="width: 250px;">
                                        </td>
                                        <td>
                                            <select name="kolom" class="form-control" style="width: 250px;">
                                                <option value="" disabled selected>Urutkan Berdasarkan</option>
                                                <option name="nama_obat" value="nama_obat">Nama Obat</option>
                                                <option name="jenis_obat" value="jenis_obat">Jenis Obat</option>
                                                <option name="stok_obat" value="stok_obat">Stok Obat</option>
                                                <option name="harga" value="harga">Harga</option>
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
                            <th>Nama Obat</th>
                            <th>Foto</th>
                            <th>Jenis Obat</th>
                            <th>Stok</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Harga</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_apotek as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nama_obat}}</td>
                            <td>
                                <img width="220px" src="/image/{{$row->foto_obat}}" alt="image">
                            </td>
                            <td>{{$row->jenis_obat}}</td>
                            <td>{{$row->stok_obat}}</td>
                            <td>{{$row->tgl_kadaluarsa}}</td>
                            <td>{{$row->harga}}</td>
                            <td>
                                <a href="/apotek/edit/{{$row->id}}"><button type="button" class="btn btn-success btn-sm" style="color: white;">Edit</button></a>
                                <a href="/apotek/delete/{{$row->id}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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
    {{ $data_apotek -> appends(Request::all()) -> links() }}
</div>
@endsection
