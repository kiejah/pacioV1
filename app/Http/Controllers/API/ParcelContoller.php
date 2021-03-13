<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Parcel;
use Illuminate\Support\Facades\Validator;

class ParcelContoller extends Controller
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
            return response()->json(Parcel::all(),200);
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
    public function store(Request $request){
        //
        $rules=[
            'user_id'=>'required|numeric',
            'company_id'=>'required|numeric',
            'parcelTrackerCode'=>'required',
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $parcel = Parcel::where('parcelTrackerCode',$id)->first();
        if(is_null($parcel)){
           return response()->json(["message"=>"Record Not Found"],404);
        }
       return response()->json($parcel,200);
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
        $parcel = Parcel::where('parcelTrackerCode',$id)->first();
        if(is_null($parcel)){
           return response()->json(["message"=>"That Tracker  code does not match any records"],404);
        }
        Parcel::where('parcelTrackerCode',$id)->update($request->all());
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
        // $parcel = Parcel::where('parcelTrackerCode',$id)->first();
        //  if(is_null($parcel)){
        //     return response()->json(["message"=>"Cannot delete a record that does not exist"],404);
        //  }
        // Parcel::where('parcelTrackerCode',$id)->delete();
        return response()->json("Operation Not Allowed",404);
    }
}
