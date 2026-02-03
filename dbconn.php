<?php
# 데이터베이스 접속하기
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "djgym";
# $conn 변수는 객체변수. mysqli 클래스 
$conn = new mysqli($server,$user,$pwd,$dbname);
if($conn->connect_error) {
    echo "DB 접속 오류<br>";
}
# else echo "DB 접속 성공<br>";

$sql0 = "CREATE VIEW IF NOT EXISTS all_items AS
SELECT * FROM best
UNION
SELECT * FROM men
UNION
SELECT * FROM women
UNION 
SELECT * FROM acc";

// 뷰 생성 쿼리 실행
if (!$conn->query($sql0)) {
    die("뷰 생성 실패: " . $conn->error);
}
?>
