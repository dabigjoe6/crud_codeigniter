<?php 

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function createData() {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'bio' => $this->input->post('bio'),
            'date_of_birth' => $this->input->post('date_of_birth')
        );

        return $this->db->insert('crud_table', $data);
    }

    public function getAllData() {
        $query = $this->db->query('SELECT * FROM crud_table');
        return $query->result();
    }

    public function getData($id) {
        $query = $this->db->where('id', $id);
        return $this->db->get('crud_table')->row();
    }

    public function editData($id) {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'bio' => $this->input->post('bio'),
            'date_of_birth' => $this->input->post('date_of_birth')
        );

        $this->db->where('id', $id);
        return $this->db->update('crud_table', $data);
    }

    public function deleteData($id) {
        $this->db->where('id', $id);
        return $this->db->delete('crud_table');
    }
}