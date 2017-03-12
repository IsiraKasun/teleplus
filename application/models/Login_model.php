 <?php  
 class Login_model extends CI_Model  
 {  
      function credintials_from_db($name, $password)  
      {  
           $sql = 'SELECT * FROM system_user WHERE name = ? AND password = sha1(?)';
           $query = $this->db->query($sql,array($name,$password));
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  

      function check_if_admin($name)
      {
        $sql = 'SELECT * FROM administrator a, system_user s WHERE a.ad_id = s.userid AND s.name = ? ';
           $query = $this->db->query($sql,array($name));
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }
 } 