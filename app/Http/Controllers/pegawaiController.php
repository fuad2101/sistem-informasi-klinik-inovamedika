<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawais;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = pegawais::all();
        return view('bpom.pegawai.index',['pegawais'=>$pegawais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bpom.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $foo = $request->tanggal_masuk;
        // dd($foo);

        pegawais::create([
            'nama_pegawai'=>$request->nama_pegawai,
            'profesi'=>$request->profesi,
            'tanggal_masuk'=>$request->tanggal_masuk,
            'tanggal_keluar'=>$request->tanggal_keluar,
            'alamat'=>$request->alamat,
        ]);

        $pegawais = pegawais::all();

        return view('bpom.pegawai.index',['pegawais'=>$pegawais]);
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
