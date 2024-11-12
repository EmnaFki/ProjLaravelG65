<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::paginate(2);

        return view('shop.index')->with('articles', $articles);
    }

    public function show(string $slug, Article $article)
    {

        // $article = Article::findOrFail($id);

        if ($article->slug !== $slug)
            return redirect()->route('shop.show', ["slug" => $article->slug, 'id' => $article->id]);

        return View('shop.show', ['article' => $article]);
    }
}
