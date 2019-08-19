
<?php
class Courses_model extends CI_Model
 
{

 public function getCourse(){

    //  $this->db->where('id','1');
    $query=$this->db->get('courses');
    $result=$query->result_array();
    
   
      return $result;
    }
  
}  
