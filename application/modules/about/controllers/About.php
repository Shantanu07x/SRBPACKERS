<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us | Trusted Packers and Movers Company in India";
        $data['description'] = "Learn more about {$this->comp['company3']} — our mission, experience, values, and why we’re one of India’s most reliable relocation service providers.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | Top Reasons to Pick {$this->comp['company3']}";
        $data['description'] = "Know why customers trust {$this->comp['company3']} — from experienced staff and quality packing material to safe delivery and timely support.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "FAQs | Frequently Asked Questions - {$this->comp['company3']}";
        $data['description'] = "Get answers to commonly asked questions about our moving services, pricing, packing, insurance, delivery time, and more.";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }
}
