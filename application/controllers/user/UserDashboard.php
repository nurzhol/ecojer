<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserDashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('user/DashboardModel','userDashboardModel');
    }



	public function index()
	{
		$isLoggedInUser = $this->session->userdata('isLoggedInUser');
        
        if(!isset($isLoggedInUser) || $isLoggedInUser != TRUE)
        {
			
			$this->load->view('user/login');
			
        }
        else
        {
        	$data['courses'] = $this->db->query("SELECT CName,NMFee FROM course  order by id asc limit 4")->result();
            $data['count_array_course'] = $this->db->query("SELECT COUNT(*) as countAs FROM course")->first_row()->countAs;
            $data['count_array_participant'] = $this->db->query("SELECT COUNT(*) as countAs FROM participant")->first_row()->countAs;
            $data['count_array_organization'] = $this->db->query("SELECT COUNT(*) as countAs FROM organization")->first_row()->countAs;
            $this->load->view('user/includes/header');
			$this->load->view('user/includes/nav');
			$this->load->view('user/dashboard',$data);
			$this->load->view('user/includes/footer');
			
        }
	}

	

	public function userProfile()
	{
		$isLoggedInUser = $this->session->userdata('isLoggedInUser');
        
        if(!isset($isLoggedInUser) || $isLoggedInUser != TRUE)
        {
			redirect("");
        }
        else
        {
			$userId = $this->session->userdata('id');
			$data['get_all_countries']=$this->userDashboardModel->get_all_countries();
        	$data['user'] = $this->userDashboardModel->getUser_details($userId)[0];

          	$this->load->view('user/includes/header');
			$this->load->view('user/includes/nav');
			$this->load->view('user/pages/profile',$data);
			$this->load->view('user/includes/footer');
			
        }
	}
	public function userProfileUpdate()
	{
		$isLoggedInUser = $this->session->userdata('isLoggedInUser');
        
        if(!isset($isLoggedInUser) || $isLoggedInUser != TRUE)
        {
			redirect("");
        }
        else
        {
        	$this->load->library('form_validation');

        	 $this->form_validation
            ->set_rules(
                'first_name',
                'First Name',
                'trim|min_length[4]|required|max_length[20]'
            );

	        $this->form_validation
	        ->set_rules(
	            'last_name',
	            'Last Name',
	            'trim|min_length[4]|required|max_length[20]'
	        );
	        
		 

	        $this->form_validation->
	        set_rules('contact',
	         'Contact',
	          'required|numeric|min_length[6]|max_length[12]'
	        );

	         $this->form_validation->
	        set_rules('dob',
         	  'Birth',
	          'required'
	        );

	        $this->form_validation->
	        set_rules('country',
	         'Country',
	          'required'
	        );

	        $this->form_validation->
	        set_rules('city',
	         'City',
	          'required'
	        );

	        $this->form_validation->
	        set_rules('address',
	         'Address',
	          'required'
	        );

	        

	       
	        
	        if($this->form_validation->run() == FALSE)
	        {

 				$this->userProfile();

	        }
	        else
	        {

	        	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
		             $uploadPath = 'uploads/patients/';
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
					    $this->session->set_flashdata('error',$data);
		                  redirect('userProfile');

		            }else{
						$fileData = $this->upload->data();
		            	$_POST['image'] =$fileData['file_name'];
			        	$userId = $this->session->userdata('id');
			            $result = $this->userDashboardModel->updateProfile($userId,$_POST);
			            if(count($result) > 0)
			            {
							foreach ($result as $res)
			                {
			                   $sessionArray = array(
                                            
											'id'=>$res->id,                    
											'role_id'=>$res->role_id,
											'first_name'=>$res->first_name,
											'last_name'=>$res->last_name,
											'image'=>$res->image,
											'can_add'=>$res->can_add,
											'can_edit'=>$res->can_edit,
											'can_delete'=>$res->can_delete,
											'location_id'=>$res->location_id,
											'location_name'=>$res->location_name,
											'isLoggedInUser' => TRUE
									);
			                    $this->session->set_userdata($sessionArray); 
			                    $this->session->set_flashdata('success', 'User profile has been updated');
		                  			redirect('userProfile');   
			                    
			                }
			            }
			            else
			            {
			                  $this->session->set_flashdata('error','Error While updating profile , kindly check it');
			                  redirect('userProfile');
			            }
		            }
		        }else{
		        	$userId = $this->session->userdata('id');
		            $result = $this->userDashboardModel->updateProfile($userId,$_POST);
		            if(count($result) > 0)
		            {
						foreach ($result as $res)
		                {
		                   $sessionArray = array(
                                            
											'id'=>$res->id,                    
											'role_id'=>$res->role_id,
											'first_name'=>$res->first_name,
											'last_name'=>$res->last_name,
											'image'=>$res->image,
											'can_add'=>$res->can_add,
											'can_edit'=>$res->can_edit,
											'can_delete'=>$res->can_delete,
											'location_id'=>$res->location_id,
											'location_name'=>$res->location_name,
											'isLoggedInUser' => TRUE
									);
		                    $this->session->set_userdata($sessionArray); 
		                    $this->session->set_flashdata('success', 'User profile has been updated');
	                  			redirect('userProfile');   
		                    
		                }
		            }
		            else
		            {
		                  $this->session->set_flashdata('error','Error While updating profile , kindly check it');
		                  redirect('userProfile');
		            }

		        }

	            
	        }
        }
		
	}
	public function logout()
	{
		session_destroy();
		redirect('');
	}

	
	

	

}
