<?php

class Subject extends CI_Model{

    public function getAllSubject(){

        $result = $this->db->get('test');
        $data = $result->result_array($result);
        return $data;

    }

    public function getSubjectById($id){
        $result = $this->db->get_where('test',array('id' => $id));
        $data = $result->result_array($result);
        return $data;
    }

    public function editSubject($id,$title){
        $data = array(
            'id' => $id,
            'name' => $title,
        );

        if ($this->db->replace('test', $data)){
            return true;
        }
    }

    public function addSubject($name){
        $data = array(
          'name' => $name
        );

        if ($this->db->insert('test',$data)){
            return true;
        }

    }

    public function deleteSubject($id){
        $this->db->where('id', $id);
        $response = $this->db->delete('test');
        if ($response){
            return true;
        }
    }


}





?>