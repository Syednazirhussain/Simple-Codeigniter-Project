<?php
 class Hobbies extends CI_Controller{

     public function add($id){
         $response['person'] = $this->hoby->getAllHobbies($id);
         if (empty($response['person'])){
             $this->load->view('hobbies/add_hobbies',array('id' => $id));
         }else{
             $this->load->view('hobbies/hobbies',$response);
         }
     }

     public function adding(){
         $id= $this->input->post('personid');
         $hockey = $this->input->post('hockey');
         $tennis = $this->input->post('tennis');
         $football = $this->input->post('football');
         $circket = $this->input->post('circket');
         //echo $id." hockey : ".$hockey." football : ".$football." circket : ".$circket." tennis : ".$tennis;
         $response = $this->hoby->addHobbies($id,$circket,$hockey,$tennis,$football);
         if ($response){
             redirect('http://localhost/ci/person/subject');
         }
     }
     
     public function edit($id){
         $result['person'] = $this->hoby->getHobbiesById($id);
         $this->load->view('hobbies/edit_hobbies',$result);
     }

     public function delete($id){
         $response = $this->hoby->deleteHobbies($id);
         if ($response){
             redirect('http://localhost/ci/person/subject');
         }
     }
     
     public function update(){
         $id= $this->input->post('personid');
         $hockey = $this->input->post('hockey');
         $tennis = $this->input->post('tennis');
         $football = $this->input->post('football');
         $circket = $this->input->post('circket');
         //echo " hockey : ".$hockey." football : ".$football." circket : ".$circket." tennis : ".$tennis;die();
         $response = $this->hoby->updateHobbies($id,$circket,$hockey,$tennis,$football);
         if ($response){
             redirect('http://localhost/ci/person/subject');
         }
     }


 }


?>