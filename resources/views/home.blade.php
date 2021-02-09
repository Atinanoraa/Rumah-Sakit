@extends('layout.dashboard')

@section('title', 'Rumah Sakit UNS')

@section('name')
Dashboard
@endsection

@section('navbar')
<div style="height: 30px;"></div>
@stop

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Antrian BPJS</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto">
                        <div id="container1">
                            <div id="number1"class="counter text-success">
                                0
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Antrian Umum</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto">
                        <div id="container2">
                            <div id="number2"class="counter text-purple">
                                0
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Antrian Obat</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto">
                        <div id="container3">
                            <div id="number3"class="counter text-info">
                                0
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- Button --}}

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <center>
                    <button class="btn btn-success btn-lg" id="increment1" style="color: white;">+</button> &ensp;
                    <button class="btn btn-success btn-lg" id="decrement1" style="color: white;">-</button><br><br>
                    <button class="btn btn-outline-dark btn-md btn-block" id="clear1" type="reset">Clear</button>
                </center>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <center>
                    <button class="btn btn-purple btn-lg" id="increment2">+</button>
                    <button class="btn btn-purple btn-lg" id="decrement2">-</button><br><br>
                    <button class="btn btn-outline-dark btn-md btn-block" id="clear2" type="reset">Clear</button>
                </center>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <center>
                    <button class="btn btn-info btn-lg" id="increment3">+</button>
                    <button class="btn btn-info btn-lg" id="decrement3">-</button><br><br>
                    <button class="btn btn-outline-dark btn-md btn-block" id="clear3" type="reset">Clear</button>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Jadwal Besuk</h3>
                    <p class="text-muted">**Khusus hari Sabtu dan Minggu, jadwal besuk lebih awal.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <center>
                                        <th class="border-top-0" style="text-align: center;">NO</th>
                                        <th class="border-top-0">HARI</th>
                                        <th class="border-top-0" style="text-align: center;">PAGI</th>
                                        <th class="border-top-0" style="text-align: center;">SIANG</th>
                                        <th class="border-top-0" style="text-align: center;">MALAM</th>
                                    </center>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <center>
                                        <td style="text-align: center;">1</td>
                                        <td>Senin</td>
                                        <td style="text-align: center;">07.00-10.00 WIB</td>
                                        <td style="text-align: center;">14.00-17.00 WIB</td>
                                        <td style="text-align: center;">19.00-20.00 WIB</td>
                                    </center>
                                </tr>
                                <tr>
                                    <center>
                                        <td style="text-align: center;">2</td>
                                        <td>Selasa</td>
                                        <td style="text-align: center;">07.00-10.00 WIB</td>
                                        <td style="text-align: center;">14.00-17.00 WIB</td>
                                        <td style="text-align: center;">19.00-20.00 WIB</td>
                                    </center>
                                </tr>
                                <tr>
                                    <center>
                                        <td style="text-align: center;">3</td>
                                        <td>Rabu</td>
                                        <td style="text-align: center;">07.00-10.00 WIB</td>
                                        <td style="text-align: center;">14.00-17.00 WIB</td>
                                        <td style="text-align: center;">19.00-20.00 WIB</td>
                                    </center>
                                </tr>
                                <tr>
                                    <center>
                                        <td style="text-align: center;">4</td>
                                        <td>Kamis</td>
                                        <td style="text-align: center;">07.00-10.00 WIB</td>
                                        <td style="text-align: center;">14.00-17.00 WIB</td>
                                        <td style="text-align: center;">19.00-20.00 WIB</td>
                                    </center>
                                </tr>
                                <tr>
                                    <center>
                                        <td style="text-align: center;">5</td>
                                        <td>Jumat</td>
                                        <td style="text-align: center;">07.00-10.00 WIB</td>
                                        <td style="text-align: center;">14.00-17.00 WIB</td>
                                        <td style="text-align: center;">19.00-20.00 WIB</td>
                                    </center>
                                </tr>
                                <tr>
                                    <center>
                                        <td style="text-align: center;">6</td>
                                        <td>Sabtu</td>
                                        <td style="text-align: center;">08.00-10.00 WIB</td>
                                        <td style="text-align: center;">13.00-15.00 WIB</td>
                                        <td style="text-align: center;">19.00-20.00 WIB</td>
                                    </center>
                                </tr>
                                <tr>
                                    <center>
                                        <td style="text-align: center;">7</td>
                                        <td>Minggu</td>
                                        <td style="text-align: center;">08.00-10.00 WIB</td>
                                        <td style="text-align: center;">13.00-15.00 WIB</td>
                                        <td style="text-align: center;">19.00-20.00 WIB</td>
                                    </center>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>

<script lang="Javascript">
let add1 = document.getElementById('increment1');
let add2 = document.getElementById('increment2');
let add3 = document.getElementById('increment3');

let remove1 = document.getElementById('decrement1');
let remove2 = document.getElementById('decrement2');
let remove3 = document.getElementById('decrement3');

let int1 = document.getElementById('number1');
let int2 = document.getElementById('number2');
let int3 = document.getElementById('number3');

let integer1 = 0;
let integer2 = 0;
let integer3 = 0;

let clear1 = document.getElementById('clear1');
let clear2 = document.getElementById('clear2');
let clear3 = document.getElementById('clear3');

// Pertama 
add1.addEventListener('click', function(){
    integer1 += 1;
    int1.innerHTML = integer1;
})

remove1.addEventListener('click', function(){
    integer1 -= 1;
    int1.innerHTML = integer1;
})

clear1.addEventListener('click', function(){
    int1.innerHTML = 0;
})

// Kedua
add2.addEventListener('click', function(){
    integer2 += 1;
    int2.innerHTML = integer2;
})

remove2.addEventListener('click', function(){
    integer2 -= 1;
    int2.innerHTML = integer2;
})

clear2.addEventListener('click', function(){
    int2.innerHTML = 0;
})

// Ketiga
add3.addEventListener('click', function(){
    integer3 += 1;
    int3.innerHTML = integer3;
})

remove3.addEventListener('click', function(){
    integer3 -= 1;
    int3.innerHTML = integer3;
})

clear3.addEventListener('click', function(){
    int3.innerHTML = 0;
})
</script>

@endsection