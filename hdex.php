<!DOCTYPE html>
<html lang="ko">
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

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    <style>
      .submit{
        cursor:pointer;
        font-size:15px;
      }
      .submit:hover{
        font-size:17px;
      }
      .new-acc-section {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px 0;
    padding: 40px 0;
    background-color: #fff;
}
.new-acc-section .image-container {
    position: relative;
    width: 50%;
    padding-bottom: 50%;
    overflow: hidden;
}
.new-acc-section img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.3s ease;
}
.new-acc-section img:hover {
    filter: brightness(70%);
}
.new-acc-section .label {
    position: absolute;
    font-size: 24px;
    font-weight: bold;
    color: white;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
    </style>
</head>
<body>
<?php
        # 로그인된 상태인지 아닌지 체크하기
        session_start();
        include_once('dbconn.php');
        $isLogged = false;
        if(isset($_SESSION['uid'])) {
            $isLogged = true;   // 로그인된 것을 체크해 둠
        }
        function getButtonValue($isLogged) {
          if ($isLogged) {
              return "로그아웃";
          } else {
              return "로그인";
          }
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
    <hr style="margin-bottom:0;margin-top:0;">
    <div class="sign">
      <div class="inner-sign">
        <div><input type="button" id="signupButton" value="회원가입" class="signbtn" style="font-size:1.5vh;">&nbsp;</div>
        <div>|</div>
        <div>&nbsp;<input type="button"  value="<?=getButtonValue($isLogged)?>" id="signinButton" class="signbtn" style="font-size:1.5vh;"></button></div>
      </div>
    </div>

    <div id="myModal" class="modal">
      <div class="modal-content" style="text-align: center;">
        <span class="close">&times;</span>
        <h2>DJ WEAR에 오신것을 환영합니다!</h2>
        <form action="signup.php" method="get" >
          <hr>
          <ul >
          <li style="width:45%;">
          <p><input type="text" placeholder="아이디" name="uid" 
          style="width:70%;height:20px;border:2px solid lightgray"></p>
          <p><input type="password" placeholder="비밀번호" name="pwd"
          style="width:70%;height:20px;border:2px solid lightgray"></p>
          <p><input type="text" placeholder="이메일" name="email"
          style="width:70%;height:20px;border:2px solid lightgray"></p>
          <p><input type="text" placeholder="이름" name="name"
          style="width:70%;height:20px;border:2px solid lightgray"></p>
          <p><input type="text" placeholder="전화번호" name="telno"
          style="width:70%;height:20px;border:2px solid lightgray"></p>
          <input type="submit" value="가입" class="submit"
          style="width:70%;height:40px;color:white;background-color:black">
          </li>
          <li style="width:55%">
            <img src="images/hdexwomen1.jpg" style="width:100%">
          </li>
          </ul>
          </form>
      </div>
    </div>
    <div id="myModal2" class="modal">
      <div class="modal-content" style="text-align: center;">
        <span class="close">&times;</span>
        <h2>로그인후 멋진 상품들을 만나보세요!</h2>
        <hr>
        <form action="signin.php" action="get">
          <hr style="border:3px;">
          <ul >
          <li style="width:45%">
          <p><input type="text" placeholder="아이디" name="uid"
          style="width:70%;height:20px;border:2px solid lightgray"></p>
          <p><input type="password" placeholder="비밀번호" name="pwd"
          style="width:70%;height:20px;border:2px solid lightgray"></p>
          <input type="submit" value="로그인" class="submit"
          style="width:70%;height:40px;color:white;background-color:black">
          </li>
          <li style="width:55%">
            <img src="images/hdexsigninman.jpg" style="width:100%">
          </li>
        </form>
      </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      const signinButton = document.getElementById("signinButton"); 
      const modal = document.getElementById("myModal2");
      const closeModalBtn = modal.querySelector(".close"); 
      // 로그인 버튼 클릭 시 모달 열기
      signinButton.addEventListener("click", function () {
        <?php if ($isLogged): ?>
          // 로그인 상태일 때, 로그아웃 처리를 수행합니다.
          alert("로그아웃 성공!");
          window.location.href = "signout.php";
        <?php else: ?>
          modal.style.display = "block";
        <?php endif; ?>
      });

      // 모달 닫기 버튼 이벤트 처리
      closeModalBtn.onclick = function () {
        modal.style.display = "none";
      };

      // 모달 외부 클릭 시 닫기
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    });
    </script>
<!--mainmenu 끝-->
    <div class="banner">
        <video id="bgVideo" autoplay muted loop>
        <source src="video/motivation.mp4" type="video/mp4" />
        Your browser does not support the video tag.
        </video>
        <div class="banner-content">
        <h1>DJ GYM WEAR</h1>
        </div>
        <div class="control-buttons">
          <button id="muteButton" onclick="toggleMute()">Unmute</button>
          <button id="playPauseButton" onclick="togglePlayPause()">Pause</button>
      </div>
    </div>
    <div class="content">
      <h2>DJ GYM WEAR의 더 강력해진 MEN WOMEN 라인업!</h2>
    </div>
    <div class="new-acc-section" style="padding:0;margin:0">
        <div class="image-container">
            <a href="women.php"><img src="video/4.jpg" alt="New and ACC Image 1">
            <div class="label new">WOMEN</div></a>
        </div>
        <div class="image-container">
            <a href="men.php"><img src="video/2.jpg" alt="New and ACC Image 2">
            <div class="label acc">MEN</div></a>
        </div>
    </div>
    <div class="content">
      <h2>DJ GYM WEAR의 다양한 상품들을 만나보세요!</h2>
    </div>
    <div class="product-carousel" style="padding:0;margin:0">
      <div class="product-window">
          <div class="product-list" id="productList">
              <!-- Product Images Here -->
              <img src="video/1.jpg" alt="Product 1">
              <img src="video/2.jpg" alt="Product 2">
              <img src="video/3.jpg" alt="Product 3">
              <img src="video/4.jpg" alt="Product 4">
              <img src="video/5.jpg" alt="Product 5">
              <img src="video/6.jpg" alt="Product 6">
              <img src="video/7.jpg" alt="Product 7">
              <img src="video/8.jpg" alt="Product 8">
              <img src="video/9.jpg" alt="Product 9">
              <img src="video/10.jpg" alt="Product 10">
              <!-- Add more as needed -->
          </div>
      </div>
      <button class="next" onclick="scrollRight()">❯</button>
  </div>
  <div class="content">
      <h2>화려한 신발과 악세사리 상품들!</h2>
    </div>
  <div class="product-carousel" style="padding:0;margin:0">
  <div class="scroll-container" id="scrollContainer">
      <!-- 이미지들을 여기에 배치 -->
      <img src="video/11.png" alt="Image 1">
      <img src="video/12.png" alt="Image 2">
      <img src="video/13.png" alt="Image 3">
      <img src="video/14.png" alt="Image 4">
      <img src="video/15.png" alt="Image 5">
      <img src="video/16.png" alt="Image 6">
      <img src="video/17.png" alt="Image 7">
      <!-- 더 많은 이미지 추가 -->
  </div>
</div>
  <div class="footer">
      <p>&copy; 2024 DJ GYM WEAR. All rights reserved.</p>
  </div>
    <script src="main.js">
      // JavaScript to handle submenu height
    </script>
  </body>
</html>
