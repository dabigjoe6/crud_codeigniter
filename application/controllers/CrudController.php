<?php 

class CrudController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Crud_model');
    }
    public function index() {

        $data = array('table' => $this->Crud_model->getAllData());
        $this->load->view('header');
        $this->load->view('crud_view', $data);
    }

    public function addData() {
        $this->Crud_model->createData();
        redirect('crudcontroller');
    }
}