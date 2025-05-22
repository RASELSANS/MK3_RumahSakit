<?php

namespace App\Http\Controllers;

use App\Models\janji_temu;
use Illuminate\Http\Request;

class JanjiTemuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $janiTemu = janji_temu::all();

        return response()->json([
            'status' => 200,
            'message' => ' retrieved successfully',
            'data' => $janiTemu
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required|integer|max:255',
            'id_dokter' => 'required|integer|max:255',
            'tanggal_janji' => 'required|date|max:255',
            'status' => 'required|string|max:255'

        ]);

        $janjiTemu = janji_temu::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'created successfully.',
            'data' => $janjiTemu
        ], 201);
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
