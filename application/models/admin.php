<?php

Class admin extends CI_Model {
    
     function __construct() {
        parent::__construct();
    }
    function getAllStudent()
 {
   $this -> db -> select('*');
   $this -> db -> from('student');
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
   
}