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
  


  $(".more").click(() => {
    $(".galary_inner ,  catalog_inner").toggleClass("open");
  });


  $('.reviwe_slider').slick({
    infinite: false,
    slidesToShow:2,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: $('.l-arr'),
    nextArrow: $('.r-arr'),
    variableWidth:true,
    responsive: [
      {
        breakpoint: 769, // При ширине экрана меньше или равной 769px
        settings: {
variableWidth:false,
slidesToShow:1,
slidesToScroll: 1,
centerMode:false,
        }
      }
    ]
  });



  
  $('.popular .popular_inner').slick({
    responsive: [
      {
        breakpoint: 769, // При ширине экрана меньше или равной 769px
        settings: {
          slidesToShow:2,
          slidesToScroll: 1,
          arrows: false,
variableWidth:false
        }
      }
    ]
  });
});

$(".filter").click(() => {
  $(".filter_inner").toggleClass("open");
  $("html").toggleClass("hold");
});


$(".close").click(() => {
  $(".popup").removeClass("open");
  $("html").removeClass("hold");
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

$(document).ready(function() {
  $('.card').click(function() {
      $('.card_info').hide(); // Скрыть все блоки информации
      $('.card').removeClass('active'); // Удалить класс active со всех карточек
      $(this).addClass('active'); // Добавить класс active на кликнутую карточку

      // Показываем нужную информацию в зависимости от id кликнутого элемента
      if ($(this).attr('id') === 'card1') {
          $('#info1').show();
      } else if ($(this).attr('id') === 'card2') {
          $('#info2').show();
      }
  });
});$('.product-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.product-nav'
});
$('.product-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.product-for',
arrows:true,
});


