<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    Public function karir(){
        return redirect()->to('https://www.educastudio.com/program/karir');
    }
    Public function magang(){
        return redirect()->to('https://www.educastudio.com/program/magang');
    }
    Public function kunjungan(){
        return redirect()->to('https://www.educastudio.com/program/kunjungan-industri');
    }
}
