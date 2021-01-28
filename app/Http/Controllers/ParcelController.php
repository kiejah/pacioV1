<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcel;
use App\Sender;
use App\Receipient;

class ParcelController extends Controller
{
    //
    public function parcels(){
        return response()->json(Parcel::all(),200);
    }
    public function parcelByCode($t_code){
        $parcel = Parcel::where('parcelTrackerCode',$t_code)->first();
         if(is_null($parcel)){
            return response()->json(["message"=>"Record Not Found"],404);
         }
        return response()->json($parcel,200);
    }
    public function storeParcel(Request $request){


        $user_id = $request->user_id;
        $company_id = $request->company_id;

        //save parcel details
        $parcel = new Parcel();
        $sender = new Sender();
        $receiver = new Receipient();

        $parcel->user_id = $user_id;
        $parcel->company_id = $company_id;
        $parcel->parcelTrackerCode = $request->parcelTrackerCode;
        $parcel->parcelNote = $request->parcelNote;
        $parcel->parcelName = $request->parcel_name;
        $parcel->parcelWeight = $request->parcelWeight;
        $parcel->fee = $request->fee;
        $parcel->bookedDate = $request->bookedDate;
        $parcel->parcelFrom = $request->parcelFrom;
        $parcel->parcelTo = $request->parcelTo;
        $parcel->save();

        //save sender
        $sender->user_id= $user_id;
        $sender->company_id= $company_id;
        $sender->parcelTrackerCode= $request->parcelTrackerCode;
        $sender->name= $request->sender_name;
        $sender->email= $request->sender_email;
        $sender->nationalID= $request->sender_natID;
        $sender->phoneNumber= $request->sender_phonenumber;
        $sender->altPhoneNumber= $request->sender_altPhoneNumber;
        $sender->save();

        //save receipient
        $receiver->user_id= $user_id;
        $receiver->company_id= $company_id;
        $receiver->parcelTrackerCode= $request->parcelTrackerCode;
        $receiver->name= $request->receiver_name;
        $receiver->email= $request->receiver_email;
        $receiver->nationalID= $request->receiver_natID;
        $receiver->phoneNumber= $request->receiver_phonenumber;
        $receiver->altPhoneNumber= $request->receiver_altPhoneNumber;
        $receiver->save();

        return response()->json($parcel,201);
    }

}
