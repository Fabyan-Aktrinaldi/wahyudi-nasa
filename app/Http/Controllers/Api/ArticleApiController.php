<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Resources\Api\ArticleResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Js;


class ArticleApiController extends Controller
{
    //get /api/articles
    public function index()
    {
        $articles = Article::with(['category', 'user'])->latest()->get();
        return ArticleResource::collection($articles);
    }

    //get /api/articles/{id}
    public function show($id)
    {
        $article = Article::with(['category', 'user'])->find($id);
        if (!$article) {
            return response()->json([
                'status' => 'error',
                'message' => 'Article tidak ditemukan'], 404);
        }
        return new ArticleResource($article);
    }

    //get /api/kategori
    public function categories(): JsonResponse
    {
        $categories = Category::all();
        return response()->json([
            'status' => 'success',
            'data' => $categories
        ]);
    }
}
