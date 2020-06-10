/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(function ($) {
  'use strict';
  /* Table of contents */

  /*
  	# Headers
  	# Bar
  	# Navigation
  	# Footer
  	# Shortcodes
  		## Accordion box
  		## Banner box
  		## Chart box
  		## Counter box
  		## Contact form
  		## Countdown box
  		## Cover box
  		## Gallery
  		## Google maps
  		## Onepage
  		## Parallax
  		## Progress bar
  		## Pricing table
  		## Social bar
  		## Split box
  		## Sliders
  		## Split screen
  		## Tab box
  		## Video Background
  	# Portfolio
  		## Portfolio gallery
  		## Scroll content
  	# Lazy load
  	# Other
  */

  window.Nor = {
    init: function init() {
      // Header
      this.header = $('#masthead');
      this.headerIsFifth = Nor.header.hasClass('header-5');
      this.headerIsSixth = Nor.header.hasClass('header-6');
      this.headerMustBeFixed = $('[data-header-fixed]').length;
      this.headerIsFixed = false;
      this.headerSearch = $('.header-search');
      this.subheader = $('.subheader'); // Logos

      this.siteBranding = this.header.find('.site-branding');
      this.siteTitle = this.header.find('.site-title');
      this.logo = this.header.find('.logo');
      this.fixedLogo = this.header.find('.fixed-logo');
      this.mobileLogo = this.header.find('.mobile-logo');
      this.fixedMobileLogo = this.header.find('.fixed-mobile-logo');
      this.logoForOnepage = this.header.find('.for-onepage');
      this.logoForOnepageDark = this.logoForOnepage.find('.dark');
      this.logoForOnepageLight = this.logoForOnepage.find('.light'); // Menus

      this.megaMenu = this.header.find('#mega-menu-wrap'); // Page

      this.page = $('#page');
      this.resize();
    },
    resize: function resize() {
      this.isMobile = $(window).width() <= 768;
    }
  };
  /* # Headers */

  function handleHeaders() {
    // Search open
    $('[data-nav-search]').click(function (e) {
      e.preventDefault();
      Nor.headerSearch.addClass('opened');
      setTimeout(function () {
        Nor.headerSearch.find('form input').focus();
      }, 100);
    }); // Search close

    Nor.headerSearch.click(function (e) {
      Nor.headerSearch.removeClass('opened');
    }); // Remove close from form

    Nor.headerSearch.find('form').click(function (e) {
      e.stopPropagation();
    });

    if (Nor.headerIsFifth) {
      handleHeaderFifth(); // Show logo after first calculate

      Nor.siteTitle.css('opacity', '1'); // If menu hidden or empty then set logo relative

      if ($('.main-nav.hidden').length == 0) {
        Nor.siteTitle.css('position', 'relative');
      }
    } // Fix (header & cap) offset


    if (Nor.subheader.length && !Nor.headerIsSixth && !Nor.isMobile) {
      $([$('.header-cap')[0], Nor.header[0]]).css('margin-top', Nor.subheader.outerHeight() + 'px');
    }

    handleMobileHeader();
    handleHeaderSize();
    handleFixedHeader();
  }

  function handleMobileHeader() {
    if (Nor.header && Nor.header.length) {
      if (Nor.isMobile) {
        Nor.header.addClass('mobile-header');
      } else {
        Nor.header.removeClass('mobile-header');
      }
    }
  }

  function handleHeaderSize() {
    if (Nor.headerIsFifth) {
      handleHeaderFifth();
    }

    handleFixedHeader();

    if (!Nor.headerIsSixth) {
      Nor.header.css('width', Nor.page.outerWidth() + 'px');
    } // Reset mega menu css properties for mobile phone


    if (Nor.isMobile) {
      Nor.megaMenu.find('ul').css({
        'left': '',
        'width': '',
        'max-width': '',
        'min-width': ''
      });
    }
  }

  function handleFixedHeader() {
    if ($(document).scrollTop() > 150 && Nor.headerMustBeFixed) {
      if (!Nor.headerIsFixed) {
        Nor.headerIsFixed = true;
        Nor.header.addClass('header-fixed no-transition').css({
          // Subheader margin
          'margin-top': '0',
          'width': Nor.page.outerWidth() + 'px'
        }); // Add #wpadminbar offset

        if ($('#wpadminbar').length && !Nor.isMobile) {
          Nor.header.css('top', $('#wpadminbar').outerHeight() + 'px');
        } // Hide non fixed logos


        Nor.logo.css('display', 'none');
        Nor.mobileLogo.css('display', 'none'); // Show fixed logo

        if (Nor.isMobile && Nor.fixedMobileLogo.length) {
          Nor.fixedMobileLogo.css('display', 'inline');
        } else {
          Nor.fixedLogo.css('display', 'inline');
        }
      }
    } else {
      Nor.headerIsFixed = false;
      Nor.header.removeClass('header-fixed');
      Nor.header.css({
        'transition-duration': '.2s',
        'top': '',
        'width': '',
        'margin-top': ''
      });

      if (Nor.subheader.length && !Nor.headerIsSixth && !Nor.isMobile) {
        Nor.header.css('margin-top', $('.subheader').outerHeight() + 'px');
      } // Hide fixed logos


      Nor.fixedLogo.css('display', '');
      Nor.fixedMobileLogo.css('display', ''); // Show non fixed logo

      if (Nor.isMobile && Nor.mobileLogo.length) {
        Nor.logo.css('display', 'none');
        Nor.mobileLogo.css('display', 'inline');
      } else {
        Nor.logo.css('display', 'inline');
        Nor.mobileLogo.css('display', 'none');
      }
    } // Effect appearance


    if ($(document).scrollTop() > 250) {
      Nor.header.removeClass('no-transition').addClass('showed');
    } else {
      Nor.header.removeClass('showed').addClass('no-transition');
    }
  } // Five header cetered logo


  function handleHeaderFifth() {
    var nav = Nor.megaMenu.find('> ul > li');
    Nor.megaMenu.css('margin-left', '');

    if (!Nor.isMobile) {
      // If navigation hidden or empty then set logo on center
      if ($('.main-nav.hidden').length) {
        Nor.siteTitle.css('left', '');
        var containerCenter = Nor.page.outerWidth() / 2 + Nor.page.offset().left,
            siteTitleCenter = containerCenter - Nor.siteTitle.offset().left - Nor.siteTitle.outerWidth() / 2;
        Nor.siteTitle.css('left', siteTitleCenter + 'px');
      } else {
        // Hidden logo for repeat calculate
        Nor.siteTitle.css('display', 'none'); // Insert logo in center

        if (Nor.megaMenu.length) {
          var centerMenu = $('#primary-menu').width() / 2;
          var centerLi = 0,
              countWidth = 0; // Find middle li tag

          for (var i = 0; i < nav.length; i++) {
            countWidth += nav.eq(i).outerWidth(); // `+50` - is horrible piece of shit

            if (countWidth + 50 > centerMenu) {
              centerLi = i;
              break;
            }
          } // Remove devider from center li


          $(nav[centerLi]).addClass('without-divider'); // Append logo after center li

          Nor.siteTitle.insertAfter($(nav[centerLi]));
        } else {
          Nor.megaMenu.append(Nor.siteTitle);
        } // Restore hidden logo


        Nor.siteTitle.css('display', 'block'); // Centered menu

        var containerLeft = Nor.page.offset().left,
            containerWidth = Nor.page.outerWidth(),
            logoLeft = Nor.siteTitle.offset().left,
            logoWidth = Nor.siteTitle.outerWidth();
        var left = containerLeft + containerWidth / 2 - logoLeft - logoWidth / 2;
        Nor.megaMenu.css('margin-left', left * 2 + 'px');
      }
    } else {
      Nor.siteTitle.css('left', '0');
    }
  }

  function handleHeaderTitle() {
    // Ttitle Parallax
    if ($('.header-title .page-title').hasClass('no-transition')) {
      if ($('.header-title h1').length) {
        var scroll = $(document).scrollTop() / 3;

        if (scroll > 200) {
          scroll = 200;
        }

        $('.header-title h1, .header-title p.subtitle, .header-title .tags').css({
          'transform': 'translate3d(0,' + scroll + 'px, 0)',
          'opacity': 1 - scroll / 200
        }); // Blur on scroll
        // $('.header-title .bg-image').css({
        // 	'filter': 'blur(' + (scroll/5) + 'px)'
        // });
      }
    }
  }

  function showHeaderTitle() {
    $('.header-title').addClass('show'); // ahahah

    setTimeout(function () {
      $('.header-title .page-title, .header-title .subtitle, .header-title .tags').addClass('no-transition');
    }, 1000);
  }
  /* # Bar */


  function handleBarScroll() {
    var bar = $('.bar');

    if (bar.length) {
      var hamburger = $('.bar-hamburger .hamburger');

      if ($(document).scrollTop() > 100) {
        hamburger.css('margin-top', '25px');
      } else {
        hamburger.css('margin-top', '');
      }
    }
  }
  /* # Navigation */


  window.openFullscreenMenu = function () {
    $('#fullscreen-mega-menu').addClass('open').find('#secondary-menu > li').each(function (i) {
      var link = $(this);
      setTimeout(function () {
        link.addClass('showed');
      }, 150 + i * 40);
    });
  };

  function handleNavigations() {
    // Mobile menu
    var menuNow = 0;
    $('#hamburger-menu').click(function () {
      $('#site-navigation').addClass('active');
      $('.close-menu').css('right', '0');
      $(this).addClass('hidden');
      $('#masthead .search').addClass('visible');
    });
    $('#site-navigation .close, .close-menu, .mobile-header #site-navigation a[href^="#"]').click(function () {
      if (menuNow != 0) {
        $('#mega-menu-sub-' + menuNow).removeClass('active');
        $('#mega-menu-sub-' + menuNow).removeAttr('id');
        menuNow--;
      } else {
        $('#site-navigation').removeClass('active');
        $('.close-menu').css('right', '-32%');
        $('#hamburger-menu').removeClass('hidden');
        $('#masthead .search').removeClass('visible');
      }
    });
    $('.has-submenu > a').on('click touchstart', function (e) {
      if (Nor.isMobile) {
        var menu = $(this).parent().find('.sub-nav > ul.sub-menu, > .sub-sub-nav > ul.sub-sub-menu');
        menuNow++;
        menu.addClass('active').attr('id', 'mega-menu-sub-' + menuNow);
        e.preventDefault();
      } else {
        window.location.href = $(this).attr('href');
      }
    });

    if ($('#masthead nav > .mobile-wpml-select').length) {
      $('#masthead nav > .mobile-wpml-select').insertAfter($('#mega-menu-wrap > ul > li').last());
    } // Mega Menu


    if ($('#mega-menu-wrap').length) {
      $('#mega-menu-wrap').accessibleMegaMenu({
        uuidPrefix: 'accessible-megamenu',
        menuClass: 'menu',
        topNavItemClass: 'nav-item',
        panelClass: 'sub-nav',
        panelGroupClass: 'sub-sub-menu',
        hoverClass: 'hover',
        focusClass: 'focus',
        openClass: 'open'
      }).on('megamenu:open', function (e, el) {
        var $menu = $(this),
            $el = $(el),
            $subNav;

        if (Nor.isMobile) {
          return false;
        }

        if ($el.is('.main-menu-link.open') && $el.siblings('div.sub-nav').length > 0) {
          $subNav = $el.siblings('div.sub-nav');
        } else if ($el.is('div.sub-nav')) {
          $subNav = $el;
          $el = $subNav.siblings('.main-menu-link');
        } else {
          return true;
        }

        $subNav.removeAttr('style').removeClass('sub-nav-onecol');
        var ul = $subNav.find('ul.sub-menu-wide');
        ul.each(function () {
          var $ul = $(this);
          var total_width = 1;
          $ul.find('> .sub-nav-item').each(function () {
            total_width += $(this).outerWidth();
          });
          $ul.innerWidth(total_width);
        });
        var headerLeft = 0;

        if ($('#masthead.header-3').length) {
          var headerWrap = $('#masthead.header-3 .header-wrap');
          headerLeft = $(window).width() - headerWrap.outerWidth() - headerWrap.offset().left;
        }

        var windowWidth = $(window).width();
        var subNavWidth = $subNav.find('> ul').width();
        var subNavMargin = 0;
        $subNav.css({
          'max-width': windowWidth
        });

        if (subNavWidth > windowWidth) {
          $subNav.addClass('sub-nav-onecol');
          subNavWidth = $subNav.width();
        }

        var elWidth = $el.outerWidth();
        var elOffsetLeft = $el.offset().left;
        var elOffsetRight = windowWidth - $el.offset().left - elWidth;

        if (elOffsetLeft < 0) {
          subNavMargin = -(elOffsetLeft - subNavWidth / 2 + elWidth / 2) - headerLeft;
        }

        if (elOffsetRight < subNavWidth - elWidth) {
          subNavMargin = -(subNavWidth - elWidth - elOffsetRight) - headerLeft;
        }

        if (ul.outerWidth() >= windowWidth) {
          $subNav.find(' > ul').css('left', '');
          ul.innerWidth(windowWidth);
          subNavMargin = -$subNav.find(' > ul').offset().left;
        }

        $subNav.find('> ul').css('left', subNavMargin);
      });
      $('#mega-menu-wrap .sub-sub-nav').each(function () {
        if ($(this).offset().left + $(this).outerWidth() > $(window).width()) {
          $(this).addClass('menu-left');
        }
      });
    } // Fullscreen Mega Menu


    $('#hamburger-fullscreen-menu').on('click', function () {
      openFullscreenMenu();
    });
    var fullscreenMenu = $('#fullscreen-mega-menu-wrap');

    if (fullscreenMenu.length) {
      var closeMenu = function closeMenu() {
        $('#fullscreen-mega-menu').removeClass('open').find('#secondary-menu > li').each(function (i) {
          $(this).removeClass('showed');
        });
      };

      $('#fullscreen-menu-close, #fullscreen-mega-menu-wrap a[href^="#"]').on('click', closeMenu);
      fullscreenMenu.accessibleMegaMenu({
        uuidPrefix: 'accessible-megamenu',
        menuClass: 'menu',
        topNavItemClass: 'nav-item',
        panelClass: 'sub-nav',
        panelGroupClass: 'sub-sub-menu',
        hoverClass: 'hover',
        focusClass: 'focus',
        openClass: 'open'
      }).on('megamenu:open', function (e, el) {
        $(this).find('.sub-nav:not(.open) > ul > li, .sub-nav .mega-menu-item:not(:hover) > .sub-sub-nav > .sub-sub-menu > li').removeClass('showed');
        $(this).find('.sub-nav.open > ul > li, .sub-nav .mega-menu-item:hover > .sub-sub-nav > .sub-sub-menu > li').each(function (i) {
          var self = $(this);
          setTimeout(function () {
            if (self.parent().parent().parent().is(':hover')) {
              self.addClass('showed');
            }
          }, i * 40);
        });
      });
      $('#fullscreen-mega-menu-wrap .sub-nav').on('mouseleave', function () {
        $(this).find('li').removeClass('showed');
      });
    }
  }
  /* # Footer */


  function handleFooter() {
    // Sticky
    var stickyFooter = $('.site-footer.sticky');

    if (stickyFooter.length && !Nor.isMobile) {
      $('.site-content').css({
        'margin-bottom': stickyFooter.outerHeight() + 'px',
        'position': 'relative',
        'z-index': '3'
      });
      stickyFooter.addClass('visible');
    }
  }

  ;

  function handleFooterSize() {
    var stickyFooter = $('.site-footer.sticky');

    if (stickyFooter.length) {
      if (!Nor.isMobile) {
        stickyFooter.css({
          'width': stickyFooter.parent().outerWidth() + 'px',
          'left': stickyFooter.parent().offset().left + 'px'
        });
        $('.site-content').css({
          'margin-bottom': stickyFooter.outerHeight() + 'px',
          'position': 'relative',
          'z-index': '3'
        });
      } else {
        $('.site-content').css({
          'margin-bottom': '',
          'position': '',
          'z-index': ''
        });
        stickyFooter.css({
          'width': '',
          'left': ''
        });
      }
    }
  }
  /* # Shortcodes */

  /* ## Accordion box */


  function handleAccordionBox() {
    $('[data-norebro-accordion]').each(function () {
      var accordion = $(this);
      var titles = $(this).find('.title');
      var items = $(this).find('.item');
      var contents = $(this).find('.content');
      var iconOpened = 'ion-minus',
          iconClosed = 'ion-plus';
      var isOutline = $(this).hasClass('outline');

      var toggle = function toggle(num) {
        var opened = accordion.find('.open');
        var content = contents.eq(num); // If not active

        if (!items.eq(num).hasClass('active')) {
          // Activate this item
          items.removeClass('active');
          items.eq(num).addClass('active');
          setTimeout(function () {
            content.css('height', '').addClass('no-transition open'); // Open new content

            var height = content.outerHeight() + 'px'; // Save heights

            content.removeClass('no-transition open').css('height', isOutline ? '0px' : '6px'); // Close new content

            setTimeout(function () {
              opened.removeClass('open no-transition').css('height', isOutline ? '0px' : '6px'); // Close old content

              content.addClass('open').css('height', height); // Open new content
              // Change titles

              titles.find('.control span').removeClass(iconOpened).addClass(iconClosed);
              titles.eq(num).find('.control span').removeClass(iconClosed).addClass(iconOpened);
            }, 30);
          }, 30);
        }
      };

      titles.each(function (i) {
        $(this).on('click', function () {
          toggle(i);
        });
      });
      toggle($(this).attr('data-norebro-accordion') || 0);
      this.accordionToggle = toggle;
    });
  }

  ;

  function handleAccordionBoxSize() {
    $('[data-norebro-accordion]').each(function () {
      var content = $(this).find('.content.open');
      var wrap = content.find('.wrap');
      content.css('height', wrap.outerHeight() + 'px');
    });
  }

  ;
  /* ## Banner box */

  function handleBannerBox() {
    $('.banner-box.overlay-title.hover').each(function () {
      $(this).hover(function () {
        var self = $(this);
        var content = $(this).find('.title-wrap');
        var description = $(this).find('.description-wrap');
        description.css('margin-top', -content.outerHeight() + 'px');
      }, function () {
        var self = $(this),
            newHeight = 0,
            oldHeight = 0;
        self.find('.description-wrap').css('margin-top', '');
      });
    });
  }

  function handleBannerBoxSize() {
    $('.banner-box.overlay-title.hover').each(function () {
      var newHeight = 0,
          titles = $(this).find('.title-wrap');
      $(this).css('height', '');
      $(this).css('height', $(this).outerHeight() - titles.outerHeight() + 'px');
    });
  }
  /* ## Clients logo */


  function handleClientsLogo() {
    $('.clients-logo .overlay').each(function () {
      $(this).css('top', '-' + $(this).find('h4').outerHeight() + 'px');
    });
  }

  ;
  /* ## Chart box */

  function handleChartBox() {
    var scrollTop = $(document).scrollTop() + $(window).height();
    var settings = {
      size: 128,
      trackColor: "#e0e0e0",
      scaleColor: false,
      lineWidth: 4,
      trackWidth: 4,
      lineCap: "square",
      onStep: function onStep(from, to, percent) {
        if ($(this.el).length) {
          $(this.el).parent().find(".percent").html(Math.round(percent));
        }
      }
    };
    $("[data-chart-box]").each(function () {
      if (scrollTop > $(this).offset().top + $(this).height()) {
        var color = $(this).attr("data-color");

        if (color != undefined && color != 'brand') {
          settings.barColor = color;
        } else {
          var tmp = $(document.createElement('div')).addClass('brand-color');
          $(document.body).append(tmp);
          var color = $('.brand-color').eq(0).css('color');
          tmp.remove();
          settings.barColor = color;
        }

        $(this).easyPieChart(settings);
      }
    });
  }

  ;
  /* ## Counter box */

  function handleCounterBox() {
    $('[data-counter]').each(function () {
      var counter = $(this);
      var scrollTop = $(document).scrollTop() + $(window).height();

      if (scrollTop > counter.offset().top + counter.height()) {
        var countEnd = parseInt(counter.attr('data-counter').replace(/\s/g, ''));
        counter.removeAttr('data-counter');

        for (var j = 0; j <= 20; j++) {
          (function (count) {
            setTimeout(function () {
              var number = Math.round(countEnd / 20 * count);
              counter.find('.count').html(number);
            }, 50 * count);
          })(j);
        }
      }
    });
  }

  ;
  /* ## Contact form */

  function handleContactForm() {
    // Button
    $('.contact-form').each(function () {
      var submit = $(this).find('[type="submit"]');
      var button = $(this).find('[data-contact-btn] button');

      if (submit.length) {
        button.find('.text').html(submit.val());
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      } // For focus


      if ($(this).hasClass('without-label-offset')) {
        $(this).find('.wpcf7-form-control-wrap').after('<div class="focus"></div>');
        $(this).find('input, textarea, select').on('focus', function () {
          $(this).parent().parent().find('.focus').addClass('active');
        }).on('blur', function () {
          $(this).parent().parent().find('.focus').removeClass('active');
        });
      }
    }); // Loader

    $('.contact-form form').on('submit', function () {
      $(this).find('.btn-load').css({
        'width': '21px',
        'margin-right': '6px'
      });
    });
    $(document).on('spam.wpcf7 invalid.wpcf7 spam.wpcf7 mailsent.wpcf7 mailfailed.wpcf7', function (e) {
      var form = e.target;
      $(form).find('.btn-load').css({
        'width': '0px',
        'margin-right': '0px'
      });
    });
  }
  /* ## Countdown box */


  function handleCountdownBox() {
    $("[data-countdown-box]").each(function () {
      var countdownBox = $(this);
      var labels = countdownBox.attr('data-countdown-labels').split(','),
          parser = /([0-9]{2})/gi; // Return the time components that diffs

      var diff = function diff(obj1, obj2) {
        var diff = [];
        labels.forEach(function (key) {
          if (obj1[key] !== obj2[key]) {
            diff.push(key);
          }
        });
        return diff;
      }; // Parse countdown string to an object


      var strfobj = function strfobj(str) {
        var parsed = str.match(parser),
            obj = {};
        labels.forEach(function (label, i) {
          obj[label] = parsed[i];
        });
        return obj;
      };

      var template = _.template($("#" + countdownBox.attr("data-countdown-box")).html()),
          currentDate = '00:00:00:00:00',
          nextDate = '00:00:00:00:00'; // Build the layout


      var initData = strfobj(currentDate);
      labels.forEach(function (label, i) {
        countdownBox.append(template({
          current: initData[label],
          next: initData[label],
          label: label
        }));
      }); // Starts the countdown

      countdownBox.countdown(new Date($(this).attr("data-countdown-time")), function (event) {
        window.c = event;
        var newDate = event.strftime('%m:%n:%H:%M:%S'),
            data;

        if (newDate !== nextDate) {
          currentDate = nextDate;
          nextDate = newDate; // Setup the data

          data = {
            'current': strfobj(currentDate),
            'next': strfobj(nextDate)
          }; // Apply the new values to each node that changed

          diff(data.current, data.next).forEach(function (label) {
            var selector = '.%s'.replace(/%s/, label),
                node = countdownBox.find(selector); // Update the node

            node.removeClass('flip');
            node.find('.box-current .number').text(data.current[label]);
            node.find('.box-next .number').text(data.next[label]); // Wait for a repaint to then flip

            _.delay(function (node) {
              node.addClass('flip');
            }, 50, node);
          });
        }
      });
    });
  }
  /* ## Cover box */


  function handleCoverBox() {
    $('[data-norebro-cover-box]').each(function () {
      var box = $(this),
          items = $(this).find('[data-item]'),
          triggers = $(this).find('[data-trigger]');
      var selected = -1;

      var openItem = function openItem(num) {
        var item = items.eq(num);

        if (selected != num && !Nor.isMobile) {
          selected = num;
          item.addClass('no-transition');
          item.css('width', '');
          var width = item.outerWidth();
          item.css('width', '0');
          setTimeout(function () {
            item.removeClass('no-transition');
            items.css('width', '0');
            item.css('width', width - 2 + 'px');
          }, 30);
        }
      };

      triggers.on('mouseenter', function () {
        openItem(triggers.index($(this)));
      });
      openItem(0);
    });
  }

  function handleCoverBoxSize() {
    $('[data-norebro-cover-box]').each(function () {
      var box = $(this);
      box.find('[data-item]').each(function (i) {
        if (!Nor.isMobile) {
          $(this).css('height', box.find('[data-trigger]').eq(i).outerHeight() + 'px');
          $(this).find(' > * ').css('width', box.find('[data-trigger]').eq(i).outerWidth() + 'px');
        } else {
          $(this).css({
            'height': '',
            'width': ''
          });
        }
      });
    });
  }
  /* ## Gallery */


  function handleGallery() {
    $('[data-gallery]').each(function () {
      var gallery = $(this); // Move galleries popup to footer

      var oldPopup = $('#' + $(this).attr('data-gallery'));
      var popup = oldPopup.clone();
      $('body').append(popup);
      oldPopup.remove();
      var popup = popup[0];
      popup.options = JSON.parse($(popup).attr('data-options'));
      popup.expanded = false;
      popup.opened = false;
      popup.currentItem = 0;

      var expand = function expand() {
        if (popup.expanded) {
          document.webkitCancelFullScreen();
          $(this).find('span').addClass('ion-android-expand').removeClass('ion-android-contract');
          popup.expanded = false;
        } else {
          popup.expanded = true;
          popup.webkitRequestFullscreen();
          $(this).find('span').removeClass('ion-android-expand').addClass('ion-android-contract');
        }
      };

      var close = function close() {
        if (popup.opened) {
          popup.opened = false;
          $(popup).removeClass('open');
          var oldImage = $(popup).find('img.gimg').eq(popup.currentItem);
          var img = oldImage.clone().addClass('gallery-tmpimage active').css({
            'margin-left': '-' + oldImage.width() / 2 + 'px',
            'height': oldImage.height() + 'px',
            'top': oldImage.offset().top - $(popup).offset().top + 'px'
          });
          $(document.body).append(img);
          setTimeout(function () {
            var newImage = gallery.find('img.gimg').eq(popup.currentItem);
            img.css({
              'left': newImage.offset().left + 'px',
              'margin-left': '',
              'height': newImage.height() + 'px',
              'top': newImage.offset().top - $(window).scrollTop() + 'px',
              'opacity': '0'
            });
          }, 50);
          setTimeout(function () {
            $(popup).find('.slider').remove();
            img.remove();
          }, 400);

          if (popup.expanded) {
            expand.call($(popup).find('.expand'));
          }
        }
      };

      $(popup).find('.expand').on('click', expand);
      $(popup).find('.close').on('click', close);
      $(window).on('keydown', function (e) {
        var key = e.which || e.keyCode || e.keyChar;

        if (key == 27) {
          close();
        }

        if (key == 37) {
          $(popup).find('.slider').trigger('prev.owl.carousel');
        }

        if (key == 39) {
          $(popup).find('.slider').trigger('next.owl.carousel');
        }
      });
    }); // Open popup

    $('body').on('click', '[data-gallery-item]', function () {
      var gallery = $(this).closest('[data-gallery]'),
          popup = $('#' + gallery.attr('data-gallery')),
          images = gallery.find('.gallery-image'),
          options = popup[0].options;

      var _this = $(this);

      var image = $(this).find('img.gimg').eq(0); // Create slider

      var slider = $(document.createElement('div')).addClass('slider');
      popup[0].currentItem = 0;
      popup.append(slider); // Clone image for move

      var cloneImg = image.clone().css({
        'height': image.outerHeight() + 'px',
        'top': image.offset().top - $(window).scrollTop(),
        'left': image.offset().left,
        'opacity': '0'
      }).addClass('gallery-tmpimage');
      $(document.body).append(cloneImg);
      popup[0].opened = true;
      popup.addClass('open'); // Generated slider

      images.each(function () {
        var div = $(document.createElement('div'));
        div.append($(document.createElement('div')).addClass('image-wrap').append($(this).find('img.gimg').eq(0).clone()));

        if ($(this).find('.gallery-description').length) {
          var description = $(this).find('.gallery-description').clone();
          div.append(description).addClass('with-description');

          if ($(window).width() > 787) {
            setTimeout(function () {
              div.find('.image-wrap').css('height', 'calc(100% - ' + (description.outerHeight() - 5) + 'px)');
            }, 10);
          }
        }

        slider.append(div);
      });
      slider.owlCarousel({
        items: 1,
        autoHeight: false,
        slideBy: 1,
        nav: true,
        navText: ['<span class="ion-ios-arrow-thin-left"></span>', '<span class="ion-ios-arrow-thin-right"></span>'],
        navContainerClass: 'owl-nav slider-nav',
        navClass: ['owl-prev ' + options.navClass, 'owl-next ' + options.navClass],
        dots: false,
        loop: false,
        autoplay: false,
        navSpeed: 600
      }).on('changed.owl.carousel', function (event) {
        popup[0].currentItem = event.item.index;
        slider.find('.thumbs img').removeClass('active');
        slider.find('.thumbs img').eq(popup[0].currentItem).addClass('active');
      });
      slider.trigger('to.owl.carousel', [parseInt($(this).attr('data-gallery-item')), 50, true]); // Generate thumbnails

      slider.find('.owl-nav').after('<div class="thumbs"></div>');
      var thumbnails = slider.find('.thumbs');
      images.each(function (index) {
        thumbnails.append($(this).find('img.gimg').eq(0).clone().on('click', function () {
          $(this).parent().find('img').removeClass('active');
          $(this).addClass('active');
          slider.trigger('to.owl.carousel', [index, 300, true]);
        }));
      });
      slider.find('.thumbs img').eq(parseInt($(this).attr('data-gallery-item'))).addClass('active'); // Move tmp image

      setTimeout(function () {
        var sliderImg = slider.find('img.gimg').eq(parseInt(_this.attr('data-gallery-item')));
        cloneImg.css({
          'height': sliderImg.outerHeight() + 'px',
          'top': sliderImg.offset().top - popup.offset().top + 'px',
          'left': '',
          'margin-left': '-' + sliderImg.outerWidth() / 2 + 'px',
          'opacity': '1'
        }).addClass('active'); // Open slider, remove tmp image

        setTimeout(function () {
          slider.css('visibility', 'visible');
          slider.find('.thumbs img').each(function (i) {
            var img = $(this);
            setTimeout(function () {
              img.addClass('showed');
            }, 50 * i);
          });
          setTimeout(function () {
            cloneImg.remove();
          }, 250);
        }, 300);
      }, 50);
    });
  }
  /* ## Google Maps */


  function handleGoogleMaps() {
    if (typeof google != 'undefined' && google.maps != undefined) {
      var googleMapStyles = {
        // Loli
        "default": [{
          'featureType': 'water',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#e9e9e9'
          }, {
            'lightness': 17
          }]
        }, {
          'featureType': 'landscape',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#f5f5f5'
          }, {
            'lightness': 20
          }]
        }, {
          'featureType': 'road.highway',
          'elementType': 'geometry.fill',
          'stylers': [{
            'color': '#ffffff'
          }, {
            'lightness': 17
          }]
        }, {
          'featureType': 'road.highway',
          'elementType': 'geometry.stroke',
          'stylers': [{
            'color': '#ffffff'
          }, {
            'lightness': 29
          }, {
            'weight': 0.2
          }]
        }, {
          'featureType': 'road.arterial',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#ffffff'
          }, {
            'lightness': 18
          }]
        }, {
          'featureType': 'road.local',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#ffffff'
          }, {
            'lightness': 16
          }]
        }, {
          'featureType': 'poi',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#f5f5f5'
          }, {
            'lightness': 21
          }]
        }, {
          'featureType': 'poi.park',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#dedede'
          }, {
            'lightness': 21
          }]
        }, {
          'elementType': 'labels.text.stroke',
          'stylers': [{
            'visibility': 'on'
          }, {
            'color': '#ffffff'
          }, {
            'lightness': 16
          }]
        }, {
          'elementType': 'labels.text.fill',
          'stylers': [{
            'saturation': 36
          }, {
            'color': '#333333'
          }, {
            'lightness': 40
          }]
        }, {
          'elementType': 'labels.icon',
          'stylers': [{
            'visibility': 'off'
          }]
        }, {
          'featureType': 'transit',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#f2f2f2'
          }, {
            'lightness': 19
          }]
        }, {
          'featureType': 'administrative',
          'elementType': 'geometry.fill',
          'stylers': [{
            'color': '#fefefe'
          }, {
            'lightness': 20
          }]
        }, {
          'featureType': 'administrative',
          'elementType': 'geometry.stroke',
          'stylers': [{
            'color': '#fefefe'
          }, {
            'lightness': 17
          }, {
            'weight': 1.2
          }]
        }],
        light_dream: [{
          "featureType": "landscape",
          "stylers": [{
            "hue": "#FFBB00"
          }, {
            "saturation": 43.400000000000006
          }, {
            "lightness": 37.599999999999994
          }, {
            "gamma": 1
          }]
        }, {
          "featureType": "road.highway",
          "stylers": [{
            "hue": "#FFC200"
          }, {
            "saturation": -61.8
          }, {
            "lightness": 45.599999999999994
          }, {
            "gamma": 1
          }]
        }, {
          "featureType": "road.arterial",
          "stylers": [{
            "hue": "#FF0300"
          }, {
            "saturation": -100
          }, {
            "lightness": 51.19999999999999
          }, {
            "gamma": 1
          }]
        }, {
          "featureType": "road.local",
          "stylers": [{
            "hue": "#FF0300"
          }, {
            "saturation": -100
          }, {
            "lightness": 52
          }, {
            "gamma": 1
          }]
        }, {
          "featureType": "water",
          "stylers": [{
            "hue": "#0078FF"
          }, {
            "saturation": -13.200000000000003
          }, {
            "lightness": 2.4000000000000057
          }, {
            "gamma": 1
          }]
        }, {
          "featureType": "poi",
          "stylers": [{
            "hue": "#00FF6A"
          }, {
            "saturation": -1.0989010989011234
          }, {
            "lightness": 11.200000000000017
          }, {
            "gamma": 1
          }]
        }],
        shades_of_grey: [{
          "featureType": "all",
          "elementType": "labels.text.fill",
          "stylers": [{
            "saturation": 36
          }, {
            "color": "#000000"
          }, {
            "lightness": 40
          }]
        }, {
          "featureType": "all",
          "elementType": "labels.text.stroke",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#000000"
          }, {
            "lightness": 16
          }]
        }, {
          "featureType": "all",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 20
          }]
        }, {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 17
          }, {
            "weight": 1.2
          }]
        }, {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 20
          }]
        }, {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 21
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 17
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 29
          }, {
            "weight": 0.2
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 18
          }]
        }, {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 16
          }]
        }, {
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 19
          }]
        }, {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 17
          }]
        }],
        paper: [{
          "featureType": "administrative",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "landscape",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }, {
            "hue": "#0066ff"
          }, {
            "saturation": 74
          }, {
            "lightness": 100
          }]
        }, {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }]
        }, {
          "featureType": "road",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }, {
            "weight": 0.6
          }, {
            "saturation": -85
          }, {
            "lightness": 61
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [{
            "visibility": "on"
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "road.local",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }]
        }, {
          "featureType": "transit",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }]
        }, {
          "featureType": "water",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }, {
            "color": "#5f94ff"
          }, {
            "lightness": 26
          }, {
            "gamma": 5.86
          }]
        }],
        light_monochrome: [{
          "featureType": "administrative.locality",
          "elementType": "all",
          "stylers": [{
            "hue": "#2c2e33"
          }, {
            "saturation": 7
          }, {
            "lightness": 19
          }, {
            "visibility": "on"
          }]
        }, {
          "featureType": "landscape",
          "elementType": "all",
          "stylers": [{
            "hue": "#ffffff"
          }, {
            "saturation": -100
          }, {
            "lightness": 100
          }, {
            "visibility": "simplified"
          }]
        }, {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [{
            "hue": "#ffffff"
          }, {
            "saturation": -100
          }, {
            "lightness": 100
          }, {
            "visibility": "off"
          }]
        }, {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [{
            "hue": "#bbc0c4"
          }, {
            "saturation": -93
          }, {
            "lightness": 31
          }, {
            "visibility": "simplified"
          }]
        }, {
          "featureType": "road",
          "elementType": "labels",
          "stylers": [{
            "hue": "#bbc0c4"
          }, {
            "saturation": -93
          }, {
            "lightness": 31
          }, {
            "visibility": "on"
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "labels",
          "stylers": [{
            "hue": "#bbc0c4"
          }, {
            "saturation": -93
          }, {
            "lightness": -2
          }, {
            "visibility": "simplified"
          }]
        }, {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [{
            "hue": "#e9ebed"
          }, {
            "saturation": -90
          }, {
            "lightness": -8
          }, {
            "visibility": "simplified"
          }]
        }, {
          "featureType": "transit",
          "elementType": "all",
          "stylers": [{
            "hue": "#e9ebed"
          }, {
            "saturation": 10
          }, {
            "lightness": 69
          }, {
            "visibility": "on"
          }]
        }, {
          "featureType": "water",
          "elementType": "all",
          "stylers": [{
            "hue": "#e9ebed"
          }, {
            "saturation": -78
          }, {
            "lightness": 67
          }, {
            "visibility": "simplified"
          }]
        }],
        lunar_landscape: [{
          "stylers": [{
            "hue": "#ff1a00"
          }, {
            "invert_lightness": true
          }, {
            "saturation": -100
          }, {
            "lightness": 33
          }, {
            "gamma": 0.5
          }]
        }, {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [{
            "color": "#2D333C"
          }]
        }],
        routexl: [{
          "featureType": "administrative",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }, {
            "saturation": -100
          }, {
            "lightness": 20
          }]
        }, {
          "featureType": "road",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }, {
            "saturation": -100
          }, {
            "lightness": 40
          }]
        }, {
          "featureType": "water",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }, {
            "saturation": -10
          }, {
            "lightness": 30
          }]
        }, {
          "featureType": "landscape.man_made",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }, {
            "saturation": -60
          }, {
            "lightness": 10
          }]
        }, {
          "featureType": "landscape.natural",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }, {
            "saturation": -60
          }, {
            "lightness": 60
          }]
        }, {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }, {
            "saturation": -100
          }, {
            "lightness": 60
          }]
        }, {
          "featureType": "transit",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }, {
            "saturation": -100
          }, {
            "lightness": 60
          }]
        }],
        flat_pale: [{
          "featureType": "administrative",
          "elementType": "labels.text.fill",
          "stylers": [{
            "color": "#6195a0"
          }]
        }, {
          "featureType": "administrative.province",
          "elementType": "geometry.stroke",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [{
            "lightness": "0"
          }, {
            "saturation": "0"
          }, {
            "color": "#f5f5f2"
          }, {
            "gamma": "1"
          }]
        }, {
          "featureType": "landscape.man_made",
          "elementType": "all",
          "stylers": [{
            "lightness": "-3"
          }, {
            "gamma": "1.00"
          }]
        }, {
          "featureType": "landscape.natural.terrain",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#bae5ce"
          }, {
            "visibility": "on"
          }]
        }, {
          "featureType": "road",
          "elementType": "all",
          "stylers": [{
            "saturation": -100
          }, {
            "lightness": 45
          }, {
            "visibility": "simplified"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#fac9a9"
          }, {
            "visibility": "simplified"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "labels.text",
          "stylers": [{
            "color": "#4e4e4e"
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "labels.text.fill",
          "stylers": [{
            "color": "#787878"
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "transit",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }]
        }, {
          "featureType": "transit.station.airport",
          "elementType": "labels.icon",
          "stylers": [{
            "hue": "#0a00ff"
          }, {
            "saturation": "-77"
          }, {
            "gamma": "0.57"
          }, {
            "lightness": "0"
          }]
        }, {
          "featureType": "transit.station.rail",
          "elementType": "labels.text.fill",
          "stylers": [{
            "color": "#43321e"
          }]
        }, {
          "featureType": "transit.station.rail",
          "elementType": "labels.icon",
          "stylers": [{
            "hue": "#ff6c00"
          }, {
            "lightness": "4"
          }, {
            "gamma": "0.75"
          }, {
            "saturation": "-68"
          }]
        }, {
          "featureType": "water",
          "elementType": "all",
          "stylers": [{
            "color": "#eaf6f8"
          }, {
            "visibility": "on"
          }]
        }, {
          "featureType": "water",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#c7eced"
          }]
        }, {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [{
            "lightness": "-49"
          }, {
            "saturation": "-53"
          }, {
            "gamma": "0.79"
          }]
        }],
        flat_design: [{
          "featureType": "all",
          "elementType": "labels",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "administrative",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }, {
            "color": "#5b6571"
          }, {
            "lightness": "35"
          }]
        }, {
          "featureType": "administrative.neighborhood",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "landscape",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#f3f4f4"
          }]
        }, {
          "featureType": "landscape.man_made",
          "elementType": "geometry",
          "stylers": [{
            "weight": 0.9
          }, {
            "visibility": "off"
          }]
        }, {
          "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#83cead"
          }]
        }, {
          "featureType": "road",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#ffffff"
          }]
        }, {
          "featureType": "road",
          "elementType": "labels",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#fee379"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [{
            "visibility": "on"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "labels",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "road.highway.controlled_access",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "all",
          "stylers": [{
            "visibility": "simplified"
          }, {
            "color": "#ffffff"
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "labels",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "water",
          "elementType": "all",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#7fc8ed"
          }]
        }]
      }; // var geocoder = new google.maps.Geocoder();
      // var googleMapCreateMarker = function( map, addr, icon ) {
      //     geocoder.geocode( { 'address': addr }, function(result, status) {
      //         map.setCenter(result[0].geometry.location );
      //         console.log(addr, result);
      //         var marker = new google.maps.Marker({
      //             map: map,
      //             icon: icon,
      //             position: result[0].geometry.location
      //         });
      //     });
      // };

      var googleMapCreateMarkerByPoint = function googleMapCreateMarkerByPoint(map, position) {
        var marker = new google.maps.Marker({
          position: position,
          map: map
        });
      };

      $('[data-google-map]').each(function () {
        var markerLocations = $(this).find('[data-google-map-markers]').html().replace(/&lt;.+?\/&gt;/g, '').split('\n');
        var zoomEnable = false;

        if ($(this).attr('data-google-map-zoom-enable') != undefined) {
          zoomEnable = true;
        }

        var map_style = googleMapStyles['default'];

        if ($(this).attr('data-google-map-style') != undefined) {
          map_style = googleMapStyles[$(this).attr('data-google-map-style')];
        }

        var map = new google.maps.Map(document.getElementById('map'), {
          scrollwheel: false,
          zoom: parseInt($(this).attr('data-google-map-zoom')),
          zoomControl: zoomEnable,
          styles: map_style
        });

        if (markerLocations == '' || markerLocations == 'true') {
          markerLocations = ['New York'];
        } // function initMap() {
        //     // The location of Uluru
        //     var uluru = {lat: 39.755018, lng: -75.626847};
        //     // The map, centered at Uluru
        //     // var map = new google.maps.Map(
        //     //     document.getElementById('map'), {zoom: 4, center: uluru});
        //     // The marker, positioned at Uluru
        //     var marker = new google.maps.Marker({position: uluru, map: map});
        // }


        var position = {
          lat: 39.755018,
          lng: -75.626847
        };
        googleMapCreateMarkerByPoint(map, position); // for(var i = 0; i < markerLocations.length; i++) {
        // 	googleMapCreateMarker( map, markerLocations[i], $(this).attr( 'data-google-map-marker' ) );
        // }
      });
    }
  }
  /* ## Onepage */


  function handleOnepage() {
    $.fn.norebroOnepage = function (options) {
      var onepage = $(this),
          stage = onepage.find(' > .onepage-stage'),
          items = $(this).find('.onepage-section'),
          isHorizontal = onepage.hasClass('horizontal'),
          anchors = null,
          // Dots
      itemNow = 0,
          scrollEnabled = true,
          // For pause during animation
      speed = options.speed || 500,
          disableOnMobile = onepage.hasClass('disable-on-mobile');
      stage.css('transition', 'transform ' + speed / 1000 + 's ease-in-out');
      items.eq(0).addClass('active');
      var divNav = $('#mega-menu-wrap ul li, #masthead .menu-other > li > a'); // Transitions to section

      var moveTo = function moveTo(i) {
        if (Nor.isMobile && disableOnMobile) {
          return false;
        }

        itemNow = i;

        if (i < 0) {
          itemNow = 0;
        }

        if (i > items.length - 1) {
          itemNow = items.length - 1;
        }

        if (anchors) {
          anchors.removeClass('active');
          anchors.eq(itemNow).addClass('active');
        }

        var isPrev = items.eq(itemNow).hasClass('prev');
        items.removeClass('active active-prev prev');
        items.eq(itemNow).addClass('active');
        items.eq(itemNow - 1).addClass('prev');

        if (isPrev) {
          items.eq(itemNow).addClass('active-prev');
        }

        scrollEnabled = false;

        if (options.vertical) {
          stage.css('transform', 'translate3d(-' + onepage.outerWidth() * itemNow + 'px, 0, 0)');
        } else {
          stage.css('transform', 'translate3d(0, -' + onepage.outerHeight() * itemNow + 'px, 0)');
        }

        var paginationColor = items.eq(itemNow).attr('data-pagination-color');
        var menuColor = items.eq(itemNow).attr('data-header-nav-color');
        var logoType = items.eq(itemNow).attr('data-header-logo-type');
        var top = onepage.offset().top - ($(window).height() - onepage.outerHeight()) / 2;
        var scrollTop = $(document).scrollTop();
        var correctPosition = top + 10 > scrollTop && top - 10 < scrollTop;
        onepage.find('.onepage-dots li').css('color', paginationColor ? paginationColor : '');

        if (correctPosition) {
          divNav.css('color', menuColor ? menuColor : '');
          Nor.logoForOnepageLight.addClass('hidden');
          Nor.logoForOnepageDark.addClass('hidden');

          if (logoType) {
            $([Nor.logo[0], Nor.fixedLogo[0]]).css({
              'position': 'absolute',
              'width': '0px',
              'height': '0px',
              'overflow': 'hidden'
            });

            if (logoType == 'dark') {
              Nor.logoForOnepageDark.removeClass('hidden');
            }

            if (logoType == 'light') {
              Nor.logoForOnepageLight.removeClass('hidden');
            }
          } else {
            $([Nor.logo[0], Nor.fixedLogo[0]]).css({
              'position': '',
              'width': '',
              'height': '',
              'overflow': ''
            });
          }
        }

        setTimeout(function () {
          scrollEnabled = true;
        }, 1000);
      };

      var moveUp = function moveUp() {
        moveTo(itemNow - 1);
      };

      var moveDown = function moveDown() {
        moveTo(itemNow + 1);
      }; // Transition by y


      var move = function move(y, e) {
        if (!(Nor.isMobile && disableOnMobile)) {
          var top = onepage.offset().top - ($(window).height() - onepage.outerHeight()) / 2;
          var scrollTop = $(document).scrollTop();
          var correctPosition = top + 10 > scrollTop && top - 10 < scrollTop;

          if (y > 0 && itemNow < items.length - 1 || y < 0 && itemNow > 0) {
            if (!correctPosition) {
              setTimeout(function () {
                $('html, body').animate({
                  scrollTop: top
                }, 400);
              }, 100);
              var menuColor = items.eq(itemNow).attr('data-header-nav-color');
              divNav.css('color', menuColor ? menuColor : '');
            }
          }

          if (y > 0 && itemNow < items.length - 1) {
            if (scrollEnabled && correctPosition) moveDown();
            e.preventDefault();
          } else if (y < 0 && itemNow > 0) {
            if (scrollEnabled && correctPosition) moveUp();
            e.preventDefault();
          } else if (!scrollEnabled || y < 1 && y > -1) {
            e.preventDefault();
          } else {
            $('html, body').stop(true, true).finish();
            divNav.css('color', '');
            $([Nor.logo[0], Nor.fixedLogo[0]]).css({
              'position': '',
              'width': '',
              'height': '',
              'overflow': ''
            });
            Nor.logoForOnepageLight.addClass('hidden');
            Nor.logoForOnepageDark.addClass('hidden');
          }

          if (AOS) {
            setTimeout(AOS.refresh, 400);
          }
        }
      }; // Mouse events


      onepage.on('wheel mousewheel', function (e) {
        var y = e.originalEvent.deltaY;
        move(y, e);
      }); // Keyboard events

      onepage.on('keydown', function (e) {
        var key = e.which || e.keyCode;

        if (key == 38) {
          move(-1, e);
        } else if (key == 40) {
          move(1, e);
        }
      }); // Tach events

      var oldTachY = 0;
      onepage.on('touchstart', function (e) {
        var y = e.originalEvent.touches[0].clientY,
            x = e.originalEvent.touches[0].clientX;

        if (isHorizontal) {
          oldTachY = x;
        } else {
          oldTachY = y;
        }
      });
      onepage.on('touchmove', function (e) {
        var y = e.originalEvent.touches[0].clientY,
            x = e.originalEvent.touches[0].clientX;
        var moveS;

        if (isHorizontal) {
          moveS = oldTachY - x;
          oldTachY = x;
        } else {
          moveS = oldTachY - y;
          oldTachY = y;
        }

        move(moveS, e);
      });

      onepage[0].resize = function () {
        if (Nor.isMobile && disableOnMobile) {
          items.css({
            'width': '',
            'height': ''
          });
          stage.css('transform', 'none');
        } else {
          items.each(function () {
            if (options.vertical) {
              $(this).css('width', onepage.outerWidth() + 'px');
            }

            $(this).css('height', onepage.outerHeight() + 'px');
          });
        }

        moveTo(itemNow);
      };
      /*# Create navigations #*/
      // Append dots


      if (options.dots) {
        var ul = $(document.createElement('ul')).addClass('onepage-dots');

        if (options.dotsClass) {
          ul.addClass(options.dotsClass);
        }

        items.each(function (i) {
          var li = $(document.createElement('li'));

          if (options.dotClass) {
            li.addClass(options.dotClass);
          }

          li.on('click', function () {
            moveTo(i);
          });
          ul.append(li);
          $(this).css('height', onepage.outerHeight() + 'px');
        });
        onepage.append(ul);
        anchors = ul.find('li');
        anchors.eq(0).addClass('active');
      } // Append nav button


      if (options.nav) {
        var nav = $(document.createElement('div')).addClass('onepage-nav');

        if (options.navContainerClass) {
          nav.addClass(options.navContainerClass);
        }

        var up = $(document.createElement('div')).addClass('move-up');
        var down = $(document.createElement('div')).addClass('move-down');
        var icon = $(document.createElement('span'));

        if (options.navClass) {
          up.addClass(options.navClass[0]);
          down.addClass(options.navClass[1]);
        }

        up.append(icon.clone().addClass(options.navIcons ? options.navIcons[0] : 'ion-ios-arrow-thin-up'));
        down.append(icon.clone().addClass(options.navIcons ? options.navIcons[1] : 'ion-ios-arrow-thin-down'));
        up.on('click', function () {
          moveUp();
        });
        down.on('click', function () {
          moveDown();
        });
        nav.append(up, down);
        onepage.append(nav);
      }

      var countSlides = items.length;

      if (countSlides < 10) {
        countSlides = '0' + countSlides;
      }

      onepage.find('[data-onepage-counter]').each(function (i) {
        var num = i + 1;

        if (num < 10) {
          num = '0' + num;
        }

        $(this).html(num + '/' + countSlides);
      });
    };

    $('[data-norebro-onepage]').each(function () {
      var data = $(this).attr('data-options');
      var options = data ? JSON.parse(data) : {};
      $(this).norebroOnepage(options);
    });
  }

  function handleOnepageSize() {
    $('[data-norebro-onepage]').each(function () {
      this.resize();
    });
  }
  /* ## Parallax */


  function initParallax() {
    $('[data-parallax-bg]').each(function () {
      var bg = $(this).find('.parallax-bg');
      var speed = $(this).attr('data-parallax-speed');

      if ($(this).attr('data-parallax-bg') == 'vertical') {
        $(this).find('.parallax-bg').css({
          height: $(this).outerHeight() + speed * 200 + 'px'
        });
      } else {
        $(this).find('.parallax-bg').css({
          width: $(this).outerWidth() + speed * 200 + 'px'
        });
      }

      bg.addClass($(this).attr('data-parallax-bg') == 'vertical' ? '' : 'horizontal');
    });
  }

  ;

  function handleParallax() {
    var contentScroll = $(document).scrollTop();
    var wndHeight = $(window).height();
    $('[data-parallax-bg]').each(function () {
      var parallaxTop = $(this).offset().top;
      var parallaxHeight = $(this).outerHeight();
      var parallaxWidth = $(this).outerWidth(); // If parallax block on screen

      if (parallaxTop <= contentScroll + wndHeight && parallaxTop + parallaxHeight >= contentScroll) {
        var speed = parseFloat($(this).attr('data-parallax-speed')) * 100;
        var bg = $(this).find('.parallax-bg');
        var percent = (-parallaxTop + contentScroll + wndHeight) / (parallaxHeight + wndHeight);
        var offset = -(percent * 2) * speed;

        if ($(this).attr('data-parallax-bg') == 'vertical') {
          bg.css('transform', 'translate3d(0, ' + offset + 'px, 0)');
        } else {
          bg.css('transform', 'translate3d(' + offset + 'px, 0, 0)');
        }
      }
    });
  }

  ;
  /* ## Progress bar */

  function handleProgressBar() {
    $("[data-norebro-progress-bar]:not([data-processed])").each(function () {
      var percent,
          bar = $(this),
          line = bar.find('.line'),
          progressEnd = parseInt(bar.attr("data-norebro-progress-bar")),
          withTooltip = bar.find('[data-tooltip]').length;
      var scrollTop = $(document).scrollTop() + $(window).height();

      if (line.length == 0 && bar.hasClass('split')) {
        var div = $(document.createElement('div')).addClass('line-split');
        div.append($(document.createElement('div')).addClass('line brand-bg-color'));

        for (var i = 0; i < 8; i++) {
          var div = div.clone();
          bar.find('.line-wrap').append(div);
          div.find('.line').css({
            'left': -(div.offset().left - bar.offset().left) + 'px'
          });
        }

        if (withTooltip) {
          bar.find('.line-wrap').append('<div class="line"><h4 class="line-percent"><span class="percent">0</span>%</h4></div>');
        }

        line = bar.find('.line');
      }

      percent = bar.find('.percent');

      if (scrollTop > bar.offset().top + bar.height()) {
        bar.attr("data-processed", "true");

        if (bar.hasClass('inner')) {
          line.css("width", bar.outerWidth() * (progressEnd / 100) - 8 + "px");
        } else {
          line.css("width", bar.outerWidth() * (progressEnd / 100) + "px");
        }

        for (var j = 0; j <= 40; j++) {
          (function (count) {
            setTimeout(function () {
              percent.html(Math.round(progressEnd / 40 * count));
            }, 30 * count);
          })(j);
        }
      }
    });
  }

  function handleProgressBarSize() {
    $("[data-norebro-progress-bar][data-processed]").each(function () {
      var bar = $(this);
      var line = bar.find('.line');
      var progressEnd = parseInt(bar.attr("data-norebro-progress-bar"));

      if (bar.hasClass('inner')) {
        line.css("width", bar.outerWidth() * (progressEnd / 100) - 8 + "px");
      } else {
        line.css("width", bar.outerWidth() * (progressEnd / 100) + "px");
      }

      bar.find('.line-split').each(function () {
        $(this).find('.line').css({
          'left': -($(this).offset().left - bar.offset().left) + 'px'
        });
      });
    });
  }
  /* ## Price table */


  function handlePriceTable() {
    if (!Nor.isMobile) {
      $('.pricing-table.features').each(function () {
        var row = $(this).parents('.vc_row').eq(0);
        var table = row.find('.pricing-table').eq(1); // Calculate position

        $(this).css({
          'padding-top': table.find('.list-box').eq(0).offset().top - table.offset().top - $(this).find('h3').outerHeight() - 15 + 'px',
          'min-height': table.outerHeight() + 'px'
        }); // Calculate sizes

        $(this).find('li').each(function (i) {
          var max = 0;
          row.find('.pricing-table').each(function () {
            var h = $(this).find('li').eq(i).outerHeight();

            if (h > max) {
              max = h;
            }
          });
          row.find('.pricing-table').each(function () {
            $(this).find('li').eq(i).css({
              'height': max + 'px'
            });
          });
        });
      });
    } else {
      $('.pricing-table.features').each(function () {
        $(this).css({
          'padding-top': '',
          'min-height': ''
        });
      });
    }
  }

  ;
  /* ## Social bar */

  function handleSocialBar() {
    $(".socialbar:not(.new-tab-links) a").on("click", function (e) {
      e.preventDefault();
      window.open(this.href, '', 'width=800,height=300,resizable=yes,toolbar=0,status=0');
    });
  }

  ;
  /* ## Split box */

  function handleSplitboxParallax() {
    var process = function process(side, num) {
      if ($(this).attr('data-parallax-' + side)) {
        $(this).find('.split-box-wrap').eq(num).attr({
          'data-parallax-bg': $(this).attr('data-parallax-' + side),
          'data-parallax-speed': $(this).attr('data-parallax-speed-' + side)
        });
      } else {
        $(this).find('.split-box-wrap').eq(num).find('.parallax-bg').css({
          'height': '100%',
          'width': '100%'
        });
      }
    };

    $('.split-box').each(function () {
      process.call(this, 'left', 0);
      process.call(this, 'right', 1);
    });
  }

  function handleSplitboxSize() {
    if (Nor.isMobile) {
      $('.split-box').each(function () {
        var wrappers = $(this).find('.split-box-wrap');
        wrappers.css('height', '');
        wrappers.css({
          'height': Math.max(wrappers.eq(0).outerHeight(), wrappers.eq(1).outerHeight()) + 'px'
        });
      });
    }
  }
  /* ## Sliders */


  function handleSliders() {
    $('[data-norebro-slider]').each(function () {
      var carousel = $(this);
      var options = $(this).attr('data-norebro-slider');
      options = options ? JSON.parse(options) : {};
      options.autoHeight = options.autoHeight == undefined ? true : options.autoHeight;
      options.dotsSpeed = options.dotsSpeed == undefined ? 500 : options.dotsSpeed;
      options.keyControl = options.keyControl == undefined ? false : options.keyControl;

      if (options.autoplay) {
        options.autoplaySpeed = options.autoplaySpeed == undefined ? 500 : options.autoplaySpeed;
        options.autoplayTimeout = options.autoplaySpeed == undefined ? 500 : options.autoplayTimeout * 1000;
      }

      options.responsive = {
        979: {
          items: options.itemsDesktop || 5,
          nav: options.nav
        },
        768: {
          items: options.itemsTablet || 3,
          nav: options.nav
        },
        0: {
          items: options.itemsMobile || 1,
          nav: options.nav
        }
      };

      if (options.dots) {
        $(this).addClass('with-dots');
        options.dotClass = 'owl-dot ' + (options.dotClass ? options.dotClass : '');
        options.dotsClass = 'owl-dots ' + (options.dotsClass ? options.dotsClass : '');
      }

      options.navText = ['', ''];

      if (options.nav) {
        options.navSpeed = options.navSpeed == undefined ? 600 : options.navSpeed;
        options.navText = ['<span class="ion-ios-arrow-thin-left"></span>', '<span class="ion-ios-arrow-thin-right"></span>'];
        options.navContainerClass = options.navContainerClass ? 'owl-nav ' + options.navContainerClass : 'owl-nav';

        if (options.navClass) {
          options.navClass = ['owl-prev ' + options.navClass[0], 'owl-next ' + options.navClass[1]];
        } else {
          options.navClass = ['owl-prev', 'owl-next'];
        }
      } // Nav buttons for slider offset


      var calculatePositionNavButtons = function calculatePositionNavButtons() {
        if (carousel.hasClass('slider-offset')) {
          var itemWidth = carousel.find('.owl-item').outerWidth();
          var next = carousel.find('.owl-next'),
              prev = carousel.find('.owl-prev');

          if (!Nor.isMobile) {
            prev.css('margin-left', -itemWidth / 2 - prev.outerWidth() / 2 + 'px');
            next.css('margin-left', itemWidth / 2 - next.outerWidth() / 2 + 'px');
          } else {
            prev.css('margin-left', '');
            next.css('margin-left', '');
          }
        }
      };

      carousel.on('initialized.owl.carousel refreshed.owl.carousel changed.owl.carousel resized.owl.carousel', function () {
        calculatePositionNavButtons();

        if ($(this).hasClass('slider-offset')) {
          var self = $(this);
          setTimeout(function () {
            self.find('.owl-item.active').removeClass('offset-active').eq(2).addClass('offset-active');
          }, 10);
        }
      }); // Slider in slider

      options.onInitialized = function () {
        carousel.find('.owl-stage-outer').addClass('no-transition');
        carousel.find('.slider, .norebro-slider').trigger('refresh.owl.carousel');
        setTimeout(function () {
          carousel.trigger('refresh.owl.carousel');
          setTimeout(function () {
            carousel.find('.owl-stage-outer').removeClass('no-transition');
          }, 10);
        }, 10);
      };

      carousel.owlCarousel(options);
      calculatePositionNavButtons();

      if (options.mousewheel) {
        var test = true;
        carousel.on('wheel mousewheel', '.owl-stage', function (e) {
          var y = e.originalEvent.deltaY;

          if (test) {
            carousel.trigger(y > 0 ? 'next.owl' : 'prev.owl', options.navSpeed || 350);
            test = false;
            setTimeout(function () {
              test = true;
            }, 350);
          }

          e.preventDefault();
          e.cancleBubbling = true;
          return false;
        });
      }

      if (options.keyControl) {
        $(window).on('keydown', function (e) {
          var key = e.which || e.keyCode;

          if (key == 37) {
            carousel.trigger('prev.owl', options.navSpeed || 350);
          }

          if (key == 39) {
            carousel.trigger('next.owl', options.navSpeed || 350);
          }
        });
      }
    });
    $('[data-norebro-slider-simple]').each(function () {
      $(this).owlCarousel({
        items: 1,
        nav: true,
        navRewind: true,
        navText: ['<span class="ion-ios-arrow-thin-left"></span>', '<span class="ion-ios-arrow-thin-right"></span>'],
        dots: true,
        loop: true,
        autoHeight: true
      });
    });
  }
  /* ## Split screen */


  function handleSplitScreens() {
    $('[data-norebro-splitscreen]').each(function () {
      if (!Nor.isMobile) {
        var splitscreen = $(this),
            key = $(this).attr('data-norebro-splitscreen'),
            options = JSON.parse($(this).attr('data-options'));
        var anchors = [],
            itemsCount = 0,
            menu = null;

        if (options.dots) {
          menu = $(document.createElement('ul')).addClass('splitscreen-dots');

          if (options.dotsClass) {
            menu.addClass(options.dotsClass);
          }

          $(this).find('.ms-left .ms-section').each(function (i) {
            var li = $(document.createElement('li')).attr('data-menuanchor', key + i);
            var link = $(document.createElement('a')).attr('href', '#' + key + i);
            li.append(link);

            if (options.dotClass) {
              li.addClass(options.dotClass);
            }

            anchors.push(key + i);

            if (i == 0) {
              li.addClass('active');
            }

            menu.append(li);
            itemsCount++;
          });
          splitscreen.append(menu);
        }

        var enableScroll = {
          down: false,
          up: false,
          nextIndex: -1,
          focuse: false
        };
        $(this).multiscroll({
          verticalCentered: true,
          scrollingSpeed: 600,
          sectionsColor: [],
          navigation: true,
          navigationPosition: 'right',
          navigationColor: '#000',
          navigationTooltips: [],
          loopBottom: false,
          loopTop: false,
          css3: true,
          paddingTop: 0,
          paddingBottom: 0,
          normalScrollElements: null,
          keyboardScrolling: true,
          touchSensitivity: 5,
          // Custom selectors
          sectionSelector: '.ms-section',
          leftSelector: '.ms-left',
          rightSelector: '.ms-right',
          anchors: anchors,
          menu: menu,
          //events
          onLeave: function onLeave(index, nextIndex, direction) {
            enableScroll.up = false;
            enableScroll.down = false;
            enableScroll.nextIndex = nextIndex;

            if (nextIndex == 1) {
              setTimeout(function () {
                if (enableScroll.nextIndex == 1) {
                  enableScroll.up = true;
                }
              }, 600);
            } else if (nextIndex == itemsCount) {
              setTimeout(function () {
                if (enableScroll.nextIndex == itemsCount) {
                  enableScroll.down = true;
                }
              }, 600);
            }

            var activeSection = splitscreen.find('.ms-section').eq(nextIndex - 1);
            var activeIsPrev = activeSection.hasClass('prev');
            splitscreen.find('.ms-section').removeClass('prev active-prev');
            splitscreen.find('.ms-section').eq(nextIndex - 2).addClass('prev');

            if (activeIsPrev) {
              activeSection.addClass('active-prev');
            }
          },
          afterLoad: function afterLoad(anchorLink, index) {},
          afterRender: function afterRender() {},
          afterResize: function afterResize() {}
        });
        $(this).multiscroll.setMouseWheelScrolling(false);
        $(this).on('mouseenter mousemove', function () {
          enableScroll.auto = true;
          $(this).multiscroll.setMouseWheelScrolling(true);
        });
        $(this).on('mouseleave', function () {
          enableScroll.auto = true;
          $(this).multiscroll.setMouseWheelScrolling(false);
        });
        var animEnabled = false;
        $(this).on('wheel mousewheel', function (e) {
          var y = e.originalEvent.deltaY;
          var top = splitscreen.offset().top + (splitscreen.outerHeight() - $(window).height()) / 2;
          var scrollTop = $(document).scrollTop();

          if (y > 0 && !enableScroll.down || y < 0 && !enableScroll.up) {
            e.preventDefault();

            if (enableScroll.auto && !animEnabled) {
              animEnabled = true;
              setTimeout(function () {
                $('html, body').animate({
                  scrollTop: top
                }, 500, function () {
                  animEnabled = false;
                });
              }, 100);
            }

            if ((top + 10 < scrollTop || top - 10 > scrollTop) && top > 10) {
              $(this).multiscroll.setMouseWheelScrolling(false);
            } else {
              $(this).multiscroll.setMouseWheelScrolling(true);
            }
          } else {
            $('html, body').stop(true, true).finish();
          }

          if (AOS) {
            setTimeout(AOS.refresh, 400);
          }
        });

        if (options.nav) {
          var nav = $(document.createElement('div')).addClass('splitscreen-nav');

          if (options.navContainerClass) {
            nav.addClass(options.navContainerClass);
          }

          var up = $(document.createElement('div')).addClass('move-up');
          var down = $(document.createElement('div')).addClass('move-down');
          var icon = $(document.createElement('span'));

          if (options.navClass) {
            up.addClass(options.navClass[0]);
            down.addClass(options.navClass[1]);
          }

          up.append(icon.clone().addClass(options.navIcons ? options.navIcons[0] : 'ion-ios-arrow-thin-up'));
          down.append(icon.clone().addClass(options.navIcons ? options.navIcons[1] : 'ion-ios-arrow-thin-down'));
          up.on('click', function () {
            splitscreen.multiscroll.moveSectionUp();
          });
          down.on('click', function () {
            splitscreen.multiscroll.moveSectionDown();
          });
          nav.append(up, down);
          splitscreen.append(nav);
        }

        setTimeout(function () {
          $('html, body').css({
            'overflow': '',
            'height': ''
          });
        }, 50);
      } // SplitScreen on mobile
      else {
          var leftSections = $(this).find('.ms-left .ms-section');
          $(this).find('.ms-right .ms-section').each(function (i) {
            $(this).insertAfter(leftSections.eq(i));
          });
        }
    });
  }
  /* ## Tab box  */


  function handleTabBox() {
    $('[data-norebro-tab-box]').each(function () {
      var box = $(this);
      var buttons = $(this).find('.button');
      var buttonsWrap = $(this).find('.buttons');
      var line = $(this).find('.buttons .line');
      var items = $(this).find('.item');
      var options = box.attr('data-options') ? JSON.parse(box.attr('data-options')) : {}; // Initializtion

      if (buttons.length == 0) {
        items.each(function () {
          var title = $(this).attr('data-title');
          box.find('.buttons').append($(document.createElement('h4')).addClass('button ' + options.tabClass).html(title));
        });
        buttons = $(this).find('.button');
        buttons.eq(0).addClass('active ' + options.tabActiveClass);
      }

      items.eq(0).addClass('active');
      items.addClass(options.itemClass); // Process

      var refresh = function refresh() {
        // Height
        var activeItem = box.find('.item.active');

        if (box.hasClass('vertical') && buttonsWrap.outerHeight() > activeItem.outerHeight()) {
          box.find('.items').css('height', buttonsWrap.outerHeight() + 'px');
        } else {
          box.find('.items').css('height', activeItem.outerHeight() + 'px');
        } // Line


        var active = box.find('.buttons .active');

        if (box.hasClass('vertical')) {
          line.css({
            'height': active.outerHeight() + 'px',
            'transform': 'translateY(' + (active.offset().top - buttonsWrap.offset().top) + 'px)'
          });
        } else {
          line.css({
            'width': active.outerWidth() + 'px',
            'transform': 'translateX(' + (active.offset().left - buttonsWrap.offset().left + buttonsWrap.scrollLeft()) + 'px)'
          });
        }
      };

      buttons.on('click', function () {
        buttons.removeClass('active ' + options.tabActiveClass).addClass(options.tabClass);
        items.removeClass('active');
        $(this).addClass('active ' + options.tabActiveClass);
        items.eq($(this).index() - 1).addClass('active');
        refresh();
      });
      refresh();
    });
  }

  ;

  function handleTabBoxSize() {
    $('[data-norebro-tab-box]').each(function () {
      var box = $(this);
      var activeItem = box.find('.item.active');
      var buttonsWrap = box.find('.buttons');

      if (box.hasClass('vertical') && buttonsWrap.outerHeight() > activeItem.outerHeight()) {
        box.find('.items').css('height', buttonsWrap.outerHeight() + 'px');
      } else {
        box.find('.items').css('height', activeItem.outerHeight() + 'px');
      }
    });
  }

  ;
  /* Temporary shortcode features */

  /* ## Video Background */

  function handleVideoBackground() {
    $('[data-arg-video-bg]').each(function () {
      var videoLink = $(this).attr('data-arg-video-bg');
      var iframe = $(document.createElement('iframe'));
      iframe.addClass('arg-video-bg').attr('src', videoLink);
      $(this).append(iframe);
    });
  }
  /* ## Video popup */


  function handleVideoPopup() {
    $('body').on('click', '[data-video-module]', function () {
      var popup = $(document.createElement('div')).addClass('video-module-popup');
      var popupVideo = $(document.createElement('div')).addClass('video'); // Create popup close button

      var popupClose = $(document.createElement('div')).addClass('close').on('click', function () {
        var popup = $(this).parent();
        popup.removeClass('open');
        setTimeout(function () {
          popup.remove();
        }, 400);
      }).html('<span class="ion-ios-close-empty"></span>'); // Append video

      popupVideo.append($(document.createElement("iframe")).attr({
        'src': $(this).attr('data-video-module') + "?autoplay=1",
        'allowfullscreen': 'true',
        'frameborder': '0'
      })); // Append popup

      $(document.body).append(popup.append(popupClose).append(popupVideo)); // Activate popup

      setTimeout(function () {
        popup.addClass('open');
      }, 30);
    });
  }

  ;
  /* # Portfolio */

  function handlePortfolio() {
    // Filter
    $('[data-norebro-portfolio-grid]').each(function () {
      var isotopeGrid = $(this).find('[data-isotope-grid]');
      var filterbar = $(this).find('[data-filter="portfolio"]');

      if (isotopeGrid.isotope) {
        isotopeGrid.isotope({
          percentPosition: true,
          masonry: {
            columnWidth: '.grid-item'
          }
        });
      } // Generate category numbers


      filterbar.find('a').each(function () {
        var category = $(this).attr('data-isotope-filter');
        var number = category == '*' ? isotopeGrid.find('> div').length : isotopeGrid.find(category).length;

        if (number < 10) {
          number = '0' + number;
        }

        $(this).find('.num').html(number);
      });
      filterbar.find('a').on('click', function () {
        filterbar.find('.active').removeClass('active');
        $(this).addClass('active');

        if (isotopeGrid.isotope) {
          isotopeGrid.isotope({
            filter: $(this).attr('data-isotope-filter')
          });
        }

        setTimeout(function () {
          if (AOS) {
            AOS.refresh();
          }

          if (window.vc_waypoints) {
            window.vc_waypoints();
          }
        }, 600);
        return false;
      });
    }); // Portfolio fullscreen toggle

    var toggleContent = $('.portfolio-page.fullscreen .portfolio-content');

    if (toggleContent.length) {
      var btn = toggleContent.find('.toggle-btn'),
          icon = btn.find('i'),
          titleContent = toggleContent.find('.title-content'),
          hiddenContent = toggleContent.find('.hidden-content');
      var iconClosed = btn.attr('data-closed'),
          iconOpened = btn.attr('data-opened');
      var opened = true;

      var toggle = function toggle() {
        if (opened) {
          opened = false;
          icon.removeClass(iconOpened).addClass(iconClosed);
          titleContent.removeClass('hidden');
          hiddenContent.addClass('hidden');
          toggleContent.addClass('closed');
        } else {
          opened = true;
          icon.removeClass(iconClosed).addClass(iconOpened);
          titleContent.addClass('hidden');
          hiddenContent.removeClass('hidden');
          toggleContent.removeClass('closed');
        }
      };

      btn.on('click', function (e) {
        var oldSize = {},
            newSize = {};
        toggleContent.addClass('no-transition');
        toggleContent.css({
          'width': '',
          'height': ''
        });
        setTimeout(function () {
          oldSize = {
            'width': toggleContent.outerWidth() + 1 + 'px',
            'height': toggleContent.outerHeight() + 'px'
          };
          toggle();
          newSize = {
            'width': toggleContent.outerWidth() + 1 + 'px',
            'height': toggleContent.outerHeight() + 'px'
          };
          toggle();
          toggleContent.css(oldSize);
          setTimeout(function () {
            toggleContent.removeClass('no-transition');
            toggle();
            toggleContent.css(newSize);
          }, 40);
        }, 40);
      });
    } // Header title 100% show animation


    $('.portfolio-page.header-full, .portfolio-page.portfolio-header-title').addClass('show');
  }
  /* ## Portfolio gallery */


  function handlePortfolioGallery() {
    $('[data-portfolio-popup]').each(function () {
      var gallery = $('#' + $(this).attr('data-portfolio-popup'));
      var slider = gallery.find('.slider');
      var images = gallery.find('.slider img');
      images.each(function () {
        var div = $(document.createElement('div')).css('background-image', 'url(' + $(this).attr('src') + ')');
        slider.append(div);
        $(this).remove();
      });
      var nav = slider.attr('data-navigation');

      if (images.length <= 1) {
        nav = false;
      }

      slider.owlCarousel({
        items: 1,
        nav: nav,
        navRewind: true,
        navText: ['<span class="ion-ios-arrow-thin-left"></span>', '<span class="ion-ios-arrow-thin-right"></span>'],
        navContainerClass: nav ? 'owl-nav slider-nav' : false,
        navSpeed: 350,
        dotsSpeed: 500,
        dots: images.length == 1 ? false : true,
        loop: false,
        autoHeight: false,
        mouseDrag: images.length == 1 ? false : true,
        autoplay: slider.attr('data-autoplay'),
        autoplayTimeout: parseFloat(slider.attr('data-autoplay')) * 1000
      });

      if (slider.attr('data-mouse-scrolling')) {
        var test = true;
        slider.on('wheel mousewheel', '.owl-stage', function (e) {
          var y = e.originalEvent.deltaY;

          if (test) {
            slider.trigger(y > 0 ? 'next.owl' : 'prev.owl', 350);
            test = false;
            setTimeout(function () {
              test = true;
            }, 350);
          }

          e.preventDefault();
          e.cancleBubbling = true;
          return false;
        });
      }

      slider.trigger('stop.owl.autoplay');

      var close = function close() {
        gallery.removeClass('open');
      };

      gallery.find('.gallery-close').on('click', close);
      $(window).on('keydown', function (e) {
        var key = e.which || e.keyChar || e.keyCode;

        if (key == 27) {
          close();
        }

        if (key == 37) {
          slider.trigger('prev.owl.carousel');
        }

        if (key == 39) {
          slider.trigger('next.owl.carousel');
        }
      });
    });
    $('body').on('click', '[data-portfolio-popup]', function (e) {
      e.preventDefault();
      var gallery = $('#' + $(this).attr('data-portfolio-popup'));
      gallery.addClass('open');

      if (gallery.find('.slider').attr('data-autoplay')) {
        gallery.find('.slider').trigger('play.owl.autoplay');
      }

      return false;
    });
  }
  /* ## Scroll content */


  function handleScrollContent() {
    $('[data-norebro-content-scroll]').each(function () {
      var content = $(this),
          parent = $($(this).attr('data-norebro-content-scroll')),
          timeout = null,
          startTop = 0,
          contentLeft = 0,
          minWidth = 768,
          header = $('#masthead.fixed'),
          subheader = $('.subheader'),
          wpadminbar = $('#wpadminbar');

      var refresh = function refresh() {
        var scrollTop = $(window).scrollTop();

        if (header.length) {
          scrollTop += header.outerHeight();

          if (subheader.length) {
            scrollTop += subheader.outerHeight();
          }
        }

        if ($('#wpadminbar').length) {
          scrollTop += $('#wpadminbar').outerHeight();
        }

        if ($(window).width() >= minWidth && content.outerHeight() < parent.outerHeight()) {
          // scroll start
          if (scrollTop > startTop) {
            var headerTop = 0;

            if (header.length) {
              headerTop += header.outerHeight();

              if (subheader.length) {
                headerTop += subheader.outerHeight();
              }
            }

            if ($('#wpadminbar').length) {
              headerTop += $('#wpadminbar').outerHeight();
            }

            content.css({
              'max-width': content.outerWidth() + 'px',
              'position': 'fixed',
              'top': headerTop + 'px',
              'left': contentLeft + 'px'
            });
          } else {
            content.css({
              'max-width': 'none',
              'position': 'relative',
              'top': '0px',
              'left': '0px'
            });
          } // scroll end


          if (scrollTop + content.outerHeight() > parent.offset().top + parent.outerHeight()) {
            var top = parent.outerHeight() - content.outerHeight();
            content.css({
              'max-width': 'none',
              'position': 'relative',
              'top': top + 'px',
              'left': '0' + 'px'
            });
          }
        } else {
          content.css({
            'max-width': 'none',
            'position': 'relative',
            'top': '0px',
            'left': '0px'
          });
        }
      };

      var resize = function resize() {
        content.css('position', 'static');
        contentLeft = content.offset().left;
        startTop = content.offset().top;
        clearTimeout(timeout);
        timeout = setTimeout(function () {
          content.css({
            'position': 'absolute',
            'top': content.offset().top - parent.offset().top + 'px',
            'left': content.offset().left - parent.offset().left + 'px'
          });
          refresh();
        }, 30);
      };

      setTimeout(function () {
        resize();
      }, 100);
      $(window).scroll(refresh).on('resize', resize);
    });
  }
  /* # Lazy load */


  function lazyLoad(elem) {
    if (!elem.attr('data-lazy-load-loading')) {
      elem.attr('data-lazy-load-loading', 'true');
      elem.addClass('active'); // Get page now

      var page;

      if (!elem.attr('data-lazy-page')) {
        page = 1;
      } else {
        page = parseInt(elem.attr('data-lazy-page'));
      } // Increase page


      page++;
      elem.attr('data-lazy-page', page); // Get page content

      $.ajax({
        url: 'page/' + page,
        success: function success(content) {
          var dom = $(new DOMParser().parseFromString(content, 'text/html')),
              items = dom.find('[data-lazy-item]');
          var container = elem.parent().find('[data-lazy-container]');
          items.parent().find('[data-aos]').attr('data-aos-offset', '20000000');
          items.addClass('hidden');
          container.append(items);
          $(document.body).append(dom.find('[data-lazy-to-footer]')); // Check images is loaded

          var metroImages = [];
          items.find('[data-norebro-bg-image]').each(function () {
            var img = document.createElement('img');
            img.src = $(this).attr('data-norebro-bg-image');
            metroImages.push(img);
          });

          var checkImages = function checkImages() {
            var result = true,
                result2 = true;
            items.find('img').each(function () {
              if (!this.complete) {
                result = false;
                $(this).on('load', checkImages);
                return false;
              }
            });

            if (result) {
              for (var i = 0; i < metroImages.length; i++) {
                if (!metroImages[i].complete) {
                  result2 = false;
                  metroImages[i].onload = checkImages;
                  return false;
                }
              }
            }

            if (result && result2) {
              items.removeClass('hidden');
              handlePortfolioGallery();

              if (container.isotope && container.attr('data-isotope-grid')) {
                container.isotope().isotope('appended', items).isotope('layout');
              }

              if (container.hasClass('norebro-masonry')) {
                container.masonry('appended', items, false);
              }

              items.parent().find('[data-aos]').attr('data-aos-offset', '');

              if (AOS) {
                // For mobile phones
                AOS.init();
                AOS.refresh();
              }

              $('[data-norebro-bg-image]').each(function () {
                $(this).css('background-image', 'url(' + $(this).attr('data-norebro-bg-image') + ')');
              });

              if (page >= parseInt(elem.attr('data-lazy-pages-count'))) {
                elem.remove();
              } else {
                // Wait height animation
                elem.removeClass('active');

                if (elem.attr('data-lazy-load') == 'scroll') {
                  setTimeout(function () {
                    elem.attr('data-lazy-load-loading', '');
                    handleLazyLoadScroll();
                  }, 500);
                } else {
                  elem.attr('data-lazy-load-loading', '');
                }
              }
            }
          };

          checkImages();
        }
      });
    }
  }

  function handleLazyLoadScroll() {
    $('[data-lazy-load="scroll"]').each(function () {
      if ($(document).scrollTop() + $(window).height() > $(this).offset().top) {
        lazyLoad($(this));
      }
    });
  }

  function handleLazyLoadClick() {
    $('[data-lazy-load="click"]').on('click', function () {
      lazyLoad($(this));
    });
  }
  /* # Other */


  function handleSelect() {
    $('[data-select]').each(function () {
      var select = $(this).find('select'),
          menu = $(this).find('.select-menu'),
          title = $(this).find('.select-title span');

      if (select.length) {
        select.find('option').each(function () {
          var href = $(this).attr('data-select-href');
          menu.append('<li><a' + (href ? ' href="' + href + '"' : '') + ' data-value="' + this.value + '">' + this.innerHTML + '</a></li>');
        });
        $(this).find('ul a').on('click', function () {
          select[0].value = $(this).attr('data-value');
          title.html($(this).html());
        });
        var selected = select.find('option[selected]');
        var title = $(this).find('.select-title span');

        if (selected.length) {
          title.html(selected.html());
        } else {
          title.html(select.find('option').eq(0).html());
        }
      }
    });
  }

  function handleSelectClick(e) {
    var link = $(e.target).closest('.select');
    $('[data-select]').each(function () {
      if (link.length > 0 && link[0] == this && !$(this).hasClass('active')) {
        $(this).addClass('active').css('z-index', '49');
        var menu = $(this).find('.select-menu');
        menu.css('left', ''); // Align

        var difference = $(window).width() - (menu.offset().left + menu.outerWidth());

        if (difference < 0) {
          menu.css('left', difference + 'px');
        }
      } else {
        $(this).removeClass('active').css('z-index', '');
      }
    });
  }

  ;

  function handleAOS() {
    if (typeof AOS != 'undefined') {
      setTimeout(function () {
        AOS.init({
          disable: 'mobile'
        });
      }, 600);
    }
  }

  function handleStretchContent() {
    $('[data-vc-stretch-content="true"], [data-vc-full-width="true"], [data-norebro-stretch-content="true"]').each(function () {
      $(this).css('left', '0');
      $(this).css({
        'width': $('#page').width() + 'px',
        'left': $('#page').offset().left - $(this).offset().left + 'px'
      });
    });
    $('[data-vc-full-width="true"]').not('[data-vc-stretch-content="true"]').each(function () {
      var padding = ($('#page').outerWidth() - $(this).closest('.page-container').outerWidth()) / 2;
      $(this).css({
        'padding-left': padding + 'px',
        'padding-right': padding + 'px'
      });
    });
    $('.rev_slider_wrapper.fullwidthbanner-container, .rev_slider_wrapper.fullscreen-container').each(function () {
      $(this).css('padding-left', $('#page').offset().left + 'px');
    });
    setTimeout(function () {
      var revSliders = $('.rev_slider');

      if (revSliders.revredraw) {
        revSliders.revredraw();
      }
    }, 30);
  }

  window.norebroRowRefresh = handleStretchContent;

  function handleScrollEffects() {
    $('[data-norebro-scroll-anim]').each(function () {
      var anim = $(this).attr('data-norebro-scroll-anim');

      if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 50) {
        $(this).removeClass(anim).removeAttr('data-norebro-scroll-anim');
      }
    });
  }

  function handleNorebroHeight() {
    var windowHeight = $(window).height();
    var footerHeight = $('.site-footer').outerHeight();
    var headerCapHeight = $('.header-cap').length ? $('.header-cap').outerHeight() : 0;
    var wpAdminHeight = $('#wpadminbar').length ? $('#wpadminbar').outerHeight() : 0;
    var headerTitleHeight = $('.header-title').length ? $('.header-title').outerHeight() : 0;
    $('[data-norebro-full-height]').each(function () {
      var height = windowHeight - footerHeight - headerCapHeight - wpAdminHeight - headerTitleHeight;
      $(this).css('height', height + 'px');
    });
  }

  function handleAlignContentInStretchRow() {
    var containerWidth = $('#content').outerWidth();
    var containerOffset = $('#content').offset().left;
    var halfContainer = containerWidth / 2 - $('#page .page-container').width() / 2; // Align content column in wrapper container

    var align = function align(self, isSplitbox, isParallax, isRight) {
      var column = self.find('> .wpb_column > .vc_column-inner');

      if (isSplitbox) {
        column = self.find('> .split-box-wrap');
      }

      if (isParallax) {
        column = self.find('> .parallax-content');
      }

      column = isRight ? column.last() : column.eq(0);

      if (!Nor.isMobile) {
        column.css('padding-' + (isRight ? 'right' : 'left'), halfContainer + 'px');
      } else {
        column.css({
          'padding-left': '25px !important',
          'padding-right': '25px !important'
        });
      }
    }; // Stretch column


    var stretch = function stretch(self, isSplitbox, isRight) {
      var column = self.find(isSplitbox ? '> .split-box-wrap' : '> .wpb_column > .vc_column-inner > .wpb_wrapper');
      column = isRight ? column.last() : column.eq(0);
      column.css({
        'position': '',
        'left': '',
        'width': ''
      });

      if (isRight) {
        column.css('width', containerWidth - column.offset().left + 'px');
      } else {
        column.css({
          'position': 'relative',
          'left': -column.offset().left + 'px',
          'width': column.offset().left + column.outerWidth() + 'px'
        });
      }

      if (Nor.isMobile) {
        column.css({
          'width': '',
          'left': ''
        });
      }
    };

    $('.norebro-content-wrap-left').each(function () {
      align($(this), $(this).hasClass('split-box'), $(this).hasClass('parallax'), false);
    });
    $('.norebro-content-wrap-right').each(function () {
      align($(this), $(this).hasClass('split-box'), $(this).hasClass('parallax'), true);
    });
    $('.norebro-stretch-column-left').each(function () {
      stretch($(this), $(this).hasClass('split-box'), false);
    });
    $('.norebro-stretch-column-right').each(function () {
      stretch($(this), $(this).hasClass('split-box'), true);
    });
  }

  $(window).on('load', function () {
    Nor.init();
    handleNorebroHeight(); // Navigation

    handleNavigations(); // Header

    handleHeaders();
    showHeaderTitle(); //handleHeaderTitle();
    // Footer

    handleFooter();
    handleFooterSize();
    handleStretchContent();
    handleAlignContentInStretchRow(); // Shortcodes

    handleAccordionBox();
    handleBannerBox();
    handleBannerBoxSize();
    handleClientsLogo();
    handleChartBox();
    handleCounterBox();
    handleCountdownBox();
    handleContactForm();
    handleCoverBox();
    handleCoverBoxSize();
    handleGallery(); // handleGoogleMaps();

    handleSocialBar();
    handleSplitboxParallax();
    handleProgressBar();
    handleProgressBarSize();
    initParallax();
    handleParallax();
    handlePriceTable();
    handleOnepage();
    handleOnepageSize();
    handleTabBox();
    handleVideoBackground();
    handleVideoPopup();

    if ($.fn.multiscroll) {
      handleSplitScreens();
    } // Portfolio


    handlePortfolio();
    handlePortfolioGallery();
    handleScrollContent();
    handleScrollEffects();
    handleSelect();
    handleSliders();
    handleLazyLoadClick();
    handleLazyLoadScroll(); // Scroll top button

    $('.scroll-top').click(function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    }); // Tooltips

    $('.tooltip').each(function () {
      if ($(this).find('.tooltip-top, .tooltip-bottom').length) {
        var content = $(this).find('.tooltip-text');
        content.css('left', $(this).outerWidth() / 2 - content.outerWidth() / 2 + 'px');
      }
    }); // Message boxes

    $('body').on('click', '.message-box .close', function () {
      $(this).parent().slideUp({
        duration: 300,
        queue: false
      }).fadeOut(300);
      var self = $(this);
      setTimeout(function () {
        self.remove();
      }, 350);
    }); // Masonry && AOS

    if ($('.norebro-masonry').length) {
      setTimeout(function () {
        $('.norebro-masonry').masonry({
          itemSelector: '.masonry-block',
          columnWidth: '.grid-item',
          horizontalOrder: true,
          isAnimated: false,
          hiddenStyle: {
            opacity: 0,
            transform: ''
          }
        });
        setTimeout(function () {
          handleAOS();
        }, 50);
      }, 50);
    } else {
      handleAOS();
    } // Norebro attrs


    $('[data-norebro-bg-image]').each(function () {
      $(this).css('background-image', 'url(' + $(this).attr('data-norebro-bg-image') + ')');
    }); // Blog share

    $('[data-blog-share]').each(function () {
      var socialLinks = $(this).find('.socialbar a');
      $(this).on('click', function () {
        if (socialLinks.eq(0).hasClass('active')) {
          socialLinks.each(function (i) {
            var link = $(this);
            setTimeout(function () {
              link.removeClass('active');
            }, 50 * i);
          });
        } else {
          socialLinks.each(function (i) {
            var link = $(this);
            setTimeout(function () {
              link.addClass('active');
            }, 50 * i);
          });
        }
      });
    }); // Fixed google maps equal height in percent

    $('.wpb_wrapper').each(function () {
      var divs = $(this).find('> div');

      if (divs.length == 1 && divs.eq(0).hasClass('google-maps')) {
        $(this).css('height', '100%');
      }
    });
    $('div[data-dynamic-text="true"]').each(function () {
      var options = JSON.parse($(this).attr('data-dynamic-text-options'));
      var typed = new Typed('#' + $(this).attr('id') + ' .dynamic', options);
    });

    if (jQuery('body').hasClass('norebro-anchor-onepage')) {
      jQuery('body').on('click', 'a[href^="#"]', function (event) {
        if (!$(this).parent().attr('data-menuanchor')) {
          event.preventDefault();
          var href = jQuery.attr(this, 'href');

          if (jQuery(href).length) {
            jQuery('html, body').animate({
              scrollTop: jQuery(href).offset().top
            }, 500, function () {
              window.location.hash = href;
            });
          } // die, die, die


          return false;
        }
      });

      if (window.location.hash.substring(0, 1) == '#') {
        if (jQuery(window.location.hash).length) {
          jQuery('html, body').animate({
            scrollTop: jQuery(window.location.hash).offset().top
          }, 500);
        }
      }
    } // Refresh composter waypoints after magic


    if (window.vc_waypoints) {
      setTimeout(function () {
        window.vc_waypoints();
      }, 600);
    } // Mobile share button


    $('.mobile-social').on('click', function (e) {
      e.stopPropagation();

      if ($(this).hasClass('active')) {
        $(this).find('.social').css('height', '0px');
        $(this).removeClass('active');
      } else {
        var social = $(this).find('.social');
        var self = $(this);
        social.css('height', '');
        social.addClass('no-transition');
        $(this).addClass('active');
        var height = social.outerHeight();
        $(this).removeClass('active');
        setTimeout(function () {
          social.css('height', height + 'px');
          social.removeClass('no-transition');
          self.addClass('active');
        }, 50);
      }
    });
    $('body').on('click', function () {
      $('.mobile-social .social').css('height', '0px');
      $('.mobile-social').removeClass('active');
    });
    $(window).on('scroll', function () {
      var handleAnim = function handleAnim() {
        handleMobileHeader();
        handleFixedHeader(); //handleHeaderTitle();

        handleBarScroll();
        handleChartBox();
        handleCounterBox();
        handleProgressBar();
        handleParallax();
        handleScrollEffects();
        handleLazyLoadScroll();
      };

      if (window.requestAnimationFrame) {
        window.requestAnimationFrame(function () {
          handleAnim();
        });
      } else {
        handleAnim();
      } // Scroll top button


      if ($(window).scrollTop() > 800) {
        $('#page-scroll-top, #purchase-link').fadeIn(600);
      } else {
        $('#page-scroll-top, #purchase-link').fadeOut(600);
      }
    });
    $(window).on('click', function (e) {
      handleSelectClick(e);
    });
    $(window).on('resize', function () {
      Nor.resize();
      handleNorebroHeight();
      handleHeaderSize(); //handleHeaderTitle();

      handleFooterSize();
      handleStretchContent();
      handleAlignContentInStretchRow();
      handleOnepageSize();
      handleAccordionBoxSize();
      handleBannerBoxSize();
      handleClientsLogo();
      handleCounterBox();
      handleCoverBoxSize();
      handleParallax();
      handleProgressBarSize();
      handlePriceTable();
      handleSplitboxSize();
      handleTabBoxSize();
      handleProgressBar();
      handleScrollEffects();
      handleLazyLoadScroll();

      if (AOS) {
        setTimeout(function () {
          AOS.refresh();
        }, 10); // Isotope animation

        setTimeout(function () {
          AOS.refresh();

          if (window.vc_waypoints) {
            window.vc_waypoints();
          }
        }, 600);
      }
    });
    $('#page-preloader').addClass('closed');
  });
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/Spotles/spotlessagency/resources/js/main.js */"./resources/js/main.js");


/***/ })

/******/ });
