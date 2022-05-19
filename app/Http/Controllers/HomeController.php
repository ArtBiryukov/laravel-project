<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show ()
        {
            return '<div class="title">Приветственная страница новостного портала</div>';
        }
}
