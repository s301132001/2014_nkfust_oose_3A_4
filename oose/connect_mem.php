<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它

include("mysql_connect.php");

$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM member where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '登入成功!<br>';
        echo $_SESSION['username'];
        echo '您好<br>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
        
}
else if($id == null || $pw == null)
{
        echo '帳號或密碼不可為空白';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=memberslogin.php>';
}
else if($row[1] != $id || $row[2] != $pw)
{
        echo '帳號或密碼無效';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=memberslogin.php>';
}
?>