<section class="service-section-3 fix section-padding bg-cover" style="background-image: url('assets/images/service-background.webp'); padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="section-title text-center mb-2">
                <span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <i class="fa-regular fa-eject"></i> Explore Our Service Areas <i class="fa-solid fa-grip-lines"></i>
                </span>
                <h3 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    Trusted Moving Services in Your City
                </h3>
            </div>

            <?php
            $cities = array(
                "Jaipur" => "Rajasthan",
                "Noida" => "Uttar Pradesh",
                "Delhi" => "Delhi",
                "Gurgaon" => "Haryana",
                "Indore" => "Madhya Pradesh",
                "Surat" => "Gujarat",
                "Mumbai" => "Maharashtra",
                "Bikaner" => "Rajasthan",
                "Bharatpur" => "Rajasthan",
                "Pune" => "Maharashtra",
                "Udaipur" => "Rajasthan",
                "Kota" => "Rajasthan",
                "Jodhpur" => "Rajasthan",
                "Jaisalmer" => "Rajasthan",
                "Ajmer" => "Rajasthan",
                "Bhilwara" => "Rajasthan",
                "Alwar" => "Rajasthan",
                "Chittorgarh" => "Rajasthan",
                "Jhunjhunu" => "Rajasthan",
                "Sikar" => "Rajasthan",
                "Pali" => "Rajasthan",
                "Lucknow" => "Uttar Pradesh",
                "Kanpur" => "Uttar Pradesh",
                "Kolkata" => "West Bengal",
                "Chennai" => "Tamil Nadu",
                "Hyderabad" => "Telangana",
                "Bangalore" => "Karnataka",
                "Ahmedabad" => "Gujarat",
                "Chandigarh" => "Chandigarh",
                "Ghaziabad" => "Uttar Pradesh",
                "Nagpur" => "Maharashtra",
                "Mysuru" => "Karnataka",
                "Coimbatore" => "Tamil Nadu",
                "Patna" => "Bihar",
                "Raipur" => "Chhattisgarh",
                "Vadodara" => "Gujarat",
                "Visakhapatnam" => "Andhra Pradesh",
                "Pratap Nagar" => "Jaipur",
                "Sirsi Road" => "Jaipur",
                "VKI 14 Number" => "Jaipur",
                "Tonk" => "Rajasthan",
                "Sawai Madhopur" => "Rajasthan",
                "Churu" => "Rajasthan",
                "Chirawa" => "Rajasthan",
                "Neem Ka Thana" => "Rajasthan",
                "Neemrana" => "Rajasthan",
                "Bhiwadi" => "Rajasthan",
                "Rawatbhata" => "Rajasthan",
                "Barmer" => "Rajasthan",
                "Agra" => "Uttar Pradesh",
                "Prayagraj" => "Uttar Pradesh",
                "Jammu and Kashmir" => "Jammu and Kashmir",
                "Hanumangarh" => "Rajasthan",
                "Sri Ganganagar" => "Rajasthan",
                "Bathinda" => "Punjab",
                "Abu Road" => "Rajasthan",
                "Pushkar" => "Rajasthan",
                "Mansarovar" => "Jaipur",
                "Vishali Nagar" => "Jaipur",
                "Chomu" => "Rajasthan",
                "Nagaur" => "Rajasthan",
                "Kuchaman City" => "Rajasthan",
                "Jhansi" => "Uttar Pradesh",
                "Dholpur" => "Rajasthan",
                "Manesar" => "Haryana",
                "Nashik" => "Maharashtra",
                "Morena" => "Madhya Pradesh",
                "Hisar" => "Haryana",
                "Beawar" => "Rajasthan",
                "Jagatpura" => "Jaipur",
                "Gangapur City" => "Rajasthan",
                "Amer" => "Jaipur",
                "Suratgarh" => "Rajasthan",
                "Sardarsahar" => "Rajasthan",
                "Mount Abu" => "Rajasthan",
                "Dehradun" => "Uttarakhand",
                "Rajsamand" => "Rajasthan",
                "Dugargarh" => "Rajasthan",
                "Sodala" => "Jaipur"
            );

            foreach ($cities as $city => $state) {
                $urlCity = strtolower(str_replace(' ', '-', $city));
                $urlState = strtolower(str_replace(' ', '-', $state));
                $url = "$urlCity-packers-movers-$urlState";
                $title = "Packers and Movers in $city";
                
                // Special case for cities that are areas within Jaipur
                if (strpos($state, 'Jaipur') !== false && $city != 'Jaipur') {
                    $title = "Packers and Movers in $city Jaipur";
                }
                
                echo '
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                       <a href="' . site_url($url) . '" title="' . $title . '">
                            Packers and Movers in '.$city.'
                        </a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>