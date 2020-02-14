<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('DashboardModel');
		$this->load->database();
		$this->load->helper('url');
		$this->lang->load('information','english');
	}

	public function news()
	{
                 
			$data['news'] = $this->db->select('news.*')->from('news')->where('status',1)->order_by('id','desc')->get()->result();

					$this->load->view('includes/header');
			$this->load->view('news', $data);
			$this->load->view('includes/footer');	


	}	
	public function index()
	{
		
		$isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {	
	        $siteLange = $this->session->userdata('site_lang');
			if(!isset($siteLange) || $siteLange == ''){
				$this->session->set_userdata('site_lang', 'english');
		    }
			
			$data['news'] = $this->db->select('news.*')->from('news')->where('status',1)->order_by('id','desc')->get()->result();
			$data['projects'] = $this->db->select('projects.*')->from('projects')->where('status',1)->order_by('id','desc')->get()->result();
			$data['photogallery'] = $this->db->select('photogallery.*')->from('photogallery')->where('status',1)->order_by('id','desc')->get()->result();
			$data['videogallery'] = $this->db->select('videogallery.*')->from('videogallery')->where('status',1)->order_by('id','desc')->get()->result();
			$this->load->view('includes/header',$data);
			$this->load->view('index',$data);
			$this->load->view('includes/footer',$data);
			
        }
        else
        {
            redirect('admin');
			
        }
    }
	
	public function news_details($id){
			$isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {   
	        $news = $this->db->select('news.*')->from('news')->where('status',1)->where('id',$id)->order_by('id','desc')->get()->result();
	        if(count($news) > 0){
				$data['new'] = $news[0];
				$this->load->view('includes/header',$data);
				$this->load->view('newsDetails',$data);
				$this->load->view('includes/footer',$data);
			}else{
				 redirect('');
			}
			
			
        }
        else
        {
            redirect('admin');
			
        }
	}
	
	public function projects_details($id){
			$isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {   
	        $projects = $this->db->select('projects.*')->from('projects')->where('status',1)->where('id',$id)->order_by('id','desc')->get()->result();
	        if(count($projects) > 0){
				$data['project'] = $projects[0];
				$this->load->view('includes/header',$data);
				$this->load->view('projectsDetails',$data);
				$this->load->view('includes/footer',$data);
			}else{
				 redirect('');
			}
			
			
        }
        else
        {
            redirect('admin');
			
        }
	}
	
	public function abouts(){
		if($this->session->userdata('site_lang') == "russian"){
			$this->load->view('includes/header');
			$this->load->view('aboutus-rs');
			$this->load->view('includes/footer');

		}else if($this->session->userdata('site_lang') == "kazakh"){
			$this->load->view('includes/header');
			$this->load->view('aboutus-kz');
			$this->load->view('includes/footer');

		}else{
			$this->load->view('includes/header');
			$this->load->view('aboutus');
			$this->load->view('includes/footer');
		}
		
	}
	

	


   

	
	
	
	
	
	

	

}
