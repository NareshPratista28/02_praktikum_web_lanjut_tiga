<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    Public function about(){
        return redirect()->to('https://www.educastudio.com/about-us');
    }
}
