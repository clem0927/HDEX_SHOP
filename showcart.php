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
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!--bootstrap-->
    <link rel="stylesheet" href="style.css" />
    <style>
      .cart-main{
        margin,padding:0;
        height:250vh;
        width:100%;
      }
      .in-main{
        margin-top:5%;
        margin-bottom:5%;
        background-color:rgba(0,0,0,0.02);
        width:70%;
        height:90%;
        margin-left:auto;
        margin-right:auto;
      }
      .btns {
          background-color: green;
          color: white;
          margin:0;
          padding:10px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom: 15px;
          border-radius:20px;
          font-size:17px;
      }
      .btns:hover {
          
          font-weight:bold;
      }
      .btn-area{
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        height:25vh;
        margin,padding:0;
      }
      .calc{
        background-color:white;
        text-align:center;
        border:1px solid lightgray;
        height:5vh;
        font-size:3vh;
      }
    </style>
  </head>
  <body>
    <?php
    # cart 테이블에서 레코드 검색하기
    include_once('dbconn.php');
    $uid = $_SESSION['uid'];
    $sql = "select * from cart where uid = '$uid' order by cloth, size";
    $result = $conn->query($sql); // select 실행하고 검색된 레코드 집합을 가짐
    if(!$result) {
        // SQL 실행 중에 오류가 발생. DB 접속 종료 
        die("SQL 처리 중에 데이터베이스 오류 발생");
    }
    if($result->num_rows == 0) {
        echo "<script>alert('장바구니에 담긴 상품이 없습니다.')</script>";
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
    <h1>장바구니</h1>
    <h3>안녕하세요.<?=$uid?> 님</h3>
    </div>
  </div>
  <hr>
  <div class="cart-main">
    <div class="in-main">
      <form action="removecart.php" method="get" >
      <?php
      $no = 0;
      $cost=0;
      $delamt=0;
      $total=0;
      while($row = $result->fetch_row()) { 
          $no++;
          if($no>6) break; //최대 6개까지만 출력
          $image=[];
          $cost+=$row[4];
      ?>
      <!-- 검색된 레코드를 HTML 테이블 형식으로 출력하기 -->
      <div class="card" style="width:100%;height:27vh;margin-bottom:30px;padding-left:1vw;border-radius:0px;">
        <h5 style="padding-top:2vh"><input type="checkbox" name="chk[]" value="<?=$row[1]?>@<?=$row[2]?>@<?=$row[3]?>" style="transform:scale(1.5)"> <!--주키가 옷이름,사이즈,수량이라-->
        <?=$no?>번</h5>
        <?php

        ?>
        <div style="display:flex">
          <img src="suball/<?=$row[5]?>" class="card-img-top" alt="..." style="width:150px;height:85%;border-radius:20px">
          <div class="card-body" style="background-color:;padding:0;padding-left:1vw;">
            <p class="card-text" >주문자:<?=$row[0]?></p>
            <p class="card-title"style="color:gray">상품명:<?=$row[1]?> </p>
            <p class="card-text" style="font-weight:bold">사이즈:<?=$row[2]?></p>
            <p class="card-text" style="font-weight:bold">수량:<?=$row[3]?></p>
            <p class="card-text" style="font-weight:bold;color:green">가격:<?=$row[4]?>원
          </div>
        </div>
      </div>
      <?php
      }  // while end
      if($no<=3)$delamt=3000;
      else $delamt=4000;
      $total=$delamt+$cost;
      ?>
      <div class="calc">총가격:<?=$cost?>+배달비:<?=$delamt?>(3개이하:3000원/4개이상:4000원)=<span style="font-weight:bold;"><?=$total?>원</span></div>
      <div class="btn-area" style="width:20%">
        <p></p>
        <button type="submit" class="btns">선택삭제</button> 
        <input type="button" value="주문하기(최대6개)" onclick="location.href='ordernew.php?no=<?=$no?>'" class="btns">
      </div>
      </form>
    </div>
    </div>
  </div>
  <div class="footer">
      <p>&copy; 2024 DJ GYM WEAR. All rights reserved.</p>
  </div>
  <script src="main.js">
  </script>
  </body>
</html>
