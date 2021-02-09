@extends('layout.dashboard')

@section('title', 'Edit Data Poli | Rumah Sakit UNS')

@section('name', 'Data Poli')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')

<form action="/poli/update/{{$data_poli->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <p>
        <label>ID Pasien</label><br>
        <input type="number" name="id_pasien" class="form-control" value="{{$data_poli->id_pasien}}"><br>
    </p>
    <p>
        <label>Keluhan</label><br>
        <input type="text" name="keluhan" class="form-control" value="{{$data_poli->keluhan}}"><br>
    </p>
    <p>
        <label>Jenis Poli</label><br>
        <select name="jenis_poli" class="form-control">
            <option value="-"></option>
            <option value="Poli Umum" @if($data_poli->jenis_poli=='Poli Umum') selected @endif>Poli Umum</option>
            <option value="Poli Kebidanan" @if($data_poli->jenis_poli=='Poli Kebidanan') selected @endif>Poli Kebidanan</option>
            <option value="Poli Anak" @if($data_poli->jenis_poli=='Poli Anak') selected @endif>Poli Anak</option>
            <option value="Poli Jantung" @if($data_poli->jenis_poli=='Poli Jantung') selected @endif>Poli Jantung</option>
            <option value="Poli Paru" @if($data_poli->jenis_poli=='Poli Paru') selected @endif>Poli Paru</option>
            <option value="Poli Kulit" @if($data_poli->jenis_poli=='Poli Kulit') selected @endif>Poli Kulit</option>
            <option value="Poli Mata" @if($data_poli->jenis_poli=='Poli Mata') selected @endif>Poli Mata</option>
            <option value="Poli THT" @if($data_poli->jenis_poli=='Poli THT') selected @endif>Poli THT</option>
            <option value="Poli Bedah" @if($data_poli->jenis_poli=='Poli Bedah') selected @endif>Poli Bedah</option>
            <option value="Poli Gigi n Mulut" @if($data_poli->jenis_poli=='Poli Gigi n Mulut') selected @endif>Poli Gigi n Mulut</option>
            <option value="Poli Jiwa" @if($data_poli->jenis_poli=='Poli Jiwa') selected @endif>Poli Jiwa</option>
            <option value="Poli Saraf" @if($data_poli->jenis_poli=='Poli Saraf') selected @endif>Poli Saraf</option>
        </select><br>
    </p>
    <p>
        <label>Status</label><br>
        {{-- <input type="text" name="status" class="form-control" value="{{$data_poli->status}}">  --}}
        <select name="status" class="form-control" >
            <option value="Rawat Jalan" @if($data_poli->status=='Rawat Jalan') selected @endif>Rawat Jalan</option>
            <option value="Rawat Inap" @if($data_poli->status=='Rawat Inap') selected @endif>Rawat Inap</option>
        </select><br>
    </p>
    <p>
        <label>Penyakit</label><br>
        <input type="text" name="penyakit" class="form-control" value="{{$data_poli->penyakit}}"><br>
    </p>
    <p>
        <label>Catatan Medis Poli</label><br>
        <input type="text" name="catatan_medis_poli" class="form-control" value="{{$data_poli->catatan_medis_poli}}"><br>
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
