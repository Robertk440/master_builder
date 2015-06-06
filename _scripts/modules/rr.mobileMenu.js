/* global RR: true, TweenMax: true, TimelineMax: true, jQuery: true, ripple: true, Ease: true, Expo: true */
/* jshint unused: false */

/**
 * RR - Awesome Mobile Menu
 */
var RR = (function (parent, $){
    'use strict';

    var setup = function (){
        $('#primary-nav').mobileMenu('init', {
            dropdownPos: 'static', // static, absolute
            menuPos: 'top', // top, bottom
            displayOn: 'mobile' // mobile, tablet, desktop/all
        });
    };

    // Export module method
    parent.mobileMenu = {
        setup: setup
    };

    return parent;

}(RR || {}, jQuery));

jQuery(function($){
    // Self-init Call
    RR.mobileMenu.setup();
});