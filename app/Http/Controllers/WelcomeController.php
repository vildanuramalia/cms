<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //mendefinisikan action
    public function hello() {
        return 'Hello World';
    }
}
