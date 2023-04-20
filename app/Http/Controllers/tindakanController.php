<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tindakans;
use App\Models\pasiens;

class tindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bpom.tindakan.index',['tindakans'=>tindakans::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = pasiens::all();
        // dd($data);
        return view('bpom.tindakan.create',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tindakans::create([
            'mr_id'=>$request->no_rm,
            'tanggal_tindakan'=>$request->tanggal_tindakan,
            'nama_pasien'=>$request->nama_pasien,
            'tgl_masuk'=>$request->tgl_masuk,
            'tindakan'=>$request->tindakan,
        ]);

        return view('bpom.tindakan.index',['tindakans'=>tindakans::all()]);

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
