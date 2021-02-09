@extends('layout.dashboard')

@section('title', 'Edit Data Pasien | Rumah Sakit UNS')

@section('name', 'Data Pasien')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')

			<form action="/pasien/update/{{$data_pasien->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <label>Nama</label><br>
                    <input type="text" name="nama" class="form-control" value="{{$data_pasien->nama}}"><br>
                </p>
                <p>
                    <label>NIK</label><br>
                    <input type="text" name="nik" class="form-control" value="{{$data_pasien->nik}}"><br>
                </p>
                <p>
                    <label>Alamat</label><br>
                    <input type="text" name="alamat" class="form-control" value="{{$data_pasien->alamat}}"><br>
                </p>
                <p>
                    <label>Tanggal Lahir</label><br>
                    <input type="date" name="tgl_lahir" class="form-control" value="{{$data_pasien->tgl_lahir}}"><br>
                </p>
                <p>
                    <label>Jenis Kelamin</label><br>
                    <select name="jk" class="form-control">
                        <option value="Pria" @if($data_pasien->jk=='Pria') selected @endif>Pria</option>
                        <option value="Wanita" @if($data_pasien->jk=='Wanita') selected @endif>Wanita</option>
                    </select><br>
                </p>
                <p>
                    <label>No Hp</label><br>
                    <input type="text" name="no_hp" class="form-control" value="{{$data_pasien->no_hp}}"><br>
                </p>
                <p>
                    <input type="submit" name="tombol-add" value="Edit" class="btn btn-primary">
                </p>
            </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

@stop