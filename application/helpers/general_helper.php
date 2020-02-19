<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This function used to generate the hashed password
 * @param {string} $plainPassword : This is plain text password
 */
if(!function_exists('getHashedPassword'))
{
    function getHashedPassword($plainPassword)
    {
        return password_hash($plainPassword, PASSWORD_DEFAULT);
    }
}

/**
 * This function used to generate the hashed password
 * @param {string} $plainPassword : This is plain text password
 * @param {string} $hashedPassword : This is hashed password
 */
if(!function_exists('verifyHashedPassword'))
{
    function verifyHashedPassword($plainPassword, $hashedPassword)
    {
        return password_verify($plainPassword, $hashedPassword) ? true : false;
    }
}



if(!function_exists('emailConfig'))
{
    function emailConfig()
    {
        $CI->load->library('email');
        $config['protocol'] = PROTOCOL;
        $config['smtp_host'] = SMTP_HOST;
        $config['smtp_port'] = SMTP_PORT;
        $config['mailpath'] = MAIL_PATH;
        $config['charset'] = 'UTF-8';
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
    }
}

if(!function_exists('resetPasswordEmail'))
{
    function resetPasswordEmail($detail)
    {
        $data["data"] = $detail;
        $CI = setProtocol();        
        
        $CI->email->from(EMAIL_FROM, FROM_NAME);
        $CI->email->subject("Reset Password");
        $CI->email->message($CI->load->view('email/resetPassword', $data, TRUE));
        $CI->email->to($detail["email"]);
        
        
        if(!$CI->email->send()){
            $status = FALSE;
        } else {
            
            $status = TRUE;
            
        }
        return $status;
    }
}

if(!function_exists('setProtocol'))
{
    function setProtocol()
    {
        
        $CI = &get_instance();
                    
        $CI->load->library('email');
        
        $config['protocol'] = PROTOCOL;
        $config['mailpath'] = MAIL_PATH;
        $config['smtp_host'] = SMTP_HOST;
        $config['smtp_port'] = SMTP_PORT;
        $config['smtp_user'] = SMTP_USER;
        $config['smtp_pass'] = SMTP_PASS;
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        //$config['smtp_crypto'] = "tls";
        
        $config['newline'] = "\r\n";
        
        $CI->email->initialize($config);
        
        return $CI;
    }
}

if ( ! function_exists('getCourseName'))
{
    function getCourseName($ccode)
    {
        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->get_where('course',array('CCode'=>$ccode));
        return $query->first_row()->CName;
    }   
}

if ( ! function_exists('getFacultyName'))
{
    function getFacultyName($FCode)
    {
        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->get_where('faculty',array('FCode'=>$FCode));
        return $query->first_row()->Full_Name;
    }   
}
if ( ! function_exists('getCourseName'))
{
    function getCourseName($CCode)
    {
        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->get_where('course',array('CCode'=>$CCode));
        return $query->first_row()->CName;
    }   
}

if ( ! function_exists('programData'))
{
    function programData()
    {
        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->query("select program.UCCode,program.DtSt,program.DtEd,program.CCity,course.CName as CName,faculty.Full_Name as Full_Name from program inner join course on course.CCode = program.CCode inner join faculty on faculty.FCode = program.CDir where program.UCCode in(select program.UCCode from participant)")->result();
        return $query;
    }   
}

if ( ! function_exists('participantData'))
{
    function participantData()
    {
        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->query("select UCCode,PTrackNo,PName,PDesig,PCompany,PArea,PCity,PPCode,PTel,PFax,PEmail,PStatus from participant where UCCode in(select UCCode from program)")->result();
        return $query;
    }   
}

if ( ! function_exists('truncate'))
{
    function truncate($str, $len) {
        $tail = max(0, $len-10);
        $trunk = substr($str, 0, $tail);
        $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len-$tail))));
        return $trunk;
    }  
}

if ( ! function_exists('substrwords') )
{
    function substrwords($text, $maxchar, $end='...') {
        if (strlen($text) > $maxchar || $text == '') {
            $words = preg_split('/\s/', $text);      
            $output = '';
            $i      = 0;
            while (1) {
                $length = strlen($output)+strlen($words[$i]);
                if ($length > $maxchar) {
                    break;
                } 
                else {
                    $output .= " " . $words[$i];
                    ++$i;
                }
            }
            $output .= $end;
        } 
        else {
            $output = $text;
        }
        return $output;
    }
}



?>