<?php
    session_start();#session_start()函數用於啟動新會話或恢複現有會話。
    if(!isset($_SESSION["counter"]))   # isset 用來檢查變數是否設置
       $_SESSION["counter"]=1;
    else
       $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";
?>