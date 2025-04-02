$(document).ready(function () {
  "use strict";
  /* ========================================================================
     Fullscreen burger menu
   ========================================================================== */
  $(".menu-trigger, .mobilenav").click(function () {
    $(".mobilenav").fadeToggle(500);
  });
  $(".menu-trigger, .mobilenav").click(function () {
    $(".top-menu").toggleClass("top-animate");
    $(".mid-menu").toggleClass("mid-animate");
    $(".bottom-menu").toggleClass("bottom-animate");
  });

  /* ========================================================================
     Insert iconn in profil list
   ========================================================================== */

  $(".profil .row .col-md-4:nth-child(1) .service .icon i").addClass(
    "fab fa-html5"
  );
  $(".profil .row .col-md-4:nth-child(2) .service .icon i").addClass(
    "fab fa-sass"
  );
  $(".profil .row .col-md-4:nth-child(3) .service .icon i").addClass(
    "fab fa-react"
  );
  $(".profil .row .col-md-4:nth-child(4) .service .icon i").addClass(
    "fas fa-mobile-alt"
  );
  $(".profil .row .col-md-4:nth-child(5) .service .icon i").addClass(
    "fas fa-code"
  );
  $(".profil .row .col-md-4:nth-child(6) .service .icon i").addClass(
    "fab fa-js"
  );

  /* ========================================================================
     On click menu item animate to the section
   ========================================================================== */
  $(".mobilenav li, .back-to-top").on("click", function () {
    var target = $(this).data("rel");
    var $target = $(target);
    $("html, body").stop().animate(
      {
        scrollTop: $target.offset().top,
      },
      900,
      "swing"
    );
  });

  /* Header Height Control
   ========================================================================== */
  var height = $(window).height();
  if (height < 600) {
    height = 600;
  }
  $("header").css({
    minHeight: 0,
    maxHeight: "none",
    height: height,
  });

  /* ========================================================================
     Wow Animation
   ========================================================================== */
  var wow = new WOW({
    mobile: false,
  });
  wow.init();

  // Split columns for different size layout
  function splitColumns() {
    var windowWidth = $(window).width(),
      columnNumber = 1; //  default column number
    if (windowWidth > 1200) {
      columnNumber = 4;
    } else if (windowWidth > 767) {
      columnNumber = 3;
    } else if (windowWidth > 600) {
      columnNumber = 2;
    }
    return columnNumber;
  }
});

/* ========================================================================
  Portfolio Filter
 ========================================================================== */
var container = $(".portfolio-wrapper"); // portfoolio container

container.isotope({
  itemSelector: ".portfolio-item",
  animationEngine: "best-available",
  animationOptions: {
    duration: 200,
    queue: false,
  },
  layoutMode: "fitRows",
});

// sort items on button click
$(".filters a").on("click", function () {
  $(".filters a").removeClass("active");
  $(this).addClass("active");
  var filterValue = $(this).attr("data-filter");
  container.isotope({
    filter: filterValue,
  });
  initIsotope();
  return false;
});

// Split columns for different size layout
function splitColumns() {
  var windowWidth = $(window).width(),
    columnNumber = 1; //  default column number
  if (windowWidth > 1200) {
    columnNumber = 4;
  } else if (windowWidth > 767) {
    columnNumber = 3;
  } else if (windowWidth > 600) {
    columnNumber = 2;
  }
  return columnNumber;
}
// Set width for portfolio item
function setColumns() {
  var windowWidth = $(window).width(),
    columnNumber = splitColumns(),
    postWidth = Math.floor(windowWidth / columnNumber);

  container.find(".portfolio-item").each(function () {
    $(this).css({
      width: postWidth + "px",
    });
  });
}
// initialize isotope
function initIsotope() {
  setColumns();
  container.isotope("layout");
}
container.imagesLoaded(function () {
  setColumns();
});
$(window).bind("resize", function () {
  initIsotope();
});
initIsotope();
