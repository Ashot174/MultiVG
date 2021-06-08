<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Role;

class DashboardController extends Controller
{
   public function dashboard(){
       $count_users = Role::where('name', 'user')->first()->users()->count();
       $count_editors = Role::where('name', 'editor')->first()->users()->count();
       $count_admins = Role::where('name', 'admin')->first()->users()->count();
       $articles = Article::latest()->paginate(12);
       $users = User::latest()->paginate(12);
       $count_articles = Article::count();
       return view('admin.dashboard', [
           'articles' => $articles,
           'users' => $users,
           'count_articles' => $count_articles,
           'count_users' => $count_users,
           'count_editors' => $count_editors,
           'count_admins' => $count_admins,
       ]);
   }
    public function article($id){
        $article = Article::where('id', $id)->first();
        return view('admin.articles.article', [
            'article' => $article
        ]);
    }
}
