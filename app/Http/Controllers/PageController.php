<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function about()
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about', ['tags' => $tags]);
    }
}
