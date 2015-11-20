<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('thaisanscript.php/src/ThaiSanscriptAPI.php');
require_once('thaisanscript.php/src/ThaiSanscript.php');
require_once('thaisanscript.php/src/ThaiSanscriptRule.php');

use ThaiSanskrit\ThaiSanscriptAPI;

class Welcome extends CI_Controller {

    public function index() {
        /* @var $this->template libraries/Template */
        $data = array();
        $this->template->append_page_section('welcome_message/index');
        $this->template->append_js_embed('welcome_message/js');
         $this->template->append_css_embed('welcome_message/css');
        $this->template->render_main_template($this, $data);
    }

}
