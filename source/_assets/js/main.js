jQuery(document).ready(function() {
  


  // Check testimonial picture if vertical for spacing
  $('.quote-feature-img').each(function () {
    var $this = $(this);
    var img = $(this).find('img')[0];
    if (img.naturalWidth < img.naturalHeight) {
      $this.addClass('vertical');
    }
  });

 



  $('body').on('click','.dropdown-toggle',function(e){
    e.preventDefault();
    e.stopPropagation();

    
    var _d=$(e.target).closest('.dropdown');
    console.log(_d);

    if ((_d).hasClass('show')) {
      console.log('remove')
      $(_d).removeClass('show')
    } else {
      console.log('add')
      
      $(_d).removeClass('show')
      _d.addClass('show');
    }
     
  });

  // Smooth scroll to anchor
  $("a.scrollable").click(function (event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top - 40
    }, 500);
  });

  

  $(".header-actions .searchicon").click(function (event) {
    if (!($(this).hasClass('active'))) {
      $(this).addClass('active');
      event.preventDefault();
      $('.header-actions .searchbox input').show(); //noscript 
      $('.header-actions .searchbox input').focus();
      }
      else {
        if ($('.header-actions .searchbox input')[0].value === '') {
          // console.log('no text!')
          event.preventDefault();
          $('.header-actions .searchbox input').hide();
          $(this).removeClass('active');
        } else {
          // submit
        }
      }
  });

  // Smooth scroll to anchor
  $("a.scrollable").click(function (event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top - 40
    }, 500);
  });

  $(document).keydown( function(e) {     
    if ($(e.target).parent().hasClass('dropdown')) {
      if (e.keyCode == 39 || e.keyCode == 40) {      
        $(e.target).closest('.dropdown').addClass('show');
      }
      if (e.keyCode == 37 || e.keyCode == 38) {      
        $(e.target).closest('.dropdown').removeClass('show');
      }
    }   
    else if ($(e.target).parent().hasClass('drop')) {
      if (e.keyCode == 39 || e.keyCode == 40) {      
        $(e.target).closest('.drop').removeClass('drop').addClass('opendrop');
      } 
    }   
    else if ($(e.target).parent().hasClass('opendrop')) {
      if (e.keyCode == 37 || e.keyCode == 38) {      
        $(e.target).closest('.opendrop').removeClass('opendrop').addClass('drop');
      }
    }  
  });

  // When tabbing close the menu back up when tabbed out
  $(".dropdown>a").focus(function() {
    $('.dropdown.show').removeClass('show');
  });


// subnav 
  var submenu = document.getElementById('submenu');

  $("#submenu ul").find(":has(div)").parent().addClass("nolink");
  // , window.prettyPrint && prettyPrint(), $(document).on("click", ".yamm .dropdown-menu", function(a) {
  //     a.stopPropagation()
  // }), 
  $("#submenu ul>li:has(ul)").click(function(a) {
       $newul = $(this).find("ul:first"), "none" == $newul.css("display") ? ($newul = $(this).find("ul:first"), $newul.parent().removeClass("drop"), $newul.parent().addClass("opendrop"), $newul.show("fast"), $newul.parent().removeClass("togopen")) : ($newul = $(this).find("ul:first"), $newul.parent().removeClass("opendrop"), $newul.parent().addClass("drop"), $newul.hide("fast"), $newul.parent().removeClass("togopen")), a.stopPropagation()
   });
   
   $("#submenu li").has("ul").each(function() {
       $(this).addClass("drop"), $("#submenu ul>li:has(ul)>a").css("display", "block"), $(this).show("fast")
   });
  
 
});