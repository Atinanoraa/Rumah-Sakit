@extends('layout.dashboard')

@section('title', 'Edit Data Obat | Rumah Sakit UNS')

@section('name', 'Data Obat')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')

<form action="/apotek/update/{{$data_apotek->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <p>
        <label>Nama Obat</label><br>
        <input type="text" name="nama" class="form-control" value="{{$data_apotek->nama_obat}}"><br>
    </p>
    <p>
        <label>Foto</label><br>
        <input type="file" accept="image/*" value="{{$data_apotek->foto_obat}}" name="foto"><br><br>
    </p>
    <p>
        <label>Jenis Obat</label><br>
        {{-- <input type="text" name="jenis" class="form-control" value="{{$data_apotek->jenis_obat}}"><br> --}}
        <select name="jenis" class="form-control">
            <option value="Serbuk" @if($data_apotek->jenis_obat=='Serbuk') selected @endif>Serbuk</option>
            <option value="Sirup" @if($data_apotek->jenis_obat=='Sirup') selected @endif>Sirup</option>
            <option value="Salep" @if($data_apotek->jenis_obat=='Salep') selected @endif>Salep</option>
            <option value="Pil" @if($data_apotek->jenis_obat=='Pil') selected @endif>Pil</option>
            <option value="Tablet" @if($data_apotek->jenis_obat=='Tablet') selected @endif>Tablet</option>
            <option value="Kaplet" @if($data_apotek->jenis_obat=='Kaplet') selected @endif>Kaplet</option>
            <option value="Kapsul" @if($data_apotek->jenis_obat=='Kapsul') selected @endif>Kapsul</option>
            <option value="Obat Tetes" @if($data_apotek->jenis_obat=='Obat Tetes') selected @endif>Obat Tetes</option>
        </select><br>
    </p>
    <p>
        <label>Stok</label><br>
        <input type="number" name="stok" class="form-control" value="{{$data_apotek->stok_obat}}"><br>
    </p>
    <p>
        <label>Tanggal Kadaluarsa</label><br>
        <input type="date" name="tgl" class="form-control" value="{{$data_apotek->tgl_kadaluarsa}}"><br>
    </p>
    <p>
        <label>Harga</label><br>
        <input type="text" name="harga" class="form-control" value="{{$data_apotek->harga}}"><br>
    </p>
    <p>
        <input type="submit" name="tombol-add" value="Simpan" class="btn btn-primary">
    </p>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@stop