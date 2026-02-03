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
      .mypage-nav{
        padding:0;
        margin-bottom:0;
        list-style:none;
        display:flex;
        background-color:white;
      }
      .mypage-nav li{
        background-color:;
        margin-left:1vw;
      }
      .mypage-nav li a{
        display:block;
        text-decoration:none;
        color:black;
        margin-bottom:0;
      }
      .mypage-nav li :hover{
        font-weight:bold;
      }
      .mypage-main{
        margin-top:0px;
        
      }
      .form-ul li{
        display:block;
        
      }
      .main-in{
        width:60%;
        margin-top:5vh;
        background-color:white;
        margin-left:auto;
        margin-right:auto;
        text-align:left;
        display:flex;
        height:100%;
      }
      .change-form input{
        width:50%;
        height:4vh;
        border:3px solid lightgray;
      }
      .change-form div{
        font-weight:bold;
      }
    </style>
  </head>
  <body>
    <?php
    # 로그인한 사용자의 회원정보 읽어오기
    session_start();
    if (!isset($_SESSION['uid'])) {
      echo "<script>alert('로그인후 이용해주세요.')</script>";
      echo "<script>location.href='hdex.php'</script>";
      exit; // 이후의 코드를 실행하지 않도록 종료
  }
    $uid = $_SESSION['uid'];
    $pwd = $_SESSION['pwd'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $telno = $_SESSION['telno'];
    $regdate = $_SESSION['regdate'];
    $point = $_SESSION['point'];
    
    include_once("dbconn.php");
    $sql = "select * from member where uid = '$uid'";
    $result = $conn->query($sql);
    if($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }else{
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
    <h1>마이페이지</h1>
    <h3>안녕하세요.<?=$uid?> 님</h3>
    </div>
  </div>
  <ul class="mypage-nav" style="border-bottom:2px solid black; padding-bottom:1vh ">
    <li style="margin-right:auto"></li>
    <li><a href="mypage.php" style="font-weight:bold">회원정보</a></li>
    <li><a href="mypage2.php" >정보변경</a></li>
    <li><a href="showorder.php" >주문내역</a></li>
    <li style="margin-left:auto"></li>
  </ul>
    <div class="mypage-main" style="height:160vh; ">
    <div class="main-in">
      <div style="width:20%;background-color:rgba(0,0,0,0.03);height:50%;">
      <h2>세부정보</h2>
      <h4><?=$name?></h4>
      <h4><?=$telno?></h4>
      <h2>마일리지</h2>
      <h4><?=$point?>P</h4>
      </div>
      <div style="width:35%;background-color:rgba(0,0,0,0.03);height:50%;text-align:left" >
      <h2>로그인 상세정보</h1>
      <h3>아이디</h3>
      <h4><?=$uid?></h4>
      <h3>이메일</h3>
      <h4><?=$email?></h4>
      <br>
      <h2>가입일자</h2>
      <h4><?=$regdate?></h4>
      <br>
      
      </div>
      <div style="width:45%"><img src="images/showinfo.jpg" style="width:100%;height:50%;"></div>
    </div>
  </div>
  <div class="footer">
      <p>&copy; 2024 DJ GYM WEAR. All rights reserved.</p>
  </div>
  <script src="main.js">
  </script>
  </body>
</html>
