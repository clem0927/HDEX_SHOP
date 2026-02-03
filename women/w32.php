<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css" />
    <style>
        body {
            font-family: 'Nanum Gothic', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin: 40px 20px;
        }
        .image-gallery {
            flex: 0 0 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 20px;
        }
        .image-gallery img {
            width: 100%;
            cursor: pointer;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            padding: 5px;
        }
        .main-image {
            flex: 1;
            text-align: center;
            position: relative;
            overflow: visible; /* 이미지 잘림 방지 */
        }
        .main-image img {
            width: 100%;
            max-width: 500px;
        }
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
        }
        .nav-arrow.left {
            left: 60px; /* left 값을 조정하여 간격을 줄임 */
        }
        .nav-arrow.right {
            right: 60px; /* right 값을 조정하여 간격을 줄임 */
        }
        .product-info {
            flex: 1;
            margin-left: 40px;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .product-info h1 {
            font-size: 20px;
            margin-bottom: 50px;
        }
        
        .product-info .price {
            font-size: 20px;
            color: #333;
            margin-bottom: 5%;
            font-weight: bold;
        }
        .product-info .price del {
            color: red;
            margin-right: 10px;
            font-weight: bold;
            
        }
        .buttons {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }
        .buttons button {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        .buttons button.buy {
            background-color: black;
            color: white;
            border: none;
        }
        .buttons button.cart {
            background-color: white;
            color: black;
            border: 1px solid black;
        }
        .details {
            max-width: 800px;
            margin: 40px auto;
            text-align: center;
        }
        .details img {
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
      <?php
        # 로그인된 상태인지 아닌지 체크하기
        session_start();
        include_once('../dbconn.php');
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
    <ul class="navbar">
        <li class="left">
            <a href="../hdex.php" class="nav-link">DJ</a>
        </li>
        <li class="new"> 
          <a href="../new.php" class="nav-link"><div class="inner-div">NEW & BEST</div></a>
        </li>
        <li class="men">
            <a href="../men.php" class="nav-link"><div class="inner-div">MEN</div></a>
        </li>
        <li class="women">
            <a href="../women.php" class="nav-link"><div class="inner-div">WOMEN</div></a>
        </li>
        <li class="acc">
            <a href="../acc.php" class="nav-link"><div class="inner-div">ACC</div></a>
        </li>
        <li class="community" >
            <a href="../community.php" class="nav-link"><div class="inner-div">COMMUNITY</div></a>
        </li>
        <li class="right1">
        
        </li>
        <li class="right">
        <a href="" class="nav-link"><div class="inner-div2"><img src="images/search.jpg"></img></div></a>
        </li>
        <li class="right">
            <a href="../mypage.php" class="nav-link"><div class="inner-div2"><img src="images/profile.jpg"></img></div></a>
            </li>
        <li class="right" style="margin-right:2.5vw;">
            <a href="../showcart.php" class="nav-link"><div class="inner-div2"><img src="images/shop.jpg"></img></div></a>
        </li>
        <div class="submenu-all">
        <div class="submenu1" >
          <div class="submenu-area">
              <div class="submenu-text1">
                <div class="submenu-textzone">
                <a href="" >신상품전체</a><br>
                <a href="">베스트셀러</a>
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
                <a href="" >상품전체보기</a><br>
                <a href="" >티셔츠&탑</a><br>
                <a href="" >팬츠</a><br>
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
                <a href="" >상품전체보기</a><br>
                <a href="" >티셔츠&탑</a><br>
                <a href="">팬츠</a><br>
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
                <a href="" >상품전체보기</a><br>
                <a href="" >스트랩</a><br>
                <a href="" >리프팅벨트</a><br>
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
                <a href="" >리뷰목록</a><br>
                <a href="" >리뷰작성</a><br>
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
    <div class="container">
        <div class="image-gallery">
            <img src="w/w8.1.jpeg" alt="Thumbnail 1" onclick="showImage(0)">
            <img src="w/w8.2.jpeg" alt="Thumbnail 2" onclick="showImage(1)">
            <img src="w/w8.3.jpeg" alt="Thumbnail 2" onclick="showImage(2)">
            <img src="w/w8.4.jpeg" alt="Thumbnail 2" onclick="showImage(3)">
        </div>
        <div class="main-image">
            <button class="nav-arrow left" onclick="prevImage()">❮</button>
            <img id="mainImage" src="w/w8.1.jpeg" alt="Main Image">
            <button class="nav-arrow right" onclick="nextImage()">❯</button>
        </div>
        <div class="product-info" style="background-color: lightgray">
        <form action="../addcartproc.php" method="get">
          <p>상품명<input type="text" name="cloth" value="<?=$_GET['name']?>" readonly/></p>
          <div class="price">
            <del ><?=$_GET['price']?></del>
            <input type="hidden" name="price" value="<?=$_GET['price']?>">
            <?=$_GET['price']*0.9?>원
            <input type="hidden" name="photo" value="<?=$_GET['photo']?>">
          </div>
          <p>
            사이즈
            <input type="radio" checked name="size" value="S" />S
            <input type="radio" name="size" value="M" />M
            <input type="radio" name="size" value="L" />L
            <input type="radio" name="size" value="XL" />XL
          </p>
          <p>
            수량<input type="number" name="qty" value="1" min="1" max="50" />
          </p>
          <p>총가격<input type="text" /></p>
          <input type="submit" value="장바구니 담기" class="sub" />
        </form>
      </div>
    </div>
    

    <div class="details">
        <h2>상세이미지</h2>
        <img src="w/w8.1.jpeg" alt="Detail 1">
        <img src="w/w8.2.jpeg" alt="Detail 2">
        <img src="w/w8.3.jpeg" alt="Detail 2">
        <img src="w/w8.4.jpeg" alt="Detail 2">
        
    </div>
    <script>      
      const images2 = [
    "w/w8.1.jpeg",
    "w/w8.2.jpeg",
    "w/w8.3.jpeg",
    "w/w8.4.jpeg"
  ];

  let currentIndex2 = 0;

  function showImage(index) {
    currentIndex2 = index;
    document.getElementById('mainImage').src = images2[index];
  }

  function prevImage() {
    currentIndex2 = (currentIndex2 > 0) ? currentIndex2 - 1 : images2.length - 1;
    document.getElementById('mainImage').src = images2[currentIndex2];
  }

  function nextImage() {
    currentIndex2 = (currentIndex2 < images2.length - 1) ? currentIndex2 + 1 : 0;
    document.getElementById('mainImage').src = images2[currentIndex2];
  }
  </script>
  <script src="sub.js">
  </script>
</body>
</html>
