$(document).ready(() => {
  $(".burger_inner").on("swipe", event => {
    if (event.swipestart.coords[0] < event.swipestop.coords[0]) {
      $(".burger").removeClass("active");
    }
  });
  $(".burger").click(() => {
    $(".burger_inner").toggleClass("open");
    $(".burger").toggleClass("active");
    $("html").toggleClass("hold");
  });


  $('a').click(function(event) {
    event.preventDefault(); 
    $(".burger_inner").removeClass("open");
    $(".burger").removeClass("active");
    $("html").removeClass("hold");
    let target = $(this.hash);
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top - 150
      }, 800);
    }
    return false;
  });
  

  $('.reviwe_slider').slick({
    infinite: false,
    slidesToShow:3.5,
    slidesToScroll: 1,
    arrows: true,
    nextArrow: $('.next-arr'),
    responsive: [
      {
        breakpoint: 769, // При ширине экрана меньше или равной 769px
        settings: {
arrows:false,
variableWidth:true,
slidesToShow:1,
slidesToScroll: 1,
centerMode:true,
dots:true
        }
      }
    ]
  });


});


$(document).ready(function() {
  $(".accordion-button").on("click", function() {
    var clickedButton = $(this);
    var content = clickedButton.siblings(".accordion-content");
    
    if (!clickedButton.hasClass('active')) {
      $(".accordion-button").removeClass('active');
      $(".accordion-content").slideUp();
      $(".accordion_inner").css('min-height', '0'); 
    }

    clickedButton.toggleClass('active');
    content.slideToggle(function() {
      if (content.is(':visible')) {
        var accordionInner = clickedButton.closest('.accordion_inner');
        accordionInner.css('height', accordionInner.prop('scrollHeight') + 'px');
      }
    });
  });
});


$('.product-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.product-nav'
});
$('.product-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.product-for',
  dots: true,
  focusOnSelect: true
});