<?php
session_start();

if(isset($_SESSION['login'])){
    if($_SESSION['login']=="Yes"){
        echo "<a href='logout.php'>登出系統</a>";
    }else{
        echo "非法進入系統<br/>";
        echo "<a href='登入.php'>回登入頁</a>";
        exit();
    }
}else{
    echo "非法進入系統<br/>";
    echo "<a href='登入.php'>回登入頁</a>";
    exit();
}

?>
<html>
    <head>
        <title>admin</title>
    </head>
    <body>
        <div id="admin">
            Welcome to Admin!
        </div>
    </body>
</html>