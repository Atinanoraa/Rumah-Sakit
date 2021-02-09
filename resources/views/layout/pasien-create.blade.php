@extends('layout.dashboard')

@section('title', 'Tambah Data Pasien | Rumah Sakit UNS')

@section('name', 'Pendaftaran')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')

			<form action="{{url('pasien/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <label>Nama</label><br>
                    <input type="text" name="nama" class="form-control"><br>
                </p>
                <p>
                    <label>NIK</label><br>
                    <input type="text" name="nik" class="form-control"><br>
                </p>
                <p>
                    <label>Alamat</label><br>
                    <input type="text" name="alamat" class="form-control"><br>
                </p>
                <p>
                    <label>Tanggal Lahir</label><br>
                    <input type="date" name="tgl_lahir" class="form-control"><br>
                </p>
                <p>
                    <label>Jenis Kelamin</label><br>
                    <select name="jk" class="form-control">
                        <option value="-"></option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select><br>
                </p>
                <p>
                    <label>No Hp</label><br>
                    <input type="text" name="no_hp" class="form-control"><br>
                </p>
                <p>
                    <input type="submit" name="tombol-add" value="Simpan" class="btn btn-primary">
                </p>
            </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

@stop
