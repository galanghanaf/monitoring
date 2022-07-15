<?php

class ItOtAsset extends CI_Controller
{
	public function index()
	{

		//Load model
		$this->load->model('Monitoring_model', 'monitoring');
		$data['title'] = "Mapping IT/OT Asset";

		$data['itotasset'] = $this->monitoring->getAllItOtAsset();
		$this->load->view('itotasset', $data);
	}
}
