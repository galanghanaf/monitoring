<?php

class DataJudulPortfolio extends CI_Controller
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
        $data['title'] = "Edit Judul Portfolio";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        $data['portfolio'] = $this->monitoring->getAllPortfolio();

        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/dataJudulPortfolio', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateData($id)
    {
        $data['portfolio'] = $this->db->query("SELECT * FROM portfolio WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Portfolio";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formJudulUpdatePortfolio', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataJudulPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');


            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Monitoring_model->update_data('portfolio', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataJudulPortfolio');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama_portfolio', 'nama portfolio', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskrips', 'required');
    }
}
