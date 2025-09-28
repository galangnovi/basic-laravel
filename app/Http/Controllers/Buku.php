<?php

namespace App\Http\Controllers;

use App\Models\Buku as ModelsBuku;
use Illuminate\Http\Request;

class Buku extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $buku = ModelsBuku::all();
        return view('buku.buku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'=>'required|min:3',
            'pengarang'=>'required|min:3',
            'tahun_terbit'=>'required'
        ]);
        ModelsBuku::create($validated);
        return redirect()->route('buku.index')->with('success','Buku Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = ModelsBuku::all();
        $bukuDetail = ModelsBuku::findOrFail($id);
        return view('buku.buku', compact('buku', 'bukuDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated =$request->validate([
            'judul'=>'required|min:3',
            'pengarang'=>'required|min:3',
            'tahun_terbit'=>'required'
        ]);
        ModelsBuku::where('id',$id)->update($validated);
        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bukuDetail = ModelsBuku::findOrFail($id);
        $bukuDetail->delete();
        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Dihapus');
    }
}
