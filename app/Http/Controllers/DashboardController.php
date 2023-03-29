<?php

namespace App\Http\Controllers;
use App\Http\Requests\Dashboard\FoodRequest;
use App\Http\Services\DashboardService;
use App\Models\Food;
use App\Models\Order;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */


    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function dashboardUser(){
        $users=User::all();
       // return view('Dashboard.user')->with('users',$users);
        return view('/Dashboard/user')->with('users',$users);
    }

    /**
     * @param $id
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function dashboardOrder(){
        $orders=Order::all();
        // return view('Dashboard.user')->with('users',$users);
        return view('/Dashboard/order')->with('orders',$orders);
    }



}

