<?php

namespace App\Http\Controllers;


use App\Http\Requests\page\ReservationRequest;

use App\Http\Services\PageService;
use App\Http\Services\ReservationService;
use App\Models\Food;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(PageService $service)
    {
        $this->service = $service;
    }

    public function index($type=null)
    {
        $response = $this->service->getFoodList($type);

        return $response['success'] ?
            view('/page/home',$response['data'])->with('success',$response['message'])
            :view('/page/home')->with('error', $response['message']);
    }


    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function about(){
        return view('/page/about');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function contact(){
        return view('/page/contact');
    }


}
