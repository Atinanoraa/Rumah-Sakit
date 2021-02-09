@extends('layout.dashboard')

@section('title', 'Tambah Data Pasien Rawat Inap | Rumahh Sakit UNS')

@section('name', 'Form Pasien Rawat Inap')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')

			<form action="{{url('rawat-inap/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <label>Nama</label><br>

                    <select name="nama" id="nama" class="form-control">
                    @foreach($data_pasien as $row)
                        <option value="{{$row->id}}"  selected >{{$row->nama}}</option>
                    @endforeach
                    </select>

                </p>
                <p>
                    <label>Tanggal Masuk</label><br>
                    <input type="date" name="tgl_masuk" class="form-control"><br>
                </p>
                <p>
                    <label>Tanggal Keluar</label><br>
                    <input type="date" name="tgl_keluar" class="form-control"><br>
                </p>
                <p>
                    <label>Ruang Rawat</label><br>
                    <input type="text" name="ruang_rawat" class="form-control"><br>
                </p>
                <p>
                    <label>Catatan Medis Rawat Inap</label><br>
                    <input type="text" name="catatan_medis_rawat_inap" class="form-control"><br>
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

