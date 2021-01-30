<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CompanyMaster;
use App\Parcel;
use App\Sender;
use App\Receipient;
use App\Role;
use App\User;

use Illuminate\Support\Facades\DB;

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

        $company_id = Auth::user()->company_id;
        $parcels = Parcel::where('company_id',$company_id)->get();
        return view('staff.parcels.index',compact('parcels'));
    }
    public function parcelView($id){

        $parcel = Parcel::find($id);
        return view('staff.parcels.parcel_view',compact('parcel'));
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
        $parcel->parcelName = $request->parcelName;
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

    public function users()
    {
        //
        $user_id = Auth::user()->id;
        $users = User::query()->where('id', '<>', 1)
                ->where('id', '<>', $user_id )
                ->where('role_id', '<>', 2)
                ->get();

        return view('staff.users.index',compact('users'));

    }
    public function addNewUser()
    {
        $companies = CompanyMaster::all();
        $roles = Role::query()->where('id', '<>', 1)
                ->get();
        return view('staff.users.add_new_user',compact('companies','roles'));
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
