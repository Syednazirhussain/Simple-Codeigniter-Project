<?php

class MultipleUploads extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    
    public function index()
    {
        $this->load->view('multi_upload', array('error' => ' ' ));
    }
    
    public function Upload(){

        $data['page_title'] = "&copy; IDEAL - Administrator - Real State - Add Real Estate";
        $data['main_content'] = 'admin/add_estates';

        if ($this->input->post() !== FALSE) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Career Title', 'trim|required');

            if ($this->form_validation->run() !== FALSE) {

                $title = $this->input->post('title');
                $description = $this->input->post('description');

                if (!empty($_FILES['images']['name'][0])) {
                    if ($this->upload_files('./uploads/',$title, $_FILES['images']) === FALSE) {
                        $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('upload_success', $data);
                    }
                }
            }
        }
    }


    private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;

            // return image filename in array
             //$images[] = $fileName;

            $config['file_name'] = $fileName;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }
        return true;
        // return $images;
    }


}
?>