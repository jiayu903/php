<?php
    session_start();
    unset($_SESSION["counter"]); #unset()函數是PHP中的內置函數，用於取消設置指定的變量。
    echo "counter重置成功.....";
    echo "<meta http-equiv=REFRESH conter='2; url=counter.php'>";
?>