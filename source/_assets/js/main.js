jQuery(document).ready(function() {
  // Scroll-bar width for 100vw sections
  document.documentElement.style.setProperty('--scrollbar-width', (window.innerWidth - document.documentElement.clientWidth) + "px");

  // Check testimonial picture if vertical for spacing
  $('.quote-feature-img').each(function () {
    var $this = $(this);
    var img = $(this).find('img')[0];
    if (img.naturalWidth < img.naturalHeight) {
      $this.addClass('vertical');
    }
  });

  $("header .alert .dismiss-alert").click(function(e){
    e.preventDefault();
    if ($("header .alert").hasClass('dismissed')) {
      $('header .alert').removeClass('dismissed');
      $('header .alert .dismiss-alert-label').text('Hide Details');
    } else {
      $('header .alert').addClass('dismissed');
      $('header .alert .dismiss-alert-label').text('Show Details');
    } 
  });
 
  // Adds margins for 100% height cards in flexbox
  // TODO: Fix this for only direct descendants 
  $("[class*='col-sm-']:has('.card')").addClass('card-margin');
  $("[class*='col-md-']:has('.card')").addClass('card-margin');
  $("[class*='col-sm-']:has('p.card-link')").addClass('card-link-margin');
  $("[class*='col-md-']:has('p.card-link')").addClass('card-link-margin');


  // $('body').on('click','.megamenu .dropdown-toggle',function(e){
  //   e.preventDefault();
  //   e.stopPropagation();

  //   // If not showing, show dropdown menu
  //   var _d=$(this).closest('.dropdown');
  //   if ((_d).hasClass('show')) { // RemoveClass Show
  //     $(_d).removeClass('show')
  //   } else { // AddClass Show
  //     $(_d).removeClass('show')
  //     _d.addClass('show');
  //   }
     
  // });

  // $('body').on('click','.expand-button',function(e){
  //   e.preventDefault();
  //   e.stopPropagation();
    
  //   var _d=$(this).closest('.homepage-banner').siblings('.homepage-expand');
  //   if ((_d).hasClass('show')) {
  //     // Close the element, change it to hidden
  //     $(this).parents('.homepage-banner-container').removeClass("expanded");
  //     $(this).attr('aria-expanded', 'false').text('Expand');      
  //     $(_d).removeClass('show')      
  //     $(_d).find('.hero-expandcontent').attr('aria-hidden', 'true');

  //   } else {
  //     $(this).parents('.homepage-banner-container').addClass("expanded");
  //     $(this).attr('aria-expanded', 'true').text('Close');
  //     $(_d).addClass('show');
  //     $(_d).find('.hero-expandcontent').attr('aria-hidden', 'false');
      
  //     // Scroll to open area when expanded
  //     $("html, body").animate({
  //       scrollTop: $(_d).offset().top - 40
  //     }, 100);
  //   }
  // });

  
  $('.accordion .collapse:not(.show) ').each( function () {
    $(this).css('visibility', 'hidden');
  });
  
  // Accordion, highlight active header 
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
        $(this).css('visibility', 'visible');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
        $(this).css('visibility', 'hidden');
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

  //--- Gavin Smith 8-16-17 Merge data into page if any requests on page
  if (typeof LoadShorelineData == 'function') { 
    LoadShorelineData(); 
  }
  
  // Smooth scroll to anchor
  $("a.scrollable").click(function (event) {
    event.preventDefault();
    var goToId = $(this).attr("href");
    if ($(goToId).length) { // If an anchor exists with this href
      $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top - shoreline.scrollableOffset
      }, 500); 
      // Add tabindex -1 so the anchored text can be focused via JS
      if ($(goToId).attr("tabindex") === undefined) {
        $(goToId).attr('tabindex', '-1')
      };
      $(goToId).focus(); 
    }  
  });
 
  // When tabbing close the menu back up when reaching the end of the dropdown-menu
  $(".dropdown-list > button").focus(function() { 
    $('.dropdown-list.show > button').attr('aria-expanded', 'false')
    $('.dropdown-list.show').removeClass('show');
  });  
  $(".dropdown-list > button").click(function (evt) {
    e = evt || window.event;
    toggleDropdownMenu((e.target).parentNode);
  });
  document.onkeydown = function (evt) {
    e = evt || window.event;   
    if ((e.key === ' ' || e.key === 'Spacebar' || e.key === 'Enter' || e.key === 'Escape')) {
      checkDropdownKey(e)    
    }
  };

  // If megamenu is open and you click on the main content, close the megamenu
  $('body').on('click', '#maincontent', function(e){
    $('.dropdown-list.show > button').attr('aria-expanded', 'false')
    $('.dropdown-list.show').removeClass('show');
  })

  // Add keyboard escape for search section
  $('body').on('click', '#searchtoggler', function (e) {
    setTimeout(function () {
      document.getElementById('search1').focus();
    }, 500);
  });
}); 
// END FUNCTION READY

// Megamenu dropdown
// Keys to successful implementation will be aria-expanded on the button 
// that triggers the submenu, and a keyboard model that includes support for 
// Escape, with focus returning to the button (top menu item) when the submenu closes. 
function hideDropdownMenu(el) {
  el.classList.remove('show');
  el.querySelector('button').setAttribute("aria-expanded", 'false');
}
function toggleDropdownMenu(el) {
  if (el.classList.contains('show')) {
    hideDropdownMenu(el)
  } else {
    el.classList.add('show');
    el.querySelector('button').setAttribute("aria-expanded", 'true');
  }
}
function checkDropdownKey(e) {
  if ((e.target).parentNode.classList.contains(('dropdown-list'))) { 
    if (e.key === ' ' || e.key === 'Spacebar' || e.key === 'Enter') {
      e.preventDefault(); // prevent click function
      toggleDropdownMenu((e.target).parentNode);
    } else if (e.key === 'Tab') {
      if (!((e.target).parentNode.classList.contains('show'))) {
        hideDropdownMenu((e.target).parentNode);
      }
    } 
  } else if (e.key === 'Escape') {
    var currentMenu = document.querySelector("#navbarCollapse").querySelector('.dropdown-list.show');
    hideDropdownMenu(currentMenu);
    currentMenu.querySelector('button').focus(); 
  }
}
// End Megamenu dropdown menu functions

// function calcOverviewOffset() {
//   //var sidebarOffset = $('#sidebar-nav').offset().top; // doesn't matter
//   var contentHeaderOffset = $('.content-header').offset().top;
//   return contentHeaderOffset + 50;
// }

// function setOverviewOffset(offset) {
//   document.getElementById('sidebar-nav').setAttribute('style', "top: -" + offset + "px");
//   return true;
// }

require('jquery-colorbox');
var twitterFetcher = require('twitter-fetcher');


// jquery-colorbox/jquery.colorbox-min.js

// Start the namespace
var shoreline = {
  scrollableOffset: 101,
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

      $('.lightbox').colorbox({
        maxWidth: "95%", 
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
  },

  // Pulls in JSON feed
  // Requires full jQuery (not Slim)
  getEventFeed(max = 3) {
    var arrayFeeds = [];

    function getDateData(container) {
      var eventStr = '';
      arrayFeeds.forEach(feedContainer => {
        $.ajax({
          url: feedContainer.getAttribute('href'),
          success: function (data) {
            var eventsSliced = data.slice(0, max);

            // Print the calendar HTML for the whole feed (spliced)
            printCal(eventsSliced, container);

          }
        })
      });
      // console.log(eventStr)
      return eventStr;
    }

    function getTime(d) {
      var hr = d.getHours();
      var min = d.getMinutes();
      if (min < 10) {
          min = "0" + min;
      }
      var ampm = "am";
      if( hr > 12 ) {
          hr -= 12;
          ampm = "pm";
      }
      return hr + ":" + min + ampm;
    }
    // The printed layout of the HTML for the events
    function printCal(data, container) {
      var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
      var showLocation = false;

      data.forEach(dataEl => {
        var timeStr = getTime(new Date(dataEl.startDateTime)) + " - " + getTime(new Date(dataEl.endDateTime));
        if (timeStr === '0:00am - 0:00am') { timeStr = "All day"; }

        var locationStr = '';
        if (showLocation) { locationStr = '<span class="callocation">' + dataEl.location + '</span>'; }

        container.find('.row').append(
                    
          '<div class="col-md-4"><div class="event"><div class="event-date"><div class="event-date-container"><span class="month">'
          + months[new Date(dataEl.startDateTime).getMonth()] + // Aug
          '</span><span class="day">'
          + new Date(dataEl.startDateTime).getDate() + // 22
          '</span></div></div>	<div class="event-content"><h4>' + 
          '<a href="' + dataEl.permaLinkUrl + '">' + 
          dataEl.title + '</a></h4>    <p><span class="caltime">' + 
          timeStr + '<br></span>' + 
          locationStr +
          '</p>	</div></div></div>'
          
          )
      });
    }

    // For each feed snippet on the page, get the data and print the calendar
    ($(".ou-event-feed td a").get()).forEach(el => {
      arrayFeeds.push(el);

      var calFeedHolder = ($(el).closest('.ou-event-feed'));
      calFeedHolder.html("<div class='row'></div>");
      getDateData(calFeedHolder);
    });
  },

  changeScrollableOffset: function(px) {
    this.scrollableOffset = px;
  }, // end mobileScrolltoTab
  twitterFeed: function () {
    // $('.twitter-feed').twittie({
    //   dateFormat: '%b %d',
    //   template: '<div class="date">{{date}}</div> {{tweet}} ',
    //   count: 6
    // });

    // setTimeout(function () {
    //   $('.twitter-feed > ul > li').matchHeight();
    // }, 2000);

    var twitterConfig = {
      "profile": {"screenName": 'shorelinecc'},
      "domId": 'twitter-feed',
      "maxTweets": 3,
      "enableLinks": true,
      "showImages": false,
      "showInteraction": false,
      "showUser": false
    };
    var twitterHtml = twitterFetcher.fetch(twitterConfig); 
    // console.log(twitterHtml)
    // $('.twitter-feed').html = twitterHtml;

  }, // twitterFeed
  scrollAccordion: function() {
  // For reference only; minified version in main.js
  var topScrollHeader = ($('header').height()) // height of header when first loaded
  var innerSectionHeight = 0
  var prevMoveTopOffset = 0
  var prevAccContent = 0
  var animateSpeed = 200
  var panel // active accordion panel
  var togglerHeight = 0

  function move(clickPos) {
    var newPt = clickPos - togglerHeight - 40
    if (clickPos > (topScrollHeader + innerSectionHeight)) { 
      newPt = newPt - innerSectionHeight
    }
    if ((prevMoveTopOffset) > clickPos - prevAccContent) {
      // prevMoveTopOffset = newPt;
      $('html,body').animate({
        scrollTop: newPt
      }, animateSpeed);
      prevMoveTopOffset = newPt
    } else {
      newPt = newPt - prevAccContent
      $('html,body').animate({
        scrollTop: newPt
      }, animateSpeed)
      prevMoveTopOffset = newPt
    }
  }

  $(document)
    .ready(function () {
      $('.accordion .btn-toggle')
        .on('mousedown', function (e) {
          // if (panel) {
          //   prevAccContent = panel.nextElementSibling.offsetHeight
          // } else {
            prevAccContent = 0
          // }
          panel = e.target
        })
        .on('mouseup', function (e) {
          if ($(e.target).hasClass('active')) {
            togglerHeight = 0
            panel = undefined
            prevMoveTopOffset = 0
          } else {

            togglerHeight = $(e.target).height()
            var thisHeight = $(e.target).offset().top
            move(thisHeight)
          }
        });
    });
  },
  loadNavChild: function() {
    $("ul#subnav_parent > li").each(function(index){
      if ($(this).children('a').attr("href").toLowerCase().indexOf(ou_child.toLowerCase()) >= 0){
        var link = $(this).children('a').first().attr("href");
        //console.log("Match = " + link);
        $(this).append($("ul#subnav_child")).addClass('current');
        $("ul#subnav_child").show();
        
        var leftColHeight = $(".left-nav").height(); 
          $(".content").css("minHeight", leftColHeight + 40);
      }	
    });
  },
  highlightActiveNav: function() {
    // Current Page Link Highlighting
	  $(".left-nav nav ul.nav a,.button-row a").each(function(index){
      var currentPage = ou_path.toLowerCase().replace(ou_index, '');
      var link = $(this).attr("href").toLowerCase().replace(ou_index, '');
      if (link == currentPage){
        $(this).parent('li').addClass("current");
      }
    });
  },
  navTabs: function () {
    $(document).ready(function () {
      $('.nav-link')
        .on('click', function (e) {
          // chg all siblings to false
          $(e.target).parent('li').siblings().find('a').attr('aria-selected', false);
          $(e.target).attr('aria-selected', true);
        });
    });
  },
  unWrapDuplicateULs: function() {
    // remove duplicate <ul> in sidenav
    $('.list-wrapper ul > ul').children().unwrap();


  },
  tableHTML: function() {

    // table js
    var switched=false;
    var updateTables=function(){
      if(($(window).width()<9999)&&!switched){
        switched=true;$("table.responsive").each(function(i,element){splitTable($(element));});return true;}
      else if(switched&&($(window).width()>9999)){switched=false;$("table.responsive").each(function(i,element){unsplitTable($(element));});}};$(window).on('load', updateTables);$(window).bind("resize",updateTables);function splitTable(original)
    {original.wrap("<div class='table-wrapper' />");var copy=original.clone();copy.find("td:not(:first-child), th:not(:first-child)").css("display","none");copy.removeClass("responsive");original.closest(".table-wrapper").append(copy);copy.wrap("<div class='pinned' />");original.wrap("<div class='scrollable' />");}
    function unsplitTable(original){original.closest(".table-wrapper").find(".pinned").remove();original.unwrap();original.unwrap();}

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

  },
  twoColNav: function() {
    if ( $( ".option-explore-nav" ).length ) {
    // Adds class to first item in second column 
      var itemPos = Math.ceil($('.option-explore-nav .card-body ul li').length /2);
      $($('.option-explore-nav .card-body ul li')[itemPos]).addClass('list-top');
    }
  },
  addBreadcrumbPosition: function() {
    // used for google structure data
    $('.breadcrumb li').each(function (index) {
      $(this).append('<meta property="position" content="' + (index+1) + '" />');
    });
  },
  runBootstrapTooltips: function() {
    $('[data-toggle="tooltip"]').tooltip()
  },
  contactListDynamicHours: function () {
    // Update to only expand the clicked hours
    // Add slide?
    function showTodayHours() {
      var btn = '<button title="Expand to view all days" type="button" class="btn btn-link contact-hours-expand py-0 text-dark"><span class="fas fa-caret-down"></span><span class="sr-only">Expand</span></button>';
      daysInWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      $('.contact-hours dt').hide()
      $('.contact-hours dd').hide();
      $('.contact-hours').attr('aria-expanded', 'false'); 
      var d = new Date();
      var n = d.getDay()
      var today = 'contact-hours-' + daysInWeek[n];
      $('dd.' + today).append(btn);
      $('.' + today).show();
    }
    function showAllHours(dl) {
      $(dl).attr('aria-expanded', 'true');
      $(dl.find('dt').slideDown(300));
      $(dl.find('dd').slideDown(300));
    }
    // ready
    showTodayHours();
    $(".contact-hours-expand").click(function () {
      var el = $(this).parents('.contact-hours');
      $(el.find(".contact-hours-expand")).hide();
      showAllHours(el);
    });
    // end ready
  }
};





shoreline.colorBox();
if ( $( "#twitter-feed" ).length ) {
  shoreline.twitterFeed();
}
// shoreline.scrollAccordion();
shoreline.loadNavChild();
shoreline.highlightActiveNav();
shoreline.navTabs();
shoreline.unWrapDuplicateULs();
shoreline.tableHTML();
shoreline.twoColNav();
shoreline.addBreadcrumbPosition();
shoreline.runBootstrapTooltips();
shoreline.getEventFeed();
if ( $( ".contact-hours" ).length ) {
  shoreline.contactListDynamicHours();
} 
 
// @bootstrap-combobox/bootstrap-combobox
if ( $( ".dynamic-selectbox" ).length ) {
var bootstrapCombobox = require('@bootstrap-combobox/bootstrap-combobox');
(function($, bootstrapCombobox){
    $('.dynamic-selectbox').combobox({
      bsVersion: '4',
      appendId: 'Selector', // otherwise defaults to undefined
      template: function() {
        return '<form class="combobox-container"> <input class="link-redirect" type="hidden" /><div class="input-group"> <input class="dropdown-toggle" type="text" autocomplete="off" data-dropdown="dropdown" /><button class="input-group-append input-group-text dropdown-toggle" data-dropdown="dropdown"><span class="sr-only">Expand list</span></button></div></form>';
      },
      menu: '<ul class="typeahead typeahead-long dropdown-menu card-links card-links-compact" style="display: none;"></ul>'
      , item: '<li class="px-3"><a href="#"></a></li>'       
    }) 

    $(".combobox-container button").click(function(event){
      event.preventDefault();
    });
    $( ".link-redirect" ).change(function() {
      if (this.value)
      window.location.href = this.value;
    });
  })(jQuery, bootstrapCombobox);
}

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

  var showBreakpoint = function() {
      // console.log('Current breakpoint: ', viewport.current());
  }

  // on resize
  $(window).resize(
      viewport.changed(function() {
        // showBreakpoint();

        if( viewport.is('>=md') ) {
          shoreline.changeScrollableOffset(40);
        } else {
          shoreline.changeScrollableOffset(101);
        }

      })
  ).resize();

})(jQuery, ResponsiveBootstrapToolkit);
