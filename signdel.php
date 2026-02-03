<?php
# 현재 로그인한 사용자를 member 테이블에 삭제하기
session_start();
$uid = $_SESSION['uid'];
include_once("dbconn.php");
$sql = "delete from member where uid = '$uid'";
if($conn->query($sql)) {
    session_destroy(); 
    echo "<script>alert('회원탈퇴 성공!')</script>";
    echo "<script>location.href='hdex.php'</script>";
} else {
    echo "<script>alert('회원탈퇴 실패!')</script>";
    echo "<script>location.href='hdex.php'</script>";
}
$conn->close();  // 접속 종료
?>