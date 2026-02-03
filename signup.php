<?php
include_once("dbconn.php");

$uid=$_GET['uid'];
$pwd=$_GET['pwd'];
$email=$_GET['email'];
$name=$_GET['name'];
$telno=$_GET['telno'];
$regdate = date('Y/m/d'); 
$point = 1000;

$sql="insert into member values('$uid','$pwd','$email','$name','$telno','$regdate','$point')";

if($conn->query($sql)){
  echo "<script>alert('회원가입 성공')</script>";
  echo "<script>location.href='hdex.php'</script>";
}
else {
  echo "<script>alert('회원가입 실패')</script>";
  echo "<script>location.href='hdex.php'</script>";
}
$conn->close();  // 접속 종료
?>