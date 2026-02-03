<?php
session_start();
include_once('dbconn.php');
$no=$_GET['no']; //ordno 가져옴

$sql1="delete from porder where ordno='$no'";
$sql2="delete from orditem where ordno='$no'";

$result1=$conn->query($sql1);
$result2=$conn->query($sql2);

if($result1 && $result2){
  echo "<script>location.href='showorder.php'</script>";
}

$conn->close();
?>