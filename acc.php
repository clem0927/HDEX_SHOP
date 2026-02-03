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
    <link rel="stylesheet" href="style2.css" />
    <style>
      body {
        font-family: "Nanum Gothic", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        scroll-behavior: smooth;
      }
      .category-tabs {
        display: flex;
        justify-content: flex-start;
        margin: 40px 0;
        border-bottom: 1px solid #ddd;
      }
      .category-tabs a {
        text-decoration: none;
        color: black;
        margin: 0 40px;
        padding-bottom: 10px;
        font-weight: bold;
      }
      .category-tabs a.active {
        border-bottom: 2px solid black;
      }
      .content {
        padding: 20px;
      }
      .title-section {
        text-align: left;
        margin-bottom: 40px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
      }
      .title-section h2 {
        font-size: 24px;
        margin: 0;
        font-weight: bold;
      }
      .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 20px;
      }
      .product-item {
        background-color: white;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: left;
        justify-content: flex-end;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .product-item img {
        width: 100%;
        height: auto;
        vertical-align: bottom;
        transition: transform 0.3s ease;
      }
      .product-item:hover {
        transform: scale(1.05) rotate(-3deg);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
      .product-item p {
        margin: 10px 0;
        text-align: left;
      }
      .original-price {
        text-decoration: line-through;
        color: gray;
      }
      .discounted-price {
        color: red;
      }
      .footer {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: white;
      }
      a{
        text-decoration:none;
        color:black;
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
    <div class="category-tabs">
      <a href="#best-sellers" class="active">가방</a>
      <a href="#new-arrivals">모자</a>
      <a href="#sale">악세서리</a>
    </div>

    <div class="content">
      <div class="title-section" id="best-sellers">
        <h2>가방</h2>
      </div>

      <div class="product-grid">
      <?php
    $sql="select*from acc";
    $result=$conn->query($sql);
    if($result && $result->num_rows>0){
      for($i=0;$i<4;$i++){
        $result->data_seek($i);
        $row=$result->fetch_assoc();?>
        <a href="accs/acc<?=$row['id']?>.php?isLogged=<?=$isLogged?>&name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>">
        <div class="product-item">
          <img src="accs/acc/<?=$row['photo']?>" alt="상품 이미지 1" />
          <p><?=$row['name']?> </p>
          <p class="discounted-price"><?=$row['price']*0.9?>원</p>
          <p class="original-price"><?=$row['price']?>원</p>
        </div>
        </a>
        <!-- 추가 상품 항목들 -->
        <?php  
          }
        }
        ?>
        
      </div>

      <div class="title-section" id="new-arrivals" style="margin-top: 80px">
        <h2>모자</h2>
      </div>

      <div class="product-grid">
      <?php
    $sql="select*from acc";
    $result=$conn->query($sql);
    if($result && $result->num_rows>0){
      for($i=4;$i<8;$i++){
        $result->data_seek($i);
        $row=$result->fetch_assoc();?>
        <a href="accs/acc<?=$row['id']?>.php?isLogged=<?=$isLogged?>&name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>">
        <div class="product-item">
          <img src="accs/acc/<?=$row['photo']?>" alt="상품 이미지 1" />
          <p><?=$row['name']?> </p>
          <p class="discounted-price"><?=$row['price']*0.9?></p>
          <p class="original-price"><?=$row['price']?>원</p>
        </div>
        </a>
        <!-- 추가 상품 항목들 -->
        <?php  
          }
        }
        ?>
      </div>

      <div class="title-section" id="sale" style="margin-top: 80px">
        <h2>악세서리</h2>
      </div>

      <div class="product-grid">
      <?php
    $sql="select*from acc";
    $result=$conn->query($sql);
    if($result && $result->num_rows>0){
      for($i=8;$i<12;$i++){
        $result->data_seek($i);
        $row=$result->fetch_assoc();?>
        <a href="accs/acc<?=$row['id']?>.php?isLogged=<?=$isLogged?>&name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>">
        <div class="product-item">
          <img src="accs/acc/<?=$row['photo']?>" alt="상품 이미지 1" />
          <p><?=$row['name']?> </p>
          <p class="discounted-price"><?=$row['price']*0.8?></p>
          <p class="original-price"><?=$row['price']?>원</p>
        </div>
        </a>
        <!-- 추가 상품 항목들 -->
        <?php  
          }
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
