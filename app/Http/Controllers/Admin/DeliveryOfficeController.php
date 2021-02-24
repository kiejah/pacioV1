<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PacioCompanyDeliveryOffice;
use App\DeliveryLocation;
use App\CompanyMaster;
use Illuminate\Support\Facades\Validator;


class DeliveryOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $companies, $locations;

    public function __construct() {
        $this->companies = CompanyMaster::all();
        $this->locations = DeliveryLocation::all();
    }
    public function index()
    {
        //

        $delivery_offices = PacioCompanyDeliveryOffice::all();
        return view('admin.delivery-offices.index',compact('delivery_offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = $this->companies;
        $locations = $this->locations;
        return view('admin.delivery-offices.new_office',compact('companies','locations'));
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
            'delivery_office_name'=>'required',
            'company_id'=>'required',
            'delivery_location_id'=>'required',
            'office_contact_1'=>'required',
            'office_contact_2'=>'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
             return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        PacioCompanyDeliveryOffice::create($request->all());
        return redirect()->back()->with('success',"Delivery Office Created Successfully");
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
