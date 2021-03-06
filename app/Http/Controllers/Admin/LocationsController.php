<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DeliveryLocation;
use App\Country;
use App\DeliveryLocationType;
use App\Area;
use Illuminate\Support\Facades\Validator;


class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $county,$country,$location_type;
    function __construct()
    {
        $this->country = Country::all();
        $this->county = Area::all();
        $this->location_type = DeliveryLocationType::all();

    }
    public function index()
    {
        //
        $del_locations= DeliveryLocation::all();
        return view('admin.locations.index',compact('del_locations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = $this->country;
        $counties = $this->county;
        $location_types = $this->location_type;
        return view('admin.locations.new_location',compact('countries','counties','location_types'));
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
          //
          $rules=[
            'delivery_location_type_id'=>'required',
            'delivery_location_name'=>'required',
            'delivery_location_area_id'=>'required',
            'delivery_location_code'=>'required',
            'delivery_location_parent'=>'required'

        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
             return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        DeliveryLocation::create($request->all());
        return redirect()->back()->with('success',"Location Created Successfully");
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
    }
}
