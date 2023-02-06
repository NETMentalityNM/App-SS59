<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedik;

use Illuminate\Http\Request;


class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $psn = Pasien::all();
        return view('Pasien.index', compact('nomor','psn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $psn = RekamMedik::all();
        return view('Pasien.form', compact('psn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psn = new Pasien();

        $psn->no_kartu = $request->No_kartu;
        $psn->nik_pas = $request->Nik_pasien;
        $psn->nm_pas = $request->nama_pas;
        $psn->umur_pas = $request->umur;
        $psn->rekam_mediks_id = $request->diagnosa;
        $psn->hp_pas = $request->no_hp;
        $psn->alamat_pas = $request->alamat_pasien;
        $psn->status_pas = $request->status_pasien;
        $psn->foto = "default.jpg";
        $psn->save();

        return redirect('/pasien');
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
