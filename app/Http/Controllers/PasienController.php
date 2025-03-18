<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();

        return response()->json([
            'status' => 200,
            'message' => 'Data pasien berhasil diambil.',
            'data' => $pasien
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'tanggal_lahir' => 'sometimes|required|date',
            'alamat' => 'sometimes|required|string',
            'no_hp' => 'sometimes|required|string|max:255'
        ]);

        $pasien = Pasien::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'Data pasien berhasil ditambahkan.',
            'data' => $pasien
        ], 201);
    }

    public function show($id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return response()->json([
                'status' => 404,
                'message' => 'Data pasien tidak ditemukan.',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Data pasien berhasil diambil.',
            'data' => $pasien
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return response()->json([
                'status' => 404,
                'message' => 'Data tidak ditemukan.',
                'data' => null
            ], 404);
        }

        $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'tanggal_lahir' => 'sometimes|required|date',
            'alamat' => 'sometimes|required|string',
            'no_hp' => 'sometimes|required|string|max:255'
        ]);

        $pasien->update($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'Data  berhasil diperbarui.',
            'data' => $pasien
        ], 200);
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return response()->json([
                'status' => 404,
                'message' => 'Data tidak ditemukan.',
                'data' => null
            ], 404);
        }

        $pasien->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil dihapus.',
            'data' => null
        ], 200);
    }
}
