<?php
    
    error_reporting(0);
    session_stsrt();
    if(!$_SESSION["id"]){
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_add.php>
                    標    題:<input type=text name=title><br>
                    //textarea 多行文字欄位顧名思義就是用來輸入多行文字用的，另外一種單行文字欄位用的語法是 input type text。
                    內    容:<br><textarea name=conent rows=20 cols=20></textarea><br>
                    /*<input type="radio"> 選項按鈕
                      radio (radio button) 是選項按鈕，用來處理表單中有多選一時的情況，
                      搭配 value 屬性 (預設值是 "on") 來指定當使用者選取此選項時要傳送給遠端伺服器什麼值。
                    */
                    佈告類型:<input type=radio name=type value=1>系上公告
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間:<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>    