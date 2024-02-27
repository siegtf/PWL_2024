<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // dengan resource /index
    public function index() {
        return 'Selamat Datang Sigit!';
       }
}
