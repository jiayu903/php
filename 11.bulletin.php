<?php
    
    error_reporting(0);;#error_reporting函式設定當前指令碼的錯誤報告級別。
    session_stsrt();#session_start()函數用於啟動新會話或恢複現有會話。
    if(!$_SESSION["id"]){
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[< href=logout.php>logout</a>]<br>";
        #mysqli_connect(ip,連結帳號,連結密碼,連結的資料庫) 建立資料連結
        $conn=mysqli_connect("localhost","root","","mydb");
        #mysqli_query() 從資料庫查詢資料
        $result=mysqli_query($conn,"select * from bulletin");
        echo "<table border=1><tr><td>ID</td><td>佈告類別</td>
        <td>標題</td><td>內容</td><td>發佈時間</td></tr>";
        #mysqli_fetch_array() //從查詢出來的資料一筆一筆抓出來
        while($row=mysqli_fetch_array($result)){
            echo "<tr><td>";
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