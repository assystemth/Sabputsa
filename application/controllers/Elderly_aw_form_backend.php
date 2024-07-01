<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Elderly_aw_form_backend extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (
            $this->session->userdata('m_level') != 1 &&
            $this->session->userdata('m_level') != 2 &&
            $this->session->userdata('m_level') != 3 &&
            $this->session->userdata('m_level') != 4
        ) {
            redirect('user', 'refresh');
        }
        $this->load->model('member_model');
        $this->load->model('space_model');
        $this->load->model('elderly_aw_form_model');
    }

    public function index()
    {
        $data['query'] = $this->elderly_aw_form_model->list_all();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/elderly_aw_form', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function editing($elderly_aw_form_id)
    {
        $data['rsedit'] = $this->elderly_aw_form_model->read($elderly_aw_form_id);
        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/elderly_aw_form_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit($elderly_aw_form_id)
    {
        $this->elderly_aw_form_model->edit($elderly_aw_form_id);
        redirect('elderly_aw_form_backend');
    }
}
