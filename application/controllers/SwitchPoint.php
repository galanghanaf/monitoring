<?php

class SwitchPoint extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Switch";

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
        $config['base_url'] = site_url('switchpoint/index');
        $this->db->like('hostname', $data['keyword']);
        $this->db->or_like('asset_description', $data['keyword']);
        $this->db->or_like('model', $data['keyword']);
        $this->db->or_like('serial_number', $data['keyword']);
        $this->db->or_like('ip_address', $data['keyword']);
        $this->db->or_like('mac_address', $data['keyword']);
        $this->db->or_like('switch', $data['keyword']);
        $this->db->or_like('port', $data['keyword']);
        $this->db->or_like('location', $data['keyword']);

        $this->db->from('switchpoint');
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



        $data['start'] = $this->uri->segment(3);
        $data['switchpoint'] = $this->monitoring->getSwitchPoint($config['per_page'], $data['start'], $data['keyword']);
        //result berfungsi untuk menggenerate/menampung/menampilkan query(data)

        $this->load->view('switchpoint', $data);
    }
}
