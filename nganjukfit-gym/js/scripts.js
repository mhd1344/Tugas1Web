$(document).ready(function(){
  $("nav a").click(function(){
    $("nav a").removeClass("active");
    $(this).addClass("active");
  });
});

// === ANIMASI SCROLL (Fade-in saat elemen muncul di viewport) ===
$(window).on("scroll", function() {
  $(".fade-in").each(function() {
    const elementTop = $(this).offset().top;
    const windowBottom = $(window).scrollTop() + $(window).height();

    if (windowBottom > elementTop + 100) {
      $(this).addClass("visible");
    }
  });

  // === Navbar shadow efek saat di-scroll ===
  if ($(this).scrollTop() > 50) {
    $("header").addClass("scrolled");
  } else {
    $("header").removeClass("scrolled");
  }
});

// === Smooth Scroll ke Section ===
$("nav a").on("click", function (e) {
  if (this.hash !== "") {
    e.preventDefault();
    const target = this.hash;

    $("html, body").animate(
      { scrollTop: $(target).offset().top - 50 },
      800
    );
  }
});
