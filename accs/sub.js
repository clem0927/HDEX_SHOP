document.addEventListener(
  "click",
  () => {
    video.play();
    video.muted = false;
    muteButton.textContent = "Mute";
  },
  { once: true }
);

// General function to manage submenu behavior
function manageSubmenu(navbarItems, submenu) {
  navbarItems.forEach((item) => {
    item.addEventListener("mouseover", function () {
      submenu.style.height = "30vh";
    });

    item.addEventListener("mouseout", function (event) {
      if (!submenu.contains(event.relatedTarget)) {
        submenu.style.height = "0";
      }
    });

    submenu.addEventListener("mouseover", function () {
      submenu.style.height = "30vh";
    });

    submenu.addEventListener("mouseout", function (event) {
      if (!navbarItems[0].contains(event.relatedTarget)) {
        submenu.style.height = "0";
      }
    });
  });
}

// Apply general function to each submenu
const submenu1 = document.querySelector(".submenu1");
const submenu2 = document.querySelector(".submenu2");
const submenu3 = document.querySelector(".submenu3");
const submenu4 = document.querySelector(".submenu4");
const submenu5 = document.querySelector(".submenu5");

manageSubmenu(document.querySelectorAll(".new"), submenu1);
manageSubmenu(document.querySelectorAll(".men"), submenu2);
manageSubmenu(document.querySelectorAll(".women"), submenu3);
manageSubmenu(document.querySelectorAll(".acc"), submenu4);
manageSubmenu(document.querySelectorAll(".community"), submenu5);

const video = document.getElementById("bgVideo");
const productList = document.getElementById("productList");
const images = document.querySelectorAll(".product-list img");
const totalImages = images.length;
let currentIndex = 0; // 현재 위치를 나타내는 인덱스

function toggleMute() {
  if (video.muted) {
    video.muted = false;
    document.getElementById("muteButton").textContent = "Mute";
  } else {
    video.muted = true;
    document.getElementById("muteButton").textContent = "Unmute";
  }
}

function togglePlayPause() {
  if (video.paused) {
    video.play();
    document.getElementById("playPauseButton").textContent = "Pause";
  } else {
    video.pause();
    document.getElementById("playPauseButton").textContent = "Play";
  }
}

function scrollRight() {
  currentIndex += 5;
  if (currentIndex >= totalImages) {
    currentIndex = 0; // 처음으로 초기화
  }
  updateSlidePosition();
}

function scrollLeft() {
  currentIndex -= 5; // 왼쪽으로 5개 이미지 이동
  if (currentIndex < 0) {
    // 총 이미지 개수에서 마지막 세트의 이미지 개수를 빼줍니다.
    // 예를 들어 총 23개 이미지가 있다면, 마지막 세트는 3개이고, 총 개수에서 3을 빼서 20으로 이동합니다.
    currentIndex = totalImages - (totalImages % 5 ? totalImages % 5 : 5);
  }
  updateSlidePosition();
}

function updateSlidePosition() {
  productList.style.transform = `translateX(-${currentIndex * (100 / 5)}%)`; // 화면에 보이는 이미지의 너비 비율을 기반으로 이동
}
document.addEventListener("DOMContentLoaded", function () {
  const signupButton = document.getElementById("signupButton");
  const modal = document.getElementById("myModal");
  const closeModalBtn = modal.querySelector(".close"); // 모달 내부의 close 버튼을 찾습니다.

  // 회원가입 버튼 클릭 시 모달 열기
  signupButton.addEventListener("click", function () {
    modal.style.display = "block";
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
