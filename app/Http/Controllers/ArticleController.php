<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('patient.articles.articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('patient.articles.show', compact('article'));
    }
}
