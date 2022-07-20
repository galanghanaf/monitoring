<?php

class Topology extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('hak_akses') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong></div>');
			redirect('Welcome');
		}
	}
	public function index()
	{

		//Load model
		$this->load->model('Monitoring_model', 'monitoring');
		$data['title'] = "Topology";
		$data['topology'] = $this->monitoring->getAllTopology();

		$this->load->view('templatesSuperAdmin/header', $data);
		$this->load->view('templatesSuperAdmin/sidebar');
		$this->load->view('superadmin/topology', $data);
		$this->load->view('templatesSuperAdmin/footer');
	}
	public function updateData($id)
	{
		$data['topology'] = $this->db->query("SELECT * FROM topology WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
		$data['title'] = "Update Topology";
		$this->load->view('templatesSuperAdmin/header', $data);
		$this->load->view('templatesSuperAdmin/sidebar');
		$this->load->view('superadmin/formUpdateTopology', $data);
		$this->load->view('templatesSuperAdmin/footer');
	}
	public function updateData2($id)
	{
		$data['topology'] = $this->db->query("SELECT * FROM topology WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
		$data['title'] = "Make Your Own Topology";
		$this->load->view('templatesSuperAdmin/header', $data);
		$this->load->view('templatesSuperAdmin/sidebar');
		$this->load->view('superadmin/formUpdateTopology2', $data);
		$this->load->view('templatesSuperAdmin/footer');
	}

	public function updateDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			redirect('superadmin/topology');
		} else {
			$id             = $this->input->post('id');
			$photo              = $_FILES['photo']['name'];
			if ($photo) {
				$config['upload_path']  = './assets/team';
				$config['allowed_types']  = 'jpg|jpeg|png|tiff|svg';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo')) {
					$photo = $this->upload->data('file_name');
					$this->db->set('photo', $photo);
				} else {
					echo $this->upload->display_errors();
				}
			}


			$data = array(
				'photo'   => $photo,




			);
			$where = array(
				'id' => $id
			);

			$this->Monitoring_model->update_data('topology', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
			redirect('superadmin/topology');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id', 'id', 'required');
	}
}
