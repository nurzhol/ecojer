<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    
   
	
	/**
     * This function used to check the login credentials of the user
     * @param string $email : This is email of the user
     * @param string $password : This is encrypted password of the user
     */
    function loginMe($email, $password)
    {
        $this->db->select('users.*, roles.name,roles.display_name');
        $this->db->from('users');
        $this->db->join('roles','roles.id = users.role_id');
        $this->db->where('users.email', $email);
		$this->db->where('users.role_id',1);
        $query = $this->db->get();
		
        $user = $query->result();
		
		if(!empty($user)){
            if(verifyHashedPassword($password, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            $this->db->select('users.*, roles.name,roles.display_name');
            $this->db->from('users');
            $this->db->join('roles','roles.id = users.role_id');
            $this->db->where('users.email', $email);
            $this->db->where('users.role_id',2);
            $query2 = $this->db->get();
            
            $user2 = $query2->result();
            
            if(!empty($user2)){
                if(verifyHashedPassword($password, $user2[0]->password)){
                    return $user2;
                } else {
                    return array();
                }
            }else {
                return array();
            }
        }
    }

    /**
     * This function used to check email exists or not
     * @param {string} $email : This is users email id
     * @return {boolean} $result : TRUE/FALSE
     */
    function checkEmailExist($email)
    {
        $this->db->select('id');
        $this->db->where('email', $email);
		$ids = array('1', '2');
		$this->db->where_in('role_id', $ids);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }


    /**
     * This function used to insert reset password data
     * @param {array} $data : This is reset password data
     * @return {boolean} $result : TRUE/FALSE
     */
    function resetPasswordUser($data)
    {
        $result = $this->db->insert('reset_password', $data);

        if($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This function is used to get customer information by email-id for forget password email
     * @param string $email : Email id of customer
     * @return object $result : Information of customer
     */
    function getCustomerInfoByEmail($email)
    {
        $this->db->select('id, email, first_name');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * This function used to check correct activation deatails for forget password.
     * @param string $email : Email id of user
     * @param string $activation_id : This is activation string
     */
	 
	
	
    function checkActivationDetails($email, $activation_id)
    {
		$this->db->select('id');
        $this->db->from('reset_password');
        $this->db->where('email', $email);
        $this->db->where('activation_id', $activation_id);
		$query = $this->db->get();
		return $query->num_rows();
    }

    // This function used to create new password by reset link
    function createPasswordUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->update('users', array('password'=>getHashedPassword($password)));
        $this->db->delete('reset_password', array('email'=>$email));
    }
}

?>