<div class="col-12 col-lg-4 order-2 order-md-2">
    <div class="main-sidebar">
        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".3s">
            <div class="wid-title">
                <h3>Our Strategy</h3>
            </div>
            <div class="news-widget-categories">
                <ul style="padding-left: 0px !important">
                    <?php
                    $strategy_links = [
                        ['url' => 'packing-material', 'title' => 'Packing Material'],
                        ['url' => 'packing-tips', 'title' => 'Packing Tips'],
                        ['url' => 'our-working-process', 'title' => 'Our Working Process']
                    ];
                    
                    foreach ($strategy_links as $link) {
                        $current_url = uri_string(); // Get current URL segment
                        $is_active = ($current_url == $link['url']) ? 'active' : '';
                        echo '<li class="'.$is_active.'"><a href="'.site_url($link['url']).'"><i class="fa-regular fa-arrow-right"></i> '.$link['title'].'</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".3s">
            <div class="wid-title">
                <h3>Our Services</h3>
            </div>
            <div class="news-widget-categories">
                <ul style="padding-left: 0px !important">
                    <?php
                    $service_links = [
                        ['url' => 'all_services', 'title' => 'All Services'],
                        ['url' => 'transportation', 'title' => 'Transportation'],
                        ['url' => 'packing-moving', 'title' => 'Packing and Moving'],
                        ['url' => 'loading-unloading', 'title' => 'Loading and Unloading'],
                        ['url' => 'unpacking-escort', 'title' => 'Unpacking and Escort'],
                        ['url' => 'home-shifting', 'title' => 'Home Shifting'],
                        ['url' => 'domestic-relocation', 'title' => 'Domestic Relocation'],
                        ['url' => 'international-relocation', 'title' => 'International Relocation'],
                        ['url' => 'warehouse', 'title' => 'WareHouse Services'],
                        ['url' => 'car-bike', 'title' => 'Car & Bike Transportation'],
                        ['url' => 'office-relocation', 'title' => 'Office Shifting'],
                        ['url' => 'hotel-shifting', 'title' => 'Hotel Shifting'],
                        ['url' => 'factory-shifting', 'title' => 'Factory Shifting'],
                        ['url' => 'pet-moving', 'title' => 'Pet Moving'],
                        ['url' => 'custom-clearance', 'title' => 'Custom Clearance'],
                        ['url' => 'painting-moving', 'title' => 'Painting Moving'],
                        ['url' => 'goods-insurance', 'title' => 'Goods Insurance']
                    ];
                    
                    foreach ($service_links as $link) {
                        $current_url = uri_string(); // Get current URL segment
                        $is_active = ($current_url == $link['url']) ? 'active' : '';
                        echo '<li class="'.$is_active.'"><a href="'.site_url($link['url']).'"><i class="fa-regular fa-arrow-right"></i> '.$link['title'].'</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.news-widget-categories ul li.active a {
    color: #ff6b00;
    /* Change to your preferred highlight color */
    font-weight: 600;
}

.news-widget-categories ul li.active i {
    color: #ff6b00;
    /* Match the icon color with text */
}
</style>