<?php
namespace App\Http\Controllers;
use App\Http\Requests\Dashboard\FoodRequest;
use App\Http\Requests\page\OrderRequest;
use App\Http\Services\FoodService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FoodController extends Controller
{
    private FoodService $service;

    public function __construct(FoodService $service)
    {
        $this->service = $service;
    }
    public function order($id){
        $response = $this->service->getFoodDetails($id);

        return view('/page/order',$response['data']);
    }

    /**
     * @param OrderRequest $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse
     */
    public function orderProcess(OrderRequest $request): \Illuminate\Foundation\Application|View|Factory|RedirectResponse|Application
    {
        $response = $this->service->storeOrder($request->all());

        return $response['success'] ?
            redirect()->route('base')->with('success',$response['message'])
            :redirect()->back()->with('error', $response['message']);

    }


    public function index($type=null)
    {
        $response = $this->service->getFoodList($type);

        return $response['success'] ?
            view('/page/home',$response['data'])->with('success',$response['message'])
            :view('/page/home')->with('error', $response['message']);
    }
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse
     */
    public function foodList()
    {
        $response = $this->service->foodList();
        return $response['success'] ?
            view('/Dashboard/food')->with('foods', $response['data'])
            : redirect()->back()->with('error', $response['message']);
    }

    /**
     * @param FoodRequest $request
     * @return RedirectResponse
     */
    public function foodUpload(FoodRequest $request): RedirectResponse
    {

        $response = $this->service->foodUpload($request->all());
        return $response['success'] ?
            redirect()->route('dashboard.foodList')->with('success', $response['message'])
            : redirect()->back()->with('error', $response['message']);
    }
    public function deleteOrder($id): RedirectResponse
    {
        $response = $this->service->deleteOrder($id);


        return $response['success'] ?
            redirect()->route('dashboard.order')->with('success', $response['message'])
            : redirect()->back()->with('error', $response['message']);
    }


}
