<?php

class DataHeader extends CI_Controller
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
        $data['title'] = "Edit Header";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        $data['header'] = $this->monitoring->getAllHeader();

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataHeader', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateData($id)
    {
        $data['header'] = $this->db->query("SELECT * FROM header WHERE id_header='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Header";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdateHeader', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataHeader');
        } else {
            $id             = $this->input->post('id_header');
            $judul_header1 = $this->input->post('judul_header1');
            $judul_header2 = $this->input->post('judul_header2');
            $opening_header1 = $this->input->post('opening_header1');
            $opening_header2 = $this->input->post('opening_header2');
            $opening_header3 = $this->input->post('opening_header3');
            $navbar1 = $this->input->post('navbar1');
            $navbar2 = $this->input->post('navbar2');
            $navbar3 = $this->input->post('navbar3');




            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'judul_header1' => $judul_header1,
                'judul_header2' => $judul_header2,
                'opening_header1' => $opening_header1,
                'opening_header2' => $opening_header2,
                'opening_header3' => $opening_header3,
                'navbar1' => $navbar1,
                'navbar2' => $navbar2,
                'navbar3' => $navbar3,

            );
            $where = array(
                'id_header' => $id
            );

            $this->Monitoring_model->update_data('header', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataHeader');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('judul_header1', 'judul header1', 'required');
        $this->form_validation->set_rules('judul_header2', 'judul header2', 'required');
        $this->form_validation->set_rules('opening_header1', 'opening header1', 'required');
        $this->form_validation->set_rules('opening_header2', 'opening header2', 'required');
        $this->form_validation->set_rules('opening_header3', 'opening header3', 'required');
        $this->form_validation->set_rules('navbar1', 'navbar1', 'required');
        $this->form_validation->set_rules('navbar2', 'navbar2', 'required');
        $this->form_validation->set_rules('navbar3', 'navbar3', 'required');
    }
}
