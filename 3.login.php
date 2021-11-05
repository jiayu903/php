<?php
   #預定義的 $_POST 變量用於收集來自 method="post" 的表單中的值。
   if(($_POST["id"]=="john") && ($_POST["pwd"] == "john1234"))
      echo "Welcome";
   else
      echo "Login failure";
?>