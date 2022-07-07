<?php

//untuk menampilkan data, dibutuhkan model
class Monitoring_model extends CI_Model
{
    public function get_data($table)
    {

        return $this->db->get($table);
    }

    // Opening Task List
    public function getAllTaksList()
    {

        return $this->db->get('task_list')->result_array();
    }

    public function getTaskList($limit, $start)
    {

        return $this->db->get('task_list', $limit, $start)->result_array();
    }

    public function countAllTaskList()
    {

        return $this->db->get('task_list')->num_rows();
    }
    // End Task List

     // Opening Data Admin
     public function getAllDataAdmin()
     {
 
         return $this->db->get('data_admin')->result_array();
     }
 
     public function getDataAdmin($limit, $start)
     {
 
         return $this->db->get('data_admin', $limit, $start)->result_array();
     }
 
     public function countAllDataAdmin()
     {
 
         return $this->db->get('data_admin')->num_rows();
     }
     // End Data Admin

    // Opening Log Book
    public function getAllLogBook()
    {
        return $this->db->get('logbook')->result_array();
    }

    public function getLogBook($limit, $start)
    {
        return $this->db->get('logbook', $limit, $start)->result_array();
    }

    public function countAllLogBook()
    {
        return $this->db->get('logbook')->num_rows();
    }
    // End Task List

    // Opening Log Book
    public function getAllMappingNetwork()
    {
        return $this->db->get('mapping_network')->result_array();
    }

    public function getMappingNetwork($limit, $start)
    {
        return $this->db->get('mapping_network', $limit, $start)->result_array();
    }

    public function countAllMappingNetwork()
    {
        return $this->db->get('mapping_network')->num_rows();
    }
    // End Task List

    // Opening Log Book
    public function getAllIpStatic()
    {
        return $this->db->get('ipstatic')->result_array();
    }

    public function getIpStatic($limit, $start)
    {
        return $this->db->get('ipstatic', $limit, $start)->result_array();
    }

    public function countAllIpStatic()
    {
        return $this->db->get('ipstatic')->num_rows();
    }
    // End Task List

    // Opening ITOT ASSET
    public function getAllItOtAsset()
    {

        return $this->db->get('itot_asset')->result_array();
    }

    public function getItOtAsset($limit, $start)
    {

        return $this->db->get('itot_asset', $limit, $start)->result_array();
    }

    public function countAllItOtAsset()
    {

        return $this->db->get('itot_asset')->num_rows();
    }
    // End Task List

    public function getAllHeader()
    {

        return $this->db->get('header')->result_array();
    }
    public function getAllHeaderBackground()
    {

        return $this->db->get('header_background')->result_array();
    }

    public function getAllPortfolio()
    {

        return $this->db->get('portfolio')->result_array();
    }

    public function getAllPortfolio1()
    {

        return $this->db->get('portfolio1')->result_array();
    }

    public function getAllPortfolio2()
    {

        return $this->db->get('portfolio2')->result_array();
    }

    public function getAllPortfolio3()
    {

        return $this->db->get('portfolio3')->result_array();
    }

    public function getAllPortfolio4()
    {

        return $this->db->get('portfolio4')->result_array();
    }
    public function getAllPortfolio5()
    {

        return $this->db->get('portfolio5')->result_array();
    }
    public function getAllPortfolio6()
    {

        return $this->db->get('portfolio6')->result_array();
    }
    public function getAllTeam()
    {

        return $this->db->get('team')->result_array();
    }
    public function getAllTeam1()
    {

        return $this->db->get('team1')->result_array();
    }
    public function getAllTeam2()
    {

        return $this->db->get('team2')->result_array();
    }
    public function getAllTeam3()
    {

        return $this->db->get('team3')->result_array();
    }
    public function getAllTeam4()
    {

        return $this->db->get('team4')->result_array();
    }
    public function getAllTeam5()
    {

        return $this->db->get('team5')->result_array();
    }

    public function deleteAllInputGaji()
    {

        return $this->db->truncate('data_absensi');
    }



    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert_batch($table = null, $data = array())
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->insert_batch($table, $data);
        }
    }
    public function cek_login($where, $table)
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('data_admin');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}
