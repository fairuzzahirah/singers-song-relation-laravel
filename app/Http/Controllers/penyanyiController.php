<?php

namespace App\Http\Controllers;

use App\Models\Penyanyi;
use Illuminate\Http\Request;

class PenyanyiController extends Controller
{
    public function index()
    {
        $penyanyi = Penyanyi::with('lagu')->get();
        return view('penyanyi', compact('penyanyi'));
    }
    public function create(Request $request)
    {
        Penyanyi::create($request->all());
        return redirect('/penyanyi');
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
