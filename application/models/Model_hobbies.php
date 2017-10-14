<?php

class Model_hobbies extends CI_Model{

    public function getAllHobbies($id){
        $result = $this->db->get_where('hobbies',array('personid' => $id));
        $data = $result->result_array($result);
        return $data;
    }
    public function addHobbies($id,$circket,$hockey,$tennis,$football){

        $data = array(
            'personid' => $id,
            'circket' => $circket,
            'hockey'  => $hockey,
            'tennis'  => $tennis,
            'football' => $football
        );

        if ($this->db->insert('hobbies', $data)){
            return true;
        }
    }
    
    public function getHobbiesById($id){
        $result = $this->db->get_where('hobbies',array('personid' => $id));
        $data = $result->result_array($result);
        return $data;
    }

    public function updateHobbies($id,$circket,$hockey,$tennis,$football){
        $data = array(
            'circket' => $circket,
            'hockey'  => $hockey,
            'tennis'  => $tennis,
            'football' => $football
        );
        $this->db->where('personid',$id);
        if ( $this->db->update('hobbies',$data) ){
            return true;
        }
    }

    public function deleteHobbies($id){
        $this->db->where('personid', $id);
        $response = $this->db->delete('hobbies');
        if ($response){
            return true;
        }
    }

}

?>