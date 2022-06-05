<?php

$host = 'localhost';
$user = 'dongjun';
$pw = '1234';
$dbName = 'sungkyul1';
$con = new mysqli($host, $user, $pw, $dbName);

$id = $_POST['id'];
$pw = $_POST['pw'];

$query = "select * from user where id='$id' and pw='$pw'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id==$row['id'] && $pw==$row['pw']){

	echo "<script> alert('로그인 되었습니다.'); </script>";
	echo "<script> location.href = 'success.html'; </script>";

}else{ 

   echo "<script> alert('아이디 또는 비밀번호를 잘못 입력했습니다. 입력하신 내용을 다시 확인해주세요.'); </script>";
   echo "<script> location.href = 'login.html'; </script>";

}

?>
