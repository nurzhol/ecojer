<?php
class DashboardModel extends CI_Model{

    function getRemainderEmails()
    { 
        $query = $this->db->query("SELECT `organization`.`id`,`organization`.`OEmail`,`organization`.`OName`,`organization`.`MemEdt` FROM `organization` WHERE `organization`.`MemEdt` BETWEEN NOW() AND ( CURDATE() + INTERVAL 5 DAY ) AND `organization`.`remainderEmail` = 'notsent';");
        return $query->result();
        
    }
    
    function getExpiryEmails()
    {
        $this->db->select('organization.id,organization.OEmail,organization.OName,organization.MemEdt');
        $this->db->from('organization');
        $this->db->where('MemEdt ', date('Y-m-d'));
        $this->db->where('remainderEmail ', 'notsent');
        $query = $this->db->get();
		return $query->result();
    }
    
    function setRemainderEmailStatus($id){
        $this->db->set('remainderEmail','sent');
        $this->db->where('id', $id);
        $result=$this->db->update('organization');
        if($result){
			return 'true';
		} else {
			return 'false';
		}
    }
    
    function setExpiryEmailStatus($id){
        $this->db->set('expiryEmail','sent');
        $this->db->where('id', $id);
        $result=$this->db->update('organization');
        if($result){
			return 'true';
		} else {
			return 'false';
		}
    }
//     function get_all_countries(){
//         $this->db->select('Country.*');
//         $this->db->from('Country');
//         $query = $this->db->get();
//         return $query->result();
//     }

//      function get_all_cities($params){
//         $this->db->select('City.*');
//         $this->db->from('City');
//         $this->db->where('City.CountryCode ',$params["code"]);
//         $query = $this->db->get();
//         return $query->result();
//     }



// 	function get_min_max(){
// 		 $query = $this->db->query('SELECT min(price) as prodMin , max(price) as prodMax FROM products');
//          return $query->result();
// 	}
	
	
// 	function get_all_product(){
// 		$this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->from('products');
//         $query = $this->db->get();
// 		return $query->result();
// 	}
// 	function get_all_subcategories(){
// 		$this->db->select('subcategories.*,categories.name as cat_name');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->from('subcategories');
//         $query = $this->db->get();
// 		return $query->result();
// 	}
// 	function get_all_categories(){
// 		$this->db->select('categories.*');
//         $this->db->from('categories');
//         $query = $this->db->get();
// 		return $query->result();
// 	}

// 	function get_all_banners(){
// 		$this->db->select('banners.*');
//         $this->db->from('banners');
//         $query = $this->db->get();
// 		return $query->result();
// 	}
// 	function get_all_payments_types(){
// 		$this->db->select('payments.*');
//         $this->db->from('payments');
//         $query = $this->db->get();
// 		return $query->result();
// 	}

// 	function get_all_labs(){
// 		$this->db->select('labs.*');
//         $this->db->from('labs');
//         $query = $this->db->get();
// 		return $query->result();
// 	}

// 	function get_all_emergency_contact(){
// 		$this->db->select('emergency_contact.*');
//         $this->db->from('emergency_contact');
//         $query = $this->db->get();
// 		return $query->result();
// 	}
// 	function get_all_lab_test($params){
// 		$this->db->select('tests.*,labs.name as lab_name,labs.address,labs.contact,labs.sec_contact');
//         $this->db->join('labs','labs.id=tests.lab_id');
//         $this->db->from('tests');
//         $this->db->where('tests.lab_id',$params["lab_id"]);
//         $query = $this->db->get();
// 		return $query->result();
// 	}
    
// 	function get_all_doctors(){
// 		$this->db->select('doctors.*,departments.name as department_name');
//         $this->db->join('departments','departments.id=doctors.department_id');
//         $this->db->from('doctors');
//         $query = $this->db->get();
// 		return $query->result();
// 	}

//     function getDoctorDetails($params){
//         $this->db->select('doctors.*,departments.name as department_name');
//         $this->db->join('departments','departments.id=doctors.department_id');
//         $this->db->from('doctors');
//          $this->db->where('doctors.id',$params["id"]);
//         $query = $this->db->get();
//         return $query->result();
//     }
	
	
	
// 	// Contact Page Info
//     function getCMSDetailsByPageName($page_name)
//     {
//         $this->db
//             ->select('*')
//             ->from('cms')
//             ->where('page_name', $page_name);
//         $query = $this->db->get();
//         $content = $query->result();
        
// 		foreach($content as $key => $val){
// 			if($key == "page_content"){
				
// 				 $val->page_content = htmlspecialchars_decode($val->page_content);	
// 			}
// 		}
		
// 		//var_dump($query); die;
// 		return $content;
		
//     }

//      function getProductBySubCat($id){
//         $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->where('subcategories.cat_id',$id);
//         $this->db->from('products');
//         $this->db->order_by("products.id", "asc");

//         $query = $this->db->get();
//         return $query->result();
//     }

//     function getProductBySubCatId($id){
//     	$this->db->limit(3);
// 		$this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->where('subcategories.cat_id',$id);
//         $this->db->from('products');
//         $this->db->order_by("products.id", "asc");

//         $query = $this->db->get();
// 		return $query->result();
// 	}
// 	function get_next_products($params){
//     	$this->db->limit(3);
// 		$this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->where('subcategories.cat_id',$params["subcategoryid"]);
//         $this->db->where('products.id >',$params["product_id"]);
//         $this->db->where('products.price >=',$params["minPrice"]);
//         $this->db->where('products.price <=',$params["maxPrice"]);
//         $this->db->from('products');
//         $this->db->order_by("products.id", "asc");
//         $query = $this->db->get();
// 		return $query->result();
// 	}

//     function get_next_products_by_price($params){
//         $this->db->limit(3);
//         $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->where('subcategories.cat_id',$params["subcategoryid"]);
//         $this->db->where('products.price >=',$params["minPrice"]);
//         $this->db->where('products.price <=',$params["maxPrice"]);
//         $this->db->from('products');
//         $this->db->order_by("products.id", "asc");
//         $query = $this->db->get();
//         return $query->result();
//     }
//     function get_product_by_id($id){
//         $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->from('products');
//         $this->db->where('products.id',$id);
//         $query = $this->db->get();
//         return $query->first_row();
//     }
    
// 	function get_related_products($id){
//         $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
//         $this->db->from('products');
//         $this->db->where('products.id',$id);
//         $query = $this->db->get();
//         $getProducts =  $query->result();
//         if($getProducts){
//             $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name,,subcategories.cat_id as cat_id');
//             $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//             $this->db->join('categories','categories.id=subcategories.cat_id');
//             $this->db->from('products');
//             $this->db->where('products.sub_cat_id',$getProducts[0]->sub_cat_id);
//             $query = $this->db->get();
//             $getSubcategories =  $query->result();
//             if($getSubcategories){
//                 $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name,subcategories.cat_id as cat_id');
//                 $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//                 $this->db->join('categories','categories.id=subcategories.cat_id');
//                 $this->db->from('products');
//                 $this->db->where('subcategories.cat_id',$getSubcategories[0]->cat_id);
//                 $query = $this->db->get();
//                   return $query->result();
//             }else{
//                  return array();
//             }
//         }else{
//             return array();
//         }
//     }
	
	
// 	// function getSearchResult($search){
//         // $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name');
//         // $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         // $this->db->join('categories','categories.id=subcategories.cat_id');
//         // $this->db->from('products');
//         // $this->db->like('products.name', $search, 'after');
//         // $query = $this->db->get();
//         // return $query->result();
//     // }
	
	
// 	function getSearchResult($search){
// 		$formulas = array();
// 		foreach(searchFormula($search) as $val){
// 			array_push($formulas,$val->formula);
// 		}
// 		$searchType = searchFormula($search);
//         $this->db->select('products.*,subcategories.name as sub_cat_name,categories.name as cat_name, products_type.`name` as ProductTypeName');
// 		$this->db->from('products');
//         $this->db->join('subcategories','subcategories.id=products.sub_cat_id');
//         $this->db->join('categories','categories.id=subcategories.cat_id');
// 		$this->db->join('alternate','products.`id` = alternate.`product_id`','left');
// 		$this->db->join('alternate_products','alternate.`id` = alternate_products.`alt_id`','left');
// 	    $this->db->join('generics','alternate_products.`gn_id` = generics.`id`','left');
// 		$this->db->join('products_type','products.product_type = products_type.id');
// 		if($searchType && $searchType[0]->product_type == "2"){
// 			$this->db->group_by('alternate.`product_id`');
// 			$this->db->where_in('generics.`name`',$formulas); 		
// 		}else{
// 			$this->db->like('products.name', $search, 'after');
// 			$this->db->or_like('generics.name', $search, 'after');
// 		}
//         $query = $this->db->get();
// 		//echo ($this->db->last_query()); die;       
// 	    return $query->result();
//     }
	
//     function getPatient($params)
//     {
//         $this->db->select('users.*');
//         $this->db->from('users');
//         $this->db->where('users.patient_id', $params["patient_id"]);
//         $query = $this->db->get();
        
//         $user = $query->first_row();
        
//         if(!empty($user)){
//             return $user;
//         } else {
//             return "Patient Not Found";
//         }
            
//     }

//     function getPatientLabs()
//     {
     
//         $results = $this->db->get('labs')->result_array();
        
//         return $results;
            
//     }

//     function getPatientTest($params)
//     {
//         $this->db->select('tests.*');
//         $this->db->from('tests');
//         $this->db->where('tests.lab_id', $params["lab_id"]);
//         $query = $this->db->get();
        
//         $test = $query->result_array();
        
//         if(!empty($test)){
//             return $test;
//         } else {
//             return "Test not Found";
//         }
            
//     }

//     function getPatientTestPrice($params)
//     {
//         $this->db->select('tests.*');
//         $this->db->from('tests');
//         $this->db->where('tests.id', $params["test_id"]);
//         $query = $this->db->get();
        
//         $price = $query->first_row()->price;
        
//         if(!empty($price)){
//             return $price;
//         } else {
//             return "Test Price not Found";
//         }
            
//     }
//       function insertInquiry($params)
//     {

//         $inserted = $this->db->insert('inquiry',$params);

//         if($inserted){
//           return true;
//         }else{
//             return false;
//         }
       
            
//     }
//     function subcribe_add($params){

//       $result = $this->db->get_where("subscription",array("email"=>strtolower($params["email"])))->result_array();
//       if(count($result) > 0){
//             return 'already_exist';
//       }else{
//          $params["email"] = strtolower($params["email"]);
//          $inserted = $this->db->insert('subscription',$params);

//         if($inserted){
//           return 'true';
//         }else{
//             return 'false';
//         }

//       }
      
//     }
//     function getSpecialization()
//     {
//         $this->db->select('specialization.*');
//         $this->db->from('specialization');
//         $this->db->join('doctors','doctors.spec_id=specialization.id');
//         $this->db->group_by('specialization.id');
//         $query = $this->db->get();
//         return $query->result();
//     }
//     function allSpecializedDoctors($params)
//     {
       
//         $this->db->select('doctors.*,departments.name as department_name');
//         $this->db->from("doctors");
//         $this->db->join('departments','departments.id=doctors.department_id');
//         $this->db->join('specialization','doctors.spec_id=specialization.id','left');
//         $this->db->where('specialization.id',$params['spec_id']);
//         $query = $this->db->get();
//         return $query->result(); 
//     }
	
	
    
}