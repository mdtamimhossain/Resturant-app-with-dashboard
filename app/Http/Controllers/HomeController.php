<?php

namespace App\Http\Controllers;


use App\Http\Requests\page\ReservationRequest;

use App\Http\Services\ReservationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(ReservationService $service)
    {
        $this->service = $service;
    }
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(){
        return view('/page/home');
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
