<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUser extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('admin/UserModel','UserModel');
		
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
	
	public function add_user()
	{
		$this->load->library('form_validation');

	    $this->form_validation
            ->set_rules(
                'first_name',
                'First Name',
                'trim|min_length[3]|max_length[15]'
            );

        $this->form_validation
            ->set_rules(
                'last_name',
                'Last Name',
                'trim|min_length[3]|max_length[15]'
            );

        $this->form_validation
            ->set_rules(
                'email',
                'E-Mail', 
                'trim|required|valid_email'
            );          
    
        $this->form_validation
            ->set_rules(
                'password',
                'Password',
                'trim|min_length[3]|max_length[15]'
            );

        $this->form_validation
        ->set_rules(
            'cpassword', 
            'Password Confirmation', 
            'trim|matches[password]'
        );

        $this->form_validation
        ->set_rules(
            'role_id', 
            'User Role', 
            'required'
        );


        $this->form_validation
        ->set_rules(
            'location_id', 
            'User Location', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'user_status', 
            'User Status', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'can_add', 
            'User Add Rights', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'can_edit', 
            'User Edit Rights', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'can_delete', 
            'User Delete Rights', 
            'required'
        );

        
        if($this->form_validation->run() == FALSE)
        {
           echo json_encode(array("status"=>"false","error"=>validation_errors()));
        }
        else
        {

			if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
	             $uploadPath = 'uploads/users/';
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
		        	$data=$this->UserModel->save_user();
		        	if($data == 'email_exist') {
		        		echo json_encode(array("status"=>"email_exist","error"=>"Email address is already exist"));
		        	}else if($data == 'false'){
						echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
		        	}else{
		     			echo json_encode(array("status"=>"true","success"=>"Successfully Added"));
		        	}
	            }
	        }else{
					$_POST['image_name'] ='Noimage.png';
		        	$data=$this->UserModel->save_user();
		        	if($data == 'email_exist') {
		        		echo json_encode(array("status"=>"email_exist","error"=>"Email address is already exist"));
		        	}else if($data == 'false'){
						echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
		        	}else{
		     			echo json_encode(array("status"=>"true","success"=>"Successfully Added"));
		        	}
			}
		}
	}

	public function all_user()
	{
		$isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
			     redirect('admin');
        }
        else
        {
            $data['users'] = $this->UserModel->viewRecords();
          
			$this->load->view('admin/includes/header');
			$this->load->view('admin/includes/nav');
			$this->load->view('admin/users/users',$data);
			$this->load->view('admin/includes/footer');
			
        }
	}

    public function update_user()
    {
        $this->load->library('form_validation');

        $this->form_validation
            ->set_rules(
                'first_name_edit',
                'First Name',
                'trim|min_length[3]|max_length[15]'
            );

        $this->form_validation
            ->set_rules(
                'last_name_edit',
                'Last Name',
                'trim|min_length[3]|max_length[15]'
            );

        $this->form_validation
            ->set_rules(
                'email_edit',
                'E-Mail', 
                'trim|required|valid_email'
            );          


        $this->form_validation
        ->set_rules(
            'role_id_edit', 
            'User Role', 
            'required'
        );


        $this->form_validation
        ->set_rules(
            'location_id_edit', 
            'User Location', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'user_status_edit', 
            'User Status', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'can_add_edit', 
            'User Add Rights', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'can_edit_edit', 
            'User Edit Rights', 
            'required'
        );

        $this->form_validation
        ->set_rules(
            'can_delete_edit', 
            'User Delete Rights', 
            'required'
        );

        
        if($this->form_validation->run() == FALSE)
        {
           echo json_encode(array("status"=>"false","error"=>validation_errors()));
        }
        else
        {

            if(isset($_FILES['image_edit']['name']) && !empty($_FILES['image_edit']['name'])){
                 $uploadPath = 'uploads/users/';
                 $config['upload_path'] = $uploadPath;
                 $config['allowed_types']    = 'jpg|png';
                 $config['max_size']         = 2048;
                 $config['max_width']        = 5000;
                 $config['max_height']       = 5000;
                 $config['file_ext_tolower'] = true;
                 $config['encrypt_name']     = true;   
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image_edit')){
                     $data = $this->upload->display_errors();
                     echo json_encode(array("status"=>"false","error"=>$data));

                }else{
                    $fileData = $this->upload->data();
                    $_POST['image_name_edit'] =$fileData['file_name'];
                    $data=$this->UserModel->update_user();
                    if($data == 'email_exist') {
                        echo json_encode(array("status"=>"email_exist","error"=>"Email address is already exist"));
                    }else if($data == 'false'){
                        echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
                    }else{
                        echo json_encode(array("status"=>"true","success"=>"Successfully Added"));
                    }
                }
            }else{
                    $data=$this->UserModel->update_user();
                    if($data == 'email_exist') {
                        echo json_encode(array("status"=>"email_exist","error"=>"Email address is already exist"));
                    }else if($data == 'false'){
                        echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
                    }else{
                        echo json_encode(array("status"=>"true","success"=>"Successfully Added"));
                    }
            }
        }
    }


    public function delete_user()
    {
        $data = $this->UserModel->delete_user();
        echo json_encode($data);
    }
	
	
	
		
	
	
			
	
	
	
	
	
	
	
}
