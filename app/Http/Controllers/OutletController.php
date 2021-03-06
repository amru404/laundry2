<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;


class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlets = Outlet::all();
        return view ('outlet.index', compact('outlets'));
        // dd($outlets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlet.create');

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
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',

        ]);
         
        Outlet::create($request->all());
         
        return redirect()->route('outlet.index')
                        ->with('success','Member created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  return view('outlet.edit',compact('outlet'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(outlet $outlet)
    {
         return view('outlet.edit',compact('outlet'));
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
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',

        ]);

        $outlet->update($request->all());
         
        return redirect()->route('outlet.index')
                        ->with('success','Member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(outlet $outlet)
    {
        $outlet->delete();
  
        return redirect()->route('outlet.index')
                        ->with('success','outlet deleted successfully');
    }
}
