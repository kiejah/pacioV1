<?php

namespace App\Http\Controllers\Admin;

use App\CompanyMaster;
use App\Parcel;
use App\Country;
use App\Area;
use App\AreaType;
use App\Receipient;
use App\Sender;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = CompanyMaster::all();

        if(count($companies) > 0){
            $company = CompanyMaster::find(1);
            return view('admin.company.index',compact('companies','company'));
        }else{
            return view('admin.company.index',compact('companies'));
        }
    }
    public function parcels()
    {
        //
        $parcels = Parcel::all();

        return view('admin.parcels.index',compact('parcels'));

    }
    public function users()
    {
        //
        $users = User::query()->where('id', '<>', 1)
                ->get();

        return view('admin.users.index',compact('users'));

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

        // $validated = $request->validate([
        //     'company_name'=>'required|string',
        //     'company_phone'=>'required',
        //     'company_address'=>'required',
        //     'company_country'=>'required',
        //     'company_pin'=>'required',
        //     'company_logo'=>'required|image|mimes:jpeg,jpg,png,bmp'
        // ]);

                    $slug = Str::slug($request->company_name);
                    $image = $request->file('company_logo');


                    if(isset($image)){
                        $date = Carbon::now()->toDateString();
                        $imageName = $slug.'-'.$date.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                        if(!Storage::disk('public')->exists('company')){
                            Storage::disk('public')->makeDirectory('company');
                        }
                        $imageLogo = Image::make($image)->save($image->getClientOriginalExtension());
                        Storage::disk('public')->put('company/'.$imageName,$imageLogo);
                    }else{
                        $imageName= "default.png";
                    }


                    $company = new CompanyMaster();

                    $company->company_name = $request->company_name;
                    $company->company_code = $request->company_code;
                    $company->area_id = $request->area_id;
                    $company->company_logo = $imageName;
                    $company->company_phone = $request->company_phone;
                    $company->company_address = $request->company_address;
                    $company->country_id = $request->country_id;
                    $company->company_email = $request->company_email;
                    $company->companyRegNumber = $request->companyRegNumber;
                    $company->contactpersonName = $request->contactpersonName;
                    $company->contactpersonPhone = $request->contactpersonPhone;
                    $company->contactpersonEmail = $request->contactpersonEmail;
                    $company->save();

                    return redirect()->route('admin.company-master.index')->with('success',"Company details saved successfully");
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
        $company = CompanyMaster::find($id);
        $countries = Country::all();
        $areas = Area::all();
        $area_type_name = AreaType::where('id', $company->area->area_type_id)->value('area_type_name');
        return view('admin.company.edit_company',compact('countries','company','areas','area_type_name'));
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

        CompanyMaster::where('id',$id)->update($request->except(['_token','company_logo']));
        return redirect()->route('admin.company-master.index')->with('success',"Company details edited successfully");
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
    Public function addNewCompanyView(){

        $countries = Country::all();
        $areas = Area::all();
        return view('admin.company.add_new_company',compact('countries','areas'));
    }
    public function addNewUser()
    {
        $companies = CompanyMaster::all();
        $roles = Role::query()->where('id', '<>', 1)
                ->get();
        return view('admin.users.add_new_user',compact('companies','roles'));
    }
    public function storeUser(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'role_id' => 'required',
        //     'branch_id' => 'required',
        //     'company_id' => 'required',
        //     'user_fullname' => 'required|min:5|max:255',
        //     'email' => 'required|email',
        //     'branch_id' => 'required|unique:posts|max:255',
        //     'password' => 'required|between:8,255|confirmed',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()
        //                 ->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }else{


            if($request->password != $request->password_confirmation){
                return redirect()->back()->with('danger',"Passwords Did Not Match");
            }else{
             try{

                DB::table('users')->insert([
                    'role_id'=> (int)$request->user_role,
                    'branch_id'=> 1,
                    'company_id'=> (int)$request->user_company,
                    'name'=>$request->user_fullname,
                    'username'=> str_replace(' ','.',$request->user_fullname),
                    'email'=> $request->user_email,
                    'password'=>bcrypt($request->password)

                    ]);
                }catch(\Exception $e){
                    // do task when error
                    dd($e->getMessage());   // insert query
                 }

                return redirect()->back()->with('success',"User created sucessfully");
            }

    }
}
