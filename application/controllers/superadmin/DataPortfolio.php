<?php

class DataPortfolio extends CI_Controller
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
        $data['title'] = "Edit Data Portfolio";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        $data['portfolio'] = $this->monitoring->getAllPortfolio();
        $data['portfolio1'] = $this->monitoring->getAllPortfolio1();
        $data['portfolio2'] = $this->monitoring->getAllPortfolio2();
        $data['portfolio3'] = $this->monitoring->getAllPortfolio3();
        $data['portfolio4'] = $this->monitoring->getAllPortfolio4();
        $data['portfolio5'] = $this->monitoring->getAllPortfolio5();
        $data['portfolio6'] = $this->monitoring->getAllPortfolio6();


        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/dataPortfolio', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateData1($id)
    {
        $data['portfolio1'] = $this->db->query("SELECT * FROM portfolio1 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Portfolio";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdatePortfolio1', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi1()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
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
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Monitoring_model->update_data('portfolio1', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataPortfolio');
        }
    }

    public function updateData2($id)
    {
        $data['portfolio2'] = $this->db->query("SELECT * FROM portfolio2 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Portfolio";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdatePortfolio2', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi2()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
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
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Monitoring_model->update_data('portfolio2', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataPortfolio');
        }
    }

    public function updateData3($id)
    {
        $data['portfolio3'] = $this->db->query("SELECT * FROM portfolio3 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Portfolio";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdatePortfolio3', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi3()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
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
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Monitoring_model->update_data('portfolio3', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataPortfolio');
        }
    }

    public function updateData4($id)
    {
        $data['portfolio4'] = $this->db->query("SELECT * FROM portfolio4 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Portfolio";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdatePortfolio4', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi4()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
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
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Monitoring_model->update_data('portfolio4', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataPortfolio');
        }
    }

    public function updateData5($id)
    {
        $data['portfolio5'] = $this->db->query("SELECT * FROM portfolio5 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Portfolio";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdatePortfolio5', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi5()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
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
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Monitoring_model->update_data('portfolio5', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataPortfolio');
        }
    }
    public function updateData6($id)
    {
        $data['portfolio6'] = $this->db->query("SELECT * FROM portfolio6 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Data Portfolio";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdatePortfolio6', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function updateDataAksi6()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('superadmin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
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
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Monitoring_model->update_data('portfolio6', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/dataPortfolio');
        }
    }
    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function _rules()
    {
        $this->form_validation->set_rules('nama_portfolio', 'nama portfolio', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskrips', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
    }
}
