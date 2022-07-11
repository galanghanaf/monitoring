<?php

class ProfilAdmin extends CI_Controller
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
        $data['title'] = "Ganti Password"; //untuk title pada dasboard

        // berfungsi untuk memanggil view, yang berguna untuk menata file url
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/ProfilAdmin', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function gantiPasswordAksi()
    {
        $passBaru = $this->input->post('passBaru');
        $ulangPass = $this->input->post('ulangPass');

        $this->form_validation->set_rules('passBaru', 'password baru', 'required|matches[ulangPass]');
        $this->form_validation->set_rules('ulangPass', 'ulangi password', 'required');


        if ($this->form_validation->run() != FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            $data = array('password' => $passBaru);
            $id = array('id' => $this->session->userdata('hak_akses'));

            $this->Monitoring_model->update_data('data_admin', $data, $id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Password Berhasil Diubah, Silahkan Login Ulang!</strong>
            </div>');
            redirect('Welcome');
        } else {
            $data['title'] = "Ganti Password"; //untuk title pada dasboard
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar');
            $this->load->view('admin/ProfilAdmin', $data);
            $this->load->view('templatesAdmin/footer');
        }
    }
}
