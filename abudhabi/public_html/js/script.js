function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};
/* cookie.JS
 ========================================================*/
include(folder_loc + 'js/jquery.cookie.js');

/* Easing library
 ========================================================*/
include(folder_loc + 'js/jquery.easing.1.3.js');

/* bootstrap library
 ========================================================*/
include(folder_loc + 'js/bootstrap.modal.js');

/* PointerEvents
 ========================================================*/
;
(function ($) {
    if(isIE() && isIE() < 11){
        include(folder_loc + 'js/pointer-events.js');
        $('html').addClass('lt-ie11');
        $(document).ready(function(){
            PointerEventsPolyfill.initialize({});
        });
    }
})(jQuery);

/* jQuery Modal
 ========================================================*/
// include(folder_loc + 'js/jquery.modal.min.js');


/* Stick up menus
 ========================================================*/
;
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include(folder_loc + 'js/tmstickup.js');

        $(document).ready(function () {
            $('#stuck_container').TMStickUp({})
        });
    }
})(jQuery);

/* ToTop
 ========================================================*/
;
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include(folder_loc + 'js/jquery.ui.totop.js');

        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'toTop fa-arrow-up'
            });
        });
    }
})(jQuery);

/* EqualHeights
 ========================================================*/
;
(function ($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include(folder_loc + 'js/jquery.equalheights.js');
    }
})(jQuery);

/* Copyright Year
 ========================================================*/
;
(function ($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function () {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);


/* Superfish menus
 ========================================================*/
;
(function ($) {
    include(folder_loc + 'js/superfish.js');
})(jQuery);

/* Navbar
 ========================================================*/
;
(function ($) {
    include(folder_loc + 'js/jquery.rd-navbar.js');
})(jQuery);


/* Google Map
 ========================================================*/
;
(function ($) {
    var o = document.getElementById("google-map");
    if (o) {
        include('http://maps.google.com/maps/api/js?key=AIzaSyD1l2Yrpf8FqU6GLScXwR4p3jjuLuFua0I');
        include(folder_loc + 'js/jquery.rd-google-map.js');

        $(document).ready(function () {
            var o = $('#google-map');
            if (o.length > 0) {
                o.googleMap();
            }
        });
    }
})
(jQuery);

/* WOW
 ========================================================*/
;
(function ($) {
    var o = $('html');

    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
        if (o.hasClass('desktop')) {
            include(folder_loc + 'js/wow.js');

            $(document).ready(function () {
                new WOW().init();
            });
        }
    }
})(jQuery);

/* Mailform
=============================================*/
;(function ($) {
    var o = $('.rd-mailform');
    if (o.length > 0) {
        include(folder_loc + 'js/mailform/jquery.form.min.js');
        include(folder_loc + 'js/mailform/jquery.rd-mailform.min.js');

        $(document).ready(function () {
            var o = $('.rd-mailform');

            if (o.length) {
                o.rdMailForm({
                    validator: {
                        'constraints': {
                            '@LettersOnly': {
                                message: 'Please use letters only!'
                            },
                            '@NumbersOnly': {
                                message: 'Please use numbers only!'
                            },
                            '@NotEmpty': {
                                message: 'Field should not be empty!'
                            },
                            '@Email': {
                                message: 'Enter valid e-mail address!'
                            },
                            '@Phone': {
                                message: 'Enter valid phone number!'
                            },
                            '@Date': {
                                message: 'Use MM/DD/YYYY format!'
                            },
                            '@SelectRequired': {
                                message: 'Please choose an option!'
                            }
                        }
                    }
                }, {
                    'MF000': 'Sent',
                    'MF001': 'Recipients are not set!',
                    'MF002': 'Form will not work locally!',
                    'MF003': 'Please, define email field in your form!',
                    'MF004': 'Please, define type of your form!',
                    'MF254': 'Something went wrong with PHPMailer!',
                    'MF255': 'There was an error submitting the form!'
                });
            }
        });
    }
})(jQuery);

/* Orientation tablet fix
 ========================================================*/
$(function () {
    // IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function () {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },

        scaleFix = function () {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function () {
                            return false;
                        },
                        function () {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');

/* Camera
========================================================*/
;(function ($) {
var o = $('#camera');
    if (o.length > 0) {
        if (!(isIE() && (isIE() > 9))) {
            include(folder_loc + 'js/jquery.mobile.customized.min.js');
        }

        include(folder_loc + 'js/camera.js');

        $(document).ready(function () {
            o.camera({
                autoAdvance: true,
                height: '41.428571428571428571428571428571%',
                minHeight: '300px',
                pagination: true,
                thumbnails: false,
                playPause: false,
                hover: false,
                loader: 'none',
                navigation: false,
                navigationHover: false,
                mobileNavHover: false,
                fx: 'simpleFade'
            })
        });
    }
})(jQuery);

/* Owl Carousel
========================================================*/
;(function ($) {
    var o = $('.owl-carousel');
    if (o.length > 0) {
        include(folder_loc +'js/owl.carousel.min.js');
        $(document).ready(function () {
            o.owlCarousel({
                margin: 30,
                smartSpeed: 450,
                loop: true,
                dots: false,
                dotsEach: 1,
                nav: false,
                navClass: ['owl-prev fa-arrow-circle-left', 'owl-next fa-arrow-circle-right'],
                responsive: {
                    0: { items: 1 },
                }
            });
        });
    }
})(jQuery);

/* TouchTouch Gallery
========================================================*/
;(function ($) {
    var o = $('.thumb');
    if (o.length > 0) {
        include(folder_loc +'js/jquery.touch-touch.js');
        $(document).ready(function () {
            o.touchTouch();
        });
    }
})(jQuery);

/* Isotope
========================================================*/
;(function ($) {
    var o = $('.media-list');
    if (o.length > 0) {
        include(folder_loc +'js/isotope.pkgd.js');
        $(document).ready(function () {
            o.isotope({
              itemSelector: '.media',
              layoutMode: 'vertical',
              filter: '.media'
            });
            $('.tabs').on( 'click', 'a', function() {
              var filterValue = $(this).attr('data-filter');
              o.isotope({ filter: filterValue });
              $(this).addClass('active');
            });
            $('.tabs a').click(function(){
                $('.tabs .active').removeClass('active');
                $(this).addClass('active');
            });
        });
    }
})(jQuery);


// custom tabs
// =========================================
function openMsg(evt, msgName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("prinMsg");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(msgName).style.display = "block";
  evt.currentTarget.className += " active";
  if(evt.preventDefault){ //firefox,chrome
        evt.preventDefault();
  }
  else { // ie
      return false;
  }
}


//custom hide menu on mobile
//////////////////////////////
function hideMobileMenu() {
  if($('.rd-mobilemenu')){
    $('.rd-mobilemenu').removeClass('active');
    $('.rd-mobilepanel_toggle').removeClass('active');
  }
}
