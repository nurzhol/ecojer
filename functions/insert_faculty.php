<?php
include ($_SERVER["DOCUMENT_ROOT"]."/pim/inc/connection.php");


try 
{
    if(isset($_POST['enter']))
    {
        $f_code = $_POST['fcode'];
        $s_order = $_POST['sorder'];
        $f_gender = $_POST['gender'];
        $f_name = $_POST['name'];
        $f_lname = $_POST['fname'];

        $tarea = $_POST['tarea'];
        $f_edu = $_POST['edu'];
        $f_e_city = $_POST['ecity'];
        $f_e_year = $_POST['eyear'];
        $f_uni = $_POST['uni'];

        $sta = $_POST['stat'];
        $desig = $_POST['desig']
        $act = $_POST['act'];
        $doj = $_POST['doj'];
        $dol = $_POST['dol'];
        $org = $_POST['org'];

        $city = $_POST['city'];
        $area = $_POST['area'];
        $pos = $_POST['pos'];
        $addr = $_POST['addr'];
        $email = $_POST['email'];
        $phn = $_POST['phn'];
        $fax = $_POST['fax'];
        $areaId = $_POST['act'];//
        $cityId = $_POST['desig'];//

        $rcity = $_POST['rcity'];
        $rarea = $_POST['rarea'];
        $rpos = $_POST['rpos'];
        $rarea = $_POST['rarea'];
        $raddr = $_POST['addr'];
        $remail = $_POST['email'];
        $rphn = $_POST['phn'];
        $rfax = $_POST['fax'];
        $rfmob = $_POST['mob'];


        $conn -> beginTransaction();
        $query = "INSERT INTO faculty (f_code, f_sorder, f_name, f_lname, f_gender) VALUES (:fcode,:sorder,:fname,:flname,:fgender)";
        $stmt = $conn->prepare($query);
        $stmt->bindparam(':fcode', $f_code);
        $stmt->bindparam(':sorder', $s_order);
        $stmt->bindparam(':fname', $f_name);
        $stmt->bindparam(':flname', $f_lname);
        $stmt->bindparam(':fgender', $f_gender);
        $stmt->execute();
        
        $query = "INSERT INTO faculty_edu_detail(f_code, f_edu, f_edu_uni, f_edu_year, f_edu_city, f_edu_train, f_edu_train_id) VALUES (:fcode,:fedu,:funi,:fyear,:fecity,:ftarea,:ftid)";
        $stmt = $conn->prepare($query);
        $stmt->bindparam(':fcode', $f_code);
        $stmt->bindparam(':fedu', $f_edu);
        $stmt->bindparam(':funi', $f_uni);
        $stmt->bindparam(':fyear', $f_e_year);
        $stmt->bindparam(':fecity', $f_e_city);
        $stmt->bindparam(':ftarea', $tarea);
        $stmt->bindparam(':ftid', $f_gender);//course area id
        $stmt->execute();

        $query = "INSERT INTO faculty_emp_detail(f_code, f_desig, f_status, f_doj, f_dol, f_org) VALUES (:fcode,:fdsg,:fstt,:fdoj,:fdol,:forg)";
        $stmt = $conn->prepare($query);
        $stmt->bindparam(':fcode', $f_code);
        $stmt->bindparam(':fdsg', $desig);
        $stmt->bindparam(':fstt', $sta);
        $stmt->bindparam(':fact', $act);
        $stmt->bindparam(':fdoj', $doj);
        $stmt->bindparam(':fdol', $dol);
        $stmt->bindparam(':forg', $org);
        $stmt->execute();

        $query = "INSERT INTO faculty_org_detail(f_code, f_o_address, f_o_area, f_o_postal, f_o_area_id, f_o_location_id, f_o_location_name, f_o_phn, f_o_fax, f_o_email) VALUES (:fcode,:foAdd,:foArea,:foPos,foaId,:foLoc,:foLname,:foPhn, :foFax, :foEmail)";
        $stmt = $conn->prepare($query);
        $stmt->bindparam(':fcode', $f_code);
        $stmt->bindparam(':foAdd', $addr);
        $stmt->bindparam(':foArea', $area);
        $stmt->bindparam(':foPos', $pos);
        $stmt->bindparam(':foaId', $dol);//
        $stmt->bindparam(':foLoc', $org);//
        $stmt->bindparam(':foLname', $city);
        $stmt->bindparam(':foPhn', $phn);
        $stmt->bindparam(':foFax', $fax);
        $stmt->bindparam(':foEmail', $email);
        $stmt->execute();
    
        $query = "INSERT INTO faculty_res_detail(f_code, f_r_address, f_r_area, f_r_postal, f_r_city, f_r_phn, f_r_fax, f_r_mob, f_r_email) VALUES (:fcode,:frAdd,:frArea,:frPos,:frLname,:frPhn, :frFax, :frMob, :frEmail)";
        $stmt = $conn->prepare($query);
        $stmt->bindparam(':fcode', $f_code);
        $stmt->bindparam(':foAdd', $addr);
        $stmt->bindparam(':foArea', $area);
        $stmt->bindparam(':foPos', $pos);
        $stmt->bindparam(':foLname', $city);
        $stmt->bindparam(':foPhn', $phn);
        $stmt->bindparam(':foFax', $fax);
        $stmt->bindparam(':foMob', $fax);
        $stmt->bindparam(':foEmail', $email);
        $stmt->execute();
    
        $conn->commit();
    }
 
}
 
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    $pdo->rollBack();
}

if(!empty) 
 