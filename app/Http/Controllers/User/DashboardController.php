<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class DashboardController extends Controller
{
    public function dashboard(){
        $articles = Article::latest()->paginate(12);
        return view('user.dashboard', [
            'articles' => $articles,
        ]);
    }
    public function article($id){
        $article = Article::where('id', $id)->first();
        return view('user.articles.article', [
            'article' => $article
        ]);
    }
}
