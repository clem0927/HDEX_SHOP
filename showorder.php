<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DJ GYM WEAR 4th Festival</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--bootstrap-->
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
      .cart-main{
        margin,padding:0;
        height:250vh;
        width:100%;
        background-color:rgba(0,0,0,0.05);
      }
      .in-main{
        padding-top:3vh;
        margin-bottom:5%;
        background-color:rgba(0,0,0,0.001);
        width:60%;
        height:90%;
        margin-left:auto;
        margin-right:auto;
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
        .delete{
          margin-right:1vw;
          font-weight:bold;
          text-decoration:none;
          padding-right:5px;
          padding-left:5px;
          color:green;
        }
        .delete:hover{
          color:green;
          border:2px solid green;
          border-radius:300px;
        }
        
    </style>
  </head>
  <body>
    <?php
    # porder 테이블에서 레코드 검색하기
    include_once('dbconn.php');
    $uid= $_SESSION['uid'];
    $sql = "select * from porder where uid = '$uid'";
    $result = $conn->query($sql); // select 실행하고 검색된 레코드 집합을 가짐
    if(!$result) {
        // SQL 실행 중에 오류가 발생. DB 접속 종료 
        die("SQL 처리 중에 데이터베이스 오류 발생");
    }
    if($result->num_rows == 0) {
        echo "<script>alert('주문내역이 없습니다.')</script>";
        echo "<script>location.href='mypage.php'</script>";
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
    <h1>주문내역</h1>
    <h3>안녕하세요.<?=$uid?> 님</h3>
    <h4 style="color:green">주문내역은 최대 5개까지만 볼수있어요!</h4>
    </div>
  </div>
  <div class="cart-main" style="border-top:3px solid lightgray;">
    <div class="in-main">
    <?php
    $no = 0;
    while($row = $result->fetch_row()) { //porder
        $sql="select itemname from orditem where ordno='$row[0]'";
        $name=$conn->query($sql);
        $itemnames = []; 
        $itemphoto=[];
        while($row1=$name->fetch_row()){
          $itemnames[]=$row1[0]; //여러개 상품중 첫번째 주문한 상품사진가져오기
        }
        $sql2="select photo from all_items where name='$itemnames[0]'";
        $name2=$conn->query($sql2);
        $row2=$name2->fetch_row();
        $no++;
        if($no==6)break;//5개까지만 담음
    ?>  
      <div class="card" style="width: 100%;height:27vh;margin-bottom:30px;padding-left:1vw;border-radius:25px;">
        <h5 style="padding-top:2vh">결제완료<div style="float:right"><a class="delete" href="deleteorder.php?no=<?=$row[0]?>">x</a></div></h5>
        <div style="display:flex;">
          <div style="width:7vw;height:20vh"><img src="suball/<?=$row2[0]?>" class="card-img-top" alt="..." style="width:100%;height:100%;border-radius:20px"></div>
          <div class="card-body" style="background-color:;padding:0;padding-left:1vw;">
            <p class="card-text" ><?=$row[0]?>번</p>
            <p class="card-title"style="color:gray"><?=$row[2]?> 결제</p>
            <p class="card-text" style="font-weight:bold"><?=$row[6]?>원</p>
            <p><a href="showorderitem.php?ordno=<?=$row[0]?>" style="color:green;text-decoration:none;">주문상세></a></p>
          </div>
        </div>
      </div>
      <?php
    }  // while end
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