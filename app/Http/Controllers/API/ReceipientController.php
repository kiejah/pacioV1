<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Receipient;
use Illuminate\Support\Facades\Validator;

class ReceipientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            return response()->json(Receipient::all(),200);
        } catch (\Throwable $th) {
            return response()->json($th,404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules=[
            'user_id'=>'required|numeric',
            'company_id'=>'required|numeric',
            'parcelTrackerCode'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'nationalID'=>'required|numeric',
            'phoneNumber'=>'required',
            'altPhoneNumber'=>'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors()],400);
        }
        $recipient = Receipient::create($request->all());
        return response()->json($recipient,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $recipient = Receipient::where('parcelTrackerCode',$id)->first();
        if(is_null($recipient)){
           return response()->json(["message"=>"Record Not Found"],404);
        }
       return response()->json($recipient,200);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $recipient = Receipient::where('parcelTrackerCode',$id)->first();
        if(is_null($recipient)){
           return response()->json(["message"=>"a Receiver with that TrackerCode does not match any records"],404);
        }
        Receipient::where('parcelTrackerCode',$id)->update($request->all());
        return response()->json("success update",200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $parcel = Receipient::where('parcelTrackerCode',$id)->first();
        //  if(is_null($parcel)){
        //     return response()->json( ["message"=>"Cannot delete a record that does not exist"],404);
        //  }
        // Receipient::where('parcelTrackerCode',$id)->delete();
        return response()->json("Operation Not Allowed",404);
    }
}
