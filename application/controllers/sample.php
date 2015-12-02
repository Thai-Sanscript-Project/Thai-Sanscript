<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

    public function index() {
        $this->template->append_page_section('sample/portfolio');
        $this->template->render_sample_template($this);
    }

}
