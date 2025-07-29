<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Brims extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $nomorhp = [
        '+62 812-3456-7890',
        '+62 813-9876-5432',
        '+62 822-1122-3344'
    ];

    $email = [
        'info@baherindomotor.com',
        'cs@baherindomotor.com',
        'support@baherindomotor.com'
    ];

    return view('contact', compact('nomorhp', 'email'));
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
