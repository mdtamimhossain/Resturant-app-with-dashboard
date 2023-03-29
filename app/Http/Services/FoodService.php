<?php

namespace App\Http\Services;

use App\Jobs\SendEmailJob;
use App\Models\Food;
use App\Models\Order;
use App\Models\Reserve;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use function Webmozart\Assert\Tests\StaticAnalysis\inArray;

class FoodService extends Service
{

    /**
     * @param $type
     * @return array
     */
    public function getFoodList($selectedType): array
    {
        try {

            $foods=$selectedType?
                Food::where('type',$selectedType)->get()
                :Food::all();
            $types=Food::distinct()->pluck('type')->toArray();

            /*$newAr=[];
            foreach($types as $type)
            {
                $newAr[]=$type['type'];
            }
            $types=$newAr;
            dd($types);
           /* dump($types);
            foreach($types as $key=> $type)
            {
                $types[$key]=$type['type'];
            }*/


            return $this->responseSuccess('Done',['selectedType'=>$selectedType,'types'=>$types,'foods'=>$foods]);
        }
        catch (\Exception $exception) {
            return $this->responseError($exception->getMessage());
        }
    }
    public function foodList(): array
    {
        try {
            $food=Food::all();
            return ['success' => true,'data'=>$food];
        }catch (\Exception $exception){
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }
    public function foodUpload($data): array
    {
        try {

            $imagePath = $data['image']->store('public/food_images');
            $imageUrl = Storage::url($imagePath);
            Food::create([
                'name'=>$data['name'],
                'description'=>$data['description'],
                'price'=>$data['price'],
                'type'=>$data['type'],
                'image'=>$imageUrl
            ]);
            return ['success' => true,'message' => "Food upload successfully"];
        }catch (\Exception $exception){
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }
    public function getAllFood(): array
    {
        try {

            $foods=Food::all();
            $types=Food::distinct()->pluck('type')->toArray();

            /*$newAr=[];
            foreach($types as $type)
            {
                $newAr[]=$type['type'];
            }
            $types=$newAr;
            dd($types);
           /* dump($types);
            foreach($types as $key=> $type)
            {
                $types[$key]=$type['type'];
            }*/


            return $this->responseSuccess('Done',['types'=>$types,'foods'=>$foods]);
        }
        catch (\Exception $exception) {
            return $this->responseError($exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return array
     */
    public function getFoodDetails($id): array
    {
        try {
            $food=Food::find($id);
            return $this->responseSuccess('Done',['food'=>$food]);

        }catch (\Exception $exception) {
            return $this->responseError($exception->getMessage());
        }
    }

    /**
     * @param $data
     * @return array
     */
    public function storeOrder($data): array
    {

        try {
            Order::create([
                'name'=>$data['name'],
                'foodNumber'=>$data['foodNumber'],
                'message'=>$data['message'],
                'food'=>$data['food']
            ]);
            return $this->responseSuccess('Food ordered successfully');
        }catch (\Exception $exception) {
            return $this->responseError($exception->getMessage());
        }
    }
    public function deleteOrder($id): array
    {
        try {
            $order=Order::find($id);
            $order->delete();
            return ['success' => true,'message' => "Order Completed"];
        }catch (\Exception $exception){
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }

}
