@extends('layout.dashboard')

@section('title', 'Tambah Data Obat | Rumah Sakit UNS')

@section('name', 'Data Obat')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')

			<form action="{{url('apotek/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <label>Nama Obat</label><br>
                    <input type="text" name="nama" class="form-control"><br>
                </p>
                <p>
                    <label>Foto</label><br>
                    <input type="file" accept="image/*" name="foto" class="form-control-file"><br>
                </p>
                <p>
                    <label>Jenis Obat</label><br>
                    {{-- <input type="text" name="jenis" class="form-control"><br> --}}
                    <select name="jenis" class="form-control">
                        <option value="-"></option>
                        <option value="Serbuk">Serbuk</option>
                        <option value="Sirup">Sirup</option>
                        <option value="Salep">Salep</option>
                        <option value="Pil">Pil</option>
                        <option value="Tablet">Tablet</option>
                        <option value="Kaplet">Kaplet</option>
                        <option value="Kapsul">Kapsul</option>
                        <option value="Obat Tetes">Obat Tetes</option>
                    </select>
                </p>
                <p>
                    <label>Stok</label><br>
                    <input type="number" name="stok" class="form-control">
                </p>
                <p>
                    <label>Tanggal Kadaluarsa</label><br>
                    <input type="date" name="tgl" class="form-control"><br>
                </p>
                <p>
                    <label>Harga</label><br>
                    <input type="text" name="harga" class="form-control"><br>
                </p>
                <p>
                    <input type="submit" name="tombol-add" value="Simpan" class="btn btn-primary">
                </p>
            </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@stop