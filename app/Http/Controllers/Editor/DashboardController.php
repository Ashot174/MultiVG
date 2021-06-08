<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class DashboardController extends Controller
{
    public function dashboard(){
        $articles = Article::latest()->take(10)->get();
        $count_articles = Article::count();
        return view('editor.dashboard', [
            'articles' => $articles,
            'count_articles' => $count_articles,
        ]);
    }
}
