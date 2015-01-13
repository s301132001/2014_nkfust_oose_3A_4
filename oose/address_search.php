<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫

$link = mysqli_connect('localhost', 'u0124091', 'a2266baa');
mysqli_select_db($link,'oose');
mysqli_query($link,"SET NAMES 'utf8'");

$goods_serch = $_POST['goods'];

//搜尋資料庫資料
$sql_name = "SELECT * FROM store where goods like binary '%$goods_serch%'";


$result_name = mysqli_query($link,$sql_name);

$row_name = mysqli_fetch_array($result_name);

//$totalRows = mysql_num_rows($row_name);
$_SESSION['goods'] = $goods_serch;

?>
<table border="1">
<?php
if ($name_serch == null)
{
    echo '請輸入欲查詢之關鍵字';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=search_stcmt.html>';
}
else if (false !== (strpos($row_name[3], $goods_serch))) 
{
    if ($result_name = mysqli_query($link, $sql_name))
    {
    /* fetch associative array */
        while ($row_name = mysqli_fetch_array($result_name)) 
        {
            printf ("<tr><td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>", $row_name[1], $row_name[2], $row_name[3], $row_name[4], $row_name[5], $row_name[6]);
        }
    mysqli_free_result($result_name);
    }
}
else
{
    print("找不到");
}?>
<?php
mysqli_close($link);
?>