<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    Public function news(){
        return redirect()->to('https://www.educastudio.com/news');
    }
    Public function educaberbagi($id){
        return redirect()->to('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19'.$id);
    }
}
