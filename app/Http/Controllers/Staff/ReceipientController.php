<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Receipient;

class ReceipientController extends Controller
{
    //
    public function recepient(){
        return response()->json(Receipient::all());
    }
}
