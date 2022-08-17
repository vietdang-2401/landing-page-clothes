$(document).ready(function () {
  $('#right-icon').click(function () {
    for (let i = 1; i <= 3; i++) {
      var itm = $('.popular-content .wrapper .item' + i);
      var ord = itm.css('order');
      ord++;
      if (ord == 4) {
        itm.animate({
          order: 1,
        });
      } else {
        itm.animate({
          order: ord,
        });
      }
    }
  });

  $('#left-icon').click(function () {
    for (let i = 1; i <= 3; i++) {
      var itm = $('.popular-content .wrapper .item' + i);
      var ord = itm.css('order');
      ord--;
      if (ord == 0) {
        itm.animate({
          order: 3,
        });
      } else {
        itm.animate({
          order: ord,
        });
      }
    }
  });

  $('#img1').hover(
    function () {
      $(this).attr('src', './image/8th21a004-sb915-1.jpg');
    },
    function () {
      $(this).attr('src', './image/8th21a004-sb915-l-1.jpg');
    }
  );

  $('#img2').hover(
    function () {
      $(this).attr('src', './image/8th21s008-cn022-2-thumb.jpg');
    },
    function () {
      $(this).attr('src', './image/8th21s008-cn022-l-1.jpg');
    }
  );

  $('#img3').hover(
    function () {
      $(this).attr('src', './image/8th22s005-sj726-1.jpg');
    },
    function () {
      $(this).attr('src', './image/8th22s005-sj726-xl-1-u.jpg');
    }
  );

  $('#img4').hover(
    function () {
      $(this).attr('src', './image/8th22s010-fj020-1.jpg');
    },
    function () {
      $(this).attr('src', './image/8th22s010-fj020-xl-1-u.jpg');
    }
  );
});
