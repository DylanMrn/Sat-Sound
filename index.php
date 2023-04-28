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
        <link rel="stylesheet" href="css/test.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="js/jquery-3.6.4.min.js"></script>
        <script src="owl/js/owl.carousel.min.js"></script>
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
                        <a href=""> test </a>
                    </li>
                    <li>
                        <a href=""> ahahah </a>
                    </li>
                    <div class="button">
                        <button> S'inscrire </button>
                        <button> Se connecter </button>
                    </div>
                </ul>
            </div>
        </div>
    </header>
    <section>
<div id="my-carousel" class="owl-carousel">
<div class="item">
  <img src="//via.placeholder.com/1350x250?text=1" alt="" />
 </div>
<div class="item">
  <img src="//via.placeholder.com/1350x250?text=2" alt="" />
 </div>
<div class="item">
  <img src="//via.placeholder.com/1350x250?text=3" alt="" />
 </div>
<div class="item">
  <img src="//via.placeholder.com/1350x250?text=4" alt="" />
 </div>
<div class="item">
  <img src="//via.placeholder.com/1350x250?text=5" alt="" />
 </div>
  </div>
  
  
    <div class="navigation-img-wrapper">
        <div style="justify-content: space-around;display: flex;">
            <div class="navigator" data-item="0"> 
                <div class="content"> 1 </div>
            </div>
            <div class="navigator" data-item="1"> 2 </div>
            <div class="navigator" data-item="2"> 3 </div>
            <div class="navigator" data-item="3"> 4 </div>
            <div class="navigator" data-item="4"> 5 </div>
        </div>
    </div>
</body>

    </section>
    <body>
      
    </body>
    <footer>
    </footer>
</html>
<script>
    $('.owl-tag').owlCarousel({
        loop:false,
        margin:10,
        nav: true,
        items:6,
    });

    $(document).ready(function() {
    
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
        $('.navigator').children(".slide-progress").eq(item_index).remove();
        $('.navigator').eq(item_index).prepend('<div class="slide-progress"></div>');

        console.log($('.navigator'));
    });

    $('.navigator').on('click', function() {
        var item_no = $(this).data('item'); 
        $('#my-carousel').trigger('to.owl.carousel', [item_no, 1000, true]);
        });
    });

    function startProgressBar() {
    // apply keyframe animation
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