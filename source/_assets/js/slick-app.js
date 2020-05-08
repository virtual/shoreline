$(function () {

  var buttonPrev = "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>";
  var buttonNext = "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>";

  contentfeatureslider = $('.slick-slider.content-feature');
  contentfeatureOptions = {
    arrows: true,
    infinite: true,
    prevArrow:"<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='fas fa-chevron-left' aria-hidden='true'></span></button>",
    nextArrow:"<button type='button' aria-label='Next' class='slick-next pull-right'><span class='fas fa-chevron-right' aria-hidden='true'></span></button>"
  };
  contentfeatureslider.slick(contentfeatureOptions);
   
  carouselslider = $('.slick-slider.carousel-slider');
  carouselsliderOptions = {
    arrows: true,
    dots: true,
    customPaging: function(slider, i) {
      return $('<button aria-live="polite" type="button" />').text(i + 1);
    },
    cssEase: 'linear', 
    variableWidth: true,
    infinite: true,

    autoplay: true,
    arrows: true,
          slick: true, 
    slidesToShow: 1,
    speed: 500,
    variableWidth: true,
    autoplaySpeed: 8000,

    prevArrow: buttonPrev,
    nextArrow: buttonNext,
 
    responsive: [{
            breakpoint:480,
            settings: { 
                variableWidth: false,
                slidesToShow: 1
            },
            breakpoint:992,
            settings: {
 
                variableWidth: false,
                slidesToShow: 1
            }
        }]


  }; 
  
  $(carouselslider.each(function (idx, item) {
    var carouselId = "carousel" + idx;
    this.id = carouselId;
    $(this).slick(
      carouselsliderOptions
    );
    // Create container for description
    
    if ($(this).find('.slick-current .carousel-feature-text')[0]) {
      var slideW = ($(this).find('.slick-current').width()) > 0 ? $(this).find('.slick-current').width() + 'px' : '100%';
      $('<div class="carousel-feature-caption" style="max-width: '+slideW+ '">'+$(this).find('.slick-current .carousel-feature-text')[0].innerHTML+'</div>').insertAfter($(this));
      // $(this).next('.carousel-feature-caption').attr('style','width: 500px')
      // When slide changed, show updated desc in container
        $(this).on('afterChange', function(event, slick, currentSlide, nextSlide){
          var activeSlide = ($(slick.$slides.get(currentSlide)).attr('id'));
          var activeText = ($("#"+activeSlide)).find('.carousel-feature-text')[0].innerHTML;
          $(this).next('.carousel-feature-caption').html(activeText); // sibling of active slider
          var slideW = ($(this).find('.slick-current').width()) > 0 ? $(this).find('.slick-current').width() + 'px' : '100%';
          $(this).next('.carousel-feature-caption').attr('style','max-width: '+ slideW)
      });
    }
  }));
   

  $('.slick-slider.flex-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll:4,
    autoplaySpeed: 5000,
    autoplay: false,
    dots: true, 
    customPaging: function(slider, i) {
      return $('<button aria-live="polite" type="button" />').text(i + 1);
    },
    arrows: true,
    prevArrow: buttonPrev,
    nextArrow: buttonNext,

    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true 
      }
    }]
  });

  
//   $('.slick-slider.slick-slider-no-arrows').each(function () {
//     var $this = $(this);
//     $this.slick({
//         arrows: false,
//         infinite: true,
//         dots: true,
//         prevArrow: buttonPrev,
//         nextArrow: buttonNext
//       });
// });


  // Default settings for slick-silder class only (no other class)
  $('.slick-slider').each(function () {
      var $this = $(this);
      // IF { has 'simple-slickslider' with additional classes } 
      // OR { it ONLY has class 'slick-slider' with NO other classes } 
      if (($this.hasClass('simple-slickslider')) || ($this.attr("class").split(' ').length === 1)) {
        $this.slick({
          arrows: true,
          infinite: true,
          dots: true,
          
          prevArrow: buttonPrev,
          nextArrow: buttonNext
        });
      }
  });

});