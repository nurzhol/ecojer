<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class VideogalleryModel extends CI_Model
{
    

   
	 function checkTitleExist($title)
    {
        $this->db->select('id');
        $this->db->where('title', $title);
        $query = $this->db->get('videogallery');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    
   

    function checkUpdateTitleExist($title,$id)
    {
        $this->db->select('id');
        $this->db->where('id !=', $id);
        $this->db->where('title', $title);
        $query = $this->db->get('videogallery');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

   
	
	function viewRecords()
    {
        $this->db->select('videogallery.*');
        $this->db->from('videogallery');
        $query = $this->db->get();
		return $query->result();
    }
	
	
	function save_videogallery(){

		$exists = $this->checkTitleExist($this->input->post('title'));
		if($exists){
			return "title_exist";
		}else{
			$data = array(
				'title'=>$this->input->post('title'),
				'description'=>$this->input->post('description'),
				'status'=>$this->input->post('status'),
				'image'=>$this->input->post('image_name'),
				'language'=>$this->input->post('language'),
				'video'=>$this->input->post('video_name')
			);
			if($this->db->insert('videogallery',$data)){
				return 'true';
			} else {
				return 'false';
			}
		}	
	}
	
	
	
	
	function update_videogallery(){

		$exists = $this->checkUpdateTitleExist($this->input->post('title'),$this->input->post('id'));
		if($exists){
			return "title_exist";
		}else{
		
			$id=$this->input->post('id');
			$title=$this->input->post('title');
			$description= $this->input->post('description');
			$status = $this->input->post('status');
			$language=$this->input->post('language');
			$image_name=$this->input->post('image_name');
			$video_name=$this->input->post('video_name');

	        $this->db->set('title', $title);
	        $this->db->set('description', $description);
			$this->db->set('status', $status);
			$this->db->set('language', $language);

			if(!empty($image_name)){
				$this->db->set('image', $image_name);
			}
			
			if(!empty($video_name)){
				$this->db->set('video', $video_name);
			}
			

	        $this->db->where('id', $id);
	        $result=$this->db->update('videogallery');
	        if($result){
				return 'true';
			} else {
				return 'false';
			}
	    }
    }
	
	function delete_videogallery(){
        $id=$this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('videogallery');
        return $result;
    }
   
}

?>