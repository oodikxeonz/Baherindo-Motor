<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Omen extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [ 
            [ 'id' => 1, 'name' => 'Motor Yamaha', 'price' => 100000000, 'Tahun' => 2023, 'km' => 234000],
            [ 'id' => 2, 'name' => 'Motor Honda', 'price' => 120000000, 'Tahun' => 2024, 'km' => 112000 ],
            [ 'id' => 3, 'name' => 'Motor Suzuki', 'price' => 110000000, 'Tahun' => 2020, 'km' => 32400 ],
            [ 'id' => 5, 'name' => 'Motor Ducati', 'price' => 350000000, 'Tahun' => 2021, 'km' => 3000 ],
            [ 'id' => 6, 'name' => 'Motor Didiy', 'price' => 300000000, 'Tahun' => 2021, 'km' => 99220 ],
            [ 'id' => 7, 'name' => 'Motor Lrox', 'price' => 60000000, 'Tahun' => 2023, 'km' => 39370 ],
            [ 'id' => 8, 'name' => 'Motor Ninjas', 'price' => 40000000, 'Tahun' => 2022, 'km' => 334200 ],
            [ 'id' => 9, 'name' => 'Motor Mortal', 'price' => 50000000, 'Tahun' => 2020, 'km' => 49380 ],
            [ 'id' => 10, 'name' => 'Motor Akira', 'price' => 3650000000, 'Tahun' => 1982, 'km' => 190000 ],
           
            ];
        return view("welcome" , compact('motor'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
