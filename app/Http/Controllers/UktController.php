<?php

namespace App\Http\Controllers;

use App\Models\Ukt;
use Illuminate\Http\Request;

class UktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Ukt::where('npm', auth()->user()->npm)->get();
        return view('dashboard.ukt.index', [
            'ukts' => Ukt::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ukt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'npm' => 'required|numeric|unique:ukts',
            'golongan' => 'required',
            'ukt' => 'required|numeric'
        ]);

        Ukt::create($validatedData);

        return redirect('/dashboard/ukt')->with('success', 'Data UKT Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukt  $ukt
     * @return \Illuminate\Http\Response
     */
    public function show(Ukt $ukt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ukt  $ukt
     * @return \Illuminate\Http\Response
     */
    public function edit(Ukt $ukt)
    {
        return view('dashboard.ukt.edit', compact('ukt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ukt  $ukt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ukt $ukt)
    {
        $rules = [
            'name' => 'required',
            'golongan' => 'required',
            'ukt' => 'required|numeric'
        ];

        if($request->npm != $ukt->npm) {
            $rules['npm'] = 'required|numeric|unique:ukts';
        }

        $validatedData = $request->validate($rules);

        Ukt::where('id', $ukt->id)->update($validatedData);

        return redirect('/dashboard/ukt')->with('success', 'Data UKT Mahasiswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukt  $ukt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ukt $ukt)
    {
        Ukt::destroy($ukt->id);

        return redirect('/dashboard/ukt')->with('success', 'Data UKT Mahasiswa berhasil dihapus');
    }
}
