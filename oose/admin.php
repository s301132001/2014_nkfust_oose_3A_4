<html>
<body>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table border="1">

<?php
include("mysql_connect.php");
//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
        echo '<a href="logout.php">登出</a><br>';
        echo '<a href="update_admin.php">修改資料</a><br>';
        echo '<a href="addstore.html">新增店家資料</a><br>';
        echo '<a href="search.html">查詢店家資料</a><br>';
        echo '<a href="delete_store.php">刪除店家資料</a><br>';
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}

?>


</table>
</body>
</html>
