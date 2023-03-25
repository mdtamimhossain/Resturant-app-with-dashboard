<?php

namespace App\Http\Services;

use App\Jobs\SendEmailJob;
use App\Models\Food;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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


}
