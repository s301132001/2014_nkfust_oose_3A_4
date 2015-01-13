<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");

if($_SESSION['username'] != null)
{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['username'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM member where username='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_member_finish.php\">";
        echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
        echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
        echo "姓名：<input type=\"text\" name=\"name\" value=\"$row[3]\" /> <br>";
        echo "生日：<input type=\"date\" name=\"birth\" value=\"$row[4]\" /> <br>";
        echo "電話：<input type=\"text\" name=\"cellphone\" value=\"$row[5]\" /> <br>";
        echo "地址：<input type=\"text\" name=\"address\" value=\"$row[6]\" /> <br>";
        echo "email：<input type =\"text\" name=\"email\" value=\"$row[7]\" /> <br>";
        echo "<input type=\"submit\" name=\"btn_check\" value=\"確定\" />";
        echo "<input type=\"submit\" formaction=\"member.php\" name=\"btn_exit\" value=\"取消\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>