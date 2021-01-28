<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CompanyMaster;
use App\Parcel;
use App\Sender;
use App\Receipient;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('staff.dashboard');
    }
    public function addNewParcelDetails(){
        return view('staff.add_new_details');
    }
    public function parcelsView(){

        $parcels = Parcel::all();
        return view('staff.parcels.index',compact('parcels'));
    }
    public function storeParcel(Request $request){


        $user_id = Auth::user()->id;
        $company_id = Auth::user()->company_id;

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


        return redirect()->back()->with('success',"Parcel datails Saved Suucessfully");


    }
}
