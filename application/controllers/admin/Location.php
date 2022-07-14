<?php

class Location extends CI_Controller
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
        $data['title'] = "Data Location";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        //Save Searching
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] =  $this->session->userdata('keyword');
        }

        //Pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/location/index');
        $this->db->like('location', $data['keyword']);
        $this->db->from('area_location');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

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
        $data['location'] = $this->monitoring->getLocation($config['per_page'], $data['start'], $data['keyword']);
        $data['area_location'] = $this->monitoring->getAllLocation();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/location', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Add Data Location";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formTambahLocation', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id             = $this->input->post('id');
            $location    = $this->input->post('location');
            $photo              = $_FILES['photo']['name'];
            if ($photo = '') {
            } else {
                $config['upload_path']  = './assets/team';
                $config['allowed_types']  = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo "Photo Gagal diUpload!";
                    die();
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }



            $data = array(
                'location'   => $location,
                'photo' => $photo,


            );

            $this->Monitoring_model->insert_data($data, 'area_location');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/location');
        }
    }

    public function updateData($id)
    {
        $data['location'] = $this->db->query("SELECT * FROM area_location WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Location";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateLocation', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            redirect('admin/logbook');
        } else {
            $id             = $this->input->post('id');
            $location    = $this->input->post('location');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/team';
                $config['allowed_types']  = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $data = array(
                'location'   => $location,
                'photo' => $photo,



            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('area_location', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/location');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('location', 'Location', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->Monitoring_model->delete_data($where, 'area_location');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/location');
    }
}
