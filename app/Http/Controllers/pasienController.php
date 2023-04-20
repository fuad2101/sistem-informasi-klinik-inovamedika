<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasiens;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bpom.pasien.index',['pasiens'=>pasiens::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bpom.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foo = pasiens::create([
            'no_mr'=>$request->no_mr,
            'tanggal_daftar'=>$request->tanggal_daftar,
            'nama_pasien'=>$request->nama_pasien,
            'tgl_lahir'=>$request->tgl_lahir,
            'jns_klm'=>$request->jns_klm,
            'agama'=>$request->agama,
            'pendidikan'=>$request->pendidikan,
            'alamat'=>$request->alamat,
            'kecamatan'=>$request->kecamatan,
            'kelurahan'=>$request->kelurahan,
            'kota'=>$request->kota,
            'tel'=>$request->tel,
        ]);

        // dd($foo);

        return view('bpom.pasien.index',['pasiens'=>pasiens::all()]);

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
