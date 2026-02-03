<?php
#cart 테이블에 장바구니 내역 추가하기
session_start();
include_once("dbconn.php");
$uid=$_SESSION['uid'];
$cloth=$_GET['cloth'];
$price=$_GET['price']; //radio button
$size=$_GET['size'];
$qty=$_GET['qty'];
$photo=$_GET['photo'];
$sql="insert into cart values('$uid','$cloth','$size',$qty,$price,'$photo')";
if($conn->query($sql)){
  echo "<script>alert('장바구니 담기 성공')</script>";
  if (isset($_SERVER['HTTP_REFERER'])) {//원래있던곳으로 복귀
    $referrer = $_SERVER['HTTP_REFERER'];
    echo "<script>location.href='$referrer';</script>";
} else {
    echo "<script>location.href='hdex.php';</script>";
}
}else{
  echo "<script>alert('장바구니 담기 실패')</script>";
  echo "<script>location.href='hdex.php'</script>";
}
$conn->close();
?>