<?php

namespace App\Http\Controllers\API;

use App\Parcel;
use App\Sender;
use App\Receipient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookParcelRequest;

class BookParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookParcelRequest $request){
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);
        $validated['username'] =   $validated['fname'];

        if($validated) {
           $parcel = Parcel::create([
                    "user_id" => $validated['user_id'],
                    "company_id" => $validated['company_id'],
                    "parcelTrackerCode" => $validated['parcelTrackerCode'],
                    "parcelNote" => $validated['parcelNote'],
                    "parcelName" => $validated['parcelName'],
                    "parcelWeight" => $validated['parcelWeight'],
                    "fee" => $validated['fee'],
                    "bookedDate" => $validated['bookedDate'],
                    "parcelFrom" => $validated['parcelFrom'],
                    "bookedDate" => $validated['bookedDate'],
                    "parcelTo" => $validated['parcelTo']

          ]);
          $sender =  Sender::create([
                "user_id" => $validated['user_id'],
                "company_id" => $validated['company_id'],
                "parcelTrackerCode" => $validated['parcelTrackerCode'],
                "senderName" => $validated['senderName'],
                "senderEmail" => $validated['senderEmail'],
                "senderNationalID" => $validated['senderNationalID'],
                "senderPhoneNumber" => $validated['senderPhoneNumber'],
                "senderAltPhoneNumber" => $validated['senderAltPhoneNumber']
            ]);
           $reciepient = Receipient::create([
                "user_id" => $validated['user_id'],
                "company_id" => $validated['company_id'],
                "parcelTrackerCode" => $validated['receipientsTrackerCode'],
                "receipientsName" => $validated['receipientsName'],
                "receipientsEmail" => $validated["receipientsEmail"],
                "receipientsNationalID" => $validated["receipientsNationalID"],
                "receipientsPhoneNumber" => $validated["receipientsPhoneNumber"],
                "receipientsAltPhoneNumber" => $validated['receipientsAltPhoneNumber']
            ]);
            if($parcel && $sender && $reciepient){
                return response()->json([
                    'success'      => true,
                    'responseCode' => 201,
                ]);
            }else{
                return response()->json([
                    'status_code' => '401',
                    'success'      => false,
                ]);
            }

       }else{
            return response()->json([
                'status_code' => '401',
                'success'      => false,
            ]);
       }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }



}
