<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/DashboardModel','DashboardModel');
        $this->load->library("PHPMailer_Library");
        $this->load->helper(array('form', 'url'));
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
           	$this->load->view('admin/includes/header');
            $this->load->view('admin/includes/nav');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/includes/footer');
			
        }
	}
	
	
	public function sendEmail($email,$name,$subject,$message){
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
		$mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
        $mail->isSMTP();
        $mail->Port = 25;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';                            // Enable SMTP authentication
		$mail->Username = 'protegeglobal77@gmail.com';                 // SMTP username
		$mail->Password = 'Admin!@#';                                  // TCP port to connect to
        //Recipients
        $mail->setFrom('info@pim.com', 'PIM');
        $mail->addAddress($email,$name);
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message; //"Dear Concern,<br />This is first remainder of your membership has been expire on this date on pakistan institute management of pakistan for more details please visit our website PIM.<br />Regards,<br />PIM";   

        $sendStatus = $mail->send();
        return $sendStatus;
	}

   


	
}
