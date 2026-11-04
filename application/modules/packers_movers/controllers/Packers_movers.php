<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", ucwords($state));
        $data = array(
            "state" => $state,
            "title" => $this->comp['company3'] . " in $state",
            "description" => $this->comp['company3'] . " in $state",
            "keywords" => "$state " . $this->comp['company3'] . " in $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        //edit by Arshad 15-11-2024
        return array(
            'title' => "Best Packers and Movers in $city, $state | Call Now ". $this->comp['phone'],
            "desc" => "Looking for reliable packers and movers in $city? SRB Group Packers and Movers offers home relocation, office relocation, car & bike moving, warehousing, and international moving services. Contact us today for hassle-free moving!"
        );
    }

    function from_to($from = '', $to = '')
	{
		$this->load->module('home');
		$this->home->oldurl_to_newurl();
		if (@$from && @$to) {
			$to=str_replace("_", " ", $to);
			$to=ucwords(str_replace("-", " ", $to));
			$from=str_replace("_", " ", $from);
			$from=urldecode(ucwords(str_replace("-", " ", $from)));
			$data['from'] = $from;
			$data['to'] = $to;
			$data['city'] = ucwords($from);
			$data['title'] = "Packers Movers from " . ucwords($from . " to " . $to);
			$data['company'] = "SRB Group Packers";
			$data['description'] = "SRB Group Packers ensures reliable and hassle-free packing and moving solutions tailored to your needs, whether you are relocating from " . ucwords($from) . " to " . ucwords($to) . " or to any other destination. With our professional team and affordable pricing, we guarantee a smooth, secure, and comfortable moving experience every time.";
			$data['img'] = base_url('assets') . "/media/logo/favicon.webp";
			$data['module'] = "packers_movers";
			$data['view_file'] = "from_city_to_city";
			echo Modules::run('template/layout2', $data);
		} else {
			redirect("home/error");
		}
	}


    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink=strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            'img' => base_url('assets') . "/media/logo/favicon.webp",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
            "Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city",
            "$city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city",
            "Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
