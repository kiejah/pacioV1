<?php
use App\CompanyMaster;

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
