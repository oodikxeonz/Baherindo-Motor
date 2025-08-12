<?php

namespace App\Http\Controllers;

use App\Models\MobilBaherindo;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $mobil = MobilBaherindo::all();
    return view('mobil.create', compact('mobil')); // optional
}

public function create()
{
    return view('mobil.create');
}

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $validateData = $request->validate([
        'nama_mobil' => 'required|string',
        'harga_mobil' => 'required|numeric',
        'km_mobil' => 'required|integer',   
        'tahun_mobil' => 'required|integer',
        'gambar_mobil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

 if($request->hasFile('gambar_mobil')) {
    $path = $request->file('gambar_mobil')->store('gambar_mobil', 'public');
    $validateData['gambar_mobil'] = $path; // Store the path in the validated data
    }

    MobilBaherindo::create( $validateData );

    return redirect('welmob');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mobil = MobilBaherindo::findOrFail($id);

        if ($request->hasFile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('gambar_mobil', 'public');
            $validateData['gambar_mobil'] = $path; // Store the path in the validated data
        }

        $mobil->update($validateData);

        return redirect('welmob');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $mobil = MobilBaherindo::findOrFail($id);
        $mobil->delete();
        return redirect('welmob')->with('success', 'Mobil deleted successfully');
    }
}
