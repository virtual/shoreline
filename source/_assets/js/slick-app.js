$(function () {
  

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
    cssEase: 'linear', 
    variableWidth: true,
    infinite: true,
    prevArrow: "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>",
    nextArrow: "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>"
  }; 
  
  $(carouselslider.each(function (idx, item) {
    var carouselId = "carousel" + idx;
    this.id = carouselId;
    $(this).slick(
      carouselsliderOptions
    );
    // Create container for description
    $('<div class="carousel-feature-caption">'+$(this).find('.slick-current .carousel-feature-text')[0].innerHTML+'</div>').insertAfter($(this));
    // When slide changed, show updated desc in container
      $(this).on('afterChange', function(event, slick, currentSlide, nextSlide){
        var activeSlide = ($(slick.$slides.get(currentSlide)).attr('id'));
        var activeText = ($("#"+activeSlide)).find('.carousel-feature-text')[0].innerHTML;
        $(this).next('.carousel-feature-caption').html(activeText); // sibling of active slider
    });
  }));
   

  $('.slick-slider.flex-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll:4,
    autoplaySpeed: 5000,
    autoplay: false,
    dots: true, 
    arrows: true,
    prevArrow: "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='fas fa-chevron-left' aria-hidden='true'></span></button>",
    nextArrow: "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='fas fa-chevron-right' aria-hidden='true'></span></button>",

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

  // Default settings for slick-silder class only (no other class)
  $('.slick-slider').each(function () {
      var $this = $(this);
      if ($this.attr("class").split(' ').length === 1) {
        $this.addClass('simple-slickslider');
        $this.slick({
          arrows: true,
          infinite: true,
          dots: true,
          prevArrow:"<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>",
          nextArrow:"<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>"
        });
      }
  });

});