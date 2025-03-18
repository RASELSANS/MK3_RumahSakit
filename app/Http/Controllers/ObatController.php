<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();

        return response()->json([
            'status' => 200,
            'message' => ' retrieved successfully',
            'data' => $obat
        ], 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'dosis' => 'required|string|max:255'

        ]);

        $obat = Obat::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'created successfully.',
            'data' => $obat
        ], 201);
    }
    public function show($id)
    {
        $obat = Obat::find($id);

        if (!$obat) {
            return response()->json([
                'status' => 404,
                'message' => ' not found.',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'retrieved successfully.',
            'data' => $obat
        ], 200);
    }
    public function update(Request $request, $id)
    {
        $obat = Obat::find($id);

        if (!$obat) {
            return response()->json([
                'status' => 404,
                'message' => ' not found.',
                'data' => null
            ], 404);
        }

        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'dosis' => 'required|string|max:255'
        ]);

        $obat->update($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'updated successfully.',
            'data' => $obat
        ], 200);
    }
    public function destroy($id)
    {
        $obat = Obat::find($id);

        if (!$obat) {
            return response()->json([
                'status' => 404,
                'message' => ' not found.',
                'data' => null
            ], 404);
        }

        $obat->delete();

        return response()->json([
            'status' => 200,
            'message' => ' deleted successfully.',
            'data' => null
        ], 200);
    }
}
