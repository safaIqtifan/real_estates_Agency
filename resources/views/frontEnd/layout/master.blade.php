<!DOCTYPE html>
<html lang="en">
<head>
    <title>Real Estate @yield('page-Title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script src="js/jquery-1.6.js" ></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Didact_Gothic_400.font.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/atooltip.jquery.js"></script>
    <script src="js/jquery.jqtransform.js" ></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <style type="text/css">.bg{behavior:url("js/PIE.htc");}</style>
    <![endif]-->
    @yield('cssCode')
</head>
<body id="page1">

@include('frontEnd.layout.header')

<!-- content -->
@yield('content')
<!-- / content -->

@include('frontEnd.layout.footer')

<script>Cufon.now();</script>
<script>
    $(window).load(function () {
        $('#slider').nivoSlider({
            effect: 'sliceUpDown', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
            slices: 17,
            animSpeed: 500,
            pauseTime: 6000,
            startSlide: 0, //Set starting Slide (0 index)
            directionNav: false, //Next & Prev
            directionNavHide: false, //Only show on hover
            controlNav: true, //1,2,3...
            controlNavThumbs: false, //Use thumbnails for Control Nav
            controlNavThumbsFromRel: false, //Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', //Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
            keyboardNav: true, //Use left & right arrows
            pauseOnHover: true, //Stop animation while hovering
            manualAdvance: false, //Force manual transitions
            captionOpacity: 1, //Universal caption opacity
            beforeChange: function () {
                $('.nivo-caption').animate({
                    bottom: '-110'
                }, 400, 'easeInBack')
            },
            afterChange: function () {
                Cufon.refresh();
                $('.nivo-caption').animate({
                    bottom: '-20'
                }, 400, 'easeOutBack')
            },
            slideshowEnd: function () {} //Triggers after all slides have been shown
        });
        Cufon.refresh();
    });
</script>

    @yield('jsCoge')
</body>
</html>
