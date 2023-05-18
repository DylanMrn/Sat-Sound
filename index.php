<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Sat'Sound</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="owl/js/owl.carousel.min.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <script src="js/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    </head>
    <style>
        html,body {font-family:"Verdana",sans-serif}
        h1,h2,h3,h4,h5,h6 {font-family:"Segoe UI",sans-serif}
    </style>
    <header>
        <div class="container">
            <div id="start">
                <div id="logo"> 
                    <span style="color: #FF1493;"> SAT'</span>  
                    <span style="color: white;"> SOUND </span> 
                </div>
                <img src="sat.png"/>
            </div>
            <div id="middle">
                <div class="searchbar">
                    <form id="search-form">
                        <div id="searchbox">
                            <input id="search" autocapitalize="none" autocomplete="off" autocorrect="off" name="search_query" tabindex="0" type="text" spellcheck="false" placeholder="Rechercher" aria-label="Rechercher">
                        </div>
                    </form>
                    <button>
                        <div class="bi bi-play"></div>
                    </button>
                </div>
            </div>
            <div id="end">
                <ul>
                    <li>
                        <a href="launch.php"> launchpad </a>
                    </li>
                    <li>
                        <a href=""> ahahah </a>
                    </li>
                    <div class="button">
                        <div class="register"> 
                            <a href=''> S'inscrire </a>
                        </div>
                        <div class="connect"> 
                            <a href=''> Se connecter </a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <div id="my-carousel" class="owl-carousel">
            <div class="item">
                <img src="" alt="" />
            </div>
            <div class="item">
                <img src="" alt="" />
            </div>
            <div class="item">
                <img src="gensh.jpg" alt="" style="width: 200px;"/>
            </div>
        </div>

        <div class="navigation-img-wrapper">
            <div style="justify-content: space-around; display: flex;">
                <div class="navigator" data-item="0"> 
                    <div class="content"> <img src="gensh.jpg" alt="" /> </div>
                </div>
                <div class="navigator" data-item="1"> 2 </div>
                <div class="navigator" data-item="2"> 3 </div>
            </div>
        </div>
    </section>
    <body>
        <section>
            <h6 style="color: white;"> Trend </h6>
            <div id="card-carousel" class="owl-carousel">
                <div class="card">
                    <div class="play"><i class="fas fa-play"></i></div>
                    <div class="title"> Fart </div>
                    <div class="sub-title"> it's just the fart song </div>
                </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
            </div>
        </section>
        <section>
            <h6 style="color: white;"> Foot </h6>
            <div id="card-carousel-foot" class="owl-carousel">
                <div class="card">
                    <div class="play"><i class="fas fa-play"></i></div>
                    <div class="title"> Fart </div>
                    <div class="sub-title"> it's just the fart song </div>
                </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
            </div>
        </section>
        <section>
            <h6 style="color: white;"> Foot </h6>
            <div id="card-carousel-next" class="owl-carousel">
                <div class="card">
                    <div class="play"><i class="fas fa-play"></i></div>
                    <div class="title"> Fart </div>
                    <div class="sub-title"> it's just the fart song </div>
                </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
                <div class="card"> </div>
            </div>
        </section>
    </body>
    <footer>
    </footer>
</html>
<script>
    $(document).ready(function() {

        $('#card-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav: false,
            items:10,
        });

        $('#card-carousel-foot').owlCarousel({
            loop:false,
            margin:10,
            nav: false,
            items:10,
        });

        $('#card-carousel-next').owlCarousel({
            loop:false,
            margin:10,
            nav: false,
            items:10,
        });

        $('#my-carousel').owlCarousel({
            loop : true,
            autoplay : true,
            autoplayTimeout:10000,
            onInitialized: startProgressBar,
            onTranslate: resetProgressBar,
            onTranslated: startProgressBar,
            nav : true,
            navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
            singleItem: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $('#my-carousel').on('changed.owl.carousel', function(ev) {
            var item_index = ev.page.index;
            $('.navigator').removeClass('active').eq(item_index).addClass('active');
            $('.navigator').children(".slide-progress").first().remove();
            $('.navigator').eq(item_index).prepend('<div class="slide-progress"></div>');
        });

        $('.navigator').on('click', function() {
            var item_no = $(this).data('item'); 
            $('#my-carousel').trigger('to.owl.carousel', [item_no, 1000, true]);
            });
        });

        function startProgressBar() {
        $(".slide-progress").css({
            width: "100%",
            transition: "width 10000ms"
        });
        }

        function resetProgressBar() {
        $(".slide-progress").css({
            width: 0,
            transition: "width 0s"
        });
        }

        function progressBar(elem){
            $elem = elem;
            buildProgressBar();
            start();
        }

        $('#my-carousel').on('initialized.owl.carousel', function() {
            $('.navigator').eq(0).addClass('active');
            $('.navigator').eq(0).prepend('<div class="slide-progress"></div>');
        });
</script>