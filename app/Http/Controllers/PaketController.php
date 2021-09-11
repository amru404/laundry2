<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = Paket::all();
        return view ('paket.index', compact('pakets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.create');

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
            'outlet_id' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',

        ]);
         
        Paket::create($request->all());
         
        return redirect()->route('paket.index')
                        ->with('success','Paket created successfully.');
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
    public function edit(paket $paket)
    {
         return view('paket.edit',compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, outlet $outlet)
    {
        $request->validate([
            'outlet_id' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',

        ]);

        $outlet->update($request->all());
         
        return redirect()->route('paket.index')
                        ->with('success','Paket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(paket $paket)
    {
        $paket->delete();
  
        return redirect()->route('paket.index')
                        ->with('success','paket deleted successfully');
    }
}
