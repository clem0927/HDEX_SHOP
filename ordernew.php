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
      .cart-main{
        margin,padding:0;
        height:100vh;
        width:100%;
      }
      .in-main{
        margin-top:5%;
        margin-bottom:5%;
        background-color:rgba(0,0,0,0.03);
        width:70%;
        height:90%;
        margin-left:auto;
        margin-right:auto;
      }
      .main-in{
        width:50%;
        margin-top:5vh;
        background-color:white;
        margin-left:auto;
        margin-right:auto;
        text-align:center;
        
      }
      .order-form input{
        width:50%;
        height:4vh;
        border:3px solid lightgray;
      }
      .order-form div{
        font-weight:bold;
      }
      .submit{
        cursor:pointer;
        font-size:14px;
      }
      .submit:hover{
        font-size:15px;
      }
    </style>
  </head>
  <body>
  <?php
        # 주문자는 세션정보, 주문번호는 생성, 주문일자는 오늘날짜, 
        # 주문금액은 장바구니 합계금액
        session_start();
        include_once('dbconn.php');
        if(!isset($_SESSION['uid'])) {  // 로그인을 하지 않은 상태
            echo "<script>alert('로그인을 먼저 해야 합니다.');
                    location.href='hdex.php'</script>";
        }
        $uid = $_SESSION['uid'];
        $name = $_SESSION['name'];
        $noi=$_GET['no'];//주문한 상품수량
        if($noi>3){
          $delamt=4000; //4,5,6:4000원 1,2,3:3000원
        }else{
          $delamt=3000;
        }
        # 주문번호 형식 : 년월일-순번
        # porder에 저장된 마지막 주문번호를 가져옴
        $sql = "select max(ordno) from porder";
        $result = $conn->query($sql);
        if(!$result) {  // 주문이 하나도 없을 때 
          $no = 1;
          $ordno = date('Y').date('m').date('d')."-".$no;
        } else {  // 마지막 주문을 가져왔을 때
          $row = $result->fetch_row();
          $today = date('Y').date('m').date('d');
          $ymd = substr($row[0], 0, strpos($row[0], "-"));
          if($today == $ymd) {  // 마지막 주문이 오늘날짜와 같을 때. 순번증가 
            $no = substr($row[0], strpos($row[0],"-")+1, 2);
            $no++;
            $ordno = $today."-".$no;
          } else {  // 오늘날짜와 다를 때. 오늘의 첫 주문
            $no = 1;
            $ordno = $today."-".$no;
          }
        }
        
        # 주문금액 : 장바구니 가격의 합계
        $sql = "select sum(price) from cart where uid = '$uid'";
        $result = $conn->query($sql);
        if(!$result) {  // select 결과가 NULL 일 때
            $amount = 0;
        } else {
            $row = $result->fetch_row();  // 검색된 결과 한 건을 색인배열로 가져옴
            $amount = $row[0];
        }
        $conn->close();
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
    <h1>주문하기</h1>
    <h3>안녕하세요.<?=$uid?> 님</h3>
    </div>
  </div>
  <hr>
  <div class="order-main" style="height:100vh; ">
    <div class="main-in">
      <h2>주문하기</h2>
      <form action="ordernewproc.php" method="post" class="order-form">
          <div>주문자</div>
          <input type="text" name="uid" value="<?=$uid?>" hidden>
          <p><input type="text" value="<?=$name?>" name="name" readonly></p>
          <div>주문번호</div>
          <p><input type="text" value="<?=$ordno?>" name="ordno" readonly></p>
          <div>배달주소</div>
          <p><input type="text" name="address" placeholder="주소를 입력해주세요."></p>
          <div>주문금액</div>
          <p><input type="text" value="<?=$amount?>원(상품수:<?=$noi?>)"
          name="amount" readonly></p>
          <div>배달료</div>
          <p><input type="text" value="<?=$delamt?>원"
          name="delamt" readonly></p>
          <br>
          
          <input type="submit"value="주문하기"style="background-color:black;color:white;height:5vh;width:50%">
      </form>
    </div>
  </div>
  <div class="footer">
      <p>&copy; 2024 DJ GYM WEAR. All rights reserved.</p>
  </div>
  <script src="main.js">
  </script>
  </body>
</html>
