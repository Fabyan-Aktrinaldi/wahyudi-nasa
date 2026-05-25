<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class KategoriApiController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:categories,nama_kategori',
            'deskripsi'     => 'nullable|string',
        ]);

        $category = Category::create($validated);
        return response()->json(['status' => 'success', 'data' => $category], 201);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['status' => 'error', 'message' => 'Kategori tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama_kategori' => 'sometimes|string|max:255|unique:categories,nama_kategori,' . $id,
            'deskripsi'     => 'nullable|string',
        ]);

        $category->update($validated);
        return response()->json(['status' => 'success', 'data' => $category]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['status' => 'error', 'message' => 'Kategori tidak ditemukan'], 404);
        }

        $category->delete();
        return response()->json(['status' => 'success', 'message' => 'Kategori berhasil dihapus']);
    }
}