jQuery(document).ready(function($) {

	'use strict';
    //***************************
    // Sticky Header Function
    //***************************
	  jQuery(window).scroll(function() {
	      if (jQuery(this).scrollTop() > 170){  
	          jQuery('body').addClass("environment-sticky");
	      }
	      else{
	          jQuery('body').removeClass("environment-sticky");
	      }
	  });

    //***************************
    // BannerOne Functions
    //***************************
      jQuery('.environment-banner-one').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          arrows: false,
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // PartnerSlider Functions
    //***************************
      jQuery('.environment-partner-slider').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          prevArrow: "<span class='slick-arrow-left'><i class='icon-arrows-2'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='icon-arrows-2'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });

//***************************
    // ShopSlider Functions
    //***************************
      jQuery('.shop-grid-slider').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          prevArrow: "<span class='slick-arrow-left'><i class='icon-arrows-2'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='icon-arrows-2'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // Admin Post Functions
    //***************************
      jQuery('.environment-adminpost-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-right'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    
    //***************************
    // Click to Top Button
    //***************************
    jQuery('.environment-back-top').on("click", function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    //***************************
    // Parent AddClass Function
    //***************************
    jQuery(".environment-dropdown-menu,.environment-megamenu").parent("li").addClass("subdropdown-addicon");

    //***************************
    // Fancybox Function
    //***************************
    jQuery(".fancybox").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',
    });
    
    // Masonry Functions
    jQuery('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        fitWidth: true
      }
    });
    //***************************
    // CartToggle Function
    //***************************
    jQuery('a.environment-cartbtn').on("click", function(){
          jQuery('.environment-cart-box').slideToggle('slow');
          return false;
      });
      jQuery('html').on("click", function() { jQuery(".environment-cart-box").fadeOut(); });
    jQuery('.environment-user-option').on("click", function(event){ event.stopPropagation(); });
    //***************************
    // SearchToggle Function
    //***************************
    jQuery('a.environment-search-btn').on("click", function(){
          jQuery('.environment-search-popup').fadeToggle('slow');
          return false;
      });
      jQuery('html').on("click", function() { jQuery(".environment-search-popup").fadeOut(); });
    jQuery('.environment-user-option').on("click", function(event){ event.stopPropagation(); });

    //***************************
    // Progressbar Function
    //***************************
    jQuery('.progressbar1').progressBar({
      percentage : false,
      animation : true,
      backgroundColor : "#3f3932",
      barColor : "#9cc900",
      height : "8",
    });

    //***************************
    // Counter Function
    //***************************
    jQuery('#word-count1').jQuerySimpleCounter({
      end:2210,
      duration: 40000
    });
    jQuery('#word-count2').jQuerySimpleCounter({
      end:210,
      duration: 40000
    });
    jQuery('#word-count3').jQuerySimpleCounter({
      end:957,
      duration: 40000
    });
    jQuery('#word-count4').jQuerySimpleCounter({
      end:3010,
      duration: 40000
    });

    //********************************
    // Switcher MainToggle Function
    //*******************************
    jQuery(".switcher-style-btn").on("click", function() {
        jQuery(".switcher-style").trigger('click')
        jQuery(this).toggleClass('switcher-style-btn-open');
        jQuery(".switcher-style").toggleClass('switcher-sidebar-on');
        return false;
    });

    //***************************
    // Countdown Function
    //***************************
    jQuery(function() {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 2, 1 - 1, -308);
        jQuery('#environment-countdown').countdown({
            until: austDay
        });
        jQuery('#year').text(austDay.getFullYear());
    });
    
    //***************************
    // Donation Active Function
    //***************************
    jQuery('.environment-donation-section ul li').on('click', function() {
        jQuery('li.current').removeClass('current');
        jQuery(this).addClass('current');
    });




});

//***************************
// Map Function
//***************************

google.maps.event.addDomListener(window, 'load', init);
        
    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"weight":"3.00"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#144a56"},{"weight":"3.00"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#aed038"}]},{"featureType":"administrative","elementType":"labels.icon","stylers":[{"visibility":"off"},{"color":"#aed038"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#aed038"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"},{"color":"#bcd85c"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#d2e592"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#4192a5"}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
        });
    }


    //***************************
// ContactForm Function
//***************************
$('.myform').on('submit',function(){
    // Add text 'loading...' right after clicking on the submit button. 
    $('.output_message').text('Loading...'); 
     
    var form = $(this);
    $.ajax({
        url: form.attr('action'),
        method: form.attr('method'),
        data: form.serialize(),
        success: function(result){
            if (result == 'success'){
                $('.output_message').html('<span class="success-msg"><i class="fa fa-check-circle"></i> Message Sent successfully!</span>');
            } else if (result == 'validate'){
                $('.output_message').html('<span class="spam-error-msg"><i class="fa fa-warning"></i> You have already sent message. Try again after one hour.</span>');
            } else {
                $('.output_message').html('<span class="error-msg"><i class="fa fa-times-circle"></i> Error Sending email!</span>');
            }
        }
    });
     
    // Prevents default submission of the form after clicking on the submit button. 
    return false;   
});