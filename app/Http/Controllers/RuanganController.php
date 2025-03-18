<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = ruangan::all();

        return response()->json([
            'status' => 200,
            'message' => ' retrieved successfully',
            'data' => $ruangan
        ], 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'jenis_ruangan' => 'required|string|max:255'

        ]);

        $ruangan = ruangan::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'created successfully.',
            'data' => $ruangan
        ], 201);
    }
    public function show($id)
    {
        $ruangan = ruangan::find($id);

        if (!$ruangan) {
            return response()->json([
                'status' => 404,
                'message' => ' not found.',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => ' retrieved successfully.',
            'data' => $ruangan
        ], 200);
    }
    public function update(Request $request, $id)
    {
        $ruangan = ruangan::find($id);

        if (!$ruangan) {
            return response()->json([
                'status' => 404,
                'message' => ' not found.',
                'data' => null
            ], 404);
        }

        $request->validate([
           'nama_ruangan' => 'required|string|max:255',
            'jenis_ruangan' => 'required|string|max:255'
        ]);

        $ruangan->update($request->all());

        return response()->json([
            'status' => 200,
            'message' => ' updated successfully.',
            'data' => $ruangan
        ], 200);
    }
    public function destroy($id)
    {
        $ruangan = ruangan::find($id);

        if (!$ruangan) {
            return response()->json([
                'status' => 404,
                'message' => ' not found.',
                'data' => null
            ], 404);
        }

        $ruangan->delete();

        return response()->json([
            'status' => 200,
            'message' => 'deleted successfully.',
            'data' => null
        ], 200);
    }
}
