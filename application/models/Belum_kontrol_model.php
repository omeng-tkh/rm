<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Belum_kontrol_model extends CI_Model
{

    public $table = 'view_kontrol';
    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('keterangan', 'belum');
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        $this->db->where('keterangan', 'belum');
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('', $q);
	$this->db->or_like('no_rm', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('no_kontrol', $q);
	$this->db->or_like('tanggal_kontrol', $q);
	$this->db->or_like('dokter', $q);
	$this->db->or_like('spesialis', $q);
    $this->db->from($this->table);
    $this->db->where('keterangan', 'belum');
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('', $q);
	$this->db->or_like('no_rm', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('no_kontrol', $q);
	$this->db->or_like('tanggal_kontrol', $q);
	$this->db->or_like('dokter', $q);
	$this->db->or_like('spesialis', $q);
    $this->db->limit($limit, $start);

    $this->db->where('keterangan', 'belum');
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file belum_kontrol_model.php */
/* Location: ./application/models/belum_kontrol_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-22 22:58:26 */
/* http://harviacode.com */