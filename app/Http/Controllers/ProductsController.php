<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function marbeledugames(){
        return redirect()->to('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function marbelandfriends(){
        return redirect()->to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function riristory(){
        return redirect()->to('https://www.educastudio.com/category/riri-story-books');
    }
    public function kolaksongs(){
        return redirect()->to('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
