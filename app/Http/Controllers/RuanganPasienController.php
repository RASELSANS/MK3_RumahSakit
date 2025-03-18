<?php

namespace App\Http\Controllers;

use App\Models\pasien_ruangan;
use Illuminate\Http\Request;

class RuanganPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RuanganPasien = pasien_ruangan::all();

        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil diambil.',
            'data' => $RuanganPasien
        ], 200);
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
