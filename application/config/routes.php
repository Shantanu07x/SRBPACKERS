<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';
$route["photo-gallery"] = "gallery/photo_gallery";
$route["video-gallery"] = "gallery/video_gallery";
$route["(:any).htm"] = "home/error";
$route["infrastructure"] = "about/infrastructure";
$route["why-choose-us"] = "about/choose";
$route["faqs"] = "about/faqs";

$route["packing-material"] = "strategy/packingMaterial";
$route["packing-tips"] = "strategy/packingTips";
$route["our-working-process"] = "strategy/ourWorkingProces";


$route["all_services"] = "services/all_services";
$route["transportation"] = "services/transportation";
$route["packing-moving"] = "services/packingMoving";
$route["loading-unloading"] = "services/loadingUnloading";
$route["unpacking-escort"] = "services/unpackingEscort";
$route["home-shifting"] = "services/homeShifting";
$route["domestic-relocation"] = "services/domesticRelocation";
$route["international-relocation"] = "services/internationalRelocation";
$route["warehouse"] = "services/warehouse";
$route["car-bike"] = "services/carBike";
$route["office-relocation"] = "services/office";
$route["hotel-shifting"] = "services/hotel";
$route["factory-shifting"] = "services/factory";
$route["pet-moving"] = "services/pet";
$route["custom-clearance"] = "services/custom";
$route["painting-moving"] = "services/painting";
$route["goods-insurance"] = "services/goods";


$route["our-branches"] = "packers_movers/state";
$route["packers-movers-(:any)-india"] = "packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"] = "packers_movers/city/$2/$1";
// $route["([a-zA-Z-]+)-packers-movers-([a-zA-Z-]+)"] = "packers_movers/city/$1/$2";  //

$route["bihar"] = "packers_movers/state_services/bihar";
$route["andhra-pradesh"] = "packers_movers/state_services/andhra-pradesh";
$route["gujarat"] = "packers_movers/state_services/gujarat";
$route["assam"] = "packers_movers/state_services/assam";
$route["chandigarh"] = "packers_movers/state_services/chandigarh";
$route["chhattisgarh"] = "packers_movers/state_services/chhattisgarh";
$route["delhi"] = "packers_movers/state_services/delhi";
$route["haryana"] = "packers_movers/state_services/haryana";
$route["jharkhand"] = "packers_movers/state_services/jharkhand";
$route["karnataka"] = "packers_movers/state_services/karnataka";
$route["kerala"] = "packers_movers/state_services/kerala";
$route["madhya-pradesh"] = "packers_movers/state_services/madhya-pradesh";
$route["maharashtra"] = "packers_movers/state_services/maharashtra";
$route["odisha"] = "packers_movers/state_services/odisha";
$route["punjab"] = "packers_movers/state_services/punjab";
$route["jaipur"] = "packers_movers/state_services/jaipur";
$route["udaipur"] = "packers_movers/state_services/udaipur";
$route["kota"] = "packers_movers/state_services/kota";
$route["ajmer"] = "packers_movers/state_services/ajmer";
$route["jhunjhunu"] = "packers_movers/state_services/jhunjhunu";
$route["sikar"] = "packers_movers/state_services/sikar";
$route["jodhpur"] = "packers_movers/state_services/jodhpur";
$route["alwar"] = "packers_movers/state_services/alwar";
$route["india"] = "packers_movers/state_services/india";
$route["bikaner"] = "packers_movers/state_services/bikaner";
$route["bhilwada"] = "packers_movers/state_services/bhilwada";
$route["chittorgad"] = "packers_movers/state_services/chittorgad";
$route["india"] = "packers_movers/state_services/india";


$route["rajasthan"] = "packers_movers/state_services/rajasthan";
$route["tamil-nadu"] = "packers_movers/state_services/tamil-nadu";
$route["telangana"] = "packers_movers/state_services/telangana";
$route["uttar-pradesh"] = "packers_movers/state_services/uttar-pradesh";
$route["uttarakhand"] = "packers_movers/state_services/uttarakhand";
$route["west-bengal"] = "packers_movers/state_services/west-bengal";
$route["jammu-and-kashmir"] = "packers_movers/state_services/jammu-and-kashmir";

$route["packers-movers-from-(:any)-to-(:any)"]="packers_movers/from_to/$1/$2";
$route['translate_uri_dashes'] = TRUE;
