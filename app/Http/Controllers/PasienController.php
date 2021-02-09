<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Poli;
use Session;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(Request $request)
    {
        $search = $request -> input("search");
        $kolom = $request -> input("kolom");
        $urutan = $request -> input("urutan");
        $btn = $request -> input("btn");

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
            $data_pasien = Pasien::paginate(5);
        }

        return view('layout.pasien-list')
            ->with("data_pasien",$data_pasien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_pasien = Pasien::all();
        return view('layout.pasien-create');
    }
    public function save(Request $request)
    {
        $data_pasien = Pasien::create([
            "nama"=>$request->input("nama"),
            "nik"=>$request->input("nik"),
            "alamat"=>$request->input("alamat"),
            "jk"=>$request->input("jk"),
            "tgl_lahir"=>$request->input("tgl_lahir"),
            "no_hp"=>$request->input("no_hp"),

        ]);
        if($data_pasien){
            Session::flash('sukses','Sukses Menyimpan Data');
            return redirect(url('pasien'))
                    ->with("data_pasien",$data_pasien);
        }else{
            Session::flash('gagal','ERROR');
            return redirect(url('pasien'));
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_pasien = Pasien::find($id);
        return view ('layout.pasien-edit')
                ->with('data_pasien',$data_pasien);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        // $data_pasien = Pasien::find($id);
        // $request->validate([
        //     'nama' => 'required',
        //     'nik' => 'required',
        //     'alamat' => 'required',
        //     'jk' => 'required',
        //     'tgl_lahir' => 'required',
        //     'no_hp' => 'required',
        // ]);
        // $data_pasien->update($request->all());
        // if($data_pasien){
        //             Session::flash('sukses','Sukses Update Data');
        //             return redirect(url('pasien'));
        //         }else{
        //             Session::flash('gagal','GAGAL Update Data');
        //             return redirect(url('pasien'));
        //         }


        $data_pasien = Pasien::find($id);
        $data_pasien->nama = $request->input("nama");
        $data_pasien->nik = $request->input("nik");
        $data_pasien->alamat = $request->input("alamat");
        $data_pasien->jk = $request->input("jk");
        $data_pasien->tgl_lahir = $request->input("tgl_lahir");
        $data_pasien->no_hp = $request->input("no_hp");

        {
            $data_pasien->save();
            if($data_pasien){
                Session::flash('sukses','Sukses Update Data');
                return redirect(url('pasien'));
            }else{
                Session::flash('gagal','Gagal Update Data');
                return redirect(url('pasien'));
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
        $data_pasien = Pasien::find($id);
        $data_pasien -> delete();
        if($data_pasien){
            Session::flash('sukses','Sukses Menghapus Data');
            return redirect(url('pasien'));
        }else{
            Session::flash('gagal','Gagal Menghapus Data');
            return redirect(url('pasien'));
        }
    }
}
