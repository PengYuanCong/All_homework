<?php
session_start();
?>

<?php

if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "歡迎".$cookieID."再度光臨";
}else{
    echo "歡迎初次來到本系統!!!";
}

?>
<html>
    <head>
        <title>登入</title>
    </head>
    <body>
        <form action="" method="POST">
            <table border="0" align="center">
                <center><h1>Login</h1></center>
                <tr>
                    <td>帳號:</td>
                    <td><input type="text" name="account" placeholder="請輸入帳號"></td>
                </tr>
                <tr>
                    <td>密碼:</td>
                    <td><input type="text" name="password" placeholder="********"></td>
                </tr>
            </table>
            <center><input type="submit" name="submit" value="登入"</center>
        </form>
<?php

$aID="user";
$aPWD="7777";
//date_default_timezone_set('Asia/Taipei');
//echo date("m-d-Y H:i:s", time());
//header("Refresh:1");

if(isset($_POST["account"])){
    if($_POST["account"]!=null){
        $uId=$_POST["account"];
        $uPwd=$_POST["password"];
        //echo $uId."<br/>";
        //echo $uPwd;
        if($aID==$uId && $aPWD==$uPwd){
            $_SESSION["login"]="Yes";
            //echo "登入成功";
            setcookie("UID",$uId,time()+17280);
            header('Location: 墾丁三日遊.php');
        }else{
            echo "帳號或密碼錯誤";
        }    
    }else{
        echo "您尚未輸入帳號密碼!";
    }
}else{
    echo "歡迎登入,請輸入帳號密碼!";
}
//如果出現header already sent
//ob_flush();    
?>

<?php

$bID="admin";
$bPWD="8888";

if(isset($_POST["account"])){
    if($_POST["account"]!=null){
        $uId=$_POST["account"];
        $uPwd=$_POST["password"];
        if($bID==$uId && $bPWD==$uPwd){
            $_SESSION["login"]="Yes";
            setcookie("UID",$uId,time()+17280);
            header('Location: admin.php');
        }
    }
}


?>

    </body>
</html>