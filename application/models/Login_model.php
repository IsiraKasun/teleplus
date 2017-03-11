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
 } 