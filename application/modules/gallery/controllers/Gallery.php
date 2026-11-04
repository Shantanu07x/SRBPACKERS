<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MX_Controller {

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery | Our Shifting Work & Client Moves";
        $data['description'] = "View the photo gallery of {$this->comp['company3']} showcasing our packing, moving, and delivery services across various locations in India.";
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

}
