<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poli;
use App\Pasien;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request -> input("search");
        $kolom = $request -> input("kolom");
        $urutan = $request -> input("urutan");
        $btn = $request -> input("btn");
        $data_poli = Poli::all();

        if ($btn == '1' && $search != "" && $kolom == "" && $urutan == "") {
            $data_pasien = Pasien::where("nama", "like", "%".$search."%")
                                    -> orderBy("id", "asc")
                                    ->paginate(5);
        } elseif ($btn == '1'  && $kolom != "" && $urutan != "" && $search == "") {
            $data_pasien = Pasien::orderBy($kolom, $urutan)
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom != "" && $urutan == "" && $search == "")  {
            $data_pasien = Pasien::orderBy($kolom, "asc")
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom == "" && $urutan != "" && $search == "")  {
            $data_pasien = Pasien::orderBy("id", $urutan)
                                    ->paginate(5);
        } else {
            $data_poli = DB::table('poli')
                ->join('pasien', 'pasien.id', '=', 'poli.id_pasien')
                ->select('pasien.*', 'poli.*')
                ->paginate(5);
        }
        
        return view('layout.riwayat-list')
            ->with("data_poli", $data_poli);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
