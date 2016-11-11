<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {

	public function naytaAsiakas() {
		$data['asiakkaat']=$this->Testi_model->getAsiakas();
		
		$data['sivun_sisalto']="testi/naytaAsiakas";
		$this->load->view('menu/valikko',$data);
	}
}