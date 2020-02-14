<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserLogin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
		$this->load->model('user/LoginModel','userLoginModel');
        $this->load->library("PHPMailer_Library");
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
            redirect('userDashboard');
			
        }
	}
    
	
	public function loginMe()
    {
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]|trim');
		
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
                'trim|required|min_length[5]|max_length[15]'
            );
        
        if($this->form_validation->run() == FALSE)
        {
            $this->loginPage();
        }
        else
        {
			$email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $result = $this->userLoginModel->loginMe($email, $password);
            //var_dump($result); die;
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
                    
                }

                redirect('userDashboard');
            }
            else
            {
                  $this->session->set_flashdata('error', 'Email or Password is incorrect');
                  redirect('login');
            }
        }
    }
	
	/**
     * This function used to load forgot password view
     */
    public function forgotPassword()
    {
        $role_id = $this->session->userdata('role_id');
        if($role_id == '1'){
            redirect('user');
        }else{
            $this->load->view('user/includes/header');
            $this->load->view('user/forgotpassword');
            $this->load->view('user/includes/footer');
        }
        
    }
	
	
	
	/**
     * This function used to generate reset password request link
     */
    function resetPasswordUser()
    {
        $status = '';
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
                
        if($this->form_validation->run() == FALSE)
        {
            $this->forgotPassword();
        }
        else 
        {
			
			
			
            $email = $this->input->post('email');
            
            if($this->userLoginModel->checkEmailExist($email))
            {
                
				// var_dump('hdhsab'); die;
				$encoded_email = urlencode($email);
                
                $this->load->helper('string');
                $data['email'] = $email;
                $data['activation_id'] = random_string('alnum',15);
                $data['client_ip'] = $this->input->ip_address();
                
                $save = $this->userLoginModel->resetPasswordUser($data);                
                
                if($save)
                {
					//var_dump('hdhsab'); die;
                    $data1['reset_link'] = base_url() . "user/resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $this->userLoginModel->getCustomerInfoByEmail($email);
					
					

                    if(!empty($userInfo)){
                        $data1["name"] = $userInfo[0]->first_name;
                        $data1["email"] = $userInfo[0]->email;
                        $data1["message"] = "Reset Your Password";
                    }
                        $mail = $this->phpmailer_library->load();
                        //Server settings
                        $mail->SMTPDebug =0;                                 // Enable verbose debug output
                        $mail->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );
                        $mail->isSMTP();    
                                                          // Set mailer to use SMTP
						$mail->Host = 'mail.appedology.com';  // Specify main and backup SMTP servers
                        $mail->isSMTP();
                        $mail->Port = 587;
                        $mail->SMTPAuth = true;
                        $mail->SMTPSecure = 'tls';                            // Enable SMTP authentication
						$mail->Username = 'auth@appedology.com';                 // SMTP username
						$mail->Password = 'AUTHauth123!@#$';                                  // TCP port to connect to
                        //Recipients
                        $mail->setFrom('info@supermed.com', 'Supermed');
                        $mail->addAddress($userInfo[0]->email, $userInfo[0]->first_name);
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = 'User Reset Password';
                        $mail->Body = $this->load->view('user/resetPassword.php',$data1,TRUE);   

                        $sendStatus =$mail->send();

                    if($sendStatus){
                        $this->session->set_flashdata('send', 'Reset password link sent successfully, please check mails.');
						
                    } else {
                        
						$this->session->set_flashdata('notsend', 'Email has been failed, try again.');
                    }
                }
                else
                {
                    $this->session->set_flashdata('unable', 'It seems an error while sending your details, try again.');
                }
            }
            else
            {
                $this->session->set_flashdata('invalid', 'This email is not registered with us.');
                
            }
            redirect('user/forgotPassword');
        }
    }
	
	
	// This function used to reset the password 
    function resetPasswordConfirmUser($activation_id, $email)
    {
		
		//var_dump("dsa"); die;
		
		
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);
        
        // Check activation id in database
        $is_correct = $this->userLoginModel->checkActivationDetails($email, $activation_id);
        
		
        $data['email'] = $email;
        $data['activation_code'] = $activation_id;
        
        if ($is_correct == 1)
        {
            
            $this->load->view('header',$data);
            $this->load->view('user/newPassword', $data);
            $this->load->view('footer',$data);
        }
        else
        {
			$this->session->set_flashdata('error', 'Password changed failed');
            redirect('login');
        }
    }
	
	
	// This function used to create new password
    function createPasswordUser()
    {
        $status = '';
        $message = '';
        $email = $this->input->post("email");
        $activation_id = $this->input->post("activation_code");
        
        $this->form_validation->set_rules('password','Password','required|trim|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|min_length[6]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        }
        else
        {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            
            // Check activation id in database
            $is_correct = $this->userLoginModel->checkActivationDetails($email, $activation_id);
            
			
			
            if($is_correct == 1)
            {                
                $this->userLoginModel->createPasswordUser($email, $password);
                
                $status = 'success';
                $message = 'Password changed successfully';
                $this->session->set_flashdata($status, $message);
                redirect('login');
            }
            else
            {
                $status = 'error';
                $message = 'Password changed failed';
                $this->session->set_flashdata($status, $message);
                $this->resetPasswordConfirmUser($activation_id, urlencode($email));
            }
            
            
        }
    }
	
	// This function used to create new password
    function loginPage()
    {
		if(!isset($isLoggedInUser) || $isLoggedInUser != TRUE)
        {
			
			$this->load->view('user/login');
			
        }
        else
        {
            redirect('userDashboard');
			
        }
		
	}
	
	
	function guestPage(){
		
		$sessionArray = array(

							'guest'=>TRUE
							
					);
	    $this->session->set_userdata($sessionArray);
		
		redirect('CheckOut');
				
	}
	
	

}
