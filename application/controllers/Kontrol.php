<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontrol extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kontrol_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $kontrol = $this->Kontrol_model->get_all();

        $data = array(
            'kontrol_data' => $kontrol
        );

        $this->template->load('template','kontrol_list', $data);
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kontrol/create_action'),
	    'id' => set_value('id'),
	    'id_dokter' => set_value('id_dokter'),
	    'no_rm' => set_value('no_rm'),
	    'no_kontrol' => set_value('no_kontrol'),
	    'tgl_kontrol' => date("m-d-Y", strtotime(set_value('tgl_kontrol'))),
	    'ket' => set_value('ket')
	);
        $this->template->load('template','kontrol_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_dokter' => $this->input->post('id_dokter',TRUE),
		'no_rm' => $this->input->post('no_rm',TRUE),
		'no_kontrol' => $this->input->post('no_kontrol',TRUE),
		'tgl_kontrol' => date("Y-m-d", strtotime($this->input->post('tgl_kontrol',TRUE))),
		'ket' => $this->input->post('ket',TRUE),
		'created' => date('Y-m-d'),
	    );

            $this->Kontrol_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kontrol'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kontrol_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kontrol/update_action'),
		'id' => set_value('id', $row->id),
		'id_dokter' => set_value('id_dokter', $row->id_dokter),
		'no_rm' => set_value('no_rm', $row->no_rm),
		'no_kontrol' => set_value('no_kontrol', $row->no_kontrol),
		'tgl_kontrol' =>set_value('tgl_kontrol',  date("Y-m-d",  strtotime($row->tgl_kontrol))),
		'ket' => set_value('ket', $row->ket)
	    );
            $this->template->load('template','kontrol_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontrol'));
        }
    }
    
    public function update_action() 
    {
        $this->_rulesx();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_dokter' => $this->input->post('id_dokter',TRUE),
		'no_rm' => $this->input->post('no_rm',TRUE),
		'no_kontrol' => $this->input->post('no_kontrol',TRUE),
		'tgl_kontrol' => date("Y-m-d", strtotime($this->input->post('tgl_kontrol',TRUE))),
		'ket' => $this->input->post('ket',TRUE)
	    );

            $this->Kontrol_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kontrol'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kontrol_model->get_by_id($id);

        if ($row) {
            $this->Kontrol_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kontrol'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontrol'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_dokter', 'id dokter', 'trim|required');
	$this->form_validation->set_rules('no_rm', 'no rm', 'trim|required|is_unique[kontrol.no_rm]');
	$this->form_validation->set_rules('no_kontrol', 'no kontrol', 'trim|required|is_unique[kontrol.no_kontrol]');
	$this->form_validation->set_rules('tgl_kontrol', 'tgl kontrol', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function _rulesx() 
    {
	$this->form_validation->set_rules('id_dokter', 'id dokter', 'trim|required');
	$this->form_validation->set_rules('no_rm', 'no rm', 'trim|required');
	$this->form_validation->set_rules('no_kontrol', 'no kontrol', 'trim|required');
	$this->form_validation->set_rules('tgl_kontrol', 'tgl kontrol', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kontrol.xls";
        $judul = "kontrol";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Dokter");
	xlsWriteLabel($tablehead, $kolomhead++, "No Rm");
	xlsWriteLabel($tablehead, $kolomhead++, "No Kontrol");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Kontrol");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");
	xlsWriteLabel($tablehead, $kolomhead++, "Created");

	foreach ($this->Kontrol_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_dokter);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_rm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_kontrol);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_kontrol);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kontrol.doc");

        $data = array(
            'kontrol_data' => $this->Kontrol_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kontrol_doc',$data);
    }

}

/* End of file Kontrol.php */
/* Location: ./application/controllers/Kontrol.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-22 22:59:07 */
/* http://harviacode.com */