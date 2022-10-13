<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Curd_model extends CI_Model
{

    public function get_count_all($table) {
        return $this->db->count_all($table);
    }

    public function get_projects($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cities');
        return $query->result_array();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function Select($table, $array = '', $limit = '')
    {
        if (!empty($array)) {
            $this->db->where($array);
        }

        if (!empty($limit)) {
            $this->db->limit($limit);
        }

        $query = $this->db->get($table);
        return $query->result_array();
        // $this->db->last_query();

    }


    public function update($table, $where, $array)
    {
        $this->db->where($where);
        return $this->db->update($table, $array);
    }

    function walletUpdate($id, $money, $condition ='+')
    {
        return $this->db->set("wallet_money", "wallet_money$condition" . $money, FALSE)
            ->where('id', $id)
            ->update('tbl_login');
    }

}
