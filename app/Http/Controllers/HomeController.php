<?php
namespace App\Http\Controllers;
use App\Http\Services\FoodService;
class HomeController extends Controller
{
    private FoodService $service;

    public function __construct(FoodService $service)
    {
        $this->service = $service;
    }

    public function about(){
        return view('/page/about');
    }

    public function contact(){
        return view('/page/contact');
    }
    public function index($type=null)
    {
        $response = $this->service->getFoodList($type);

        return $response['success'] ?
            view('/page/home',$response['data'])->with('success',$response['message'])
            :view('/page/home')->with('error', $response['message']);
    }

    public function getAllFood()
    {
        $response = $this->service->getAllFood();

        return $response['success'] ?
            view('/page/home',$response['data'])->with('success',$response['message'])
            :view('/page/home')->with('error', $response['message']);
    }

}
