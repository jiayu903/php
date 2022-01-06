<?php
    error_reporting(0);
    session_stsrt();
    if(!$_SESSION["id"]){
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        $conn=mysqli_connect("locahost","root","","mydb");
        $result=mysqli_query($conn, "select * form bulletin where bid={$_GET[bid]}");
        $row=mysqli_fetch_array($result);
        $checked1="";
        $checked2="";
        $checked3="";
        if($row['type']==1)
           $checked1="checked";
        if($row['type']==2)
           $checked2="checked";
        if($row['type']==3)
           $checked3="checked";
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_edit.php>  //method : 傳送資料的方法; action : 資料傳送的目的地 。
                    佈告編號:{$row['bid']}<input type=hidden name=bid value={$row['bid']}<br>    //value : 命令鈕上的文字。
                    標    題:<input type=text name=title value={$row['title']}><br>
                    內    容:<br><textarea name=conent rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型:<input type=radio name=type value=1 {$checked1}>系上公告
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間:<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>    