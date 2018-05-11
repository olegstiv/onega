<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class Core extends Controller
{

    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

    public function getArticles()
    {

        $article = Article::all();
        dump($article);
    }

    public function getArticle($id)
    {

        echo $id;
    }

}
