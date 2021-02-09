@extends('layout.dashboard')

@section('title', 'Tambah Data Poli | Rumah Sakit UNS')

@section('name', 'Poli Pasien')

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')

			<form action="{{url('poli/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <p>
                    <label>ID</label><br>
                    <input type="number" name="id" class="form-control"><br>
                </p> -->
                <p>
                    <label>NAMA</label><br>
                    <select name="nama" id="nama" class="form-control">
                        @foreach ($data_pasien as $row)
                            <option value="{{$row->id}}">{{$row->nama}}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" name="id_pasien" class="form-control"><br> -->
                </p>
                <p>
                    <label>Keluhan</label><br>
                    <input type="text" name="keluhan" class="form-control"><br>
                </p>
                <p>
                    <label>Jenis Poli</label><br>
                    <select name="jenis_poli" class="form-control">
                        <option value="-"></option>
                        <option value="Poli Umum">Poli Umum</option>
                        <option value="Poli Kebidanan">Poli Kebidanan</option>
                        <option value="Poli Anak">Poli Anak</option>
                        <option value="Poli Jantung">Poli Jantung</option>
                        <option value="Poli Paru">Poli Paru</option>
                        <option value="Poli Kulit">Poli Kulit</option>
                        <option value="Poli Mata">Poli Mata</option>
                        <option value="Poli THT">Poli THT</option>
                        <option value="Poli Bedah">Poli Bedah</option>
                        <option value="Poli Gigi n Mulut">Poli Gigi n Mulut</option>
                        <option value="Poli Jiwa">Poli Jiwa</option>
                        <option value="Poli Saraf">Poli Saraf</option>
                    </select><br>
                </p>
                <p>
                    <label>Status</label><br>
                    <!-- <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="rawat_jalan" id="rawat_jalan" >
                        <label class="form-check-label" for="rawat_jalan">
                            Rawat Jalan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="rawat_inap" id="rawat_inap">
                        <label class="form-check-label" for="rawat_inap">
                            Rawat Inap
                        </label>
                    </div> -->

                    <select name="status" class="form-control">
                        <option value="-"></option>
                        <option value="Rawat Jalan">Rawat Jalan</option>
                        <option value="Rawat Inap">Rawat Inap</option>
                    </select><br>
                </p>
                <p>
                    <label>Penyakit</label><br>
                    <input type="text" name="penyakit" class="form-control"><br>
                </p>
                <p>
                    <label>Catatan Medis Poli</label><br>
                    <input type="text" name="catatan_medis_poli" class="form-control"><br>
                </p>
                <p>
                    <input type="submit" name="tombol-add" value="Simpan" class="btn btn-primary">
                </p>
            </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@stop
