<?php
session_start();
include_once("dbconn.php");
if(!isset($_GET['chk'])){
  echo "<script>alert('삭제할 아이템을 선택해야합니다.');</script>";
  echo "<script>history.go(-1)</script>";
}
$uid=$_SESSION["uid"];
$chk=$_GET['chk'];
//var_dump($chk);
foreach($chk as $item){ 
  $pos1=strpos($item,"@"); //문자열에서 찾는 글자의 위치를 알려줌
  $pos2=strpos($item,"@", $pos1 + 1); //2번째 @
  $cloth=substr($item,0,$pos1);
  $size=substr($item,$pos1+1,$pos2-$pos1-1);
  $qty=substr($item,$pos2+1);
  $sql="delete from cart where uid='$uid' and cloth='$cloth' and size='$size' and qty='$qty'";
  if(!$conn->query($sql)) {//삭제중에 데이터베이스 오류발생
    die("장바구니 아이템 삭제중에 DB오류가 발생했습니다.");
  }
}
echo "<script>alert('장바구니 삭제완료.');</script>";
  echo "<script>location.href='showcart.php'</script>";
?>