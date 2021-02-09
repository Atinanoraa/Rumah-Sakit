<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apotek;
use Session;

class ApotekController extends Controller
{
    function list(Request $request){
        $search = $request -> input("search");
        $kolom = $request -> input("kolom");
        $urutan = $request -> input("urutan");
        $btn = $request -> input("btn");

        if ($btn == '1' && $search != "" && $kolom == "" && $urutan == "") {
            $data_apotek = Apotek::where("nama_obat", "like", "%".$search."%")
                                    -> orderBy("id", "asc")
                                    ->paginate(5);
        } elseif ($btn == '1'  && $kolom != "" && $urutan != "" && $search == "") {
            $data_apotek = Apotek::orderBy($kolom, $urutan)
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom != "" && $urutan == "" && $search == "")  {
            $data_apotek = Apotek::orderBy($kolom, "asc")
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom == "" && $urutan != "" && $search == "")  {
            $data_apotek = Apotek::orderBy("id", $urutan)
                                    ->paginate(5);
        } else {
            $data_apotek = Apotek::paginate(5);
        }
        
        return view('apotek.apotek-list')
            ->with("data_apotek",$data_apotek);
    }

    function create(){
        $data_apotek = Apotek::all();
        return view("apotek.apotek-create")
            ->with('data_apotek',$data_apotek);
    }
    function save(Request $request){
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);

        $data_apotek= Apotek::create([
            "nama_obat" =>$request-> input("nama"),
            "foto_obat" => $imgName,
            "jenis_obat" =>$request->input ("jenis"),
            "stok_obat" =>$request->input ("stok"),
            "tgl_kadaluarsa" =>$request->input ("tgl"),
            "harga" =>$request->input ("harga")
            ]);

            if($data_apotek){
                Session::flash('sukses','Sukses Menyimpan Data');
                return redirect(url('apotek'))
                        ->with("data_apotek",$data_apotek);
            }else{
                Session::flash('gagal','ERROR');
                return redirect(url('apotek'));
            }
    }

    function edit($id){
        $data_apotek = Apotek::find($id);
        return view ("apotek.apotek-edit")
        ->with("data_apotek", $data_apotek);
    }

    function update($id, Request $request){
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);

        $data_apotek = Apotek::find($id);
        $data_apotek->nama_obat = $request->input("nama");
        $data_apotek->foto_obat = $imgName;
        $data_apotek->jenis_obat = $request->input("jenis");
        $data_apotek->stok_obat = $request->input("stok");
        $data_apotek->tgl_kadaluarsa = $request->input("tgl");
        $data_apotek->harga = $request->input("harga");

        {
            $data_apotek->save();
            if($data_apotek){
                Session::flash('sukses','Sukses Update Data');
                return redirect(url('apotek'));
            }else{
                Session::flash('gagal','Gagal Update Data');
                return redirect(url('apotek'));
            }
        }
    }

    function delete($id){
        $data_apotek = Apotek::find($id);
        $data_apotek-> delete();

        if($data_apotek){
            Session::flash('sukses','Sukses Menghapus Data');
            return redirect(url('apotek'));
        }else{
            Session::flash('gagal','Gagal Menghapus Data');
            return redirect(url('apotek'));
        }
    }
}
