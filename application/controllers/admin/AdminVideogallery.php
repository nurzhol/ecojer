<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminVideogallery extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('admin/VideogalleryModel','VideogalleryModel');
		
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
	
	public function add_videogallery()
	{
		$this->load->library('form_validation');

	    $this->form_validation
            ->set_rules(
                'title',
                'Title',
                'trim|min_length[3]|max_length[15]'
            );
			
		$this->form_validation
            ->set_rules(
                'description',
                'Description',
                'trim|min_length[3]|max_length[220]'
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
                'trim|min_length[3]|max_length[255]'
            );
        
        if($this->form_validation->run() == FALSE)
        {
           echo json_encode(array("status"=>"false","error"=>validation_errors()));
        }
        else
        {
			
			 if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
                $uploadPath = 'assets/backend/uploads/videogallery/thumbnails';
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
                   
                }
            }else{
				$_POST['image_name'] ='Noimage.png';
			}
			
			if(isset($_FILES['video']['name']) && !empty($_FILES['video']['name'])){
                $uploadPath = 'assets/backend/uploads/videogallery/videos';
	            $config['upload_path'] = $uploadPath;
	            $config['allowed_types']    = 'mp4';
			    $config['max_size'] = '102400';
				
				$config['overwrite'] = FALSE;
				$config['remove_spaces'] = TRUE;
				$video_name = $this->generateRandomString(5);
				$config['file_name'] = $video_name;  
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('video')){
                     $data = $this->upload->display_errors();
                     echo json_encode(array("status"=>"false","error"=>$data));

                }else{
                    $fileData = $this->upload->data();
                    $_POST['video_name'] =$fileData['file_name'];
                   
                }
            }else{
				$_POST['video_name'] ='sample.mp4';
			}
			
			$data=$this->VideogalleryModel->save_videogallery();
			if($data == 'title_exist') {
				echo json_encode(array("status"=>"title_exist","error"=>"title is already exist"));
			}else if($data == 'false'){
				echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
			}else{
				echo json_encode(array("status"=>"true","success"=>"Successfully added"));
			}

			
		}
	}
	
	function generateRandomString($length = 10) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
	}

	public function all_videogallery()
	{
		$isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
			     redirect('admin');
        }
        else
        {
            $data['videogallery'] = $this->VideogalleryModel->viewRecords();
          
			$this->load->view('admin/includes/header');
			$this->load->view('admin/includes/nav');
			$this->load->view('admin/videogallery/videogallery',$data);
			$this->load->view('admin/includes/footer');
			
        }
	}

    public function update_videogallery()
    {
        $this->load->library('form_validation');

            $this->form_validation
            ->set_rules(
                'title',
                'Title',
                'trim|min_length[3]|max_length[15]'
            );
			
		$this->form_validation
            ->set_rules(
                'description',
                'Description',
                'trim|min_length[3]|max_length[15]'
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
                'trim|min_length[3]|max_length[255]'
            );

        
        if($this->form_validation->run() == FALSE)
        {
           echo json_encode(array("status"=>"false","error"=>validation_errors()));
        }
        else
        {

            if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
                $uploadPath = 'assets/backend/uploads/videogallery/thumbnails';
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
                   
                }
            }
			
			if(isset($_FILES['video']['name']) && !empty($_FILES['video']['name'])){
                $uploadPath = 'assets/backend/uploads/videogallery/videos';
	            $config['upload_path'] = $uploadPath;
	            $config['allowed_types']    = 'mp4';
			    $config['max_size'] = '102400';
				
				$config['overwrite'] = FALSE;
				$config['remove_spaces'] = TRUE;
				$video_name = $this->generateRandomString(5);
				$config['file_name'] = $video_name;  
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('video')){
                     $data = $this->upload->display_errors();
                     echo json_encode(array("status"=>"false","error"=>$data));

                }else{
                    $fileData = $this->upload->data();
                    $_POST['video_name'] =$fileData['file_name'];
                   
                }
            }
			
			$data=$this->VideogalleryModel->update_videogallery();
			if($data == 'title_exist') {
				echo json_encode(array("status"=>"title_exist","error"=>"title is already exist"));
			}else if($data == 'false'){
				echo json_encode(array("status"=>"false","error"=>"Getting Error While saving ,try again later"));
			}else{
				echo json_encode(array("status"=>"true","success"=>"Successfully updated"));
			}
        }
    }


    public function delete_videogallery()
    {
        $data = $this->VideogalleryModel->delete_videogallery();
        echo json_encode($data);
    }
	
	
	
		
	
	
			
	
	
	
	
	
	
	
}
