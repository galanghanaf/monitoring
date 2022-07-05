<?php

class DataJudulTeam extends CI_Controller
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
        $data['title'] = "Edit Judul Team";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        $data['team'] = $this->monitoring->getAllTeam();

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataJudulTeam', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateData($id)
    {
        $data['team'] = $this->db->query("SELECT * FROM team WHERE id_team='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Judul Team";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formJudulUpdateTeam', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataJudulTeam');
        } else {
            $id             = $this->input->post('id_team');
            $judul_team = $this->input->post('judul_team');
            $deskripsi = $this->input->post('deskripsi');


            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'judul_team' => $judul_team,
                'deskripsi' => $deskripsi,
            );
            $where = array(
                'id_team' => $id
            );

            $this->Monitoring_model->update_data('team', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataJudulTeam');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('judul_team', 'judul team', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
    }
}
