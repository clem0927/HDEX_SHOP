<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DJ GYM WEAR 4th Festival</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Nanum+Gothic&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <style>
      body {
                text-align: center;
            }
      .cart-main{
        margin,padding:0;
        height:100vh;
        width:100%;
      }
      .in-main{
        margin-top:5%;
        margin-bottom:5%;
        background-color:rgba(0,0,0,0.01);
        width:70%;
        height:50%;
        margin-left:auto;
        margin-right:auto;
      }
      #cloth {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
          margin-left: auto;
          margin-right: auto;
      }
      #cloth td, #cloth th {
          border: 1px solid #ddd;
          padding: 8px;
      }
      #cloth tr:nth-child(even){background-color: #f2f2f2;}
      #cloth tr:hover {background-color: #ddd;}
      #cloth th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: black;
          color: white;
      }
      #cloth img {
          width: 120px;
          height: 80px;
      }
      .btn {
          background-color: #4CAF50;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 70%;
          opacity: 0.9;
          margin-top: 10px;
      }
      .btn:hover {
          opacity: 1;
      }
    </style>
  </head>
  <body>
  <?php
    # orditem 테이블에서 레코드 검색하기
    include_once('dbconn.php');
    $ordno = $_GET['ordno'];
    $uid=$_SESSION['uid'];
    $sql = "select * from orditem where ordno = '$ordno'";
    $result = $conn->query($sql); // select 실행하고 검색된 레코드 집합을 가짐
    if(!$result) {
        // SQL 실행 중에 오류가 발생. DB 접속 종료 
        die("SQL 처리 중에 데이터베이스 오류 발생");
    }
    if($result->num_rows == 0) {
        echo "<script>alert('주문상세내역이 없습니다.')</script>";
        echo "<script>location.href='hdex.php'</script>";
    }?>
    
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
    <h1>주문 상세내역</h1>
    <h3>안녕하세요.<?=$uid?> 님</h3>
    </div>
  </div>
  <hr>
  <div class="cart-main">
    <div class="in-main">
    <hr>
    <h1>영수증</h1>
    <hr>
    <h2>구매자:<?=$uid?></h2>
    <hr>
    <h3>구매처:DJ GYM WEAR</h3>
    <table id="cloth">
        <tr>
            <th>주문번호</th><th>순번</th>
            <th>상품명</th><th>사이즈</th><th>수량</th><th>가격</th><th>리뷰</th>
        </tr>
    <?php
    while($row = $result->fetch_row()) {
    ?>
    <!-- 검색된 레코드를 HTML 테이블 형식으로 출력하기 -->
        <tr>
            <td><?=$row[0]?></td>
            <td><?=$row[1]?></td>
            <td><?=$row[2]?></td>
            <td><?=$row[3]?></td>
            <td><?=$row[4]?></td>
            <td><?=$row[5]?>원</td>
            <td>
              <a href="community2.php?itemname=<?=$row[2]?>"><input type="submit" value="작성"></a>
            </td>
        </tr>
    <?php
    }  // while end
    ?>
    </table>
    </div>
  </div>
  <div class="footer">
      <p>&copy; 2024 DJ GYM WEAR. All rights reserved.</p>
  </div>
  <script src="main.js">
  </script>
  </body>
</html>