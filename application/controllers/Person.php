<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Person extends CI_Controller{
	
	public function Index(){
		echo "iam in home controller index method";
	}
	public function Name($name){
		echo "Hey : ".$name;;
	}
/*	public function Add($num1,$num2){
		echo $num2+$num1;
	}*/
	public function sendMail(){

		$this->load->view("contact");

		$this->load->library('email');

		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to('someone@example.com');


		$this->email->subject('Email Test');
		$this->email->message($this->input->post('message'));

		#$this->email->send();

		if ( $this->email->send() ) {
			echo $this->email->send();
		}else{
			echo $this->email->print_debugger();
		}
	}

	public function subject(){
		//echo print_r($this->person->getAllSubject());die();
		$result['subject'] = $this->person->getAllSubject();
		$this->load->view('person/subject',$result);
		
	}

	public function edit($id){
		//echo site_url();
		//echo base_url();
		//$id = $this->uri->segment(2);
		//echo $id;die();
		
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