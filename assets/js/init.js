(function( $ ){
  'use strict';

  //
  // Preloader
  jQuery(window).load(function() {
    jQuery(".preloader").delay(1000).fadeOut("slow");
  });

  $(document).ready(function(){
    //
    // Off Canvas
    $(".toggle-btn").on('click', function(e){
      e.preventDefault();
      $('body').addClass('canvas-show');
    });
    $(".fp-close, .canvas-overlay, .nav > li > a").on('click', function(e){
      e.preventDefault();
      $('body').removeClass('canvas-show');
    });

    $(".sign-btn").on('click', function(e) {
      e.preventDefault();
      $(".sign-area").toggleClass("active");
    });

    //
    // Sticky Header
    $(window).scroll(function () {
      if ($(this).scrollTop() > 20) {
        $('body').addClass("sticky-nav");
      }
      else {
        $('body').removeClass("sticky-nav");
      }
    });
    $(window).scroll();

    //
    // Smooth Scrolling
    $('.nav a[href*=#]:not([href=#]), a.scroll-top[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 65
          }, 500);
          return false;
        }
      }
    });

    //
    // ScrollSpy
    $('body').scrollspy({
      target  : '.scrollspy',
      offset  : 75
    });

    //
    // Slideshow Background
    $('#header').vegas({
      slides: [
        { src: "assets/images/slide_img01.jpg" },
        { src: "assets/images/slide_img02.jpg" },
        { src: "assets/images/slide_img03.jpg" }
      ]
    });

    //
    // Magnific Popup (Video)
    $('.play-btn').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: true,
      fixedContentPos: false
    });

    //
    // Clients
    $('.review-carousel').owlCarousel({
      loop            : true,
      autoplay        : true,
      autoplayTimeout : 7000,
      items           : 1,
      nav             : true,
      navText       : ['<i class="ion-ios-arrow-thin-left"><i/>','<i class="ion-ios-arrow-thin-right"><i/>']
    });

    //
    // Subscribe (mailchimp)
    var mailSubscribe   = $('.subscribe-form');

    mailSubscribe.ajaxChimp({
      callback: mailchimpCallback,
      url: "http://frontpixels.us11.list-manage.com/subscribe/post?u=8ed724b6f4db710960cbc2439&amp;id=26648b74c9" // Just paste your mailchimp list url inside the "".
    });

    function mailchimpCallback(resp) {
      var successMessage    = $('.subscribe-success'),
          errorMessage      = $('.subscribe-error'),
          successIcon       = '<i class="ion-ios-checkmark"></i> ',
          errorIcon         = '<i class="ion-ios-close"></i> ';

      if (resp.result === 'success') {
        successMessage.html(successIcon + resp.msg).fadeIn(1000);
        errorMessage.fadeOut(300);

      } else if(resp.result === 'error') {
        errorMessage.html(errorIcon + resp.msg).fadeIn(1000);
      }
    }

    //  Counter Up
    $('.countup').counterUp({
      delay : 10,
      time  : 1000
    });

    //
    // Contact
    var contact         = $('.contact-form'),
        successMessage  = $('.contact-success'),
        errorMessage    = $('.contact-error');

    contact.validate({
      rules: {
        name: {
          required: true,
          minlength: 2
        },
        email: {
          required: true,
          email: true
        },
        message: {
          required: true
        }
      },

      messages: {
        name: {
          required: "Come on! Enter your name",
          minlength: "your name must consist of at least 2 characters"
        },
        email: {
          required: "no email, no message"
        },
        message: {
          required: "You have to write something to send this form.",
          minlength: "thats all? really?"
        }
      },

      submitHandler: function(form) {
        $(form).ajaxSubmit({
          type:"POST",
          data: $(form).serialize(),
          url:"assets/php/contact.php",
          success: function() {
            successMessage.fadeIn();
          },
          error: function() {
            contact.fadeTo( "slow", 0.15, function() {
              errorMessage.fadeIn();
            });
          }
        });
      }
    });

    //
    // Google Map
    var mapLocation = new google.maps.LatLng(40.712784, -74.005941); //change coordinates here
    var marker;
    var map;

    function initialize() {
      var mapOptions = {
        zoom        : 10, //change zoom here
        center      : mapLocation,
        scrollwheel : false,
        styles: [
          {"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#212121"}]},
          {"featureType":"landscape","elementType":"all","stylers":[{"color":"#e3e3e3"}]},
          {"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},
          {"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},
          {"featureType":"road","elementType":"all","stylers":[{"saturation":-60},{"lightness":15}]},
          {"featureType":"road.highway","elementType":"all","stylers":[{"color":"#e3e3e3","visibility":"simplified"}]},
          {"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
          {"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},
          {"featureType":"water","elementType":"all","stylers":[{"color":"#bbdefb"},{"visibility":"on"}]}
        ]

      };

      map = new google.maps.Map(document.getElementById('map'),
        mapOptions);

      // Replace with your data
      var contentString = '<div class="address-box">'
        + '<div class="info-head"><img src="assets/images/logo_dark.png" alt=""></div>'
        + '<p class="map-address">'
        + '<i class="ion-ios-location"></i> New York, USA<br>'
        + '<i class="ion-ios-telephone"></i> 012-345-6789<br>'
        + '<i class="ion-email"></i> <a href="mailto:info@example.com">info@example.com</a></p>'
        + '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      var image   = 'assets/images/locate.png';
          marker  = new google.maps.Marker({
          map       : map,
          draggable : true,
          title     : 'Imply', //change title here
          icon      : image,
          animation : google.maps.Animation.DROP,
          position  : mapLocation
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  });

})(window.jQuery);