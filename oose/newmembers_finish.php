<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$cus_name = $_POST['cus_name'];
$birthday = $_POST['birthday'];
$cellphone = $_POST['cellphone'];
$address = $_POST['address'];
$email = $_POST['email'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2 && $cus_name != null && $birthday != null && $cellphone != null && $address != null && $email != null)
{
        //新增資料進資料庫語法
        $sql = "insert into member (username, password, name, birth, cellphone, address, email) values ('$id', '$pw', '$cus_name', '$birthday', '$cellphone', '$address', '$email')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=newmembers.php>';
        }
}
else
{
        echo '請確認資料輸入正確！';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=newmembers.php>';
}
?>