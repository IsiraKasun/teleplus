 <?php  
 class Promotion_model extends CI_Model  
 {  
      function get_promotion_data()  
      {  
           
           $query = $this->db->query("SELECT p.pro_id, p.type, p.description, p.starting_date, p.ending_date, c.name as 'added_by' FROM promotion p, system_user c WHERE p.csf_id = c.userid"); 
           return $query;   
      }  

      function get_user_names()
      {
         $query = $this->db->query("SELECT name FROM system_user WHERE userid IN (SELECT csf_id FROM customer_service_staff)"); 
           return $query; 
      }
 } 