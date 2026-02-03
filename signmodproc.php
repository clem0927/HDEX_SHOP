<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
session_start();
include_once("dbconn.php");
$uid=$_GET['uid'];
$pwd=$_GET['pwd'];
$email=$_GET['email'];
$name=$_GET['name'];
$telno=$_GET['telno'];

$sql="update member set pwd='$pwd',email='$email',name='$name',telno='$telno' where uid='$uid'";
if($conn->query($sql)) {  // SQL 실행 성공한 경우 
  $_SESSION['uname'] = $name;
  echo "<script>alert('회원정보수정 성공!다시 로그인 해주세요.')</script>";
  echo "<script>location.href='signout.php'</script>";
} else {
  echo "<script>alert('회원정보수정 실패')</script>";
  echo "<script>location.href='mypage2.php'</script>";
}
$conn->close();  // 접속 종료
?> 
</body>
</html>

