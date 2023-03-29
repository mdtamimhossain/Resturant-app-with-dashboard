<?php
namespace App\Http\Controllers;
use App\Http\Services\FoodService;
class HomeController extends Controller
{

    public function about(){
        return view('/page/about');
    }

    public function contact(){
        return view('/page/contact');
    }

}
