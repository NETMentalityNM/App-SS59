<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekamMedik;

class RekamMedikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $nomor = 1;
        $rekamMedik = RekamMedik::all();
        return view('rekam-medik.index', compact('nomor', 'rekamMedik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekam-medik.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rekamMedik = new RekamMedik;

        $rekamMedik->no_rekmed = $request->No_rekmed;
        $rekamMedik->no_kartu = $request->No_kartu;
        $rekamMedik->tgl_berobat = $request->tgl_brobat;
        $rekamMedik->diagnosa = $request->Diagnosa;
        $rekamMedik->save();

        return redirect('/rekam-medik');
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
