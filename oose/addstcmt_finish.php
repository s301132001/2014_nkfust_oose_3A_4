<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");

$st_name= $_POST['st_name'];
$st_level= $_POST['st_level'];
$st_cmt = $_POST['st_cmt'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($st_name != null && $st_level != null && $st_cmt != null )
{
        //新增資料進資料庫語法
        $sql = "insert into store_comment (st_name, st_level, st_cmt) values ('$st_name', '$st_level', '$st_cmt')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}
else
{
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}
?>