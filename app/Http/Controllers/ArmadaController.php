<?php

namespace App\Http\Controllers;

use App\Armada;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armadas = Armada::all();
        return view('admin.armada.index', compact('armadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.armada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => ['required', 'string', 'max:128'],
            'perusahaan' => ['required', 'string', 'max:128'],
            'plat'       => ['required', 'unique:armadas', 'string', 'max:10'],
            'type'       => ['required', 'string', 'max:128'],
            'trayek'     => ['required', 'string', 'max:128']
        ]);

        Armada::create([
            'nama'       => $request->nama,
            'perusahaan' => $request->perusahaan,
            'plat'       => $request->plat,
            'type'       => $request->type,
            'trayek'     => $request->trayek
        ]);

        return redirect()->route('admin.armada.index')->with('success', 'Berhasil menambahkan sebuah armada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function show(Armada $armada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function edit(Armada $armada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armada $armada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Armada $armada)
    {
        //
    }
}
