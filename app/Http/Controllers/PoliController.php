<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poli;
use App\Pasien;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Collection;

class PoliController extends Controller
{
    function list(Request $request){
        $search = $request -> input("search");
        $kolom = $request -> input("kolom");
        $urutan = $request -> input("urutan");
        $btn = $request -> input("btn");

        if ($btn == '1' && $search != "" && $kolom == "" && $urutan == "") {
            $data_poli = Poli::where("penyakit", "like", "%".$search."%")
                                    -> orderBy("id", "asc")
                                    ->paginate(5);
        } elseif ($btn == '1'  && $kolom != "" && $urutan != "" && $search == "") {
            $data_poli = Poli::orderBy($kolom, $urutan)
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom != "" && $urutan == "" && $search == "")  {
            $data_poli = Poli::orderBy($kolom, "asc")
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom == "" && $urutan != "" && $search == "")  {
            $data_poli = Poli::orderBy("id", $urutan)
                                    ->paginate(5);
        } else {
            $data_poli = DB::table('poli')
                ->join('pasien', 'pasien.id', '=', 'poli.id_pasien')
                ->select('pasien.*', 'poli.*')
                ->paginate(5);
        }

        return view('poli.poli-list')
            ->with("data_poli",$data_poli);
    }

    function create(){
        $data_pasien = Pasien::all();
        $data_poli = Poli::all();
        return view("poli.poli-create")
            ->with('data_pasien',$data_pasien)
            ->with('data_poli', $data_poli);
    }
    function save(Request $request){
        $status = $request ->input("status");
        $data_poli= Poli::create([
            "id_pasien" =>$request-> input("nama"),
            "keluhan" =>$request->input ("keluhan"),
            "jenis_poli" =>$request->input ("jenis_poli"),
            "status" =>$request->input ("status"),
            "penyakit" =>$request->input ("penyakit"),
            "catatan_medis_poli" =>$request->input ("catatan_medis_poli")
            ]);

            if($status == 'Rawat Inap'){
                return redirect(url('rawat-inap/create'))
                ->with("data_poli",$data_poli);
            }elseif($status == 'Rawat Jalan'){
                Session::flash('sukses','Sukses Menyimpan Data');
                  return redirect(url('poli'))
                        ->with("data_poli",$data_poli);
            }

            // if($data_poli){
            //     if($status == 'Rawat_Inap'){
            //         return redirect('rawatInap/create', $data_poli);
            //     }
            //     if($status == 'Rawat_Jalan'){
            //         return redirect(url('poli'))
            //         ->with("data_poli",$data_poli);
            //     }
            //     // Session::flash('sukses','Sukses Menyimpan Data');
            //     // return redirect(url('poli'))
            //     //         ->with("data_poli",$data_poli);
            // }else{
            //     Session::flash('gagal','ERROR');
            //     return redirect(url('poli'));
            // }
    }

    function edit($id){
        $data_poli = Poli::find($id);
        return view ("poli.poli-edit")
        ->with("data_poli", $data_poli);
    }

    function update($id, Request $request){
        $data_poli = Poli::find($id);
        $data_poli->id_pasien = $request->input("id_pasien");
        $data_poli->keluhan = $request->input("keluhan");
        $data_poli->jenis_poli = $request->input("jenis_poli");
        $data_poli->status = $request->input("status");
        $data_poli->penyakit = $request->input("penyakit");
        $data_poli->catatan_medis_poli = $request->input("catatan_medis_poli");

        {
            $data_poli->save();
            if($data_poli){
                Session::flash('sukses','Sukses Update Data');
                if($data_poli->status == "Rawat Jalan") {
                    return redirect(url('apotek'));
                } elseif($data_poli->status == "Rawat Inap") {
                    return redirect(url('rawat-inap'));
                } else {
                    return redirect(url('poli'));
                }
            }else{
                Session::flash('gagal','Gagal Update Data');
                return redirect(url('poli'));
            }
        }
    }

    function delete($id){
        $data_poli = Poli::find($id);
        $data_poli-> delete();

        if($data_poli){
            Session::flash('sukses','Sukses Menghapus Data');
            return redirect(url('poli'));
        }else{
            Session::flash('gagal','Gagal Menghapus Data');
            return redirect(url('poli'));
        }
    }
}
