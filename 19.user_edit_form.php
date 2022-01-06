<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_stsrt();
    if(!$_SESSION["id"]){
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        //mysqli_connect() 函數打開一個到MySQL 服務器的新的連接。
        $conn=mysqli_connect("localhost","root","","mydb");
        //這個mysqli_query()函數接受一個表示查詢的字符串值作為參數之一，並在數據庫上執行/執行給定的查詢。
        $result=mysqli_query($conn,"select * from user where id ='{$_GET[id]}'");
        //mysql_fetch_array()：從結果集中取得一行作為關聯數組或索引數組，或二者兼有
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=user_edit.php>
            //iinpput type hidden 是 HTML 表單的基本功能，所有主流的瀏覽器都支援 hidden 隱藏欄位的功能。
            <input type=hidden name=id value={$row[id]}>
            帳號:{$row[id]}<br>
            密碼:<input type=text name=pwd value={$row[pwd]}><p></p>
            <input type=sumbit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>