

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - St.Augustine School</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="assets/img/st/favicon2.png" />
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href="cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet">
    <link href="cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/default-responsive.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery.isotope/1.5.25/jquery.isotope.min.js"></script>
    <script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
    <!--<link href="assets/css/nav.css" rel="stylesheet"> -->



    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '264645137261311'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=264645137261311&ev=PageView&noscript=1"
            /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

    <script>
        $('.dropdown-toggle').click(function(e) {
            if ($(document).width() > 768) {
                e.preventDefault();

                var url = $(this).attr('href');


                if (url !== '#') {

                    window.location.href = url;
                }

            }
        });
    </script>

   <script>
        $(document).ready(function(){
            $("video").bind('ended', function(){
                $("#bannerViv").fadeOut(500);
            });
        });

    </script>

        <script>
            $(document).ready(function () {

                setTimeout(function() {
                    $('.fullscreen-bg .background ').slideUp("slow");

                }, 5000);
            });
        </script>

    <script >
        // makes the parallax elements
        function parallaxIt() {

            // create variables
            var $fwindow = $(window);
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // on window scroll event
            $fwindow.on('scroll resize', function() {
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            });

            // for each of content parallax element
            $('[data-type="content"]').each(function (index, e) {
                var $contentObj = $(this);
                var fgOffset = parseInt($contentObj.offset().top);
                var yPos;
                var speed = ($contentObj.data('speed') || 1 );

                $fwindow.on('scroll resize', function (){
                    yPos = fgOffset - scrollTop / speed;

                    $contentObj.css('top', yPos);
                });
            });

            // for each of background parallax element
            $('[data-type="background"]').each(function(){
                var $backgroundObj = $(this);
                var bgOffset = parseInt($backgroundObj.offset().top);
                var yPos;
                var coords;
                var speed = ($backgroundObj.data('speed') || 0 );

                $fwindow.on('scroll resize', function() {
                    yPos = - ((scrollTop - bgOffset) / speed);
                    coords = '40% '+ yPos + 'px';

                    $backgroundObj.css({ backgroundPosition: coords });
                });
            });

            // triggers winodw scroll for refresh
            $fwindow.trigger('scroll');
        };

        parallaxIt();
    </script>

<script>
    window.onresize = function(){ location.reload(); }
</script>
<script>
    if ($(window).width() >= 768) {

        $(function() {
            $(window).load(function() {
                var $gal = $("#scroll_wrapper"),
                    galW = $gal.outerWidth(true),
                    galSW = $gal[0].scrollWidth,
                    wDiff = (galSW / galW) - 1, // widths difference ratio
                    mPadd = 60, // mousemove Padding
                    damp = 20, // Mmusemove response softness
                    mX = 0, // real mouse position
                    mX2 = 0, // modified mouse position
                    posX = 0,
                    mmAA = galW - (mPadd * 2), // the mousemove available area
                    mmAAr = (galW / mmAA); // get available mousemove didderence ratio
                $gal.mousemove(function(e) {
                    mX = e.pageX - $(this).parent().offset().left - this.offsetLeft;
                    mX2 = Math.min(Math.max(0, mX - mPadd), mmAA) * mmAAr;
                });
                setInterval(function() {
                    posX += (mX2 - posX) / damp; // zeno's paradox equation "catching delay"
                    $gal.scrollLeft(posX * wDiff);
                }, 10);
            });
        });
    }
</script>



</head>
<body class="en">

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/main.js"></script> <!--- For Navigation -->


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php"><img src="assets/img/st/home-logo-wht.png" alt="sas" /></a>

        </div>

        <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Principal </a></li>
                        <li><a href="#">Admissions </a></li>
                        <li><a href="#">Backstory </a></li>
                        <li><a href="#">Excellence </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#event" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Updates / Newsletters <span class="caret"></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Weekly Update </a></li>
                        <li><a href="#">Newsletter </a></li>
                        <li><a href="#">Faith and Foundation Newsletter </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Logins <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Parents Login </a></li>
                        <li><a href="#">Teachers Login </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Parents <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Guide </a></li>
                        <li><a href="#">Participation </a></li>
                        <li><a href="#">Traffic Safety Guidelines </a></li>
                        <li><a href="#">School Code of Conduct </a></li>
                        <li><a href="#">Absent from School </a></li>
                        <li><a href="#">St. Augustine School Parent Handbook </a></li>
                        <li><a href="newsletter.php">Newsletters / Downloads </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Life at School <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Curricula </a></li>
                        <li><a href="#">Calendar </a></li>
                        <li><a href="#">Staff </a></li>
                        <li><a href="#">Music Tracks </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Support <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Faith and Foundation </a></li>
                        <li><a href="#">Donate </a></li>
                        <li><a href="#">Pass the Torch </a></li>
                        <li><a href="#">Team Players </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Community <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alumni </a></li>
                        <li><a href="#">Memorium </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Downloads / Links <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">School Calendar </a></li>
                        <li><a href="#">Athletics Calendar </a></li>

                        <li><a href="#">Parent Participation </a></li>

                        <li><a href="#">Hot Lunch </a></li>


                        <li><a href="#">St. Augustine's Church </a></li>
                        <li><a href="#">Catholic Independent Schools </a></li>
                        <li><a href="#">Ministry of Education </a></li>
                        <li><a href="#">St. Augustine Videos </a></li>
                    </ul>
                </li>



            </ul>
            <ul class="nav navbar-nav navbar-right social media">
                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout fb-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>

                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout insta-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>

                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout twitter-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>

                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout youtube-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="body">


<div class="nav-clear"></div>
<!--- End Navigation -->
<div class="clearfix"></div>
<!--- Start Slider -->
<script src="js/jquery.bxslider.min.js"></script><!--For Image Slider-->
<div class="slide-wrap">
    <section class="slider">
        <ul class="slider1">
            <li><img src="assets/img/slide/slide1r.jpg"></li>
            <li><img src="assets/img/slide/slide2r.jpg"></li>
            <li><img src="assets/img/slide/slide3r.jpg"></li>
            <li><img src="assets/img/slide/slide4r.jpg"></li>
            <li><img src="assets/img/slide/slide5r.jpg"></li>
            <li><img src="assets/img/slide/slide6r.jpg"></li>
            <li><img src="assets/img/slide/slide7r.jpg"></li>
            <li><img src="assets/img/slide/slide8r.jpg"></li>
        </ul>
    </section>
</div>
<script type="text/javascript">
    $('.slider1').bxSlider({
        mode: 'fade',
        captions: false,
        auto:true,
        pager:false,

    });
    $('.slider2').bxSlider({
        pager:false,
        captions: true,
        maxSlides: 3,
        minSlides: 1,
        slideWidth: 230,
        slideMargin: 10
    });
    $('.slider3').bxSlider({
        mode: 'fade',
        captions: false,
        auto:true,
        pager:false,
        controls:false,
    });
    $('.slider4').bxSlider({
        mode: 'fade',
        captions: false,
        auto:true,
        pager:false,
        controls:false,
    });
    $('.slider5').bxSlider({
        mode: 'fade',
        captions: false,
        auto:true,
        pager:false,
        controls:false,
    });
    $('.slider6').bxSlider({
        mode: 'fade',
        captions: false,
        auto:true,
        pager:false,
        controls:false,
    });
    $('.slider7').bxSlider({
        mode: 'fade',
        captions: false,
        auto:true,
        pager:false,
        controls:false,
    });
</script>
<!--- End Slider -->
<div class="clearfix"></div>
<!--------- Start Banner Wrapper ------>
<div class="container">
<section class="left-col">
    <h1>Think Globally, Act Locally </h1>
    <p>The Grade 6 and 7 classes are already into the spirit of giving this Advent season. As a legacy to Father John Brioux (who was a long time supporter of the Samaritan's
        Purse Operation Christmas Child) the upper intermediate classes have extended their generosity to help bring joy to another child in a developing country.
        Students collected toys, clothes, school supplies and small toiletries.  They sent all these items along with a personal letter and photo in colourful, red,
        Christmas, shoe boxes. As Pope Francis declared on the First World Day of the Poor (Nov.19th), "Let us join action to prayer. Let us love not with words but with deeds." For more information check out: Samaritan's Purse Operation Christmas Child.
    <br>
        The Grade 6 and 7 classes are already into the spirit of giving this Advent season. As a legacy to Father John Brioux (who was a long time supporter of the Samaritan's
        Purse Operation Christmas Child) the upper intermediate classes have extended their generosity to help bring joy to another child in a developing country.
        Students collected toys, clothes, school supplies and small toiletries.  They sent all these items along with a personal letter and photo in colourful, red,
        Christmas, shoe boxes. As Pope Francis declared on the First World Day of the Poor (Nov.19th), "Let us join action to prayer. Let us love not with words but with deeds."
        For more information check out: Samaritan's Purse Operation Christmas Child.
    <br>
        The Grade 6 and 7 classes are already into the spirit of giving this Advent season. As a legacy to Father John Brioux (who was a long time supporter of the Samaritan's
        Purse Operation Christmas Child) the upper intermediate classes have extended their generosity to help bring joy to another child in a developing country. Students collected
        toys, clothes, school supplies and small toiletries.  They sent all these items along with a personal letter and photo in colourful, red, Christmas, shoe boxes.
        As Pope Francis declared on the First World Day of the Poor (Nov.19th), "Let us join action to prayer. Let us love not with words but with deeds." For more information
        check out: Samaritan's Purse Operation Christmas Child.
    </p>
</section>
<section class="sidebar">
    <section class="one-third">
        <p><a href="https://www.cisva.bc.ca/bullyfreeschool/index.php" target="_blank"><img class="musticon" src="assets/img/content/bullyfreebutton1.png"></a></p>
        <p><a href="#"><img class="musticon" src="assets/img/content/cisvatheme.jpg"></a></p>
        <p><a href="http://staugustineschurch.ca/" target="_blank"><img class="musticon" src="assets/img/content/churchlogo.png"></a></p>
    </section>
    <section class="one-third">
        <p><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/weeklyupdate.pdf" target="_blank"><img src="assets/img/icon/weekly.png"> Weekly's Update </a></p>
        <p><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/newsletter.pdf" target="_blank"><img src="assets/img/icon/sasNews.png"> SAS Newsletter </a></p>
        <p><a href="http://www.faithandfoundation.com/AAfiles/misc/FFNewsletters/2017F&FNewsFall.pdf" target="_blank"><img src="assets/img/icon/ffnews.png"> Faith and Foundation Newsletter </a></p>
    </section>
    <section class="one-third">
        <p><a href="https://calendar.google.com/calendar/embed?src=staugustineschool.ca_ov95acb0ok7gakg29hvhn1fp70%40group.calendar.google.com&ctz=America/Vancouver" target="_blank"><img src="assets/img/icon/calendar.png">SAS Calendar </a></p>
        <p><a href="mailto:office@staugustineschool.ca?subject=My%20child%27s%20absence" target="_blank"><img src="assets/img/icon/absence1.png"> Absence From School </a></p>
        <p><script type="text/javascript"  src="https://chimp.net/widget/js/loader.js?MjA4MCxtaW5pLG9yYW5nZSxGYWl0aCBhbmQgRm91bmRhdGlvbiAtIFN0LiBBdWd1c3RpbmUgU2Nob29sLEdyb3Vw"  id="chimp-button-script"></script></p>
    </section>
</section>
</div>
<!--------- End Banner Wrapper ------>
   <!-- <a name="about">
    <!--- Start split titles -->
    <!--<div id="banner-wrapper">
        <div class="one-half">
            <img src="assets/img/resource/valentine6.jpg">
            <h3><a href="http://www.faithandfoundation.com/stories/valentinetea.html">Valentine Thank You Tea  </a></h3>
            <p> Our annual Valentine Thank You Tea provides the perfect opportunity for our students to thank their parents for all that they do for them. Students served coffee and
                treats to their parents and offered them a flower and card to show their love. The Tea also gives the parents time to gather with their friends and spend time together.
                We were delighted with the turn out and noted that almost all of the students had a parent, grandparent or other family member there for them.  We would like to thank all
                the staff members who helped to set up or prepare the tea and the grade 7 students who helped host in the gym.  Thank you, parents, for your continued support and unwavering
                commitment to St. Augustine School!</p>
        </div>
        <div class="one-half">
            <img src="assets/img/resource/foodbank6.jpg">
            <h3>Support the Food Bank </h3>
            <p> From January 29 to February 2, it was a lot of fun observing all the "strange" alterations to our school uniform as the students brought in food items to support the Vancouver
                Food Bank and altered their uniform in return. The community truly embraced the opportunity to help feed the hungry. We filled up 58 boxes and raised $1000! Knowing that almost
                a third of the food bank users are children, it was a wonderful opportunity to model what it is to share with others and to continue to work towards our year theme to Care
                For Everyone In Our Common Home! Thank you to our Grade 4 class for leading our assembly to promote this school initiative. Thank you to everyone for your generous support.
            </p>
        </div>
    </div> -->
    <!--- End split titles -->
    <div class="clearfix"></div>
    <!--- Start Parallax -->
    <!--<section class="parallax-1">
        <div class="container">
        <div class="parallax-inner">
            <section class="one-third">
                <div class="wrapper" style="background-image: url(assets/img/resource/valentine6.jpg); background-repeat:no-repeat;"

                         data-text="Year after year, our parish and school community members give, in a spirit of gratitude and hope, to the School Building Fund. Last year, 98% of all school families
                    made a donation or pledge to help us build our new school. This faithfulness is a testament to the generosity of our community and shows how much we value our children,
                    teachers and staff, and the importance of Catholic education. Together, we donated almost $427,000 that will pay down the mortgage and move us into a stronger position
                    towards completing the project. I want to thank each of you, as donors and volunteers, for the quiet and consistent investment you make in our kids. On behalf of the entire
                    Faith & Foundation committee, thank you from the bottom of our hearts!"> <h5>How are you</h5>

                </div>
            </section>
            <section class="one-third">
                <img src="assets/img/resource/fallcamp.png">
                <h3>Fall Campaign: Final Numbers </h3>
                <p>Year after year, our parish and school community members give, in a spirit of gratitude and hope, to the School Building Fund. Last year, 98% of all school families
                    made a donation or pledge to help us build our new school. This faithfulness is a testament to the generosity of our community and shows how much we value our children,
                    teachers and staff, and the importance of Catholic education. Together, we donated almost $427,000 that will pay down the mortgage and move us into a stronger position
                    towards completing the project. I want to thank each of you, as donors and volunteers, for the quiet and consistent investment you make in our kids. On behalf of the entire
                    Faith & Foundation committee, thank you from the bottom of our hearts!

                    Sincerely,

                    Rob Napoli, Chair Fall Campaign

                </p>
            </section>
            <section class="one-third">
                <img src="assets/img/resource/specialtime.png">
                <h3>Advent: A Special Time </h3>
                <p>This week we help our annual Advent student retreat.  The afternoon begins with an assembly hosted by the grade 6 students.  The assembly focuses on the history and
                    traditions of the Advent Season.  The Advent wreath and colour of candles are explained and, as always at our assemblies, scripture is read and reflected upon. After
                    the assembly, the students gathered in their Family Groups and were lead in a wreath making activity by their grade 7 leader.  Each student made a paper wreath to take
                    home as a reminder of the need to pray and think about the importance of Jesus in our lives today and prepare for the celebration of Jesus’ birth on Christmas Day.During
                    Advent, the school has a number of ways in which we try to be like Jesus and help those in need.  As outlined in the last newsletter, we are collecting for the women at
                    Sancta Maria House and families in need in Surrey.  These items can be placed under the tree in the foyer of the school.  As well, we will be having our annual collection
                    for our Oblate priests work in Kenya during our night of prayer on December 14th.
                </p>
            </section>
        </div>
        </div>
    </section>-->
<!--- End Parallax -->
    <div class="clearfix"></div>
    <!--------- Start Banner Wrapper ------>
    <!--<section class="left-col">
        <h1>Think Globally, Act Locally </h1>
        <p>The Grade 6 and 7 classes are already into the spirit of giving this Advent season. As a legacy to Father John Brioux (who was a long time supporter of the Samaritan's
            Purse Operation Christmas Child) the upper intermediate classes have extended their generosity to help bring joy to another child in a developing country.
            Students collected toys, clothes, school supplies and small toiletries.  They sent all these items along with a personal letter and photo in colourful, red,
            Christmas, shoe boxes. As Pope Francis declared on the First World Day of the Poor (Nov.19th), "Let us join action to prayer. Let us love not with words but with deeds." For more information check out: Samaritan's Purse Operation Christmas Child.
        <br>
            The Grade 6 and 7 classes are already into the spirit of giving this Advent season. As a legacy to Father John Brioux (who was a long time supporter of the Samaritan's
            Purse Operation Christmas Child) the upper intermediate classes have extended their generosity to help bring joy to another child in a developing country.
            Students collected toys, clothes, school supplies and small toiletries.  They sent all these items along with a personal letter and photo in colourful, red,
            Christmas, shoe boxes. As Pope Francis declared on the First World Day of the Poor (Nov.19th), "Let us join action to prayer. Let us love not with words but with deeds."
            For more information check out: Samaritan's Purse Operation Christmas Child.
        <br>
            The Grade 6 and 7 classes are already into the spirit of giving this Advent season. As a legacy to Father John Brioux (who was a long time supporter of the Samaritan's
            Purse Operation Christmas Child) the upper intermediate classes have extended their generosity to help bring joy to another child in a developing country. Students collected
            toys, clothes, school supplies and small toiletries.  They sent all these items along with a personal letter and photo in colourful, red, Christmas, shoe boxes.
            As Pope Francis declared on the First World Day of the Poor (Nov.19th), "Let us join action to prayer. Let us love not with words but with deeds." For more information
            check out: Samaritan's Purse Operation Christmas Child.
        </p>
    </section>
    <section class="sidebar">
        <img src="assets/img/content/logoHD.png">
    </section> -->
    <!--------- End Banner Wrapper ------>
    <div class="clearfix"></div>
    <!---------- Start Parallax Section 2----------->
    <!--<section class="parallax-2">
        <div class="container">
        <div class="parallax-inner">
            <section class="one-third">
                <img src="assets/img/resource/foodbank.png">
                <h4>Support the food bank </h4>
                <p>From January 29 to February 2, it was a lot of fun observing all the "strange" alterations to our school uniform as the students brought in food items to support the
                    Vancouver Food Bank and altered their uniform in return. The community truly embraced the opportunity to help feed the hungry. We filled up 58 boxes and raised $1000!
                    Knowing that almost a third of the food bank users are children, it was a wonderful opportunity to model what it is to share with others and to continue to work towards
                    our year theme to Care For Everyone In Our Common Home! Thank you to our Grade 4 class for leading our assembly to promote this school initiative. Thank you to everyone
                    for your generous support.
                </p>
            </section>
            <section class="one-third">
                <img src="assets/img/resource/care.png">
                <h4>Care for everyonein our common home </h4>
                <p>By December 22, St. Augustine School delivered countless items to and supported the Sancta Maria House, families in need, the Syrian Refugee Fund, and the Oblate
                    Missions. What a fantastic and wonderful way to celebrate Christmas by continuing the mission of Jesus and the work of the Church! Thank you to all who so generously
                    donated to our Advent Giving initiatives! As we begin this new year, we want to continue, as a faith community, to Care For Everyone in Our Common Home through acts of
                    charity. Our post-Christmas work will involve the collection of non-perishable food items for the Food Bank through the months of January and into February. More details
                    will follow, as we start 2018 thinking of others.  Here is the link to the photos from the evening: ADVENT EVENING OF SONG & PRAYER 2017. A special thank you to our
                    photographer, Bien Matute.
                </p>
            </section>
            <section class="one-third">
                <img src="assets/img/resource/global.png">
                <h4>Think globally, act locally </h4>
                <p>The Grade 6 and 7 classes are already into the spirit of giving this Advent season.  As a legacy to Father John Brioux (who was a long time supporter of the
                    Samaritan's Purse Operation Christmas Child) the upper intermediate classes have extended their generosity to help bring joy to another child in a developing country.
                    Students collected toys, clothes, school supplies and small toiletries.  They sent all these items along with a personal letter and photo in colourful, red, Christmas,
                    shoe boxes. As Pope Francis declared on the First World Day of the Poor (Nov.19th), "Let us join action to prayer. Let us love not with words but with deeds." For more
                    information check out: Samaritan's Purse Operation Christmas Child.</p>
            </section>
        </div>
    </section>-->
</div>
    <!---------- End Parallax Section 2----------->
    <div class="clearfix"></div>
    <!--------- Start Banner Wrapper ------>
    <div class="linebreak">
        <h2></h2>
    </div>
<div class="clearfix"></div>

<section class="parallax-1">
        <div class="parallax-inner">
                <!---<div class="horizontal-scroll-wrapper  rectangles">--->
                <div id="scroll_wrapper">
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/holychildhoodmas.html"><img src="assets/img/content/events/holychildhood1.JPG" alt=""></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/earthday2018.html"><img src="assets/img/content/events/earth.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/retreat.html"><img src="assets/img/content/events/Retreat.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/valentinetea.html"><img src="assets/img/content/events/tea.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/supportingthefoo.html"><img src="assets/img/content/events/foodbank.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/adventaspecialti.html""><img src="assets/img/content/events/advent1.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/lestweforget.html"><img src="assets/img/content/events/remembrance.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/halloween.html"><img src="assets/img/content/events/halloween1.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/walkathon.html"><img src="assets/img/content/events/walkathon.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/terryfoxrun.html"><img src="assets/img/content/events/terryfox.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/graduatesreunion.html"><img src="assets/img/content/events/reunion.JPG" alt="" ></a></p>
                    </div>
                    <div class="item">
                        <p><a href="http://faithandfoundation.com/stories/frbonga.html"><img src="assets/img/content/events/fabonga.JPG" alt="" ></a></p>
                    </div>

                </div>
        </div>
</div>
</section>
<div class="clearfix"></div>
    <footer>


        <section class="footer-one-half">
            <p><a href="#"><img src="assets/img/icon/test1.png"> Valentine Thank You Tea </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Supporting the Food Bank </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Father John Brioux O.M.I. </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Care for Everyone In Our Common Home </a></p>
        </section>
        <section class="footer-one-half">
            <p><a href="#"><img src="assets/img/icon/test1.png"> Fall Campaign: Final Number </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Advent: A Special Time </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Think Globally, Act Locally </a></p>
            <p><a href="#"><img src="assets/img/content/ptt.png"></a></p>
        </section>


    </footer>
    <!--------- End Banner Wrapper ------>


    <!--<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="title">Need Help?</div>
                    <ul>
                        <li><a href="mailto:office@staugustineschool.ca">Contact Us</a></li>
                        <li><a href="https://www.google.ca/maps/place/St.+Augustine's+Elementary+School/@49.2653373,-123.155327,17z/data=!3m1!4b1!4m5!3m4!1s0x548673b13cbe8b95:0xb2ee371751213370!8m2!3d49.2653373!4d-123.1531383" target="_blank">Get a Map </a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="title">Navigation</div>
                    <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/parents">Parents</a></li>
                        <li><a href="/lifeatschool">Life at School</a></li>
                        <li><a href="/support">Support</a></li>
                        <li><a href="/community">Community</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="title">Information</div>
                    <ul>
                        <li><a href="http://faithandfoundation.com/About_Us_Newsletters.html" target="_blank">Weekly Update </a></li>
                        <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FFNewsletters/2017F&FNewsFall.pdf" target="_blank">Faith and Foundation Newsletter </a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdQwNIW47bMj0LHvVIczRT2bb183h8ZjxDLe8BB1jYBgMZN5Q/viewform" target="_blank">Interview Request Form </a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="title">Logins</div>
                    <ul class="snipcart-summary">
                        <li><a href="http://sta.onvolunteers.com/" target="_blank">Parents Login </a></li>
                        <li><a href="https://classroom.google.com/u/0/c/Mjg2MzczNzUxMFpa" target="_blank">Teachers Login </a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="title">St. Augustine Community</div>
                    <p><a href="http://www.staugustineschurch.ca/index.html" target="_blank">Visit St. Augustine Church.ca</a></p>
                    <p><a href="http://www.cisva.bc.ca/bullyfreeschool/index.php" target="_blank">Bully Free School!!</a></p>
                </div>
            </div>
        </div>
    </div>  -->



    <div class="clearfix"></div>
    <div class ="subfooter">
        <p>&copy; 2018. St.Agustine School. All Rights Reserved.        <li>tel:(604) 731-8024 </li>
        <li>fax:(604) 739-1712 </li>
        <li>2154 W. 7th Avenue, Vancouver BC V6K 0E3 Canada</li><a href="/privacy"> Privacy Policy</a></p>
    </div>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-580c4249dce75e81"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/582604a9e808d60cd0818620/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89212510-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
