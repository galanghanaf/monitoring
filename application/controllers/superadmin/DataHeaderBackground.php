<?php

class DataHeaderBackground extends CI_Controller
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
        $data['title'] = "Edit Header Background";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        $data['header_background'] = $this->monitoring->getAllHeaderBackground();

        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/dataHeaderBackground', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateData($id)
    {
        $data['header_background'] = $this->db->query("SELECT * FROM header_background WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Header";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdateHeaderBackground', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataHeaderBackground');
        } else {
            $id             = $this->input->post('id');
            $background1              = $_FILES['background1']['name'];
            if ($background1) {
                $config['upload_path']  = './assets/background';
                $config['allowed_types']  = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('background1')) {
                    $background1 = $this->upload->data('file_name');
                    $this->db->set('background1', $background1);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $background2              = $_FILES['background2']['name'];
            if ($background2) {
                $config['upload_path']  = './assets/background';
                $config['allowed_types']  = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('background2')) {
                    $background2 = $this->upload->data('file_name');
                    $this->db->set('background2', $background2);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $background3              = $_FILES['background3']['name'];
            if ($background3) {
                $config['upload_path']  = './assets/background';
                $config['allowed_types']  = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('background3')) {
                    $background3 = $this->upload->data('file_name');
                    $this->db->set('background3', $background3);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'background1' => $background1,
                'background2' => $background2,
                'background3' => $background3,


            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('header_background', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataHeaderBackground');
        }
    }
    public function _rules()
    {
    }
}
