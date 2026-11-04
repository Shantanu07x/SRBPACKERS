<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 8383053021';
        $this->comp['phonehtml'] = 'tel:+91 8383053021';
        $this->comp['supportmail'] = 'support@srbpackers.com';
        $this->comp['replyToMail'] = 'info@srbpackers.com';
        $this->comp['mail'] = 'info@srbpackers.com';
        $this->comp['mailhtml'] = "mailto:info@srbpackers.com";
        $this->comp['company3'] = 'SRB Group Packers and Movers';
        $this->comp['companydomain'] = 'srbpackers.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "";

        $this->comp['address'] = "31, Giriraj Nagar, Patrakar Colony Road, Goliyawas, Mansarovar, Jaipur 302020";
        $this->comp['address1'] = "31, Giriraj Nagar, Patrakar Colony Roadr";
        $this->comp['address2'] = "Goliyawas, Mansarovar, Jaipur 302020";
        $this->comp['addressRegion'] = "Jaipur";
        $this->comp['postalCode'] = "302020";
        $this->comp['companystate'] = "Rajasthan";
        $this->comp['themeColor'] = "#e21b22";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.8";
        $this->comp['ratingCount'] = "7887";
        $this->comp['datePublished'] = "15 july, 2025";
        $this->comp['reviewBody'] = "SRB Group Packers and Movers made my relocation smooth and stress-free. Their team was professional, punctual, and handled everything with great care.";
        $this->comp['reviewperson'] = "Sarwar Islam";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
