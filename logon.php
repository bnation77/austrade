<?php 

session_start();
   
     $userid = $_GET['em'];
		
      if(!empty($userid)){
      
         $_SESSION['login_user'] = $userid;
         
         header("Location: page2.php");
      }else {
        header("Location: page.php");
      }
?>


