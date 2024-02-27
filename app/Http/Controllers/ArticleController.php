<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // dengan resource /articles/{id}
    public function article($id = id) {
        return 'Halaman Artikel dengan ID '. $id;
    }
}
