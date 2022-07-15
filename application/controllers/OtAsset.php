<?php

class OtAsset extends CI_Controller
{
	public function index()
	{

		//Load model
		$this->load->model('Monitoring_model', 'monitoring');
		$data['title'] = "Mapping OT Asset";


		$data['otasset'] = $this->monitoring->getAllOtAsset();
		$this->load->view('otasset', $data);
	}
}
