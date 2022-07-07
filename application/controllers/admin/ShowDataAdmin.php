<?php

class DataTeam extends CI_Controller
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
        $data['title'] = "Edit Data Team";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        $data['team1'] = $this->monitoring->getAllTeam1();
        $data['team2'] = $this->monitoring->getAllTeam2();
        $data['team3'] = $this->monitoring->getAllTeam3();
        $data['team4'] = $this->monitoring->getAllTeam4();
        $data['team5'] = $this->monitoring->getAllTeam5();

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataTeam', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function updateData1($id)
    {
        $data['team1'] = $this->db->query("SELECT * FROM team1 WHERE id_team='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Team";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateTeam1', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi1()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataTeam');
        } else {
            $id             = $this->input->post('id_team');
            $nama = $this->input->post('nama');
            $npm = $this->input->post('npm');
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


            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama' => $nama,
                'npm' => $npm,
                'photo' => $photo,

            );
            $where = array(
                'id_team' => $id
            );

            $this->Monitoring_model->update_data('team1', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataTeam');
        }
    }

    public function updateData2($id)
    {
        $data['team2'] = $this->db->query("SELECT * FROM team2 WHERE id_team='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Team";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateTeam2', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi2()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataTeam');
        } else {
            $id             = $this->input->post('id_team');
            $nama = $this->input->post('nama');
            $npm = $this->input->post('npm');
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


            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama' => $nama,
                'npm' => $npm,
                'photo' => $photo,

            );
            $where = array(
                'id_team' => $id
            );

            $this->Monitoring_model->update_data('team2', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataTeam');
        }
    }

    public function updateData3($id)
    {
        $data['team3'] = $this->db->query("SELECT * FROM team3 WHERE id_team='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Team";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateTeam3', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi3()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataTeam');
        } else {
            $id             = $this->input->post('id_team');
            $nama = $this->input->post('nama');
            $npm = $this->input->post('npm');
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


            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama' => $nama,
                'npm' => $npm,
                'photo' => $photo,

            );
            $where = array(
                'id_team' => $id
            );

            $this->Monitoring_model->update_data('team3', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataTeam');
        }
    }

    public function updateData4($id)
    {
        $data['team4'] = $this->db->query("SELECT * FROM team4 WHERE id_team='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Team";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateTeam4', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi4()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataTeam');
        } else {
            $id             = $this->input->post('id_team');
            $nama = $this->input->post('nama');
            $npm = $this->input->post('npm');
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


            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama' => $nama,
                'npm' => $npm,
                'photo' => $photo,

            );
            $where = array(
                'id_team' => $id
            );

            $this->Monitoring_model->update_data('team4', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataTeam');
        }
    }

    public function updateData5($id)
    {
        $data['team5'] = $this->db->query("SELECT * FROM team5 WHERE id_team='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Team";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateTeam5', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi5()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataTeam');
        } else {
            $id             = $this->input->post('id_team');
            $nama = $this->input->post('nama');
            $npm = $this->input->post('npm');
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


            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama' => $nama,
                'npm' => $npm,
                'photo' => $photo,

            );
            $where = array(
                'id_team' => $id
            );

            $this->Monitoring_model->update_data('team5', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataTeam');
        }
    }


    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('npm', 'npm', 'required');
    }
}
