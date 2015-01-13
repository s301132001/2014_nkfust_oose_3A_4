<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");

$st_name= $_POST['st_name'];
$st_address= $_POST['st_address'];
$goods = $_POST['goods'];
$price = $_POST['price'];
$introduction = $_POST['introduction'];
$kind = $_POST['kind'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($st_name != null && $st_address != null && $goods != null && $price != null && $introduction != null && $kind != null)
{
        //新增資料進資料庫語法
        $sql = "insert into store (name, address, goods, price, st_info, kind) values ('$st_name', '$st_address', '$goods','$price', '$introduction', '$kind')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=admin.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=admin.php>';
        }
}
else
{
        echo '<meta http-equiv=REFRESH CONTENT=2;url=admin.php>';
}
?>