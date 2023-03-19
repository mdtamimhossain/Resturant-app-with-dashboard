<?php

namespace App\Http\Controllers;
use App\Http\Services\DashboardService;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class DashboardController extends Controller
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function dashboardFood(){
        return view('/Dashboard/food');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function dashboardReservation(){
        $response = $this->service->ReservationList();
        $reservations=$response['data'];
        return $response['success'] ?
            view('/Dashboard/reservation')->with('reservations',$reservations)
            : view('/Dashboard/reservation')->with('error', $response['message']);
    }

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
     * @return RedirectResponse
     */
    public function deleteReservation($id): RedirectResponse
    {
        $response = $this->service->deleteReservation($id);


        return $response['success'] ?
            redirect()->route('dashboard.reservation')->with('success', $response['message'])
            : redirect()->back()->with('error', $response['message']);
    }


}
