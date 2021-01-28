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
