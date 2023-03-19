<?php

namespace App\Http\Controllers;


use App\Http\Requests\page\ReservationRequest;

use App\Http\Services\ReservationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    private ReservationService $service;

    public function __construct(ReservationService $service)
    {
        $this->service = $service;
    }

    public function reservation(){
        return view('/page/reservation');
    }


    /**
     * @param ReservationRequest $request
     * @return RedirectResponse
     */
    public function ReservationProcess(ReservationRequest $request):RedirectResponse
    {
        $response = $this->service->ReservationProcess($request->all());

        return $response['success'] ?
            redirect()->route('home')->with('success', $response['message'])
            : redirect()->back()->with('error', $response['message']);
    }


}
