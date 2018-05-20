/*------------------------------------------------------------------
 * Theme Name: Hostify Responsive Template
 * Theme URI: http://www.brandio.io/envato/spacehost
 * Author: Brandio
 * Author URI: http://www.brandio.io/
 * Description: A Bootstrap Responsive HTML5 Template
 * Version: 1.0
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2017 Brandio.
 -------------------------------------------------------------------*/

"use strict";

// Add Slider functionality to the #testimonials section in the home page.
var testimonialsSlider = $("#testimonials-slider","#testimonials");
testimonialsSlider.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1
});
// Add Slider functionality to the testimonials in the "Sign in" and "Sign out" pages.
var miniTestimonialsSlider = $(".mini-testimonials-slider","#form-section");
miniTestimonialsSlider.slick({
    dots: true,
    arrows: false,
    infinite: false,
    autoplay: true,
    speed: 200
});
// Add Slider functionality to the info-slider in the about page.
var infoSlider = $(".info-slider","#page-head");
infoSlider.slick({
    dots: true,
    arrows: false,
    infinite: false,
    autoplay: true,
    speed: 200
});
$(window).on("load", function() {
    // Counter slider functions in "CUSTOM HOSTING PLAN" section on the homepage
    var cPlan = $('#c-plan');
    cPlan.slider({
        tooltip: 'always'
    });
    cPlan.on("slide", function(e) {
        $('.slider .tooltip-up','#custom-plan').text(e.value/20);
    });
    cPlan.value = cPlan.data("slider-value");
    $('.slider .tooltip','#custom-plan').append('<div class="tooltip-up"></div>');
    $('.slider .tooltip-up','#custom-plan').text(cPlan.value/20);
    $('.slider .tooltip-inner','#custom-plan').attr("data-unit",cPlan.data("unit"));
    $('.slider .tooltip-up','#custom-plan').attr("data-currency",cPlan.data("currency"));
    
    // Features Section click function
    var featureIconHolder = $(".feature-icon-holder", "#features-links-holder");
    
    featureIconHolder.on("click",function(){
        featureIconHolder.removeClass("opened");
        $(this).addClass("opened");
        $(".show-details","#features-holder").removeClass("show-details");
        $(".feature-d"+$(this).data("id"), "#features-holder").addClass("show-details");
    });
    
    // Fix #features-holder height in features section
    var featuresHolder = $("#features-holder");
    var featuresLinksHolder = $("#features-links-holder");
    var featureBox = $(".show-details","#features-holder");
    
    featuresHolder.css("height",featureBox.height()+120);
    featuresLinksHolder.css("height",featureBox.height()+120);

    // Fix #features-holder height in features section
    $(window).on("resize",function() {
        featuresHolder.css("height",featureBox.height()+120);
        featuresLinksHolder.css("height",featureBox.height()+120);
        return false;
    });
    
    // Apps Section hover function
    var appHolder = $(".app-icon-holder", "#apps");
    
    appHolder.on("mouseover",function(){
        appHolder.removeClass("opened");
        $(this).addClass("opened");
        $(".show-details", "#apps").removeClass("show-details");
        $(".app-details"+$(this).data("id"), "#apps").addClass("show-details");
    });
    
    // More Info Section hover function
    var infoLink = $(".info-link", "#more-info");
    
    infoLink.on("mouseover",function(){
        infoLink.removeClass("opened");
        $(this).addClass("opened");
        $(".show-details", "#more-info").removeClass("show-details");
        $(".info-d"+$(this).data("id"), "#more-info").addClass("show-details");
    });
});