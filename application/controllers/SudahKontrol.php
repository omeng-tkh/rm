<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SudahKontrol extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Sudah_kontrol_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','medis/view_kontrol_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Sudah_kontrol_model->json();
    }

    public function read($id) 
    {
        $row = $this->Sudah_kontrol_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_rm' => $row->no_rm,
		'tanggal' => $row->tanggal,
		'no_kontrol' => $row->no_kontrol,
		'tanggal_kontrol' => $row->tanggal_kontrol,
		'dokter' => $row->dokter,
		'spesialis' => $row->spesialis,
		'keterangan' => $row->keterangan,
	    );
            $this->template->load('template','medis/view_kontrol_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('medis'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('medis/create_action'),
	    'no_rm' => set_value('no_rm'),
	    'tanggal' => set_value('tanggal'),
	    'no_kontrol' => set_value('no_kontrol'),
	    'tanggal_kontrol' => set_value('tanggal_kontrol'),
	    'dokter' => set_value('dokter'),
	    'spesialis' => set_value('spesialis'),
	    'keterangan' => set_value('keterangan'),
	);
        $this->template->load('template','medis/view_kontrol_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_rm' => $this->input->post('no_rm',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'no_kontrol' => $this->input->post('no_kontrol',TRUE),
		'tanggal_kontrol' => $this->input->post('tanggal_kontrol',TRUE),
		'dokter' => $this->input->post('dokter',TRUE),
		'spesialis' => $this->input->post('spesialis',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->Sudah_kontrol_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('medis'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Sudah_kontrol_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('medis/update_action'),
		'no_rm' => set_value('no_rm', $row->no_rm),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'no_kontrol' => set_value('no_kontrol', $row->no_kontrol),
		'tanggal_kontrol' => set_value('tanggal_kontrol', $row->tanggal_kontrol),
		'dokter' => set_value('dokter', $row->dokter),
		'spesialis' => set_value('spesialis', $row->spesialis),
		'keterangan' => set_value('keterangan', $row->keterangan),
	    );
            $this->template->load('template','medis/view_kontrol_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('medis'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'no_rm' => $this->input->post('no_rm',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'no_kontrol' => $this->input->post('no_kontrol',TRUE),
		'tanggal_kontrol' => $this->input->post('tanggal_kontrol',TRUE),
		'dokter' => $this->input->post('dokter',TRUE),
		'spesialis' => $this->input->post('spesialis',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->Sudah_kontrol_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('medis'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Sudah_kontrol_model->get_by_id($id);

        if ($row) {
            $this->Sudah_kontrol_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('medis'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('medis'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_rm', 'no rm', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('no_kontrol', 'no kontrol', 'trim|required');
	$this->form_validation->set_rules('tanggal_kontrol', 'tanggal kontrol', 'trim|required');
	$this->form_validation->set_rules('dokter', 'dokter', 'trim|required');
	$this->form_validation->set_rules('spesialis', 'spesialis', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "view_kontrol.xls";
        $judul = "view_kontrol";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "No Rm");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "No Kontrol");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Kontrol");
	xlsWriteLabel($tablehead, $kolomhead++, "Dokter");
	xlsWriteLabel($tablehead, $kolomhead++, "Spesialis");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");

	foreach ($this->Sudah_kontrol_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_rm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_kontrol);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_kontrol);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dokter);
	    xlsWriteLabel($tablebody, $kolombody++, $data->spesialis);
	    xlsWriteNumber($tablebody, $kolombody++, $data->keterangan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=view_kontrol.doc");

        $data = array(
            'view_kontrol_data' => $this->Sudah_kontrol_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('medis/view_kontrol_doc',$data);
    }

}

/* End of file Medis.php */
/* Location: ./application/controllers/Medis.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-22 05:08:07 */
/* http://harviacode.com */