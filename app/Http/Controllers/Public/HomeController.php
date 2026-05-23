<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //Logika pencarian artikel lokal
        $query = Article::with('category');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%');
        }

        $articles = $query->latest()->paginate(6);

        // konsumsi API NASA
        $nasaApiKey = env('NASA_API_KEY');
        try {
            $response = Http::timeout(5)->get('https://api.nasa.gov/planetary/apod', [
                'api_key' => $nasaApiKey,
            ]);
            $nasaData = $response->successful() ? $response->json() : null;
        } catch (\Exception $e) {
            $nasaData = null; // fallback jika API gagal
        }

        return view('public.home', compact('articles', 'nasaData'));
    }

        public function show(Article $article)
        {
            return view('public.article', compact('article'));
        }
}
