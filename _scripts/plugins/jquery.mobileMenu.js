(function( $ ){
    var methods = {
        init : function( el, options ) {
            var $el = el,
                settings = $.extend({
                    // These are the defaults.
                    dropdownPos: 'static', // static, absolute
                    menuPos: 'top', // top, bottom
                    displayOn: 'all' // mobile, tablet, desktop/all
                }, options ),
                isMobileDevice = $(window).width() <= 768 ? 1 : 0,
                _menuPos = settings.menuPos,
                _dropdownPos = settings.dropdownPos,
                _displayOn = settings.displayOn,
                $mobileMenuMarkup = '<button class="menu js-mobile-menu"><span class="line top"></span><span class="line mid"></span><span class="line bot"></span></button>',
                $subNavMarkup = '<button class="sub-nav js-sub-nav icon-arrow"><span class="vh">Sub-navigation</span></button>';


            if ( _menuPos === 'top' ) {
                var _el = $el,
                    $lvl1 = _el.find('.lvl1'),
                    $lvl2 = _el.find('.lvl2'),
                    $lvl3 = _el.find('.lvl3'),
                    $tabHeight = $lvl1.find('li').height(),
                    $set = $lvl1.add( $lvl2 ).add( $lvl3 );

                _el
                    .addClass( _displayOn )
                    .find('h1').after( $mobileMenuMarkup );

                if ( _dropdownPos === 'absolute' ){
                    _el.addClass( _dropdownPos );
                }

                // Insert Subnav Markup after Level 1 menu items
                $lvl1.find('ul').each(function (){
                    $(this).before( $subNavMarkup );
                });
            } else if ( _menuPos === 'bottom' ){
                var $dropdownMarkup =  $el.find('.lvl1').clone();

                $el
                    .addClass( _displayOn  )
                    .after( $dropdownMarkup )
                        .next().wrap('<nav class="mobile-nav"></nav>')
                            .parent().parent()
                            .after( $mobileMenuMarkup )
                                .next().addClass( _menuPos + ' ' + _displayOn );

                var _el = $('.js-mobile-menu'),
                    $mobileNav = $('.mobile-nav'),
                    $lvl1 = $mobileNav.find('.lvl1'),
                    $lvl2 = $mobileNav.find('.lvl2'),
                    $lvl3 = $mobileNav.find('.lvl3'),
                    $set = $lvl2.add( $lvl3 );
                    $dropdownList = $mobileNav.find('ul li');

                // Insert Subnav Markup after Level 1 menu items
                $lvl1.find('ul').each(function (){
                    $(this).before( $subNavMarkup );
                });

                $el.find('.lvl1 ul').each(function (){
                    $(this).before( $subNavMarkup );
                });

                _el.on('click', function (){
                    var $this = $(this);

                    if ( !$this.hasClass('active') ) {
                        $this.addClass('active');
                        $mobileNav.slideDown();

                        tl.play();

                        TweenMax.staggerTo( $lvl1.find('> li'), 2, { opacity: 1, bottom: 0, ease: Expo.easeOut }, 0.1 );
                    } else {
                        $this.removeClass('active');
                        $mobileNav.slideUp();

                        tl.reverse();

                        $set
                            .slideUp()
                            .parent()
                            .find('.icon-arrow.active')
                            .removeClass('active');

                        TweenMax.staggerTo( $dropdownList, 0.5, { opacity: 0, bottom: -20, ease: Expo.easeOut }, 0.1 );
                    }
                });

                var $mobileNav = $('.mobile-nav');
                $mobileNav.on('click', '.no-link', function (){
                    var $this = $(this);

                    $this.next().trigger('click');
                });
            }

            // TimelineMax the menu-icon animation for easier control on Touch/Mouse Events
            var tl = new TimelineMax();

            tl.to( _el.find('.top'), 0.2, { top: 4, ease: Expo.easeInOut });
            tl.to( _el.find('.bot'), 0.2, { top: -4, ease: Expo.easeInOut }, '-=0.2');

            tl.to( _el.find('.mid'), 0.2, { opacity: 0, ease: Expo.easeInOut });
            tl.to( _el.find('.top'), 0.2, { rotation: 45, ease: Expo.easeInOut }, '-=0.2');
            tl.to( _el.find('.bot'), 0.2, { rotation: -45, ease: Expo.easeInOut }, '-=0.2');


            // Stop the Timeline at 0 else the animation will play after initiation
            tl.pause();

            // Declare Eventlisteners
            var $mobileMenu = $('.js-mobile-menu'),
                $subNav = $('.js-sub-nav'),
                $dropdownList = _el.find('ul li');

            $mobileMenu.on('click', function (){
                var $this = $(this);

                if ( !$this.hasClass('active') ) {
                    $this.addClass('active');

                    tl.play();



                    $lvl1.slideDown(function (){
                        TweenMax.staggerTo( $lvl1.find('> li'), 2, { opacity: 1, top: 0, ease: Expo.easeOut }, 0.1 );
                    });

                    if ( _dropdownPos === 'static' && _menuPos === 'top' ){
                        TweenMax.to( window, 0.75, { scrollTo: { y: 0, ease: Ease.easeInOut } } );
                    }
                } else {
                    $this.removeClass('active');

                    tl.reverse();

                    $set
                        .slideUp()
                        .find('.icon-arrow.active')
                        .removeClass('active');

                    TweenMax.staggerTo( $dropdownList, 0.5, { opacity: 0, top: -20, ease: Expo.easeOut }, 0.1 );

                    if ( _dropdownPos === 'static' && _menuPos === 'top' ){
                        TweenMax.to( window, 0.75, { scrollTo: { y: 0, ease: Ease.easeInOut } } );
                    }
                }
            });

            $subNav.on('touchend, click', function() {
                var $this = $(this),
                    $parentIndex,
                    $index;

                if ( $this.hasClass('active') ) {
                    if ( $this.next().hasClass('lvl2') ) {
                        $this.removeClass('active')
                            .next()
                                .slideUp()
                                .find('.icon-arrow.active')
                                    .removeClass('active')
                                        .next()
                                        .slideUp();

                        if ( $this.parents('.mobile-nav').length ) {
                            TweenMax.staggerTo( $lvl2.find('li'), 0.5, { opacity: 0, bottom: -20, ease: Expo.easeOut }, 0.1 );
                        } else {
                            TweenMax.staggerTo( $lvl2.find('li'), 0.5, { opacity: 0, top: -20, ease: Expo.easeOut }, 0.1 );
                        }
                    } else {
                        $index = $this.parent().parent().parent().index();

                        if ( $this.prevUntil('ul').hasClass('lvl2') ){
                            $parentIndex = $this.parent().parent().parent().index();
                        } else {
                            $parentIndex = $this.parent().parent().index();
                        }

                        $this.removeClass('active')
                            .next()
                                .slideUp();

                        if ( $this.parents('.mobile-nav').length ) {
                            TweenMax.staggerTo( $lvl3.find('li'), 0.5, { opacity: 0, bottom: -20, ease: Expo.easeOut }, 0.1 );
                        } else {
                            TweenMax.staggerTo( $lvl3.find('li'), 0.5, { opacity: 0, top: -20, ease: Expo.easeOut }, 0.1 );
                        }
                    }
                } else {
                    if ($this.prevUntil('ul').hasClass('lvl1')) {
                        $index = $this.parent().index();
                        $parentIndex = 0;

                        $lvl1.find('.icon-arrow.active').removeClass('active');
                        $lvl2.slideUp();
                        $lvl3.slideUp();

                        if ( $this.parents('.mobile-nav').length ) {
                            TweenMax.staggerTo( $lvl2.find('li'), 0.5, { opacity: 0, bottom: -20, ease: Expo.easeOut }, 0.1 );
                            TweenMax.staggerTo( $lvl3.find('li'), 0.5, { opacity: 0, bottom: -20, ease: Expo.easeOut }, 0.1 );
                        } else {
                            TweenMax.staggerTo( $lvl2.find('li'), 0.5, { opacity: 0, top: -20, ease: Expo.easeOut }, 0.1 );
                            TweenMax.staggerTo( $lvl3.find('li'), 0.5, { opacity: 0, top: -20, ease: Expo.easeOut }, 0.1 );
                        }
                    } else if ($this.prevUntil('ul').hasClass('lvl2')) {
                        $index = $this.parent().index();
                        $parentIndex = $this.parent().parent().parent().index() + 1;

                        $lvl2.find('.icon-arrow.active').removeClass('active');
                        $lvl3.slideUp();

                        if ( $this.parents('.mobile-nav').length ) {
                            TweenMax.staggerTo( $lvl3.find('li'), 0.5, { opacity: 0, bottom: -20, ease: Expo.easeOut }, 0.1 );
                        } else {
                            TweenMax.staggerTo( $lvl3.find('li'), 0.5, { opacity: 0, top: -20, ease: Expo.easeOut }, 0.1 );
                        }
                    } else {
                        $index = $this.parent().index();
                        $parentIndex = $this.parent().parent().index();
                    }

                    $this.addClass('active').next().slideDown(function (){
                        if ( $this.parents('.mobile-nav').length ) {
                            TweenMax.staggerTo( $this.next().find('> li'), 2, { opacity: 1, bottom: 0, ease: Expo.easeOut }, 0.1 );
                        } else {
                            TweenMax.staggerTo( $this.next().find('> li'), 2, { opacity: 1, top: 0, ease: Expo.easeOut }, 0.1 );
                        }
                    });
                }
            });

            // Primary Nav Mouse Listeners
            _el.on('click', '.no-link', function (e){
                e.preventDefault();
                var $this = $(this);

                $this.next().trigger('click');

                ripple(e, $this);
            }).on('mouseover', '.lvl2 a', function (){
                var $this = $(this);

                if ( isMobileDevice ){
                    $this.parent().parent().stop( true, false ).slideDown();
                }
            }).on('mouseout', '.lvl2 a', function (){
                var $this = $(this);

                if ( isMobileDevice ){
                    $this.parent().parent().stop( true, false ).slideUp();
                }
            }).on('click', '.lvl2 a', function (e){
                var $this = $(this);

                $this.next().trigger('click');

                ripple(e, $this);
            });
        }
    };

    $.fn.mobileMenu = function( method, options ) {
        var el = this;

        switch ( method ) {
            case 'init' :
                methods.init( el, options );
                break;
        }
    };
})( jQuery );