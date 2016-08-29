<?php
   if(isset($_POST['BtnSubmit']))
   {
      echo "<h3>Your submitted form data as bellow</h3>";
      echo "Your Name : {$_POST['FullName']}</br>";
      echo "You Like : {$_POST['YourChoice']}</br>";

      echo "<hr>";
   }

?>
