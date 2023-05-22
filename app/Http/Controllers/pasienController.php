<?php

namespace App\Http\Controllers;

use App\Models\pasiens;
use App\Models\PasienAktif;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pasiens::cursorPaginate(20);
        return view('bpom.pasien.index',['pasiens'=> $data ]);
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

        $pasien = PasienAktif::find(1)->pasiens;
        dd($pasien);

        $foo = PasienAktif::create([
            'nik'=>$request->nik,
        ]);


        return view('bpom.tindakan.index',['tindakans'=>PasienAktif::all()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $result = pasiens::where('nik',$request->nik)->get();

        if (isset($result[0])) {
            Alert::success('Data Ditemukan','Data pasien berhasil ditemukan');
            return view('bpom.pasien.create',['result'=>$result]);
        }else{
            Alert::error('Data Tidak Ditemukan','Data pasien tidak ditemukan');
            return view('bpom.pasien.create');
        }
        // dd($result);
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
