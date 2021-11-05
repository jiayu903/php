<?php
    #mysqli_connect() 建立資料連結
    $conn=mysqli_connect("localhost", "root","","mydb");

    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn,"select * form user");

    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    #result(結果)
    while($row=mysqli_fetch_array($result)) {
        echo $row["id"]." ".$row["pwd"]."<br>";
    }
?>