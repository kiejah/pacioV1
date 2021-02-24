<?php
use App\CompanyMaster;
use App\Country;
use App\DeliveryLocation;

function adminAsset($assetLink){
    return asset('admin/'.$assetLink);
}
function isActive($url){
    return Request::is($url) ? 'active':'';
}
function dStyle($style){
    return ($style=='active') ? 'block':'';
}
function getCompanyName($id){
    $company = CompanyMaster::where('id', '=', $id)->first();
    return $company->company_name;
}
function getCountry($id){
    $country = Country::find($id);
    return $country->country_name;
}
function getLocationCode(){
    $locations = DeliveryLocation::all();
    $locationsCount = $locations->count();
    if(is_null($locations)){
        return '001';
    }elseif($locationsCount <= 9){
        return '00'.strval($locationsCount + 1);
    }elseif($locationsCount >= 10 && $locationsCount <= 99){
        return '0'.strval($locationsCount + 1);
    }else{
        return strval($locationsCount + 1);
    }

}
function getCompanyCode(){
    $company = CompanyMaster::all();
    $companyCount = $company->count();
    if(is_null($company)){
        return 'C01';
    }elseif($companyCount <= 9){
        return 'C0'.strval($companyCount + 1);
    }else{
        return 'C'.strval($companyCount + 1);
    }

}
