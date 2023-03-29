<?php

namespace App\Http\Services;

use App\Jobs\SendEmailJob;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ReservationService extends Service
{

public function ReservationProcess(array $data):array
{
    try {
        Reserve::create([
            'user_id' => Auth::id(),
            'email' => $data['email'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'guestNumber'=> $data['guestNumber'],
            'date'=> $data['date'],
            'message'=> $data['message']
        ]);
        return ['success' => true,'message' => "Reservation Successfully"];
    }catch (\Exception $exception){
        return ['success' => false,'message' => $exception->getMessage()];
    }
}
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


}
