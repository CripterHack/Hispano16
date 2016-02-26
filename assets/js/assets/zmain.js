// RESETS

// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Responsive layer
    $(function () {
      var nua = navigator.userAgent
      var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit')   > -1 && nua.indexOf('Chrome') === -1)
      if (isAndroid) {
        $('select.form-control').removeClass('form-control').css('width', '100%')
      }
    })
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
                        document.createTextNode(
                            '@-ms-viewport{width:auto!important}'
                                    )
    )
  document.querySelector('head').appendChild(msViewportStyle)
    }

  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
  }
//* RESET RESPONSIVE WIDTH *//
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}
// LINK ANIMATION CLASS
$(function(){
      $('.internal').on('click',function(e){
        e.preventDefault();
        var strAncla=$(this).attr('href');
        $('body,html').stop(true,true).animate({
        scrollTop: $(strAncla).offset().top
        },1000);
      });
    });
// LOADER ANIMATION
$(document).ready(function() {
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 3500);
});
// HEADER
jQuery(document).ready(function($) {
    var offset = 300,
        offset_opacity = 1200,
        scroll_top_duration = 700,
        $back_to_top = $('.cd-top');
    $(window).scroll(function() {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out')
        }
    });
    $back_to_top.on('click', function(event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration)
    })
});
jQuery(document).ready(function($){
    var MQL = 1170;

    if($(window).width() > MQL) {
        var headerHeight = $('.cd-header').height();
        $(window).on('scroll',
        {
            previousTop: 0
        }, 
        function () {
            var currentTop = $(window).scrollTop();
            if (currentTop < this.previousTop ) {
                if (currentTop > 0 && $('.cd-header').hasClass('is-fixed')) {
                    $('.cd-header').addClass('is-visible');
                } else {
                    $('.cd-header').removeClass('is-visible is-fixed');
                }
            } else {
                $('.cd-header').removeClass('is-visible');
                if( currentTop > headerHeight && !$('.cd-header').hasClass('is-fixed')) $('.cd-header').addClass('is-fixed');
            }
            this.previousTop = currentTop;
        });
    }
});
// PARALLAX */
$(document).ready(function(){

    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion =  (barra * 0.40);
        
        $('.parallaxBack').css({
            'background-position': '50% +' + posicion + 'px'
        });

    });

    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion =  (barra * 0.50);
        
        $('.parallaxBackB').css({
            'background-position': '50% -' + posicion + 'px'
        });

    });

    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion =  (barra * 0.35);
        
        $('.parallax').css({
            'transform': 'translateY( -' + posicion + 'px)'
        });

    });

    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion =  (barra * 0.50);
        
        $('.parallaxB').css({
            'transform': 'translateY( +' + posicion + 'px)'
        });

    });

});

// BugyFill */
viewportUnitsBuggyfill.init({hacks: window.viewportUnitsBuggyfillHacks});
viewportUnitsBuggyfill.refresh();
viewportUnitsBuggyfill.findProperties();

// Slidemenu */
(function() {
    var $body = document.body
    , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];
    if ( typeof $menu_trigger !== 'undefined' ) {
        $menu_trigger.addEventListener('mouseover', function() {
            $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
        });
    }
}).call(this);
