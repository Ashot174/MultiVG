<?php

namespace App\Http\Controllers\UserEditor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class DashboardController extends Controller
{
    public function dashboard(){
        $articles = Article::latest()->paginate(12);
        $count_articles = Article::count();
        return view('userEditor.dashboard', [
            'articles' => $articles,
            'count_articles' => $count_articles,
        ]);
    }

    public function article($id){
        $article = Article::where('id', $id)->first();
        return view('userEditor.articles.article', [
            'article' => $article,
        ]);
    }
}
