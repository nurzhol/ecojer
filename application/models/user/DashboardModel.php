<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
    
   
	
	/**
     * This function used to check the login credentials of the user
     * @param string $email : This is email of the user
     * @param string $password : This is encrypted password of the user
     */
    function RegisterMe($params)
    {
        $this->db->select('users.*, roles.id As role_id,roles.display_name');
        $this->db->from('users');
        $this->db->join('roles','roles.id = users.role_id');
        $this->db->where('users.email', $params["email"]);
        $query = $this->db->get();
        $user = $query->result();
		
		if(!empty($user)){
            return "User already exist";
        } else {
            $params['first_name'] = strtolower($params['first_name']);
            $params['last_name'] = strtolower($params['last_name']);
            $params['email'] = strtolower($params['email']);
            
            $params['password'] = getHashedPassword($params['password']);
            unset($params['reenterpassword']);
            $query = $this->db->insert("users",$params);
            $this->db->select('users.*, roles.*');
            $this->db->from('users');
            $this->db->join('roles','roles.id = users.role_id');
            $this->db->where('users.email', $params["email"]);
            $query = $this->db->get();
            
            $user = $query->result();
            
            if(!empty($user)){
                if(verifyHashedPassword($password, $user[0]->password)){
                    return $user;
                } else {
                    return array();
                }
            } else {
                return array();
            }
        }
    }
    function getUser_details($id)
    {
            $this->db->select('users.*, roles.*');
            $this->db->from('users');
            $this->db->join('roles','roles.id = users.role_id');
            $this->db->where('users.id',$id);
            $query = $this->db->get();
            
            $user = $query->result();
            
            if(!empty($user)){
                 return $user;
            } else {
                return array();
            }
    }
    function update_session($id)
    {
       
    }
    function updateProfile($id,$params)
    {
            $params['first_name'] = strtolower($params['first_name']);
            $params['last_name'] = strtolower($params['last_name']);
            $params['country'] = strtoupper($params['country']);
            $params['city'] = ucfirst($params['city']);
            $params['state'] = strtolower($params['state']);
            if(isset($params['image']) && $params['image'] != ""){
              $params['image'] = $params['image'];
            }
            $params['address'] = strtolower($params['address']);
            $status = $this->db->where('users.id',$id);
            $status =  $this->db->update('users',$params);
            
            if($status){
                $this->db->select('users.*, roles.id As role_id,roles.display_name');
                $this->db->from('users');
                $this->db->join('roles','roles.id = users.role_id');
                $this->db->where('users.id',$id);
                $query = $this->db->get();
                
                $user = $query->result();
                
                if(!empty($user)){
                     return $user;
                } else {
                    return array();
                }
            } else {
                 return array();
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
        $this->db->select('id, email, name');
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
		//echo $this->db->get_compiled_select(); die;
		$query = $this->db->get();
		return $query->num_rows();
    }

    // This function used to create new password by reset link
    function createPasswordUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $this->db->update('users', array('password'=>getHashedPassword($password)));
        $this->db->delete('reset_password', array('email'=>$email));
    }
      function get_patient_appointment($id)
    {
        $this->db->select('appointments.*,users.id as user_id,labs.id as lab_id,labs.name as lab_name,tests.id as test_id,tests.name as test_name,status.id as status_id,status.name as status_name');
        $this->db->from('appointments');
        $this->db->join('labs','labs.id=appointments.lab_id');
        $this->db->join('tests','tests.id=appointments.test_id');
        $this->db->join('status','status.id=appointments.status_id');
        $this->db->join('users','users.patient_id=appointments.patient_id');
        $this->db->group_by('appointments.appointment_id');
        $this->db->where('users.id', $id);
        $query = $this->db->get();
        
        $appointments = $query->result();
        
        if(!empty($appointments)){
            return $appointments;
        } else {
            return array();
        }
            
    }

     function getAppointement($params)
    {
        $this->db->select('appointments.*,users.id as user_id,labs.id as lab_id,labs.name as lab_name,tests.id as test_id,tests.name as test_name,status.id as status_id,status.name as status_name,users.first_name as first_name,users.last_name as last_name');
        $this->db->from('appointments');
        $this->db->join('labs','labs.id=appointments.lab_id');
        $this->db->join('tests','tests.id=appointments.test_id');
        $this->db->join('status','status.id=appointments.status_id');
        $this->db->join('users','users.patient_id=appointments.patient_id');
        $this->db->where('appointments.id', $params["id"]);
        $query = $this->db->get();
        
        $appointments = $query->result();
        
        if(!empty($appointments)){
            return $appointments;
        } else {
            return array();
        }
            
    }

    function get_orders($id)
    {
        $this->db->select('orders.*, users.first_name as first_name,  users.contact as contact,users.last_name as last_name, payments.payment_type as payment_name , status.name as StatusText');
        $this->db->from('orders');
        $this->db->join('payments','payments.id=orders.payment_id');
        $this->db->join('users','users.id=orders.user_id');
        $this->db->join('status','status.id=orders.status_id');
        $this->db->where('users.id', $id);
        $query = $this->db->get();
        return $query->result();
    }

     function get_all_countries(){
        $this->db->select('Country.*');
        $this->db->from('Country');
        $query = $this->db->get();
        return $query->result();
    }

     function get_all_cities($params){
        $this->db->select('City.*');
        $this->db->from('City');
        $this->db->where('City.CountryCode ',$params["code"]);
        $query = $this->db->get();
        return $query->result();
    }

     function orderHistories($params){
        $this->db->select('orderdetails.*, products.price as product_price,  products.sku as product_sku, products.image as product_image ,orders.order_total_price as order_total_price ');
        $this->db->from('orders');
        $this->db->join('orderdetails','orderdetails.order_id=orders.id');
        $this->db->join('products','products.id=orderdetails.product_id');
        $this->db->where('orders.id', $params["id"]);
        $query = $this->db->get();
        return $query->result();
    }
    function countOrders($id)
    {
        $this->db->select('orders.*, users.first_name as first_name,  users.email as email,users.last_name as last_name, payments.payment_type as payment_name , status.name as StatusText');
        $this->db->from('orders');
        $this->db->join('payments','payments.id=orders.payment_id');
        $this->db->join('users','users.id=orders.user_id');
        $this->db->join('status','status.id=orders.status_id');
        $this->db->where('users.id', $id);
        $query = $this->db->get();
        return count($query->result());
    }
     function countAppointments($id)
    {
        $this->db->select('appointments.*,users.id as user_id,labs.id as lab_id,labs.name as lab_name,tests.id as test_id,tests.name as test_name,status.id as status_id,status.name as status_name');
        $this->db->from('appointments');
        $this->db->join('labs','labs.id=appointments.lab_id');
        $this->db->join('tests','tests.id=appointments.test_id');
        $this->db->join('status','status.id=appointments.status_id');
        $this->db->join('users','users.patient_id=appointments.patient_id');
        $this->db->where('users.id', $id);
        $query = $this->db->get();
        
       return count($query->result());
            
    }

      function get_appointment_details($params)
    {
        $this->db->select('appointments.*,users.id as user_id,labs.id as lab_id,labs.name as lab_name,tests.id as test_id,tests.name as test_name,status.id as status_id,status.name as status_name');
        $this->db->from('appointments');
        $this->db->join('labs','labs.id=appointments.lab_id');
        $this->db->join('tests','tests.id=appointments.test_id');
        $this->db->join('status','status.id=appointments.status_id');
        $this->db->join('users','users.patient_id=appointments.patient_id');
        $this->db->where('appointments.appointment_id', $params["id"]);
        $query = $this->db->get();
        
        $appointments = $query->result();
        
        if(!empty($appointments)){
            return $appointments;
        } else {
            return array();
        }
            
    }
}

?>