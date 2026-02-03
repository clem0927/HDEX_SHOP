<?php
# porder, orditem 테이블에 레코드 추가하기
# cart 테이블에서 레코드 삭제하기
include_once('dbconn.php');
# 트랜잭션 처리를 위해 자동커밋을 해제하기
$conn->autocommit(false);  // autocommit 설정을 해제 
# ordernew.php에서 전달되는 데이터를 받아오기
$ordno = $_POST['ordno'];
$uid = $_POST['uid'];
$orddate = date('Y/m/d');
$address = $_POST['address'];
$amount = intval($_POST['amount']);
$delamt = intval($_POST['delamt']);
$total = $amount + $delamt;
$sql = "insert into porder values('$ordno','$uid','$orddate',
        '$address',$amount,$delamt,$total)";
if($conn->query($sql)) { // porder 테이블에 insert 성공
    // orditem 테이블에 상세내역 추가하기
    $sql = "select * from cart where uid = '$uid'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $seq = 0;
        while($row = $result->fetch_row()) {
            $seq++;
            $cloth = $row[1];
            $size = $row[2];
            $qty = $row[3];
            $price = $row[4];
            $sql = "insert into orditem values('$ordno',$seq,'$cloth',
                    '$size',$qty,$price)";
            if($conn->query($sql)) {
                // cart 테이블의 장바구니 내역 삭제
                $sql = "delete from cart where uid = '$uid'";
                if($conn->query($sql)) {
                    $conn->commit();  // 지금까지 수행한 연산을 모두 확정.
                    echo "<script>alert('주문처리 완료!!');
                            location.href='hdex.php';</script>";
                } else {
                    die('장바구니 내역 삭제 중에 오류 발생');
                    $conn->rollback();
                }
            } else {
                die('주문상세내역 저장 중에 오류 발생');
                $conn->rollback();
            }
        }
    } else {
        die('장바구니에 저장된 물품이 없습니다.');
        $conn->rollback();
    }
} else {
    die('주문정보 생성 중에 오류 발생');
    $conn->rollback(); // 현재까지 수행한 연산을 취소 
}
$conn->autocommit(true);
$conn->close();
?>
