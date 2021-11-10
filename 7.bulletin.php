<?php
    #error_reporting函式設定當前指令碼的錯誤報告級別。
    error_reporting(0);
    #mysqli_connect(ip,連結帳號,連結密碼,連結的資料庫) 建立資料連結<!--不用改-->
    $conn=mysqli_connect("localhost","root","","mydb");
    #mysqli_query() 從資料庫查詢資料 <!--要改-->
    $result=mysqli_query($conn,"select * form bulletin");
    #mysqli_fetch_array() //從查詢出來的資料一筆一筆抓出來
    echo "<table border=1><tr><td>編號</td><td>佈告類型</td><td>標題</td><td>內容</td><td>發佈時間</td></tr>";
    while ( $row=mysqli_fetch_array($result)) {
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
    echo "</table>";
    
?>