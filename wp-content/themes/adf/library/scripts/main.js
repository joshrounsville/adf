'use strict';

$(function() {

  //////// set booleans for window size
  var body = $('body');
  var isPhone = body.css('padding-bottom') === '1px';
  var isDesktop = body.css('margin-bottom') !== '1px';
  var notDesktop = body.css('margin-bottom') === '1px';

  $(window).resize(function() {
    isPhone = body.css('padding-bottom') === '1px';
    isDesktop = body.css('margin-bottom') !== '1px';
    notDesktop = body.css('margin-bottom') === '1px';
  });



  //////// svg fallback
  Modernizr.addTest('svgasimg', document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Image', '1.1'));

  if ( !Modernizr.svgasimg ) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }




  //////// setup request animation frame shim
  var animationFrame = function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for( var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x ) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame) {
      window.requestAnimationFrame = function(callback, element) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); }, timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };
    }

    if (!window.cancelAnimationFrame) {
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
    }
  };

  animationFrame();



  //////// call fitvids
  var fluidVid = function() {
    var vid = $('.responsive-vid');

    $(vid).fitVids();
  };

  fluidVid();



  //////// call jQuery validate
  var formValidation = function() {
    var formValidate = $('.form-validate');
    var formValidateProfile = $('.form-validate-profile');

    $(formValidate).validate({
      rules: {
        pass1: {
          required: true,
          minlength: 5
        },
        pass2: {
          required: true,
          minlength: 5,
          equalTo: '#pass1'
        },
        current_age: {
          required: true,
          number: true
        },
        phone_number: {
          required: true,
          phoneUS: true
        },
        guardian_phone_number: {
          required: true,
          phoneUS: true
        },
        program: {
          required: true
        }
      }
    });

    $(formValidateProfile).validate({
      rules: {
        current_age: {
          required: true,
          number: true
        },
        phone_number: {
          required: true,
          phoneUS: true
        },
        guardian_phone_number: {
          required: true,
          phoneUS: true
        },
        program: 'required'
      }
    });
  };

  formValidation();




  //////// carousel setup
  var sliderWrap = $('.slider-main-wrap');
  var sliderMulti = $('.slider-multi');
  var sliderSingle = $('.slider-single');

  var nextHtml = '<span class="next-item">Next<span class="icon icon-arrow-right-line"><svg class="icon-svg"><use xlink:href="#icon-arrow-right-line" /></svg></span></span>';
  var prevHtml = '<span class="previous-item"><span class="icon icon-arrow-left-line"><svg class="icon-svg"><use xlink:href="#icon-arrow-left-line" /></svg></span>Previous</span>';

  var sliderInit = function() {
    var multiOptions = {
      items : 4,
      itemsDesktop : [1199, 4],
      itemsDesktopSmall : [980, 3],
      itemsTablet: [768, 2],
      itemsTabletSmall: false,
      itemsMobile : [479, 1],
      slideSpeed : 400,
      paginationSpeed : 800,
      rewindNav: false,
      autoPlay : false,
      navigation : true,
      pagination : false,
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,
      baseClass : 'owl-carousel',
      mouseDrag : false,
      navigationText : [ prevHtml, nextHtml ],
      beforeInit : function() {
        beforeInit(sliderMulti);
      },
      afterAction : afterAction
    };

    sliderMulti.owlCarousel(multiOptions);

    sliderWrap.removeClass('single');
    sliderWrap.addClass('multi');

  };

  sliderInit();



  var singleSlider = function(el) {
    var loader = $('.loader');
    var itemPosition;
    var owlSingle;
    var navCarousel = $('.nav-carousel');
    var owlMulti = $(sliderMulti).data('owlCarousel');
    var singleOptions = {
      singleItem : true,
      slideSpeed : 400,
      paginationSpeed : 800,
      rewindSpeed: 1000,
      autoPlay : false,
      navigation : true,
      pagination : false,
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,
      baseClass : 'owl-carousel',
      mouseDrag : false,
      navigationText : [ prevHtml, nextHtml ],
      beforeInit : function() {
        beforeInit(sliderSingle);
      },
      afterAction : afterAction
    };

    loader.addClass('loading');

    sliderWrap.removeClass('multi');
    sliderWrap.addClass('single');

    itemPosition = $('.box-carousel').index(el);

    owlMulti.destroy();

    navCarousel.addClass('single');

    setTimeout(function() {
      sliderSingle.owlCarousel(singleOptions);

      owlSingle = $(sliderSingle).data('owlCarousel');
      owlSingle.jumpTo(itemPosition);
      loader.removeClass('loading');

    }, 250);

  };




  var singleSliderClick = function() {
    var btn = $('.owl-item .box-carousel');
    var el;

    btn.on('click', function(e) {
      e.preventDefault();

      el = this;
      singleSlider(el);
    });


  };

  singleSliderClick();




  function beforeInit(target) {
    var item = $(target).find('.item');
    var i = 0;

    item.each(function() {
      $(this).addClass('item-' + i);
      i++;
    });

  }

  function afterAction() {
    var count = this.owl.visibleItems;
    var item = $('.slider-multi').find('.item');

    item.removeClass('active');

    for ( var i = 0; i < count.length; i++) {
      sliderMulti.find('.item-' + count[i]).addClass('active');
    }

  }

  var filterSlider = function() {
    var btn = $('.btn--slider-filter');
    var target;
    var targetItem;
    var targetItemIndex;
    var itemCollection;
    var owl;

    btn.on('click', function(e) {
      e.preventDefault();

      if ( $('.nav-carousel').hasClass('single') ) {
        owl = $(sliderSingle).data('owlCarousel');
      } else {
        owl = $(sliderMulti).data('owlCarousel');
      }

      itemCollection = $('.owl-wrapper');
      target = $(this).attr('data-target');
      targetItem = $(itemCollection).find('.item[data-position=' + target + ']').parent();
      targetItem = targetItem[0];
      targetItemIndex = $('.owl-item').index(targetItem);

      owl.goTo(targetItemIndex);

      btn.removeClass('active');
      $(this).addClass('active');

    });

  };

  filterSlider();


  var viewMulti = function() {
    var btn = $('.view-multi');
    var owlSingle;
    var navCarousel = $('.nav-carousel');
    var loader = $('.loader');
    var filterBtn = $('.btn--slider-filter');

    btn.on('click', function(e) {
      e.preventDefault();

      loader.addClass('loading');
      owlSingle = $(sliderSingle).data('owlCarousel');

      owlSingle.destroy();

      navCarousel.removeClass('single');

      if ( filterBtn.length ) {
        filterBtn.removeClass('active');
        filterBtn.first().addClass('active');
      }

      setTimeout(function() {
        sliderInit();
        loader.removeClass('loading');
      }, 250);

    });


  };

  viewMulti();





  //////// hide/show nav

  var mobileNav = function() {
    var trigger = $('.nav-trigger');

    trigger.on('touchstart click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      body.toggleClass('show-nav');
    });

  };

  mobileNav();



  //////// hide/show dropdown
  var dropdown = function() {
    var trigger = $('.hide-show-dropdown');
    var secondaryTrigger = $('.nturl');
    var target;

    trigger.on('touchstart click', function(e) {
      e.stopPropagation();
      e.preventDefault();

      target = $(this).parent();

      target.toggleClass('show-dropdown');

    });

    secondaryTrigger.on('touchstart click', function() {

      target = $(this).parents('.dropdown');

      target.toggleClass('show-dropdown');
    });

  };

  dropdown();




  //////// lot's O' video stuff

  var video = function() {
    var videoBox = $('.video-wrap');
    var key = 'AIzaSyBXgjE8zZuyJW0X6KS22dR34OdVORL91U4';

    videoBox.each(function() {

      var el = $(this);
      var contentTarget = $(el).find('.video-title');
      var vidId = $(this).attr('data-id');

      if ( $(el).find('img').length <= 0 ) {

        $.getJSON('https://www.googleapis.com/youtube/v3/videos?id=' + vidId + '&part=snippet,contentDetails&key=' + key, function(data) {

          // get the title
          var title = data.items[0].snippet.title;


          // get the screenshot
          var imgSrc = data.items[0].snippet.thumbnails.standard.url;


          // format the time
          var time = data.items[0].contentDetails.duration;
              time = time.split('PT')[1];
          var formattedTime;
          var seconds;
          var minutes;

          if (time.indexOf('M') >= 0) {

            minutes = time.split('M')[0];
            seconds = time.split('M')[1];
            seconds = seconds.split('S')[0];

            if ( seconds.length < 2 ) {
              seconds = '0' + seconds;
            }

            formattedTime = minutes + ':' + seconds;

          } else {

            seconds = time.split('S')[0];

            if ( seconds.length < 2 ) {
              seconds = '0' + seconds;
            }

            formattedTime = '0:' + seconds;

          }


          // build the layout
          $('<h3>', {
            'html': title
          }).appendTo(contentTarget);

          $('<h6>', {
            'html': formattedTime
          }).appendTo(contentTarget);

          $('<img>', {
            'src': imgSrc,
            'title': title
          }).appendTo(el);

        });

      }

    });


  };

  video();




  var playVideo = function() {
    var playBtn = $('.video-wrap');
    var videoTarget = $('.video-target');

    playBtn.on('click', function(e) {
      e.preventDefault();

      var videoID = $(this).attr('data-id');

      $('<iframe>', {
        'src': '//www.youtube.com/embed/' + videoID + '?rel=0&autoplay=1&vq=hd720',
        'frameborder': 0,
        'id': 'youtube-video',
        'allowfullscreen' : true
      }).appendTo(videoTarget);

      $('#video-modal').modal();

      fluidVid();

    });

  };

  $('#video-modal').on('hide.bs.modal', function() {
    setTimeout(function() {
      $('.fluid-width-video-wrapper').remove();
      $('#youtube-video').remove();
    }, 200);
  });

  playVideo();




  //////// infinite scroll setup

  var infiniteScrollGo = function() {
    var btn = $('.js--scroll-link a');

    $('.js--scroll-wrap').infinitescroll({
      navSelector: '.js--scroll-pages',
      nextSelector: btn,
      itemSelector: '.js--scroll-wrap .row',
      loading: {
        finishedMsg: '<h4>Check back soon for more videos</h4>',
        finished: function() {
          video();
          $(btn).removeClass('loading');
        }
      }
    });

    $(window).unbind('.infscr');

    $(btn).on('touchstart click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      $(this).addClass('loading');
      $('.js--scroll-wrap').infinitescroll('retrieve');
    });

    $(document).ajaxError(function(e,xhr,opt) {
      if ( xhr.status === 404 ) {
        $(btn).remove();
      }
    });

  };

  if ( $('.js--scroll-wrap').length ) {
    infiniteScrollGo();
  }


});