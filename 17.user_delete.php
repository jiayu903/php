<?php
     error_reporting(0);#error_reporting函式設定當前指令碼的錯誤報告級別。
     session_stsrt();#session_start()函數用於啟動新會話或恢複現有會話。
     if(!$_SESSION["id"]){
         echo "請登入帳號";
         echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
     }
     else{
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from user where id='{$_GET[id]}'";
        #echo $sql;
        if(!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功，三鐘後回到網頁";
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
     }
?>