jQuery(document).ready(function() {
  


  // Check testimonial picture if vertical for spacing
  $('.quote-feature-img').each(function () {
    var $this = $(this);
    var img = $(this).find('img')[0];
    if (img.naturalWidth < img.naturalHeight) {
      $this.addClass('vertical');
    }
  });

 
  // Adds margins for 100% height cards in flexbox
  // TODO: Fix this for only direct descendants 
  $("[class*='col-sm-']:has('.card')").addClass('card-margin');
  $("[class*='col-md-']:has('.card')").addClass('card-margin');
  $("[class*='col-sm-']:has('p.card-link')").addClass('card-link-margin');
  $("[class*='col-md-']:has('p.card-link')").addClass('card-link-margin');

  $('body').on('click','.dropdown-toggle',function(e){
    e.preventDefault();
    e.stopPropagation();

    
    var _d=$(this).closest('.dropdown');
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



  $('body').on('click','.expand-button',function(e){
    e.preventDefault();
    e.stopPropagation();
    
    var _d=$(this).closest('.homepage-banner').siblings('.homepage-expand');
    if ((_d).hasClass('show')) {
      // Close the element, change it to hidden
      $(this).parents('.homepage-banner-container').removeClass("expanded");
      $(this).attr('aria-expanded', 'false').text('Expand');

     

      $(_d).removeClass('show')
    } else {
      $(this).parents('.homepage-banner-container').addClass("expanded");
      $(this).attr('aria-expanded', 'true').text('Close');
      $(_d).addClass('show')
      
      // Scroll to open area when expanded
      $("html, body").animate({
        scrollTop: $(_d).offset().top - 40
      }, 100);
    }
  });

  // // Smooth scroll to anchor
  // $("a.scrollable").click(function (event) {
  //   event.preventDefault();
  //   $("html, body").animate({
  //     scrollTop: $($(this).attr("href")).offset().top - 40
  //   }, 500);
  // });

  // Accordion, highlight active header
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
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
    var goToId = $(this).attr("href");
    if ($(goToId).length) { // If an anchor exists with this href
      $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top - 40
      }, 500);
      $(goToId).focus(); 
    }  
  });

  document.onkeydown = function(evt) {
    e = evt || window.event;    
    if ((e.target).parentNode.classList.contains(('dropdown'))) {
      if (e.keyCode == 39 || e.keyCode == 40) {      
        (e.target).parentNode.classList.add('show');
      }
      if (e.keyCode == 37 || e.keyCode == 38) {   
        (e.target).parentNode.classList.remove('show');
      }
    } 
    // else if ((e.target).parentNode.classList.contains(('drop'))) {
    //   if (e.keyCode == 39 || e.keyCode == 40) {      
    //     (e.target).parentNode.classList.remove('drop');
    //     (e.target).parentNode.classList.add('opendrop');
    //   } 
    // }  
    
    // else if ((e.target).parentNode.classList.contains(('opendrop'))) {
    //   if (e.keyCode == 37 || e.keyCode == 38) {      
    //     (e.target).parentNode.classList.remove('opendrop');
    //     (e.target).parentNode.classList.add('drop');
    //   } 
    // }  
  };

  // When tabbing close the menu back up when tabbed out
  $(".dropdown>a").focus(function() {
    $('.dropdown.show').removeClass('show');
  });


// subnav 
/*
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
  */
//  setOverviewOffset(calcOverviewOffset());



/* from Shoreline */
	// table-stacked js
	$('.table-r1').each( function(e) {
		var headerNames = [];
    var rowTitles = [];
		$(this).find('thead th').each( function(e, item) {
			headerNames.push(item.innerText); // context causes errors, removed
    });
		$(this).find('tbody th').each( function(e, item) {			
			rowTitles.push(item.innerText); // context causes errors, removed
    });
		$(this).find('tbody tr').each( function(e) {
			$(this).children('th').text(rowTitles[e]); 
			$(this).children('td').each( function(e) {
				$(this).attr('data-title', headerNames[e+1]) 
			});
		}); 
	});
	


}); // END FUNCTION READY


function calcOverviewOffset() {
  //var sidebarOffset = $('#sidebar-nav').offset().top; // doesn't matter
  var contentHeaderOffset = $('.content-header').offset().top;
  return contentHeaderOffset + 50;
}

function setOverviewOffset(offset) {
  document.getElementById('sidebar-nav').setAttribute('style', "top: -" + offset + "px");
  return true;
}

function mew() {
  console.log('mew');
}

require('jquery-colorbox');


// jquery-colorbox/jquery.colorbox-min.js

// Start the namespace
var shoreline = {
  colorBox: function(){
    $('.video-lightbox').colorbox({
      iframe:true, 
      width: "80%",
      height: "60%",
      maxWidth: "1000", 
      maxHeight: "750",
      transition: 'none',
      onOpen: function(){ 
        $("body").addClass('menu-open');
      },
      onClosed: function(){ 
        $("body").removeClass('menu-open');
      }
    });

  }
};

shoreline.colorBox();

// Detect breakpoint ResponsiveBootstrapToolkit
var ResponsiveBootstrapToolkit = require('responsive-toolkit');
(function($, viewport){

  var visibilityDivs = {
      'xs': $('<div class="d-xs-block d-sm-none d-md-none d-lg-none d-xl-none"></div>'),
      'sm': $('<div class="d-none d-sm-block d-md-none d-lg-none d-xl-none"></div>'),
      'md': $('<div class="d-none d-md-block d-sm-none d-lg-none d-xl-none"></div>'),
      'lg': $('<div class="d-none d-lg-block d-sm-none d-md-none d-xl-none"></div>'),
      'xl': $('<div class="d-none d-xl-block d-sm-none d-md-none d-lg-none"></div>'),
  };

  viewport.use('custom', visibilityDivs);

  var doSomething = function() {
      console.log('Current breakpoint: ', viewport.current());
  }

  // on resize
  $(window).resize(
      viewport.changed(function() {
          doSomething();
      })
  ).resize();

})(jQuery, ResponsiveBootstrapToolkit);