<?php
    session_start();#session_start()函數用於啟動新會話或恢複現有會話。
    unset($_SESSION["id"]); #unset()函數是PHP中的內置函數，用於取消設置指定的變量。
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";
?>