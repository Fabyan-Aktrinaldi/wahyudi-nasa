<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Resources\Api\ArticleResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class ArticleApiController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'user'])->latest()->get();
        return ArticleResource::collection($articles);
    }

    public function show($id)
    {
        $article = Article::with(['category', 'user'])->find($id);
        if (!$article) {
            return response()->json(['status' => 'error', 'message' => 'Article tidak ditemukan'], 404);
        }
        return new ArticleResource($article);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $validated['slug']    = Str::slug($validated['title']) . '-' . time();
        $validated['user_id'] = $request->user()->id;

        $article = Article::create($validated);
        return new ArticleResource($article->load(['category', 'user']));
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        if (!$article) {
            return response()->json(['status' => 'error', 'message' => 'Article tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'title'       => 'sometimes|string|max:255',
            'content'     => 'sometimes|string',
            'category_id' => 'sometimes|exists:categories,id',
        ]);

        if (isset($validated['title'])) {
            $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        }

        $article->update($validated);
        return new ArticleResource($article->load(['category', 'user']));
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return response()->json(['status' => 'error', 'message' => 'Article tidak ditemukan'], 404);
        }

        $article->delete();
        return response()->json(['status' => 'success', 'message' => 'Artikel berhasil dihapus']);
    }

    public function categories(): JsonResponse
    {
        $categories = Category::all();
        return response()->json(['status' => 'success', 'data' => $categories]);
    }
}