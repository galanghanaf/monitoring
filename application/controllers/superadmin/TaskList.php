<?php

class TaskList extends CI_Controller
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
        $data['title'] = "Task List ITOS-CTR";

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
        $config['base_url'] = site_url('admin/tasklist/index');
        $this->db->like('description', $data['keyword']);
        $this->db->or_like('requester', $data['keyword']);
        $this->db->or_like('status', $data['keyword']);
        $this->db->or_like('notes', $data['keyword']);

        $this->db->from('task_list');
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
        $data['task_list'] = $this->monitoring->getTaskList($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/tasklist', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Task List ITOS-CTR";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formTambahTaskList', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id             = $this->input->post('id');
            $description    = $this->input->post('description');
            $requester      = $this->input->post('requester');
            $start_date     = $this->input->post('start_date');
            $due_date       = $this->input->post('due_date');
            $status         = $this->input->post('status');
            $notes          = $this->input->post('notes');

            $data = array(
                'description'   => $description,
                'requester'     => $requester,
                'start_date'    => $start_date,
                'due_date'      => $due_date,
                'status'        => $status,
                'notes'         => $notes,
            );

            $this->Monitoring_model->insert_data($data, 'task_list');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('superadmin/tasklist');
        }
    }

    public function updateData($id)
    {
        $data['task_list'] = $this->db->query("SELECT * FROM task_list WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Task List ITOS-CTR";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdateTaskList', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            redirect('superadmin/tasklist');
        } else {
            $id             = $this->input->post('id');
            $description    = $this->input->post('description');
            $requester      = $this->input->post('requester');
            $start_date     = $this->input->post('start_date');
            $due_date       = $this->input->post('due_date');
            $status         = $this->input->post('status');
            $notes          = $this->input->post('notes');


            $data = array(
                'description'   => $description,
                'requester'     => $requester,
                'start_date'    => $start_date,
                'due_date'      => $due_date,
                'status'        => $status,
                'notes'         => $notes,


            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('task_list', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/tasklist');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('requester', 'requester', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('due_date', 'Due Date', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->Monitoring_model->delete_data($where, 'task_list');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('superadmin/tasklist');
    }
}
