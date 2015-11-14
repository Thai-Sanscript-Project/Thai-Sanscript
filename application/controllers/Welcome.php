<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    
    public function index() {
        /* @var $this->template libraries/Template */
        $data = array();
        $this->template->append_page_section('welcome_message/index');
        $this->template->append_js_embed('welcome_message/js');
        $this->template->render_main_template($this, $data);
        
    }

}
