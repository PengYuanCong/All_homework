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
    <title>墾丁三日遊</title>
    <body bgcolor="#FFF0F5">
    <form action="register.php" method="post">
        <table border="3" align="center" width="30%">
        <h1 align="center">墾丁三日遊報名資料</h1>
        <div><b><center><font size=6 color="#87CEFA">1.行程內容</font></b></div></center>
        <center><select name="route">
            <option value="行程A;推薦年齡18~28歲">行程A;推薦年齡18~28歲</option>
            <option value="行程B;推薦年齡29~40歲">行程B;推薦年齡29~40歲</option>
            <option value="行程C;推薦年齡41~70歲">行程C;推薦年齡41~70歲</option>
        </select></center><br/>

<br/>
<div><b><center><font size=6 color="#87CEFA">2.Name:<input type="text" name="name"></b><br/>
<br/>
<b>email:<input type="text" name="email"></b><br/>
<br/>
<b>telphone:<input type="text" name="telphone"></b><br/>
<br/>
<b>Gender:<input type="radio" name="gender" value="男"><font color="gray">男</font>
          <input type="radio" name="gender" value="女"><font color="gray">女</font></b><br/>
<br/>
<b>Food Performance:<input type="checkbox" name="food[]" value="烤肉"><font color="red">烤肉</font>
                    <input type="checkbox" name="food[]" value="火鍋"><font color="red">火鍋</font><br/>
<br/>                    
<b>T-shirt Size:
<select name="size">
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>    
</select></b><br/>
<br/>
<b>T-shirt color:<input type="text" name="color"></b><br/>
<br/>
<b>Birthday:<input type="text" name="birthday"></b><br/>
<br/>
<b>Tickets:<input type="text" name="tickets" value="number"></b><br/>
<br/>
<b>T-shirt size 對照表</b><br/>

    <tr><td>&nbsp&nbsp;</td><td>S</td><td>M</td><td>L</td><td>XL</td></tr>
    <tr><td>長</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td></tr>
    <tr><td>寬</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td></tr>
    <tr><td>高</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td></tr>


</table>
<br/>
<center><b><input type="submit" value="submit"></b></center>


</body>
</head>
</html>