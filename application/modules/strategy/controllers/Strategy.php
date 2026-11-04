<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Strategy extends MX_Controller
{
    function packingMaterial()
    {
        $data['title'] = "Best Packing Material for Safe Moving | {$this->comp['company3']}";
        $data['description'] = "We use top-quality packing material like bubble wrap, corrugated boxes, and foam sheets to ensure safe and secure relocation of your belongings.";
        $data['module'] = "strategy";
        $data['view_file'] = "packing_material";
        echo Modules::run('template/layout2', $data);
    }

    function packingTips()
    {
        $data['title'] = "Expert Packing Tips for Hassle-Free Relocation";
        $data['description'] = "Get professional packing tips to make your home or office shifting smooth and stress-free. Learn how to pack fragile, heavy, and bulky items safely.";
        $data['module'] = "strategy";
        $data['view_file'] = "packing_tips";
        echo Modules::run('template/layout2', $data);
    }

    function ourWorkingProces()
    {
        $data['title'] = "Our Working Process | How {$this->comp['company3']} Works";
        $data['description'] = "Discover how our end-to-end moving process works — from survey and packing to transportation and final delivery. Trusted and transparent relocation services.";
        $data['module'] = "strategy";
        $data['view_file'] = "our_working_process";
        echo Modules::run('template/layout2', $data);
    }
}
