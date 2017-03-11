 <?php  
 class Promotion_model extends CI_Model  
 {  
      function get_promotion_data()  
      {  
           
           $query = $this->db->query("SELECT p.pro_id, p.type, p.description, p.starting_date, p.ending_date, c.name as 'added_by' FROM promotion p, system_user c WHERE p.csf_id = c.userid"); 
           return $query;   
      }  
 } 