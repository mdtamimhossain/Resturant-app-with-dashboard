<?php

namespace App\Http\Controllers;


use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Http\Services\AuthService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class AuthController extends Controller
{
    private AuthService $service;

    /**
     * @param AuthService $service
     */
    function __construct (AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function login(){
        if(!auth()->user())
        return view('/auth/login');
        else
            return redirect()->route('home');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function registration(){
        return view('/auth/registration');
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function processLogin (LoginRequest $request): RedirectResponse
    {

        $response = $this->service->processLogin($request->all());

        return $response['success'] ?
            redirect()->route('base')->with('success', $response['message'])
            : redirect()->back()->with('error', $response['message']);
    }
    /**
     * @param RegistrationRequest $request
     * @return RedirectResponse
     */
    public function processRegistration(RegistrationRequest $request): RedirectResponse
    {
        print('hello j');
        $response = $this->service->processRegistration($request->all());
        return $response['success'] ?
            redirect()->route('login')->with('success', $response['message'])
            : redirect()->back()->with('error', $response['message']);
    }

    /**
     * @return RedirectResponse
     */
    public  function logout(): RedirectResponse
    {
        $response = $this->service->logout();
        return $response['success'] ?
            redirect()->route('login')->with('success', $response['message'])
            : redirect()->back()->with('error', $response['message']);
    }


}
