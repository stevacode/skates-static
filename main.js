$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 50) {
    $(".fixed-top").addClass("sticky");
  } else {
    $(".fixed-top").removeClass("sticky");
  }
});

// $(window).on("Scroll", function () {
//   var scroll = $(window).scrollTop();
//   if (scroll >= 70) {
//     $(".fixed-top").addClass("sticky");
//   } else {
//     $(".fixed-top").removeClass("sticky");
//   }
// }); ovaj kod ne radi
