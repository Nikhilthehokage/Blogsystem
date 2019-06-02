<?php  

   session_start();
   session_destroy();
   header('loacation:index2.php');
   unset($_SESSION['name']);
?>   
