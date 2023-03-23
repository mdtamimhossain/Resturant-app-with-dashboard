<?php

namespace App\Http\Services;

use App\Jobs\SendEmailJob;
use App\Models\Food;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardService extends Service
{

public function ReservationList(): array
{
    try {
        $data=Reserve::all();
        return ['success' => true,'data'=>$data];
    }catch (\Exception $exception){
        return ['success' => false,'message' => $exception->getMessage()];
    }
}
public function deleteReservation($id): array
{
    try {
        $reservation=Reserve::find($id);
        $reservation->delete();
        return ['success' => true,'message' => "Reservation Successfully"];
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
                'description'=>$data['price'],
                'price'=>$data['price'],
                'type'=>$data['type'],
                'image'=>$imageUrl
            ]);
            return ['success' => true,'message' => "Food upload successfully"];
        }catch (\Exception $exception){
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }

    /**
     * @return array
     */
    public function foodList(): array
    {
        try {
            $food=Food::all();
            return ['success' => true,'data'=>$food];
        }catch (\Exception $exception){
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }


}
