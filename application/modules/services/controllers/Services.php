<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function all_services()
    {
        $data['title'] = "All Packers and Movers Services | {$this->comp['company3']}";
        $data['description'] = "Explore all relocation services including home shifting, office moving, vehicle transport, and more offered by {$this->comp['company3']}.";
        $data['module'] = "services";
        $data['view_file'] = "all_services";
        echo Modules::run('template/layout2', $data);
    }

    function transportation()
    {
        $data['title'] = "Transportation Services | Safe & Timely Delivery - {$this->comp['company3']}";
        $data['description'] = "We offer reliable transportation services for households, businesses, and vehicles across India with guaranteed safety and punctuality.";
        $data['module'] = "services";
        $data['view_file'] = "transportation";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Packing and Moving Services | Hassle-Free Relocation Experts";
        $data['description'] = "Professional packing and moving services for safe relocation of your home, office, or vehicle by {$this->comp['company3']}.";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading and Unloading Services | Safe Handling Guaranteed";
        $data['description'] = "Trust {$this->comp['company3']} for secure loading and unloading of your belongings by trained professionals.";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function unpackingEscort()
    {
        $data['title'] = "Unpacking & Escort Services | Careful Post-Move Support";
        $data['description'] = "We help you unpack and arrange your items with expert supervision, ensuring a smooth transition into your new space.";
        $data['module'] = "services";
        $data['view_file'] = "unpacking_escort";
        echo Modules::run('template/layout2', $data);
    }

    function homeShifting()
    {
        $data['title'] = "Home Shifting Services | Trusted Household Movers";
        $data['description'] = "Make your house relocation stress-free with {$this->comp['company3']}’ reliable home shifting solutions across India.";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function domesticRelocation()
    {
        $data['title'] = "Domestic Relocation Services | Intercity Moving Experts";
        $data['description'] = "We provide end-to-end domestic relocation services with professional support, safe transport, and timely delivery.";
        $data['module'] = "services";
        $data['view_file'] = "domestic_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function internationalRelocation()
    {
        $data['title'] = "International Relocation Services | Global Moving Solutions";
        $data['description'] = "Move abroad with ease using our expert international packing and moving services. Door-to-door global relocation available.";
        $data['module'] = "services";
        $data['view_file'] = "international_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function warehouse()
    {
        $data['title'] = "Warehousing Services | Secure Storage Solutions";
        $data['description'] = "Need safe and reliable storage? We offer warehouse services for goods with flexible plans and tight security.";
        $data['module'] = "services";
        $data['view_file'] = "warehouse";
        echo Modules::run('template/layout2', $data);
    }

    function carBike()
    {
        $data['title'] = "Car & Bike Transport Services | Vehicle Shifting Experts";
        $data['description'] = "Transport your car or bike safely with our specialized vehicle relocation services across India.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Office Relocation Services | Efficient Corporate Shifting";
        $data['description'] = "Move your office with minimal downtime using {$this->comp['company3']}' organized office shifting solutions.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function hotel()
    {
        $data['title'] = "Hotel Relocation Services | Specialized Hotel Movers";
        $data['description'] = "We provide complete hotel relocation services including furniture transport, setup, and careful inventory handling.";
        $data['module'] = "services";
        $data['view_file'] = "hotel";
        echo Modules::run('template/layout2', $data);
    }

    function factory()
    {
        $data['title'] = "Factory Shifting Services | Heavy Machinery Relocation";
        $data['description'] = "Get professional factory relocation services including dismantling, packing, and safe transport of machinery.";
        $data['module'] = "services";
        $data['view_file'] = "factory";
        echo Modules::run('template/layout2', $data);
    }

    function pet()
    {
        $data['title'] = "Pet Relocation Services | Safe & Caring Pet Movers";
        $data['description'] = "Relocate your beloved pets with complete care, comfort, and safety with our pet moving specialists.";
        $data['module'] = "services";
        $data['view_file'] = "pet";
        echo Modules::run('template/layout2', $data);
    }

    function custom()
    {
        $data['title'] = "Custom Relocation Services | Tailored Moving Solutions";
        $data['description'] = "We offer personalized moving solutions to match your specific requirements. Get custom relocation service now.";
        $data['module'] = "services";
        $data['view_file'] = "custom";
        echo Modules::run('template/layout2', $data);
    }

    function painting()
    {
        $data['title'] = "Wall Painting Services | Home & Office Painting Experts";
        $data['description'] = "Professional wall painting services for homes and commercial spaces with neat finishing and vibrant colors.";
        $data['module'] = "services";
        $data['view_file'] = "painting";
        echo Modules::run('template/layout2', $data);
    }

    function goods()
    {
        $data['title'] = "Goods Insurance Services | Insure Your Move with Confidence";
        $data['description'] = "Protect your valuable goods during transit with our comprehensive moving insurance coverage plans.";
        $data['module'] = "services";
        $data['view_file'] = "goods";
        echo Modules::run('template/layout2', $data);
    }
}
