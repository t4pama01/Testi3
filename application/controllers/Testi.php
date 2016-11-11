<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {

	public function naytaAsiakas() {
		$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
		
		$data['sivun_sisalto']="asiakas/naytaAsiakas";
		$this->load->view('menu/valikko',$data);
	}
}