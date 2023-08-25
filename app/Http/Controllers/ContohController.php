<?php

namespace App\Http\Controllers;

use App\Models\contoh;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contoh = contoh::all();
        return view('contoh.index', compact('contoh'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //        
        return view('contoh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required',
            'dkr'=>'required',
        ]);
        $contoh = contoh::create($request->all());
        return redirect()->route('contoh.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(contoh $contoh, $id)
    {
        //
        $contoh = contoh::find($id);
        return view('contoh.show', compact('contoh'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contoh $contoh, $id)
    {
        //
        $contoh = contoh::find($id);
        return view('contoh.edit',compact('contoh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contoh $contoh, $id)
    {
        //
        $request->validate([
            'nama'=>'required',
            'dkr'=>'required',
        ]);
        $contoh = contoh::find($id);
        $contoh->update($request->all());
        return redirect()->route('contoh.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contoh $contoh, $id)
    {
        //
        $contoh = contoh::find($id)->delete();
        return back();
    }
}
