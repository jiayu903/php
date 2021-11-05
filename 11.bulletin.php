<?php
    
    error_reporting(0);;#error_reporting函式設定當前指令碼的錯誤報告級別。
    session_stsrt();#session_start()函數用於啟動新會話或恢複現有會話。
    if(!$_SESSION["id"]){
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[< href=logout.php>logout</a>]<br>";
        $conn=mysqli_connect("localhost","root","","mydb");
        $result=mysqli_query($conn,"select * from bulletin");
        echo "<table border=1><tr><td>ID</td><td>佈告類別</td>
        <td>標題</td><td>內容</td><td>發佈時間</td></tr>";
        while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row["bid"]."</td><td>";
              if($row["type"]=="1") echo "系上公告</td><td>";
              if($row["type"]=="2") echo "獲獎資訊</td><td>";
              if($row["type"]=="3") echo "徵才資訊</td><td>";
              echo ($row["title"]."</td><td>".$row["content"]."</td><td>"
              .$row["time"]."</tr><td>";
    }
    echo "</table>"
    }
    
?>