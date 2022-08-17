<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <link rel="stylesheet" href="./css/homepage.css">
  <link rel="stylesheet" href="./css/general_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <?php include "header.php"; ?>
    <div class="content">
      <h3 class="popular">Các mẫu phổ biến hiện nay</h3>
      <div class="popular-content">
        <div class="wrapper">
          <div class="left-arrow"><i id="left-icon" class="fa-solid fa-angle-left fa-3x"></i></div>
          <div class="item1">
            <img src="./image/8th21s011-fw197-l-1.jpg" alt=""  />
          </div>
          <div class="item2">
            <img src="./image/8th22s003-sb988-l-1-u.jpg" alt=""  />
          </div>
          <div class="item3">
            <img src="./image/8th22s003-sw001-l-1-u.jpg" alt=""  />
          </div>
          <div class="right-arrow"><i id='right-icon' class="fa-solid fa-angle-right fa-3x"></i></div>
        </div>
      </div>
      <h3>Các mẫu khác</h3>
      <div class="other-popular">
        <div class="wrapper">
          <div class="item1">
            <img id="img1" src="./image/8th21a004-sb915-l-1.jpg" alt="">
            <p class="mau-1">Sơ mi dài tay sẫm màu</p>
          </div>
          <div class="item2">
            <img id="img2" src="./image/8th21s008-cn022-l-1.jpg" alt="">
            <p class="mau-2">Sơ mi cộc tay kẻ caro</p>
          </div>
          <div class="item3">
            <img id="img3" src="./image/8th22s005-sj726-xl-1-u.jpg" alt="">
            <p class="mau-3">Sơ mi dài tay kẻ sọc</p>
          </div>
          <div class="item4">
            <img id="img4" src="./image/8th22s010-fj020-xl-1-u.jpg" alt="">
            <p class="mau-4">Sơ mi cộc họa tiết</p>
          </div>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </div>
  <script src="./js/homepage.js"></script>
</body>
</html>