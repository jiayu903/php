<?php
    #mysqli_connect() 建立資料連結
    $conn=mysqli_connect("localhost", "root","","mydb");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn,"select * form user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $login=FALSE;
    while($row=mysqli_fetch_array($result)) {
        if(($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
            $login=TRUE;
        }
    }
    if($login==TRUE){
      session_start();
      $_SESSION["id"]=$_POST["id"];
      echo "welcome!!"; #輸入帳號密碼正確為welcome
      echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
    }
    else{
      echo "id/pwd wrong!!";#輸入帳號密碼錯誤為wrong!!
      echo  "<meta http-equiv=REFRESH content='3, url=login.html'>";#refresh 可以用來設定3秒鐘後跳轉 (redirect) 到 URL：login.html的網站
    }
      
?>