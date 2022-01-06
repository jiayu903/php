<?php
     error_reporting(0);#error_reporting函式設定當前指令碼的錯誤報告級別。
     session_stsrt();#session_start()函數用於啟動新會話或恢複現有會話。
     if(!$_SESSION["id"]){
         echo "請登入帳號";
         echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
     }
     else{
         #mysqli_connect() 建立資料連結
         $conn=mysqli_connect("localhost", "root","","mydb");
         #mysqli_query()從資料庫查詢資料
         #新增資料SQL命令:insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
         $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
         #echo $sql;    //$sql語法存於變數中
        if(!mysqli_query($conn, $sql)){
           echo "新增命令錯誤";
        }
        else{
           echo "新增使用者成功，三秒鐘後回到首頁";
           echo "<meta http-equiv=REFRESH content='3,url=bulletin.php'>";
        }
    }
?>