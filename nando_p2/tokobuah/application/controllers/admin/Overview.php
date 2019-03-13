<?php

class overview extends CI_controller{
	public function __constructor(){
		parent::__constructor();
	}
	public function index(){
		$this->load->view("admin/overview");
	}
}