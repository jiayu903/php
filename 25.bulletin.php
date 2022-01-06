<?php
    
    error_reporting(0);;#error_reporting函式設定當前指令碼的錯誤報告級別。
    session_stsrt();#session_start()函數用於啟動新會話或恢複現有會話。
    if(!$_SESSION["id"]){
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>登出</a>][<a href=user.php>管理使用者</a>][<a href=bulletin_add_form.php>新增佈告</a>]<br>";
        #mysqli_connect(ip,連結帳號,連結密碼,連結的資料庫) 建立資料連結
        $conn=mysqli_connect("localhost","root","","mydb");
        #mysqli_query() 從資料庫查詢資料
        $result=mysqli_query($conn,"select * from bulletin");
        echo "<table border=2><tr><td>布告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        #mysqli_fetch_array() //從查詢出來的資料一筆一筆抓出來
        while($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=bulletin_edit_form.php?bid={$row["bid"]}>修改</a>
            <a href=bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
    }
    echo "</table>"
    }
    
?>