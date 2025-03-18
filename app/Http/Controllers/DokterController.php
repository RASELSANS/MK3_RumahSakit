<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = dokter::all();

        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil diambil.',
            'data' => $dokter
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dokter' => 'sometimes|required|string|max:255',
            'spesialis_dokter' => 'sometimes|required|string',
            'no_dokter' => 'sometimes|required|string'
            
        ]);

        $dokter = dokter::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'Data berhasil ditambahkan.',
            'data' => $dokter
        ], 201);
    }

    public function show($id)
    {
        $dokter = dokter::find($id);

        if (!$dokter) {
            return response()->json([
                'status' => 404,
                'message' => 'Data tidak ditemukan.',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil diambil.',
            'data' => $dokter
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $dokter = dokter::find($id);

        if (!$dokter) {
            return response()->json([
                'status' => 404,
                'message' => 'Data tidak ditemukan.',
                'data' => null
            ], 404);
        }

        $request->validate([
           'nama_dokter' => 'sometimes|required|string|max:255',
            'spesialis_dokter' => 'sometimes|required|string',
            'no_dokter' => 'sometimes|required|string'
        ]);

        $dokter->update($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil diperbarui.',
            'data' => $dokter
        ], 200);
    }

    public function destroy($id)
    {
        $dokter = dokter::find($id);

        if (!$dokter) {
            return response()->json([
                'status' => 404,
                'message' => 'Data tidak ditemukan.',
                'data' => null
            ], 404);
        }

        $dokter->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil dihapus.',
            'data' => null
        ], 200);
    }
}
