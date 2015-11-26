<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('thaisanscript.php/src/ThaiSanscriptAPI.php');
require_once('thaisanscript.php/src/ThaiSanscript.php');
require_once('thaisanscript.php/src/ThaiSanscriptRule.php');

use ThaiSanskrit\ThaiSanscriptAPI;

class Api extends CI_Controller {

    public function index() {
       $timestamp = round(microtime(true) * 1000);
//        /* @var $thaiSanscriptAPI ThaiSanscriptAPI */
        $romanize = filter_input(INPUT_POST, 'sanskrit-romanize');
        $devanagari = filter_input(INPUT_POST, 'sanskrit-devanagari');
        $thaiSanscriptAPI = new ThaiSanscriptAPI();
        $line_sanskrit = $thaiSanscriptAPI->transliterationToArray($romanize, $devanagari);
        $checkbox = array();
        $romanize = array();
        $dev = array();
        $thai = array();

        if (isset($line_sanskrit['devanagari'])) {
            $devanagari_id = "devanagari";
            $lang_name = "เทวนาครี";
            $show = FALSE;
            $dev = $this->setLang($devanagari_id, $lang_name,$show, $line_sanskrit);
            $checkbox = $this->setCheckbox($devanagari_id, $lang_name,$show, $checkbox);
        }
        $romanize_id = "romanize";
        $lang_name = "โรมาไนซ์";
        $show = TRUE;
        $romanize = $this->setLang($romanize_id, $lang_name,$show, $line_sanskrit);
        $checkbox = $this->setCheckbox($romanize_id, $lang_name,$show, $checkbox);

        $thai_id = "thai";
        $lang_name = "ไทยรูปแบบทั่วไป(แบบปรับรูป)";
        $show = TRUE;
        $thai = $this->setLang($thai_id, $lang_name,$show, $line_sanskrit);
        
        $checkbox = $this->setCheckbox($thai_id, $lang_name,$show, $checkbox);


        $this->load->view('api/checkbox_generate', $checkbox);
        if (isset($line_sanskrit['devanagari'])) {
            $this->load->view('api/textcompare', $dev);
        }
        $this->load->view('api/textcompare', $romanize);
        $this->load->view('api/textcompare', $thai);
        $data['timestamp'] = $timestamp;
        $this->load->view('api/time_stamp', $data);
    }

    private function setLang($lang_id, $lang_name, $show, $line_sanskrit) {

        $array['lang_id'] = $lang_id;
        $array['lang_name'] = $lang_name;
        $array['line_sanskrit'] = $line_sanskrit[$lang_id];
        $array['lang_show'] = $show;
        return $array;
    }

    private function setCheckbox($lang_id, $lang_name, $show, $checkbox) {

        $checkbox['checkbox'][] = $lang_id;
        $checkbox['label'][] = $lang_name;
        $checkbox['show'][] = $show;
        return $checkbox;
    }

}
