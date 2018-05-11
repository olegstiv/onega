<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;

class AboutController extends Controller
{

    public function show()
    {

        $article = DB::select('SELECT * FROM articles');
        dump($article);
        $data = ['title' => 'Контакты'];

        return view('default.about', $data);
    }
}
