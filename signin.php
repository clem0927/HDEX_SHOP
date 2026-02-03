<?php
session_start();
var_dump($_SESSION);
include_once("dbconn.php");

$uid=$_GET['uid'];
$pwd=$_GET['pwd'];
$sql = "select * from member where uid = '$uid' and pwd = '$pwd'";
$result = $conn->query($sql);
if($result->num_rows > 0) {  
  $row = $result->fetch_assoc();  //연관배열 사용
  # 세션 배열에 로그인 정보를 저장
  $_SESSION['uid'] = $row['uid']; 
  $_SESSION['email'] = $row['email']; 
  $_SESSION['pwd'] = $row['pwd'];
  $_SESSION['name'] = $row['name']; 
  $_SESSION['telno'] = $row['telno'];
  $_SESSION['regdate'] = $row['regdate']; 
  $_SESSION['point'] = $row['point'];  
  
  echo "<script>alert('로그인 성공!일반상품 10%할인,세일상품 20%할인 이벤트중입니다!!')</script>";
  echo "<script>location.href='hdex.php'</script>";
} else {
  echo "<script>alert('로그인 실패!회원가입을 다시 진행해주세요.')</script>";
  echo "<script>location.href='hdex.php'</script>";
  
}
$conn->close();  // 접속 종료
?>
