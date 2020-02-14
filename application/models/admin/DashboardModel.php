<?php
class DashboardModel extends CI_Model{

	public function yearlyWiseParticipant($year,$psex){

	$result = $this->db->query("SELECT  YEAR(Date) AS selectYear , count(PTrackNo) AS totalParticipants FROM  participant WHERE YEAR(Date) = '$year'  AND  PSex = '$psex' ");
		if($result->num_rows() > 0){
		   return $result->result_array();
		}
		else{
		return 0;
		}
	}
	public function courseParticipant(){

	 $result = $this->db->query("SELECT course.`CName`,program.`UCCode` From program INNER JOIN course on program.`CCode` =course.`CCode` WHERE YEAR(program.`DtSt`) = YEAR(CURRENT_DATE()) group by course.`CName` ");
	  return $result->result_array();
	}

	public function courseWiseParticipant($UCCode,$psex){
    $query = $this->db
                ->select('participant.`UCCode`,count(participant.`PTrackNo`) AS totalParticipants')
                ->from('participant')
                ->where('participant.`PSex`',$psex)
                ->where('participant.`UCCode`',$UCCode);
    $result = $query->get();
    return $result->result_array();
	
		
	}

	public function genderParticipant(){

	 $result = $this->db->query("SELECT  * From yes_no where DCode = 'F' OR  DCode = 'M'");
	 return $result->result_array();
	}

	public function genderWiseParticipant($month,$psex){

	$result = $this->db->query("SELECT  MONTH(Date) AS selectMONTH , count(PTrackNo) AS totalParticipants FROM  participant WHERE MONTH(Date) = '$month'  AND YEAR(Date) = YEAR(CURRENT_DATE()) AND PSex = '$psex' ");
	if($result->num_rows() > 0){
	   return $result->result_array();
	}
	else{
		return 0;
		}
	}


    public function ageParticipant(){

	 $result = $this->db->query("SELECT  * From age");
	 return $result->result_array();
	}

	public function ageWiseParticipant($month,$age){

	$result = $this->db->query("SELECT  MONTH(Date) AS selectMONTH , count(PTrackNo) AS totalParticipants FROM  participant WHERE MONTH(Date) = '$month'  AND YEAR(Date) = YEAR(CURRENT_DATE()) AND Page = '$age' ");
	if($result->num_rows() > 0){
	   return $result->result_array();
	}
	else{
		return 0;
		}
	}
	
    
}