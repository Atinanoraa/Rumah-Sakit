@extends('layout.dashboard')

@section('title', 'Daftar Riwayat Pasien | Rumah Sakit UNS')

@section('name', 'Data Riwayat Pasien')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('search')
    <form action="{{url('pasien')}}" role="search" class="app-search d-none d-md-block mr-3">
        <input type="text" placeholder="Search..." class="form-control mt-0">
        <a href="#" class="active">
        <i class="fa fa-search"></i>
        </a>
    </form>
@stop

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Pasien</h3>
                <div style="width: 100%; margin-left: 35%;">
                    <form action="{{url('riwayat')}}" method="GET">
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
                                        <option name="nama" value="nama">Nama</option>
                                        <option name="jk" value="jk">Jenis Kelamin</option>
                                        <option name="tgl_lahir" value="tgl_lahir">Tanggal Lahir</option>
                                        <option name="jenis_poli" value="jenis_poli">Jenis Poli</option>
                                        <option name="penyakit" value="penyakit">Penyakit</option>
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
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Poli</th>
                            <th>Penyakit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_poli as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->jk}}</td>
                            <td>{{$row->tgl_lahir}}</td>
                            <td>{{$row->alamat}}</td>
                            <td>{{$row->jenis_poli}}</td>
                            <td>{{$row->penyakit}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div style="margin-left: 45%;">
    {{-- {{ $data_poli -> appends(Request::all()) -> links() }}
</div> --}}

@stop




