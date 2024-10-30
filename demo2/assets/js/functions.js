$(document).ready(function () {
    AOS.init({ disable: 'mobile' });
    $(".menu-btn").click(function () {
        $(".mobile-In").fadeIn();
        $(".mobile-In").css("transform", "translateX(0px)");
    });
    $(".close-btn").click(function () {
        $(".mobile-In").fadeOut();
        $(".mobile-In").css("transform", "translateX(2000px)");
    });
    //owlcarousel
    $('.self-publishing-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 25,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        navText: ["<i class='fal fa-long-arrow-left'></i>", "<i class='fal fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            360: {
                items: 1
            }
        }
    });
    $('.testmonial-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        navText: ["<i class='fal fa-long-arrow-left'></i>", "<i class='fal fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            360: {
                items: 1
            }
        }
    });
    $('.monial-videos').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplaySpeed: 800,
        navText: ["<i class='fal fa-long-arrow-left'></i>", "<i class='fal fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            360: {
                items: 1
            }
        }
    });
    $('.port-slider-one').owlCarousel({
        loop: true,
        nav: false,
        stopOnHover: false,
        autoplayHoverPause: false,
        dots: false,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 800,
        // navText: ["<i class='fad fa-chevron-left'></i>", "<i class='fad fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 6,
            },
            360: {
                items: 2
            }
        }
    });
    $('.port-slider-two').owlCarousel({
        loop: true,
        nav: false,
        rtl: true,
        stopOnHover: false,
        autoplayHoverPause: false,
        dots: false,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 800,
        // navText: ["<i class='fad fa-chevron-left'></i>", "<i class='fad fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 6,
            },
            360: {
                items: 2
            }
        }
    });
    // Header Sticky Position
    var offset = $(".nav-bar").offset();
    checkOffset();
    $(window).scroll(function () {
        checkOffset();
    });
    function checkOffset() {
        if ($(document).scrollTop() > offset.top) {
            $('.nav-bar').addClass('sticky-nav-bar');
        } else {
            $('.nav-bar').removeClass('sticky-nav-bar');
        }
    }
    // Header Sticky Position
    // ******************************************************
    // When the switch button is toggled
    $("#mySwitch").on("change", function () {
        // If the switch is on
        if ($(this).is(":checked")) {
            // Show the section that will change
            $("#mySection").show();
        } else {
            // Hide the section that will change
            $("#mySection").hide();
        }
    });
    // ******************************************************
    // Validation Form******************************************
    $(".validate-popupform").validate({});
    $(".validate-popup-form").validate({});
    $(".validate-letsget").validate({});
    $(".contact-form").validate({});
    // End Validation***********************************
    $('#list-btn').click(function () {
        document.getElementById('list-btn').style.display = "none";
        document.getElementById('cross').style.display = "block";
        document.getElementById('menu-list').style.left = "0px";
        // document.getElementById('form-cross').style.display = "none";
        // document.getElementById('cpyRight-cross').style.display = "none";
    });
    $('#cross').click(function () {
        document.getElementById('list-btn').style.display = "block";
        document.getElementById('cross').style.display = "none";
        document.getElementById('menu-list').style.left = "150%";
        // document.getElementById('form-cross').style.display = "block";
        // document.getElementById('cpyRight-cross').style.display = "none";
    });
    // Arrow Btn goto up
    var scrollBtn = $('#goto-top');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            scrollBtn.addClass('show');
        } else {
            scrollBtn.removeClass('show');
        }
    });
    scrollBtn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });
    // Start Counter======================================
    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};
            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);
                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;
                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};
                $self.data('countTo', data);
                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);
                // initialize the element with the starting value
                render(value);
                function updateTimer() {
                    value += increment;
                    loopCount++;
                    render(value);
                    if (typeof (settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }
                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;
                        if (typeof (settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }
                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.text(formattedValue);
                }
            });
        };
        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };
        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));
    jQuery(function ($) {
        // start all the timers
        $('.timer').each(count);
        // restart a timer when a button is clicked
        $(window).scroll(function () {
            
            if ($(window).scrollTop() > 300 && $(window).scrollTop() < 850) {
                $('.timer').each(count);
            }
        });
        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
    // End Counter======================================================
    // Add All alt attribute values
    $("img").attr("alt", "");
	
    // Tabs
    $('[data-targetit]').on('click', function () {
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="tabs"]').removeClass('current');
        $('.' + target).addClass('current');
        $('.slick-slider').slick('setPosition', 0);
    });
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    // Tabs End
    // Get the <span> element that closes the modal
    // var span = document.getElementsByClassName("close")[0];
    // // When the user clicks on <span> (x), close the modal
    // span.onclick = function () {
    //     modal.style.display = "none";
    // }
    //****************************
    // Isotope Load more button
    //****************************
    // var initShow = 8; //number of items loaded on init & onclick load more button
    // var counter = initShow; //counter for load more button
    // var iso = $container.data('isotope'); // get Isotope instance
    // // loadMore(initShow); //execute function onload //Error In console this is why committed
    // function loadMore(toShow) {
    //     $container.find(".hidden").removeClass("hidden");
    //     var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function (item) {
    //         return item.element;
    //     });
    //     $(hiddenElems).addClass('hidden');
    //     $container.isotope('layout');
    //     //when no more to load, hide show more button
    //     if (hiddenElems.length == 0) {
    //         jQuery("#showMore").hide();
    //     } else {
    //         jQuery("#showMore").show();
    //     };
    // }
    /*
    end*/
});
// Tabs Click To Remove active class 
var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
$('#menu-list .menu li a').each(function () {
    if (this.href === path) {
        $(this).addClass('active');
       
    }
});
// Tabs Click To Remove active class End
     function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i = 0; i < imgDefer.length; i++) {
          if (imgDefer[i].getAttribute('data-src')) {
            imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
          }
        }
      }
      
      window.onload = init;