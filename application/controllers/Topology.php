<?php

class Topology extends CI_Controller
{
	public function index()
	{

		//Load model
		$this->load->model('Monitoring_model', 'monitoring');
		$data['title'] = "Topology";

		$this->load->view('topology', $data);
	}
}
