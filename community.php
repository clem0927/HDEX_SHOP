<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DJ GYM WEAR 4th Festival</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <style>
        /* 추가된 스타일은 여기에 작성 */
        .mypage-nav {
            padding: 0;
            margin-bottom: 0;
            list-style: none;
            display: flex;
            background-color: white;
        }
        .mypage-nav li {
            margin-left: 1vw;
        }
        .mypage-nav li a {
            display: block;
            text-decoration: none;
            color: black;
        }
        .mypage-nav li a:hover {
            font-weight: bold;
        }
        .mypage-main {
            margin-top: 0px;
        }
        .main-in {
            width: 80%;
            margin-top: 5vh;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .paging_area {
            margin-top: 20px;
        }
        .paging_area a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 0 5px;
            border: 1px solid #ccc;
            color: black;
        }
        .paging_area a.active {
            font-weight: bold;
            background-color: #007bff;
            color: white;
        }
        .paging_area a:hover {
            background-color: #f0f0f0;
        }
        .grid-container {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* 최소 200px 너비를 가지며 자동으로 조정 */
          gap: 20px; /* 그리드 아이템 사이의 간격 */
          max-width: 800px; /* 최대 너비 설정 */
          margin: 0 auto; /* 중앙 정렬을 위한 마진 설정 */
        }

        .grid-item {
          background-color: rgba(0,0,0,0.04);
          padding: 20px;
          text-align: center;
        }
    </style>
</head>
<body>
<?php
session_start();
$uid = $_SESSION['uid'];

include_once('dbconn.php');

$sql = "select * from member where uid = '$uid'";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "<script>alert('로그인후 이용해주세요.')</script>";
    echo "<script>location.href='hdex.php'</script>";
}
?>

        <!--mainmenu 시작-->
        <ul class="navbar">
        <li class="left">
            <a href="hdex.php" class="nav-link">DJ</a>
        </li>
        <li class="new"> 
          <a href="new.php" class="nav-link"><div class="inner-div">NEW & BEST</div></a>
        </li>
        <li class="men">
            <a href="men.php" class="nav-link"><div class="inner-div">MEN</div></a>
        </li>
        <li class="women">
            <a href="women.php" class="nav-link"><div class="inner-div">WOMEN</div></a>
        </li>
        <li class="acc">
            <a href="acc.php" class="nav-link"><div class="inner-div">ACC</div></a>
        </li>
        <li class="community" >
            <a href="community.php" class="nav-link"><div class="inner-div">COMMUNITY</div></a>
        </li>
        <li class="right1">
        
        </li>
        <li class="right">
        <a href="search.php" class="nav-link"><div class="inner-div2"><img src="images/search.jpg"></img></div></a>
        </li>
        <li class="right">
            <a href="mypage.php" class="nav-link"><div class="inner-div2"><img src="images/profile.jpg"></img></div></a>
            </li>
        <li class="right" style="margin-right:2.5vw;">
            <a href="showcart.php" class="nav-link"><div class="inner-div2"><img src="images/shop.jpg"></img></div></a>
        </li>
        <div class="submenu-all">
        <div class="submenu1" >
          <div class="submenu-area">
              <div class="submenu-text1">
                <div class="submenu-textzone">
                <a href="new.php">베스트셀러</a><br>
                <a href="new.php" >신상품</a><br>
                <a href="new.php" >세일</a><br>
                </div>  
              </div>
              <div class="submenu-text2"><img src="images/womenmodel3.jpg" style="margin-left:20%" ></div>
              <div class="submenu-text3"><img src="images/menmodel5.jpg" ></div>
          </div>
        </div>
        <div class="submenu2" >
          <div class="submenu2-area">
              <div class="submenu2-text1">
                <div class="submenu-textzone">
                <a href="men.php" >셔츠</a><br>
                <a href="men.php" >바지</a><br>
                <a href="men.php" >신발</a><br>
                </div>
              </div>
              <div class="submenu2-text2"><img src="images/hdexman1.jpg" style="margin-left:20%"></div>
              <div class="submenu2-text3"><img src="images/hdexman2.jpg" ></div>
          </div>
        </div>
        <div class="submenu3">
          <div class="submenu3-area">
              <div class="submenu3-text1">
                <div class="submenu-textzone">
                <a href="women.php" >상의</a><br>
                <a href="women.php" >하의</a><br>
                <a href="women.php">신발</a><br>
              </div>
              </div>
              <div class="submenu3-text2"><img src="images/womenmodel1.jpg" style="margin-left:20%"></div>
              <div class="submenu3-text3"><img src="images/womenmodel2.jpg" ></div>
          </div>
        </div>
        <div class="submenu4">
          <div class="submenu4-area">
              <div class="submenu4-text1">
                <div class="submenu-textzone">
                <a href="acc.php" >가방</a><br>
                <a href="acc.php" >모자</a><br>
                <a href="acc.php" >악세서리</a><br>
              </div>
              </div>
              <div class="submenu4-text2"><img src="images/strap3.jpg" style="margin-left:20%"></div>
              <div class="submenu4-text3"><img src="images/belt2.jpg"></div>
          </div>
        </div>
        <div class="submenu5" >
          <div class="submenu5-area">
              <div class="submenu5-text1">
                <div class="submenu-textzone">
                <a href="community.php" >리뷰목록</a><br>
                <a href="community.php" >리뷰작성</a><br>
              </div>
              </div>
              <div class="submenu5-text2"><img src="images/cbum.jpg" style="margin-left:20%"></div>
              <div class="submenu5-text3"><img src="images/ronie.jpg"></div>
          </div>
        </div>
        </div>
    </ul>

<hr>
<div class="mypage" style="text-align:left">
    <div style="margin-left:20vw;">
        <h1>간편리뷰</h1>
        <h3>안녕하세요.<?= $uid ?> 님</h3>
    </div>
</div>
<ul class="mypage-nav" style="border-bottom:2px solid black;padding-bottom:1vh ">
    <li style="margin-right:auto"></li>
    <li><a href="community.php" style="font-weight:bold">리뷰목록</a></li>
    <li><a href="#" onclick="alert('**리뷰작성은 상품구매후 구매내역에서만 가능합니다.**\n마이페이지->주문내역->주문상세')">리뷰작성</a></li>
    <li style="margin-left:auto"></li>
</ul>
<div class="mypage-main" style="height:100vh;">
    <div class="main-in">
        <?php
        // 페이징 처리
        $list_size = 6; // 한 페이지에 보여질 레코드 수
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 현재 페이지 번호, 없으면 1페이지로 설정

        $sql_count = "SELECT COUNT(*) FROM review";
        $result_count = $conn->query($sql_count);
        $row_count = $result_count->fetch_row();
        $total_records = $row_count[0]; // 전체 레코드 수

        $total_pages = ceil($total_records / $list_size); // 전체 페이지 수
        $offset = ($page - 1) * $list_size; // SQL 쿼리의 OFFSET 값 계산

        $sql = "SELECT * FROM review ORDER BY no DESC LIMIT $offset, $list_size";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            ?>
            <div class="grid-container">
            <?php
            $count = 0;
            while ($row = $result->fetch_assoc()) {
                // 리뷰 게시글 정보를 가져와서 출력합니다.
                $count++;
                ?>
                <div class="grid-item" style="display:flex;text-align:left;border-radius:20px;">
                    <div style="border:2px solid gray;height:15vh"><img src="upload/<?=$row['filename']?>" style="width:100%;height:100%"></div>
                    <div style="margin-left:20px">
                    <div class="score" ><img src="video/star<?=$row['score']?>.png" style="width:100%;height:3vh"></div>
                    <div style="font-weight:550">제목:<?=$row['title']?></div>
                    <div style="color:green"><?=$row['wdate']?>&nbsp<?=$row['uid']?>님</div>
                    <p></P>
                    
                    <div style="font-weight:bold;color:gray">상품명:<?=$row['itemname']?></div>
                    <div style="font-weight:550">한줄평:<?=$row['content']?></div>
                    </div>
                </div>
                <?php
                // 한 페이지에 최대 6개의 그리드 아이템을 출력하도록 설정
                if ($count >= 6) {
                    break;
                }
            }
            ?>
            </div>
            
            <div class="paging_area">
                <?php
                // 이전 페이지 링크
                if ($page > 1) {
                    echo "<a href='community.php?page=" . ($page - 1) . "'>PREV</a>";
                } else {
                    echo "<span>PREV</span>";
                }

                // 페이지 번호 링크
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $page) {
                        echo "<a class='active' href='#'>$i</a>";
                    } else {
                        echo "<a href='community.php?page=$i'>$i</a>";
                    }
                }

                // 다음 페이지 링크
                if ($page < $total_pages) {
                    echo "<a href='community.php?page=" . ($page + 1) . "'>NEXT</a>";
                } else {
                    echo "<span>NEXT</span>";
                }
                ?>
            </div>
            <?php
        } else {
            echo "<p>리뷰 게시글이 없습니다.</p>";
        }
        ?>
    </div>
</div>
<div class="footer">
    <p>&copy; 2024 DJ GYM WEAR. All rights reserved.</p>
</div>
<script src="main.js">
</script>
</body>
</html>