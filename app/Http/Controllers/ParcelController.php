<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcel;
use Illuminate\Support\Facades\Validator;


class ParcelController extends Controller
{
    //
    public function parcels(){
        try {
            return response()->json(Parcel::all(),200);
        } catch (\Throwable $th) {
            return response()->json($th,404);
        }

    }
    public function parcelByCode($t_code){
        $parcel = Parcel::where('parcelTrackerCode',$t_code)->first();
         if(is_null($parcel)){
            return response()->json(["message"=>"Record Not Found"],404);
         }
        return response()->json($parcel,200);

    }
    public function storeParcel(Request $request){

        // try {
        //     //code...
        //
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return response()->json($th,404);
        // }
            $rules=[
                'user_id'=>'required|numeric',
                'company_id'=>'required|numeric',
                'parcelTrackerCode'=>'required|numeric',
                'parcelNote'=>'required',
                'parcelName'=>'required',
                'parcelWeight'=>'required|numeric',
                'fee'=>'required|numeric',
                'bookedDate'=>'required',
                'parcelFrom'=>'required',
                'parcelTo'=>'required',
            ];
            $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return response()->json(["message"=>$validator->errors()],400);
            }
            $parcel = Parcel::create($request->all());
            return response()->json($parcel,200);



    }
    public function updateParcel(Request $request,$t_code){

        $parcel = Parcel::where('parcelTrackerCode',$t_code)->first();
         if(is_null($parcel)){
            return response()->json(["message"=>"That Tracker  code does not match any records"],404);
         }
         Parcel::where('parcelTrackerCode',$t_code)->update($request->all());
         return response()->json("success update",200);
    }
    public function deleteParcel(Request $request,$t_code){

        $parcel = Parcel::where('parcelTrackerCode',$t_code)->first();
         if(is_null($parcel)){
            return response()->json(["message"=>"Cannot delete a record that does not exist"],404);
         }
        Parcel::where('parcelTrackerCode',$t_code)->delete();
        return response()->json("Record Deleted",204);

    }

}
