 <?php  
 class Admin_model extends CI_Model  
 {  
      
      function get_success_percentage($promotion)
      {

          $sql1 = "SELECT COUNT(*) as 'count' FROM feedback WHERE status = 'accepted' AND pro_id = ?";
          $query = $this->db->query($sql1,array($promotion));
          $success = $query->row('count');

          $sql2 = "SELECT COUNT(*) as 'count' FROM feedback WHERE pro_id = ?";
          $query = $this->db->query($sql2,array($promotion));
          $all = $query->row('count');

          if(intval($all) == 0){
             $percentage = 0;
          }
          else{
            $percentage = floatval($success) / floatval($all) * 100;
          }

            

          return $percentage;
      }

      function get_failure_percentage($promotion)
      {

          $sql1 = "SELECT COUNT(*) as 'count' FROM feedback WHERE status = 'denied' AND pro_id = ?";
          $query = $this->db->query($sql1,array($promotion));
          $failure = $query->row('count');

          $sql2 = "SELECT COUNT(*) as 'count' FROM feedback WHERE pro_id = ?";
          $query = $this->db->query($sql2,array($promotion));
          $all = $query->row('count');

          if(intval($all) === 0){
             $percentage = 0;
          }
          else{
            $percentage = floatval($failure) / floatval($all) * 100;
          }

          return $percentage;
      }

 } 