<?php

class Topology extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('hak_akses') != '2') {
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

		$this->load->view('templatesAdmin/header', $data);
		$this->load->view('templatesAdmin/sidebar');
		$this->load->view('admin/topology', $data);
		$this->load->view('templatesAdmin/footer');
	}
	public function updateData($id)
	{
		$data['topology'] = $this->db->query("SELECT * FROM topology WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
		$data['title'] = "Update Topology";
		$this->load->view('templatesAdmin/header', $data);
		$this->load->view('templatesAdmin/sidebar');
		$this->load->view('admin/formUpdateTopology', $data);
		$this->load->view('templatesAdmin/footer');
	}
	public function updateData2($id)
	{
		$data['topology'] = $this->db->query("SELECT * FROM topology WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
		$data['title'] = "Make Your Own Topology";
		$this->load->view('templatesAdmin/header', $data);
		$this->load->view('templatesAdmin/sidebar');
		$this->load->view('admin/formUpdateTopology2', $data);
		$this->load->view('templatesAdmin/footer');
	}

	public function updateDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			redirect('admin/topology');
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
			redirect('admin/topology');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id', 'id', 'required');
	}
}
