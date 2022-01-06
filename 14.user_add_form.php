<html>
    <head><title>新增使用者</title></head>
    <body>
<?php
    error_reporting(0);#error_reporting函式設定當前指令碼的錯誤報告級別。
    session_stsrt();#session_start()函數用於啟動新會話或恢複現有會話。
    if(!$_SESSION["id"]){
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "
            /*
            method="post"，代表傳輸方式採用的是 POST 而不是 GET，要注意的是這裡的 post 必需採用小寫。
            action="user_add.php"，這代表當網友按下送出表單之後，會將資料傳送到 user_add.php 這支程式。

            <input type="submit"> 表單的送出按鈕 (submit button)
            當使用者點了 submit button 就會送出表單給遠端的伺服器，用 value 屬性可以設定按鈕名稱。
            value: 指定初始值 (default value)。

            <input type="reset"> 重設表單狀態
            reset 用來讓使用者點了可以重設表單內容回到初始狀態，而 value 屬性可以設定 reset 按鈕的名稱。
            */
           <form action=user_add.php method=post> 
                帳號:<input type=text name=id><br>
                密碼:<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
           </form>
        ";
    }
?>
    </body>
</html>