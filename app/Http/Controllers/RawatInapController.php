<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\RawatInap;
use App\Pasien;
use App\Poli;


class RawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_poli = Poli::all();
        $data_pasien = Pasien::all();
        $data_rawat = DB::table('rawat_inap')
        ->join('pasien', 'pasien.id', '=', 'rawat_inap.id_pasien')
        ->select('pasien.*', 'rawat_inap.*')
        ->paginate(5);

        return view ("rawatInap.rawatInap-list")
                -> with("data_rawat",$data_rawat)
                -> with("data_pasien",$data_pasien)
                -> with("data_poli",$data_poli);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_pasien = Pasien::all();
        //$data_rawat = RawatInap::all();
        $data_poli = Poli::all();
        $data_rawat = DB::table('rawat_inap')
        ->join('poli', 'poli.id', '=', 'rawat_inap.id_pasien')
        ->select('poli.*', 'rawat_inap.*')
        ->paginate(5);
    //     $about = Page::find(3);

    // return view('about', compact('about'));

        return view("rawatInap.rawatInap-create")
                    ->with('data_pasien', $data_pasien)
                    ->with('data_rawat', $data_rawat)
                    ->with('data_poli', $data_poli);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_rawat = RawatInap::create([
            "id_pasien"=>$request->input("nama"),
            "tgl_masuk"=>$request->input("tgl_masuk"),
            "tgl_keluar"=>$request->input("tgl_keluar"),
            "ruang_rawat"=>$request->input("ruang_rawat"),
            "catatan_medis_rawat_inap"=>$request->input("catatan_medis_rawat_inap"),

        ]);
        if($data_rawat){
            Session::flash('sukses','Sukses Menyimpan Data');
            return redirect(url('rawat-inap'))
                    ->with("data_rawat",$data_rawat);
        }else{
            Session::flash('gagal','ERROR');
            return redirect(url('rawat-inap'));
        }
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
        $data_rawat = RawatInap::find($id);
        $data_pasien = DB::table('rawat_inap')
        ->join('pasien', 'pasien.id', '=', 'rawat_inap.id_pasien')
        ->select('pasien.*', 'rawat_inap.*')
        ->paginate(5);
        // $data_pasien = Pasien::all();
        return view ("rawatInap.rawatInap-edit")
        ->with('data_pasien', $data_pasien)
        ->with("data_rawat", $data_rawat);
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
        $data_rawat = RawatInap::find($id);
        $data_rawat->id_pasien = $request->input("nama");
        $data_rawat->tgl_masuk = $request->input("tgl_masuk");
        $data_rawat->tgl_keluar = $request->input("tgl_keluar");
        $data_rawat->ruang_rawat = $request->input("ruang_rawat");
        $data_rawat->catatan_medis_rawat_inap = $request->input("catatan_medis_rawat_inap");

        {
            $data_rawat->save();
            if($data_rawat){
                Session::flash('sukses','Sukses Update Data');
                return redirect(url('rawat-inap'));
            }else{
                Session::flash('gagal','Gagal Update Data');
                return redirect(url('rawat-inap'));
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_rawat = RawatInap::find($id);
        $data_rawat-> delete();

        if($data_rawat){
            Session::flash('sukses','Sukses Menghapus Data');
            return redirect(url('rawat-inap'));
        }else{
            Session::flash('gagal','Gagal Menghapus Data');
            return redirect(url('rawat-inap'));
        }
    }
}
