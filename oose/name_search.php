<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫

$link = mysqli_connect('localhost', 'u0124091', 'a2266baa');
mysqli_select_db($link,'oose');
mysqli_query($link,"SET NAMES 'utf8'");

$name_serch = $_POST['name'];

//搜尋資料庫資料
$sql_name = "SELECT * FROM store_comment where st_name like binary '%$name_serch%'";


$result_name = mysqli_query($link,$sql_name);

$row_name = mysqli_fetch_array($result_name);

//$totalRows = mysql_num_rows($row_name);
$_SESSION['name'] = $name_serch;

?>
<table border="1">


<?php
if ($name_serch == null)
{
    echo '請輸入欲查詢之關鍵字';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=search_stcmt.html>';
}
else if (false !== (strpos($row_name[1], $name_serch))) 
{
	if ($result_name = mysqli_query($link, $sql_name))
	{
        echo '<tr><td align="center">店名</td><td align="center">分數</td><td align="center">評論</td>';
    /* fetch associative array */
    	while ($row_name = mysqli_fetch_array($result_name)) 
    	{
        	printf ("<tr><td>%s</td> <td>%s</td> <td>%s</td>", $row_name[1], $row_name[2], $row_name[3]);
    	}
    mysqli_free_result($result_name);
	}
    echo "<form>";
    echo "<input type=\"submit\" formaction=\"search_stcmt.html\" name=\"btn_exit\" value=\"回前頁\" />";
    echo "</form>";
}
else
{
    print("找不到");
    echo '<meta http-equiv=REFRESH CONTENT=2;url=search_stcmt.html>';
}?>
<?php
mysqli_close($link);
?>