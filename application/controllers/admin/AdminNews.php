<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminNews extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('admin/NewsModel','NewsModel');
		
    }
	
	

	public function index()
	{
		$isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
			     redirect('admin');
        }
        else
        {
            $data['content']	 = 'admin/dashboard';
			$this->load->view('admin/template/index',$data);
			
        }
	}
	
	public function add_news()
	{
		$this->load->library('form_validation');

	    $this->form_validation
            ->set_rules(
                'title',
                'Title',
                'trim|min_length[3]'
            );
			
		$this->form_validation
            ->set_rules(
                'description',
                'Description',
                'trim|min_length[3]'
            );
		$this->form_validation
            ->set_rules(
                'status',
                'Status',
                'trim|min_length[1]|max_length[1]'
            );
		$this->form_validation
            ->set_rules(
                'language',
                'Language',
                'trim|min_length[3]'
            );
        
        if($this->form_validation->run() == FALSE)
        {
           echo json_encode(array("status"=>"false","error"=>validation_errors()));
        }
        else
        {

			if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
	             $uploadPath = 'assets/backend/uploads/news/';
	             $config['upload_path'] = $uploadPath;
	             $config['allowed_types']    = 'jpg|png';
			     $config['max_size']         = 2048;
			     $config['max_width']        = 5000;
			     $config['max_height']       = 5000;
			     $config['file_ext_tolower'] = true;
			     $config['encrypt_name']     = true;   
	            
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	            if(!$this->upload->do_upload('image')){
	            	 $data = $this->upload->display_errors();
					 echo json_encode(array("status"=>"false","error"=>$data));

	            }else{
					$fileData = $this->upload->data();
	            	$_POST['image_name'] =$fileData['file_name'];
		        	$data=$this->NewsModel->save_news();
		        	if($data == 'title_exist') {
		        		echo json_encode(array("status"=>"title_exist","error"=>"Title is already exist"));
		        	}else if($data == 'false'){
						echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
		        	}else{
		     			echo json_encode(array("status"=>"true","success"=>"Successfully Added"));
		        	}
	            }
	        }else{
					$_POST['image_name'] ='Noimage.png';
		        	$data=$this->NewsModel->save_news();
		        	if($data == 'title_exist') {
		        		echo json_encode(array("status"=>"title_exist","error"=>"Title is already exist"));
		        	}else if($data == 'false'){
						echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
		        	}else{
		     			echo json_encode(array("status"=>"true","success"=>"Successfully Added"));
		        	}
			}
		}
	}

	public function all_news()
	{
		$isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
			     redirect('admin');
        }
        else
        {
            $data['news'] = $this->NewsModel->viewRecords();
			$this->load->view('admin/includes/header');
			$this->load->view('admin/includes/nav');
			$this->load->view('admin/news/news',$data);
			$this->load->view('admin/includes/footer');
			
        }
	}

    public function update_news()
    {
        $this->load->library('form_validation');

            $this->form_validation
            ->set_rules(
                'title',
                'Title',
                'trim|min_length[3]'
            );
			
		$this->form_validation
            ->set_rules(
                'description',
                'Description',
                'trim|min_length[3]'
            );
		$this->form_validation
            ->set_rules(
                'status',
                'Status',
                'trim|min_length[1]|max_length[1]'
            );
		$this->form_validation
            ->set_rules(
                'language',
                'Language',
                'trim|min_length[3]'
            );

        
        if($this->form_validation->run() == FALSE)
        {
           echo json_encode(array("status"=>"false","error"=>validation_errors()));
        }
        else
        {

            if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
                 $uploadPath = 'assets/backend/uploads/news/';
                 $config['upload_path'] = $uploadPath;
                 $config['allowed_types']    = 'jpg|png';
                 $config['max_size']         = 2048;
                 $config['max_width']        = 5000;
                 $config['max_height']       = 5000;
                 $config['file_ext_tolower'] = true;
                 $config['encrypt_name']     = true;   
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image')){
                     $data = $this->upload->display_errors();
                     echo json_encode(array("status"=>"false","error"=>$data));

                }else{
                    $fileData = $this->upload->data();
                    $_POST['image_name'] =$fileData['file_name'];
                    $data=$this->NewsModel->update_news();
                    if($data == 'title_exist') {
                        echo json_encode(array("status"=>"title_exist","error"=>"title is already exist"));
                    }else if($data == 'false'){
                        echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
                    }else{
                        echo json_encode(array("status"=>"true","success"=>"Successfully updated"));
                    }
                }
            }else{
                    $data=$this->NewsModel->update_news();
                    if($data == 'title_exist') {
                        echo json_encode(array("status"=>"title_exist","error"=>"title is already exist"));
                    }else if($data == 'false'){
                        echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
                    }else{
                        echo json_encode(array("status"=>"true","success"=>"Successfully updated"));
                    }
            }
        }
    }


    public function delete_news()
    {
        $data = $this->NewsModel->delete_news();
        echo json_encode($data);
    }
	
	
	
		
	
	
			
	
	
	
	
	
	
	
}
