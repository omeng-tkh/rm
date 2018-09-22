<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sudah_kontrol_model extends CI_Model
{

    public $table = 'view_kontrol';
    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('no_rm,tanggal,no_kontrol,tanggal_kontrol,dokter,spesialis,keterangan');
        $this->datatables->from('view_kontrol');
        $this->datatables->where('keterangan=sudah');
        //add this line for join
        //$this->datatables->join('table2', 'view_kontrol.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('medis/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
            ".anchor(site_url('medis/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ".anchor(site_url('medis/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), '');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
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
	$this->db->or_like('keterangan', $q);
	$this->db->from($this->table);
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
	$this->db->or_like('keterangan', $q);
	$this->db->limit($limit, $start);
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

/* End of file View_kontrol_model.php */
/* Location: ./application/models/View_kontrol_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-22 05:08:07 */
/* http://harviacode.com */