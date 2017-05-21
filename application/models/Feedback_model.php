 <?php  
 class Feedback_model extends CI_Model  
 {  
      function get_feedback_data()  
      {  
           
           $query = $this->db->query("SELECT f.f_id, f.status, c.cus_id as 'cus_id', c.cus_name, p.pro_id as 'pro_id', p.description  FROM feedback f, customers c, promotion p WHERE f.cus_id = c.cus_id AND f.pro_id = p.pro_id ORDER BY f_id DESC"); 
           return $query;   
      }  

      function add_new_feedback($values){
        $this->db->insert('feedback', $values);

      }

      function get_customer_names()
      {
          $query = $this->db->query("SELECT cus_id, cus_name FROM customers"); 
          return $query;
      }

      function get_promotion_names()
      {
        $query = $this->db->query("SELECT pro_id, description FROM promotion"); 
          return $query;
      }
 } 