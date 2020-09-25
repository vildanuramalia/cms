<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return "SELAMAT DATANG";
    }
    public function about() {
        return "Nama : Vilda Nur Amalia <br> NIM : 1931710026";
    }
    public function articles($page) {
        return 'Halaman artikel ini dengan id' . $page;
    }
}

