<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($page) {
        return view('article', ['page' => $page]);
    }
}
