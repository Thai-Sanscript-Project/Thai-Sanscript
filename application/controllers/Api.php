<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('thaisanscript.php/src/ThaiSanscriptAPI.php');
require_once('thaisanscript.php/src/ThaiSanscript.php');
require_once('thaisanscript.php/src/ThaiSanscriptRule.php');

use ThaiSanskrit\ThaiSanscriptAPI;

class Api extends CI_Controller {

    public function index() {
//        $starttime = microtime(true);
//        /* @var $thaiSanscriptAPI ThaiSanscriptAPI */
        $romanize = filter_input(INPUT_POST, 'sanskrit-romanize');
//        $devanagari = filter_input(INPUT_POST, 'sanskrit-devanagari');
//       
//        $this->load->helper('file');
        $thaiSanscriptAPI = new ThaiSanscriptAPI();
////        $str = read_file('./inc/txt/Pratimokasutram.txt');
//        echo $devanagari."\n";
//        echo $thaiSanscriptAPI->transliteration($romanize);
////        echo $str;
//        echo "Function Time: ", (microtime(true) - $starttime), " ms\n";
//        print_r($thaiSanscriptAPI->transliterationToArray($romanize));
        $line_sanskrit = $thaiSanscriptAPI->transliterationToArray($romanize);
       
        $data['lang_id'] = "romanize";
        $data['lang_name'] = "โรมาไนซ์";
        $data['line_sanskrit'] = $line_sanskrit['romanize'];
        $this->load->view('api/textcompare', $data);
        $data['lang_id'] = "thai";
        $data['lang_name'] = "ไทยรูปแบบทั่วไป";
        $data['line_sanskrit'] = $line_sanskrit['thai'];
        $this->load->view('api/textcompare', $data);
    }

}
