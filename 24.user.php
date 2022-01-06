<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
    error_reporting(0);
    session_stsrt();
    if(!$_SESSION["id"]){
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        //<h1>到<h6>標籤用於定義HTML標題，<h1>定義了最重要的標題和 <h6>定義最不重要的標題。
        echo "<h1>使用者管理</h1> 

            //<a href></a>超連結標籤；<br>每次只換一行。
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br> 

            //border="1" 的設定，這代表這個 table 的邊框粗細是 1。
            <table border=1> 
                //<tr>代表的是一行，而<td>則代表一列。
                <tr><td></td><td>帳號</td><td>密碼</td></tr> ";

            $conn=mysqli_connect("localhost","root","",mydb);
            $result=mysqli_query($conn, "select * from user");
            while($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?>
    </body>
</html>