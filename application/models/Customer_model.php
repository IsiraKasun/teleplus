 <?php  
 class Customer_model extends CI_Model  
 {  
      function get_customer_data()  
      {  
           
           $query = $this->db->query("SELECT * FROM customers"); 
           return $query;   
      }  

      function add_new_customer($values){
        $this->db->insert('customers', $values);

      }
 } 