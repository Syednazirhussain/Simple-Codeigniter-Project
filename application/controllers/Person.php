<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Person extends CI_Controller{

	public function subject(){
		$result['subject'] = $this->person->getAllSubject();
		$this->load->view('person/subject',$result);
	}

	public function edit($id){
		$result['subject'] = $this->person->getSubjectById($id);
		$this->load->view('person/edit',$result);
	}

	public function update(){
		$id= $this->input->post('id');
		$name= $this->input->post('name');
		$response = $this->person->editSubject($id,$name);
		if ($response){
			redirect('http://localhost/ci/person/subject');
		}
	}
	public function add(){
		$this->load->view('person/add');
	}
	public function Adding(){
		$name= $this->input->post('name');
		$response = $this->person->addSubject($name);
		if ($response){
			redirect('http://localhost/ci/person/subject');
		}
	}

	public function delete($id){
		$response = $this->person->deleteSubject($id);
		if ($response){
			redirect('http://localhost/ci/person/subject');
		}
	}

}



?>