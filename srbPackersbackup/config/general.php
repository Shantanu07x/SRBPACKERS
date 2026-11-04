<?php

/**========================================
 [Table of General configration]

 1. Check constent variable "MySite" isset or not isset
 */


//1 Check constent variable "MySite" isset or not isset =================
if (!defined("MySite")) {
    die("Direct Acces Denied.");
}


// 2 define constent variable baseUrl ============================
$BASE_URL = 'https://www.srbpackers.com/';
define('BASE_URL', $BASE_URL);


// Website Basic Details ======================================
define('PRIMARY_MOBILE', '8383053021');
define('SIRSI_ROAD_MOBILE', '8209860001');
define('EMAIL_ADDRESS', 'info@srbpackers.com');
define('PRIMARY_ADDRESS', '31 Girraj Nagar Vistar Golyawas Mansarovar Jaipur  302020');
define('PRIMARY_ADDRESS_GMAP_LINK', 'https://maps.app.goo.gl/b1p7x1f5H3EAV9JXA');


// define constent variable website links
define('HOME_PAGE_URL', BASE_URL . 'index.php');
define('ABOUTUS_PAGE_URL', BASE_URL . 'about-us.php');
// our strategy tab constent variable 
define('PACKING_METERIAL_PAGE_URL', BASE_URL . 'our-strategy/packing-material.php');
define('PACKING_TIPS_PAGE_URL', BASE_URL . 'our-strategy/packing-tips.php');
define('OUR_WORKING_PROCESS_PAGE_URL', BASE_URL . 'our-strategy/our-working-process.php');
// our services tab constent variable
define('ALL_SERVICES_PAGE_URL', BASE_URL . 'our-services/all-services.php');
define('TRANSPORTATION_SERVICES_PAGE_URL', BASE_URL . 'our-services/transportation-services.php');
define('PACKING_AND_MOVING_SERVICES_PAGE_URL', BASE_URL . 'our-services/packing-and-moving-services.php');
define('LOADING_AND_UNLOADING_SERVICES_PAGE_URL', BASE_URL . 'our-services/loading-and-unloading-services.php');
define('UNPACKING_AND_ESCORT_SERVICES_PAGE_URL', BASE_URL . 'our-services/unpacking-and-escort-services.php');
define('HOME_SHIFTING_SERVICES_PAGE_URL', BASE_URL . 'our-services/home-shifting-services.php');
define('DOMESTIC_RELOCATION_SERVICES_PAGE_URL', BASE_URL . 'our-services/domestic-relocation-services.php');
define('INTERNATIONAL_RELOCATION_SERVICES_PAGE_URL', BASE_URL . 'our-services/international-relocation-services.php');
define('WAREHOUSING_SERVICES_PAGE_URL', BASE_URL . 'our-services/warehousing-services.php');
define('CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL', BASE_URL . 'our-services/car-and-bike-transportation-services.php');
define('OFFICE_SHIFTING_SERVICES_PAGE_URL', BASE_URL . 'our-services/office-shifting-services.php');
define('HOTEL_SHIFTING_SERVICES_PAGE_URL', BASE_URL . 'our-services/hotel-shifting-services.php');
define('FACTORY_SHIFTING_SERVICES_PAGE_URL', BASE_URL . 'our-services/factory-shifting-services.php');
define('PET_MOVING_SERVICES_PAGE_URL', BASE_URL . 'our-services/pet-moving-services.php');
define('CUSTOM_CLEARANCE_SERVICES_PAGE_URL', BASE_URL . 'our-services/custom-clearance-services.php');
define('PAINTING_MOVING_SERVICES_PAGE_URL', BASE_URL . 'our-services/painting-moving-services.php');
define('GOODS_INSURANCE_SERVICES_PAGE_URL', BASE_URL . 'our-services/goods-insurance-services.php');
// some more constant attribute
define('OUR_GALLERY_PAGE_URL', BASE_URL . 'our-gallery.php');
define('FAQ_PAGE_URL', BASE_URL . 'frequently-asked-question.php');
define('CLIENT_REVIEW_PAGE_URL', BASE_URL . 'client-review.php');
define('CONTACT_US_PAGE_URL', BASE_URL . 'contact-us.php');
define('TERMS_AND_CONDITION_PAGE_URL', BASE_URL . 'terms-and-condition.php');
define('PRIVACY_POLICY_PAGE_URL', BASE_URL . 'privacy-policy.php');
// service area 
define('PACKERS_MOVERS_JAIPUR_URL', BASE_URL . 'packers-and-movers-in-jaipur.php');
define('PACKERS_MOVERS_UDAIPUR_URL', BASE_URL . 'packers-and-movers-in-udaipur.php');
define('PACKERS_MOVERS_KOTA_URL', BASE_URL . 'packers-and-movers-in-kota.php');
define('PACKERS_MOVERS_JODHPUR_URL', BASE_URL . 'packers-and-movers-in-jodhpur.php');
define('PACKERS_MOVERS_JAISALMER_URL', BASE_URL . 'packers-and-movers-in-jaisalmer.php');
define('PACKERS_MOVERS_AJMER_URL', BASE_URL . 'packers-and-movers-in-ajmer.php');
define('PACKERS_MOVERS_BHILWARA_URL', BASE_URL . 'packers-and-movers-in-bhilwara.php');
define('PACKERS_MOVERS_ALWAR_URL', BASE_URL . 'packers-and-movers-in-alwar.php');
define('PACKERS_MOVERS_CHITTORGARH_URL', BASE_URL . 'packers-and-movers-in-chittorgarh.php');
define('PACKERS_MOVERS_JHUNJHUNU_URL', BASE_URL . 'packers-and-movers-in-jhunjhunu.php');
define('PACKERS_MOVERS_SIKAR_URL', BASE_URL . 'packers-and-movers-in-sikar.php');
define('PACKERS_MOVERS_PALI_URL', BASE_URL . 'packers-and-movers-in-pali.php');
define('PACKERS_MOVERS_NOIDA_URL', BASE_URL . 'packers-and-movers-in-noida.php');
define('PACKERS_MOVERS_DELHI_URL', BASE_URL . 'packers-and-movers-in-delhi.php');
define('PACKERS_MOVERS_GURGAON_URL', BASE_URL . 'packers-and-movers-in-gurgaon.php');
define('PACKERS_MOVERS_INDORE_URL', BASE_URL . 'packers-and-movers-in-indore.php');
define('PACKERS_MOVERS_SURAT_URL', BASE_URL . 'packers-and-movers-in-surat.php');
define('PACKERS_MOVERS_MUMBAI_URL', BASE_URL . 'packers-and-movers-in-mumbai.php');
define('PACKERS_MOVERS_BIKANER_URL', BASE_URL . 'packers-and-movers-in-bikaner.php');
define('PACKERS_MOVERS_BHARATPUR_URL', BASE_URL . 'packers-and-movers-in-bharatpur.php');
define('PACKERS_MOVERS_PUNE_URL', BASE_URL . 'packers-and-movers-in-pune.php');
define('PACKERS_MOVERS_LUCKNOW_URL', BASE_URL . 'packers-and-movers-in-lucknow.php');
define('PACKERS_MOVERS_KANPUR_URL', BASE_URL . 'packers-and-movers-in-kanpur.php');
define('PACKERS_MOVERS_KOLKATA_URL', BASE_URL . 'packers-and-movers-in-kolkata.php');
define('PACKERS_MOVERS_CHENNAI_URL', BASE_URL . 'packers-and-movers-in-chennai.php');
define('PACKERS_MOVERS_HYDERABAD_URL', BASE_URL . 'packers-and-movers-in-hyderabad.php');
define('PACKERS_MOVERS_BANGALORE_URL', BASE_URL . 'packers-and-movers-in-bangalore.php');
define('PACKERS_MOVERS_AHMEDABAD_URL', BASE_URL . 'packers-and-movers-in-ahmedabad.php');
define('PACKERS_MOVERS_CHANDIGARH_URL', BASE_URL . 'packers-and-movers-in-chandigarh.php');
define('PACKERS_MOVERS_GHAZIABAD_URL', BASE_URL . 'packers-and-movers-in-ghaziabad.php');
define('PACKERS_MOVERS_NAGPUR_URL', BASE_URL . 'packers-and-movers-in-nagpur.php');
define('PACKERS_MOVERS_Mysuru_URL', BASE_URL . 'packers-and-movers-in-mysuru.php');
define('PACKERS_MOVERS_COIMBATORE_URL', BASE_URL . 'packers-and-movers-in-coimbatore.php');
define('PACKERS_MOVERS_PATNA_URL', BASE_URL . 'packers-and-movers-in-patna.php');
define('PACKERS_MOVERS_RAIPUR_URL', BASE_URL . 'packers-and-movers-in-raipur.php');
define('PACKERS_MOVERS_VADODARA_URL', BASE_URL . 'packers-and-movers-in-vadodara.php');
define('PACKERS_MOVERS_VISAKHAPATNAM_URL', BASE_URL . 'packers-and-movers-in-visakhapatnam.php');
define('PACKERS_MOVERS_PARTAPNAGAR_URL', BASE_URL . 'packers-and-movers-in-pratap-nagar.php');
define('PACKERS_MOVERS_SIRSIROAD_URL', BASE_URL . 'packers-and-movers-in-sirsi-road-jaipur.php');
define('PACKERS_MOVERS_VKI14NUMBER_URL', BASE_URL . 'packers-and-movers-in-vki-14-no-jaipur.php');

define('PACKERS_MOVERS_TONK_URL', BASE_URL . 'packers-and-movers-in-tonk.php');
define('PACKERS_MOVERS_SAWAI_MADHOPUR_URL', BASE_URL . 'packers-and-movers-in-sawai-madhopur.php');
define('PACKERS_MOVERS_CHURU_URL', BASE_URL . 'packers-and-movers-in-churu.php');
define('PACKERS_MOVERS_CHIRAWA_URL', BASE_URL . 'packers-and-movers-in-chirawa.php');
define('PACKERS_MOVERS_NEEM_KA_THANA_URL', BASE_URL . 'packers-and-movers-in-neem-ka-thana.php');
define('PACKERS_MOVERS_NEEMRANA_URL', BASE_URL . 'packers-and-movers-in-neemrana.php');
define('PACKERS_MOVERS_BHIWADI_URL', BASE_URL . 'packers-and-movers-in-bhiwadi.php');
define('PACKERS_MOVERS_RAWATBATHA_URL', BASE_URL . 'packers-and-movers-in-rawatbatha.php');
define('PACKERS_MOVERS_BARMER_URL', BASE_URL . 'packers-and-movers-in-barmer.php');
define('PACKERS_MOVERS_AGRA_URL', BASE_URL . 'packers-and-movers-in-agra.php');
define('PACKERS_MOVERS_Prayagraj_URL', BASE_URL . 'packers-and-movers-in-prayagraj.php');
define('PACKERS_MOVERS_JAMMU_AND_KASHMIR_URL', BASE_URL . 'packers-and-movers-in-jammu-and-kashmir.php');
define('PACKERS_MOVERS_HANUMANGARH_URL', BASE_URL . 'packers-and-movers-in-hanumangarh.php');
define('PACKERS_MOVERS_SRI_GANGANAGAR_URL', BASE_URL . 'packers-and-movers-in-sri-ganganagar.php');
define('PACKERS_MOVERS_BATHINDA_URL', BASE_URL . 'packers-and-movers-in-bathinda.php');
define('PACKERS_MOVERS_Abu_Road_URL', BASE_URL . 'packers-and-movers-in-abu-road.php');
define('PACKERS_MOVERS_PUSHKAR_URL', BASE_URL . 'packers-and-movers-in-pushkar.php');
define('PACKERS_MOVERS_MANSAROVAR_JAIPUR_URL', BASE_URL . 'packers-and-movers-in-mansarovar-jaipur.php');
define('PACKERS_MOVERS_Vishali_Nagar_JAIPUR_URL', BASE_URL . 'packers-and-movers-in-vishali-nagar-jaipur.php');
define('PACKERS_MOVERS_CHOMU_URL', BASE_URL . 'packers-and-movers-in-chomu.php');
define('PACKERS_MOVERS_NAGAUR_URL', BASE_URL . 'packers-and-movers-in-nagaur.php');
define('PACKERS_MOVERS_KUCHAMAN_CITY_URL', BASE_URL . 'packers-and-movers-in-kuchaman-city.php');
define('PACKERS_MOVERS_Jhansi_URL', BASE_URL . 'packers-and-movers-in-jhansi.php');
define('PACKERS_MOVERS_DHOLPUR_URL', BASE_URL . 'packers-and-movers-in-dholpur.php');
define('PACKERS_MOVERS_MANESAR_URL', BASE_URL . 'packers-and-movers-in-manesar.php');
define('PACKERS_MOVERS_NASHIK_URL', BASE_URL . 'packers-and-movers-in-nashik.php');
define('PACKERS_MOVERS_Morena_URL', BASE_URL . 'packers-and-movers-in-morena.php');
define('PACKERS_MOVERS_HISAR_URL', BASE_URL . 'packers-and-movers-in-hisar.php');
define('PACKERS_MOVERS_BEAWAR_URL', BASE_URL . 'packers-and-movers-in-beawar.php');
define('PACKERS_MOVERS_JAGATPURA_JAIPUR_URL', BASE_URL . 'packers-and-movers-in-jagatpura-jaipur.php');
define('PACKERS_MOVERS_GANGAPUR_CITY_URL', BASE_URL . 'packers-and-movers-in-gangapur-city.php');
define('PACKERS_MOVERS_AMER_URL', BASE_URL . 'packers-and-movers-in-amer.php');
define('PACKERS_MOVERS_SURATGARH_URL', BASE_URL . 'packers-and-movers-in-suratgarh.php');
define('PACKERS_MOVERS_SARDARSAHAR_URL', BASE_URL . 'packers-and-movers-in-sardarsahar.php');
define('PACKERS_MOVERS_Mount_Abu_URL', BASE_URL . 'packers-and-movers-in-mount-abu.php');
define('PACKERS_MOVERS_DEHRADUN_URL', BASE_URL . 'packers-and-movers-in-dehradun.php');
define('PACKERS_MOVERS_RAJSAMAND_URL', BASE_URL . 'packers-and-movers-in-rajsamand.php');
define('PACKERS_MOVERS_Dugargarh_URL', BASE_URL . 'packers-and-movers-in-dugargarh.php');
define('PACKERS_MOVERS_SODALA_JAIPUR_URL', BASE_URL . 'packers-and-movers-in-sodala-jaipur.php');