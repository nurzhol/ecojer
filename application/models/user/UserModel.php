<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
    
      function getRemainderEmails()
    { 
        $this->db->query("SELECT `organization`.`OEmail`,`organization`.`OName` FROM `organization` WHERE `organization`.`MemEdt` BETWEEN NOW() AND ( CURDATE() + INTERVAL 2 DAY ) AND `organization`.`remainderEmail` = 'notsent';");
        $query = $this->db->get();
		return $query->result();
        
    }
    function getExpiryEmails()
    {
        $this->db->select('organization.OEmail,organization.OName');
        $this->db->from('organization');
        $this->db->where('MemEdt ', date('Y-m-d'));
        $this->db->where('remainderEmail ', 'notsent');
        $query = $this->db->get();
		return $query->result();
    }
    function setEmailStatus($id){
        $this->db->set('remainderEmail','sent');
        $this->db->where('id', $id);
        $result=$this->db->update('organization');
        if($result){
			return 'true';
		} else {
			return 'false';
		}
    }
   
	 function checkEmailExist($email)
    {
        $this->db->select('id');
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    
     function location()
    {
        $this->db->select('location.*');
        $query = $this->db->get('location');

        if ($query->num_rows() > 0){
            return $query->result();
        } else {
            return array();
        }
    }

    function checkUpdateEmailExist($email,$id)
    {
        $this->db->select('id');
        $this->db->where('id !=', $id);
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

   
	
	function viewRecords()
    {
        $this->db->select('users.*,roles.name as role_name , roles.display_name as display_name, location.name as location_name');
        $this->db->from('users');
        $this->db->join('roles','roles.id = users.role_id');
		$this->db->join('location','location.id = users.location_id');
        $this->db->where('users.role_id',2);
        $this->db->or_where('users.role_id',3);
        $query = $this->db->get();
		return $query->result();
    }
	
	
	function save_user(){

		$exists = $this->checkEmailExist($this->input->post('email'));
		if($exists){
			return "email_exist";
		}else{
			$data = array(
				'first_name'=>strtolower($this->input->post('first_name')),
				'last_name'=>strtolower($this->input->post('last_name')),
				'email'=>strtolower($this->input->post('email')),
				'password'=>getHashedPassword($this->input->post('password')),
				'role_id'=>$this->input->post('role_id'),
				'location_id'=>$this->input->post('location_id'),
				'can_add'=>$this->input->post('can_add'),
				'can_edit'=>$this->input->post('can_edit'),
				'can_delete'=>$this->input->post('can_delete'),
				'user_status'=>$this->input->post('user_status'),
				'image'=>$this->input->post('image_name')
			);
			if($this->db->insert('users',$data)){
				return 'true';
			} else {
				return 'false';
			}
		}	
	}
	
	
	function update_user(){

		$exists = $this->checkUpdateEmailExist($this->input->post('email_edit'),$this->input->post('id_edit'));
		if($exists){
			return "email_exist";
		}else{
		
			$id=$this->input->post('id_edit');
			$first_name=strtolower($this->input->post('first_name_edit'));
	        $last_name=strtolower($this->input->post('last_name_edit'));
			$email=strtolower($this->input->post('email_edit'));
			$password= $this->input->post('password_edit');
			$role_id = $this->input->post('role_id_edit');
	        $location_id=$this->input->post('location_id_edit');
			$can_add=$this->input->post('can_add_edit');
			$can_edit=$this->input->post('can_edit_edit');
			$can_delete=$this->input->post('can_delete_edit');
			$user_status=$this->input->post('user_status_edit');
			$image_name=$this->input->post('image_name_edit');
	 		if(!empty($password)){
				$this->db->set('password', getHashedPassword($password));
			}
	        $this->db->set('email', $email);
	        $this->db->set('first_name', $first_name);
			$this->db->set('last_name', $last_name);

			$this->db->set('role_id', $role_id);
			$this->db->set('location_id', $location_id);
			$this->db->set('can_add', $can_add);
			$this->db->set('can_edit', $can_edit);
			$this->db->set('can_delete', $can_delete);

			if(!empty($image_name)){
				$this->db->set('image', $image_name);
			}
			

	        $this->db->where('id', $id);
	        $result=$this->db->update('users');
	        if($result){
				return 'true';
			} else {
				return 'false';
			}
	    }
    }
	
	function delete_user(){
        $id=$this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('users');
        return $result;
    }
   
}

?>