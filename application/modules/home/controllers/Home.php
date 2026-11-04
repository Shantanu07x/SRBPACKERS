<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Error";
        $data['description'] = "Error Page";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()

    {
        $this->oldurl_to_newurl();
        $data['title'] = "SRB Group Packers – Trusted Moving Solutions";
        $data['description'] = "SRB Group Packers offers expert packing and moving services with utmost care and safety. Enjoy smooth relocation of your belongings with our reliable team.";
        $data['keywords'] = "Packers and Movers, Moving Services, Relocation Services, Household Shifting, Office Relocation, Local Movers, Long-Distance Moving, Home Relocation, Professional Movers, Packing Services, Moving Company, Storage Services, Furniture Movers, Car Transportation, Bike Transportation, Movers Near Me, Best Packers and Movers, Affordable Moving Services, Moving and Packing, Residential Movers, Commercial Movers, $this->comp['company3']), Moving Solutions, Safe Relocation, Logistics Services, Moving Experts, Moving Quotes, Moving Assistance, Reliable Movers, International Moving";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }
    public function oldurl_to_newurl()
    {

        $redirects = [
            'packers-and-movers-in-jaipur.php' => 'jaipur-packers-movers-rajasthan',
            'packers-and-movers-in-noida.php' => 'noida-packers-movers-uttar-pradesh',
            'packers-and-movers-in-delhi.php' => 'delhi-packers-movers-delhi',
            'packers-and-movers-in-gurgaon.php' => 'gurgaon-packers-movers-haryana',
            'packers-and-movers-in-indore.php' => 'indore-packers-movers-madhya-pradesh',
            'packers-and-movers-in-surat.php' => 'surat-packers-movers-gujarat',
            'packers-and-movers-in-mumbai.php' => 'mumbai-packers-movers-maharashtra',
            'packers-and-movers-in-bikaner.php' => 'bikaner-packers-movers-rajasthan',
            'packers-and-movers-in-bharatpur.php' => 'bharatpur-packers-movers-rajasthan',
            'packers-and-movers-in-pune.php' => 'pune-packers-movers-maharashtra',
            'packers-and-movers-in-udaipur.php' => 'udaipur-packers-movers-rajasthan',
            'packers-and-movers-in-kota.php' => 'kota-packers-movers-rajasthan',
            'packers-and-movers-in-jodhpur.php' => 'jodhpur-packers-movers-rajasthan',
            'packers-and-movers-in-jaisalmer.php' => 'jaisalmer-packers-movers-rajasthan',
            'packers-and-movers-in-ajmer.php' => 'ajmer-packers-movers-rajasthan',
            'packers-and-movers-in-bhilwara.php' => 'bhilwara-packers-movers-rajasthan',
            'packers-and-movers-in-alwar.php' => 'alwar-packers-movers-rajasthan',
            'packers-and-movers-in-chittorgarh.php' => 'chittorgarh-packers-movers-rajasthan',
            'packers-and-movers-in-jhunjhunu.php' => 'jhunjhunu-packers-movers-rajasthan',
            'packers-and-movers-in-sikar.php' => 'sikar-packers-movers-rajasthan',
            'packers-and-movers-in-pali.php' => 'pali-packers-movers-rajasthan',
            'packers-and-movers-in-lucknow.php' => 'lucknow-packers-movers-uttar-pradesh',
            'packers-and-movers-in-kanpur.php' => 'kanpur-packers-movers-uttar-pradesh',
            'packers-and-movers-in-kolkata.php' => 'kolkata-packers-movers-west-bengal',
            'packers-and-movers-in-chennai.php' => 'chennai-packers-movers-tamil-nadu',
            'packers-and-movers-in-hyderabad.php' => 'hyderabad-packers-movers-telangana',
            'packers-and-movers-in-bangalore.php' => 'bangalore-packers-movers-karnataka',
            'packers-and-movers-in-ahmedabad.php' => 'ahmedabad-packers-movers-gujarat',
            'packers-and-movers-in-chandigarh.php' => 'chandigarh-packers-movers-chandigarh',
            'packers-and-movers-in-ghaziabad.php' => 'ghaziabad-packers-movers-uttar-pradesh',
            'packers-and-movers-in-nagpur.php' => 'nagpur-packers-movers-maharashtra',
            'packers-and-movers-in-mysuru.php' => 'mysuru-packers-movers-karnataka',
            'packers-and-movers-in-coimbatore.php' => 'coimbatore-packers-movers-tamil-nadu',
            'packers-and-movers-in-patna.php' => 'patna-packers-movers-bihar',
            'packers-and-movers-in-raipur.php' => 'raipur-packers-movers-chhattisgarh',
            'packers-and-movers-in-vadodara.php' => 'vadodara-packers-movers-gujarat',
            'packers-and-movers-in-visakhapatnam.php' => 'visakhapatnam-packers-movers-andhra-pradesh',
            'packers-and-movers-in-pratap-nagar.php' => 'pratap-nagar-packers-movers-jaipur',
            'packers-and-movers-in-sirsi-road-jaipur.php' => 'sirsi-road-packers-movers-jaipur',
            'packers-and-movers-in-vki-14-no-jaipur.php' => 'vki-14-packers-movers-jaipur',
            'packers-and-movers-in-tonk.php' => 'tonk-packers-movers-rajasthan',
            'packers-and-movers-in-sawai-madhopur.php' => 'sawai-madhopur-packers-movers-rajasthan',
            'packers-and-movers-in-churu.php' => 'churu-packers-movers-rajasthan',
            'packers-and-movers-in-chirawa.php' => 'chirawa-packers-movers-rajasthan',
            'packers-and-movers-in-neem-ka-thana.php' => 'neem-ka-thana-packers-movers-rajasthan',
            'packers-and-movers-in-neemrana.php' => 'neemrana-packers-movers-rajasthan',
            'packers-and-movers-in-bhiwadi.php' => 'bhiwadi-packers-movers-rajasthan',
            'packers-and-movers-in-rawatbatha.php' => 'rawatbhata-packers-movers-rajasthan',
            'packers-and-movers-in-barmer.php' => 'barmer-packers-movers-rajasthan',
            'packers-and-movers-in-agra.php' => 'agra-packers-movers-uttar-pradesh',
            'packers-and-movers-in-prayagraj.php' => 'prayagraj-packers-movers-uttar-pradesh',
            'packers-and-movers-in-jammu-and-kashmir.php' => 'jammu-kashmir-packers-movers',
            'packers-and-movers-in-hanumangarh.php' => 'hanumangarh-packers-movers-rajasthan',
            'packers-and-movers-in-sri-ganganagar.php' => 'sri-ganganagar-packers-movers-rajasthan',
            'packers-and-movers-in-bathinda.php' => 'bathinda-packers-movers-punjab',
            'packers-and-movers-in-abu-road.php' => 'abu-road-packers-movers-rajasthan',
            'packers-and-movers-in-pushkar.php' => 'pushkar-packers-movers-rajasthan',
            'packers-and-movers-in-mansarovar-jaipur.php' => 'mansarovar-packers-movers-jaipur',
            'packers-and-movers-in-vishali-nagar-jaipur.php' => 'vishali-nagar-packers-movers-jaipur',
            'packers-and-movers-in-chomu.php' => 'chomu-packers-movers-rajasthan',
            'packers-and-movers-in-nagaur.php' => 'nagaur-packers-movers-rajasthan',
            'packers-and-movers-in-kuchaman-city.php' => 'kuchaman-city-packers-movers-rajasthan',
            'packers-and-movers-in-jhansi.php' => 'jhansi-packers-movers-uttar-pradesh',
            'packers-and-movers-in-dholpur.php' => 'dholpur-packers-movers-rajasthan',
            'packers-and-movers-in-manesar.php' => 'manesar-packers-movers-haryana',
            'packers-and-movers-in-nashik.php' => 'nashik-packers-movers-maharashtra',
            'packers-and-movers-in-morena.php' => 'morena-packers-movers-madhya-pradesh',
            'packers-and-movers-in-hisar.php' => 'hisar-packers-movers-haryana',
            'packers-and-movers-in-beawar.php' => 'beawar-packers-movers-rajasthan',
            'packers-and-movers-in-jagatpura-jaipur.php' => 'jaipur-packers-movers-rajasthan',
            'packers-and-movers-in-gangapur-city.php' => 'gangapur-city-packers-movers-rajasthan',
            'packers-and-movers-in-amer.php' => 'amer-packers-movers-jaipur',
            'packers-and-movers-in-suratgarh.php' => 'suratgarh-packers-movers-rajasthan',
            'packers-and-movers-in-sardarsahar.php' => 'sardarsahar-packers-movers-rajasthan',
            'packers-and-movers-in-mount-abu.php' => 'mount-abu-packers-movers-rajasthan',
            'packers-and-movers-in-dehradun.php' => 'dehradun-packers-movers-uttarakhand',
            'packers-and-movers-in-rajsamand.php' => 'rajsamand-packers-movers-rajasthan',
            'packers-and-movers-in-dugargarh.php' => 'dugargarh-packers-movers-rajasthan',
            'packers-and-movers-in-sodala-jaipur.php' => 'sodala-packers-movers-jaipur',
            
            //    services

            'our-services/transportation-services.php' => 'transportation',
            'our-services/packing-and-moving-services.php' => 'packing-moving',
            'our-services/loading-and-unloading-services.php' => 'loading-unloading',
            'our-services/unpacking-and-escort-services.php' => 'unpacking-escort',
            'our-services/home-shifting-services.php' => 'home-shifting',
            'our-services/office-shifting-services.php' => 'office-relocation',
            'our-services/car-and-bike-transportation-services.php' => 'car-bike',
            'our-services/warehousing-services.php' => 'warehouse',
            'our-services/domestic-relocation-services.php' => 'domestic-relocation',
            'our-services/international-relocation-services.php' => 'international-relocation',
            'our-services/goods-insurance-services.php' => 'goods-insurance',
            'our-services/painting-moving-services.php' => 'painting-moving',
            'our-services/pet-moving-services.php' => 'pet-moving',
            'our-services/factory-shifting-services.php' => 'factory-shifting',
            'our-services/hotel-shifting-services.php' => 'hotel-shifting',
            'our-services/custom-clearance-services.php' => 'custom-clearance',
            'our-services/all_services.php' => 'all_services',
            // company page
            'about-us.php' => 'about',
            'our-strategy/packing-material.php' => 'packing-material',
            'our-strategy/packing-tips.php' => 'packing-material',
            'our-strategy/our-working-process.php' => 'our-working-process',
            'frequently-asked-question.php' => 'faqs',
            'contact-us.php' => 'contacts',
            'our-gallery.php' => 'photo-gallery',
        ];
        // Get full URI string (everything after your base URL)
        $uri_string = $this->uri->uri_string();

        // Check if full URI is in redirects
        if (isset($redirects[$uri_string])) {
            redirect($redirects[$uri_string], 'location', 301);
        }
    }
}
