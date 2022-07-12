<?php

class DataAdmin extends CI_Controller
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
        $data['title'] = "Data Admin";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        //Pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('superadmin/dataadmin/index');
        $config['total_rows'] = $this->monitoring->countAllDataAdmin();
        $config['per_page'] = 5;

        //styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(4);
        $data['dataadmin'] = $this->monitoring->getDataAdmin($config['per_page'], $data['start']);
        //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/dataadmin', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Admin";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formTambahDataAdmin', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            $this->tambahData();
        } else {
            $id             = $this->input->post('id');
            $nama_admin     = $this->input->post('nama_admin');
            $hak_akses      = $this->input->post('hak_akses');
            $email          = $this->input->post('email');
            $username       = $this->input->post('username');
            $password       = $this->input->post('password');


            $data = array(
                'nama_admin'    => $nama_admin,
                'hak_akses'     => $hak_akses,
                'email'         => $email,
                'username'      => $username,
                'password'      => $password,
            );

            $this->Monitoring_model->insert_data($data, 'data_admin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('superadmin/dataadmin');
        }
    }
    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function updateData($id)
    {
        $data['title'] = 'Update Data Admin';
        $data['dataadmin'] = $this->db->query("SELECT * FROM data_admin WHERE id='$id'")->result();
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdateDataAdmin', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            redirect('superadmin/dataadmin');
        } else {
            $id             = $this->input->post('id');
            $nama_admin     = $this->input->post('nama_admin');
            $hak_akses      = $this->input->post('hak_akses');
            $email          = $this->input->post('email');
            $username       = $this->input->post('username');
            $password       = $this->input->post('password');

            $data = array(
                'nama_admin  '  => $nama_admin,
                'hak_akses'     => $hak_akses,
                'email'         => $email,
                'username'      => $username,
                'password'      => $password,

            );

            $where = array(
                'id' => $id
            );
            $this->Monitoring_model->update_data('data_admin', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong>
            </div>');
            redirect('superadmin/dataadmin');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
        $this->form_validation->set_rules('hak_akses', 'hak akses', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->Monitoring_model->delete_data($where, 'data_admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('superadmin/dataadmin');
    }
}
