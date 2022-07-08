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

    public function getTaskList($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('description', $keyword);
            $this->db->or_like('requester', $keyword);
            $this->db->or_like('status', $keyword);
            $this->db->or_like('notes', $keyword);
        }

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

    // Opening Location
    public function getAllLocation()
    {
        return $this->db->get('area_location')->result_array();
    }

    public function getLocation($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('location', $keyword);
        }
        return $this->db->get('area_location', $limit, $start)->result_array();
    }
    public function countAllLocation()
    {
        return $this->db->get('area_location')->num_rows();
    }
    // End Location

    // Opening Equipment
    public function getAllEquipment()
    {
        return $this->db->get('equipment')->result_array();
    }

    public function getEquipment($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('equipment', $keyword);
        }
        return $this->db->get('equipment', $limit, $start)->result_array();
    }
    public function countAllEquipment()
    {
        return $this->db->get('equipment')->num_rows();
    }
    // End Equipment

    // Opening Department
    public function getAllDepartment()
    {
        return $this->db->get('department')->result_array();
    }

    public function getDepartment($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('department', $keyword);
        }
        return $this->db->get('department', $limit, $start)->result_array();
    }
    public function countAllDepartment()
    {
        return $this->db->get('department')->num_rows();
    }
    // End Department

    // Opening Manufacture
    public function getAllManufacture()
    {
        return $this->db->get('manufacture')->result_array();
    }

    public function getManufacture($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('manufacture', $keyword);
        }
        return $this->db->get('manufacture', $limit, $start)->result_array();
    }
    public function countAllManufacture()
    {
        return $this->db->get('manufacture')->num_rows();
    }
    // End Department

    // Opening ModelAsset
    public function getAllModelAsset()
    {
        return $this->db->get('model_asset')->result_array();
    }

    public function getModelAsset($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('model_asset', $keyword);
        }
        return $this->db->get('model_asset', $limit, $start)->result_array();
    }
    public function countAllModelAsset()
    {
        return $this->db->get('model_asset')->num_rows();
    }
    // End ModelAsset

    // Opening Log Book
    public function getAllLogBook()
    {
        return $this->db->get('logbook')->result_array();
    }

    public function getLogBook($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('department', $keyword);
            $this->db->or_like('equipment', $keyword);
            $this->db->or_like('serial_number', $keyword);
            $this->db->or_like('description', $keyword);
        }
        return $this->db->get('logbook', $limit, $start)->result_array();
    }

    public function countAllLogBook()
    {
        return $this->db->get('logbook')->num_rows();
    }
    // End Log Book

    // Opening Mapping Network
    public function getAllMappingNetwork()
    {
        return $this->db->get('mapping_network')->result_array();
    }

    public function getMappingNetwork($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('hostname', $keyword);
            $this->db->or_like('description', $keyword);
            $this->db->or_like('model', $keyword);
            $this->db->or_like('serial_number', $keyword);
            $this->db->or_like('ip_address', $keyword);
            $this->db->or_like('mac_address', $keyword);
            $this->db->or_like('switch', $keyword);
            $this->db->or_like('port', $keyword);
            $this->db->or_like('location', $keyword);
        }
        return $this->db->get('mapping_network', $limit, $start)->result_array();
    }

    public function countAllMappingNetwork()
    {
        return $this->db->get('mapping_network')->num_rows();
    }
    // End Mapping Network

    // Opening Ip Static
    public function getAllIpStatic()
    {
        return $this->db->get('ipstatic')->result_array();
    }

    public function getIpStatic($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('ip_address', $keyword);
            $this->db->or_like('port', $keyword);
            $this->db->or_like('mac_address', $keyword);
            $this->db->or_like('host_name', $keyword);
            $this->db->or_like('equipment', $keyword);
            $this->db->or_like('manufacture', $keyword);
            $this->db->or_like('model', $keyword);
            $this->db->or_like('serial_number', $keyword);
            $this->db->or_like('asset_number', $keyword);
            $this->db->or_like('location', $keyword);
            $this->db->or_like('user', $keyword);
        }
        return $this->db->get('ipstatic', $limit, $start)->result_array();
    }

    public function countAllIpStatic()
    {
        return $this->db->get('ipstatic')->num_rows();
    }
    // End Ip Static

    // Opening ITOT ASSET
    public function getAllItOtAsset()
    {

        return $this->db->get('itot_asset')->result_array();
    }

    public function getItOtAsset($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('plant_code', $keyword);
            $this->db->or_like('cbu', $keyword);
            $this->db->or_like('asset_number', $keyword);
            $this->db->or_like('asset_description', $keyword);
        }
        return $this->db->get('itot_asset', $limit, $start)->result_array();
    }

    public function countAllItOtAsset()
    {

        return $this->db->get('itot_asset')->num_rows();
    }
    // End ITOT ASSET

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
