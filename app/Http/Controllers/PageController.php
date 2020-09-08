<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = article::paginate(2);// All la tat ca cac bai viet 1 trang , con 2-x  la so bai viet tren 1 trang (khi phan trang)
        // xu li tat ca cac logic, sau day tra du lieu ve view
        return view('Home', compact('articles'));
    }
   
}
