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



  $('body').on('click','.expand-button',function(e){
    e.preventDefault();
    e.stopPropagation();

    
    var _d=$((e.target).closest('.homepage-banner')).siblings('.homepage-expand');
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

  // // Smooth scroll to anchor
  // $("a.scrollable").click(function (event) {
  //   event.preventDefault();
  //   $("html, body").animate({
  //     scrollTop: $($(this).attr("href")).offset().top - 40
  //   }, 500);
  // });

  

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

    if(Modernizr.mq('(min-width: 700px)')){
      $('.lightbox').colorbox({
        maxWidth: "100%", 
        maxHeight: "100%",
        transition: 'none',
        rel: 'lightbox',
        onOpen: function(){ 
          $("body").addClass('menu-open');
        },
        onClosed: function(){ 
          $("body").removeClass('menu-open');
        }
      });
  }

  if(Modernizr.mq('(max-width: 700px)')){
      $('.lightbox').colorbox({
        maxWidth: "90%", 
        maxHeight: "100%",
        transition: 'none',
        rel: 'lightbox',
        onOpen: function(){ 
          $("body").addClass('menu-open');
        },
        onClosed: function(){ 
          $("body").removeClass('menu-open');
        }
      });
  }

  }
};

shoreline.colorBox();