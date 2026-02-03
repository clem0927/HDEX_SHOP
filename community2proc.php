<?php
# 리뷰글 저장. board 테이블에 새로운 레코드 추가하기
function uploadFile() {
    $target_dir = 'upload/';  // 업로드 파일이 저장될 폴더(서버측)
    $target_file = $target_dir . basename($_FILES['att']['name']);
    $ok = 1;

    // 업로드하기 전에 필수 체크
    if ($_FILES['att']['type'] != "image/jpeg" && $_FILES['att']['type'] != "image/jpg") {
        echo "<script>alert('JPG, JPEG 파일만 업로드 가능합니다.'); history.go(-1);</script>";
        $ok = 0;
    }
    if ($_FILES['att']['size'] > 50000000) {
        echo "<script>alert('50MB 이하 크기의 파일만 업로드 가능합니다.'); history.go(-1);</script>";
        $ok = 0;
    }
    
    // 체크를 통과하면 업로드
    if ($ok && move_uploaded_file($_FILES['att']['tmp_name'], $target_file)) {
        echo "<script>alert('업로드 성공');</script>";
        return basename($_FILES['att']['name']); // 파일명을 반환
    } else {
        error_log("파일 업로드 실패: " . $_FILES['att']['error']); // 오류 로그 작성
        return null;
    }
}

include_once('dbconn.php');

$uid = $_POST['uid'];
$wdate = $_POST['wdate'];
$title = $_POST['title'];
$content = $_POST['note'];
$itemname = $_POST['itemname'];
$score = $_POST['score'];

$fname = ''; // 기본 파일명 초기화

if ($_FILES['att']['size'] > 0) {
    $fname = uploadFile(); // 파일첨부한 경우
    if ($fname === null) {
        echo "<script>alert('파일 업로드 실패'); history.go(-1);</script>";
        exit();
    }
}

$sql = "INSERT INTO review(uid, wdate, title, content, itemname, filename, score) 
        VALUES('$uid', '$wdate', '$title', '$content', '$itemname', '$fname', $score)";

if ($conn->query($sql)) {
    echo "<script>alert('리뷰글 저장 완료!!'); location.href='hdex.php';</script>";
} else {
    echo "<script>alert('리뷰글 저장 오류!!'); location.href='community2.php';</script>";
}

$conn->close();
?>