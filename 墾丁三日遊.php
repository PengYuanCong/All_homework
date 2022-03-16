<html>
<head>
<title>墾丁三日遊</title>
<body>
<form action="/墾丁三日遊.php" method="post">
<p>1.行程內容</p>
<textarea 
name="行程內容"
rows="2"
cols="20"
required>          
</textarea>
<textarea 
name="行程內容"
rows="2"
cols="20"
required>          
</textarea>

<p>2.Name: <input type="text" name="name"></p>
<p>email:<input type="text" name="email"></p>
<p>telphone:<input type="text" name="telphone"></p>
<p>Gender:<input type="radio" name="gender" value="男">男 <input type="radio" name="gender" value="女">女</p>
<p>Food Performance:<input type="checkbox" name="food" value="烤肉">烤肉 <input type="checkbox" name="food" value="火鍋">火鍋</p>
<p>T-shirt Size:
<select>
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>    
</select>

<p>T-shirt color:<input type="text" name="color"></p>
<p>Birthday:<input type="text" name="birthday"></p>
<p>Tickets:<input type="text" name="tickets" value="number"></p>
<p>T-shirt size 對照表</p>
<table border="1">
    <tr><td>&nbsp&nbsp;</td><td>S</td><td>M</td><td>L</td><td>XL</td></tr>
    <tr><td>長</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td></tr>
    <tr><td>寬</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td></tr>
    <tr><td>高</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td><td>&nbsp&nbsp;</td></tr>
</table>

<p><input type="submit" value="submit"></p>

</body>
</head>
</html>