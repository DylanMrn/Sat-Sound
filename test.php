<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Sat'Sound</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    </head>

    <body>

    <div class="container">
        <div class="slide-progress"></div>
        <div id="owl-demo" class="owl-carousel owl-theme ">
            <div class="item bg-info text-white" alt="slide"><h1>1</h1></div>
            <div class="item bg-info text-white" alt="slide"><h1>2</h1></div>
            <div class="item bg-info text-white" alt="slide"><h1>3</h1></div>
            <div class="item bg-info text-white" alt="slide"><h1>4</h1></div>
            <div class="item bg-info text-white" alt="slide"><h1>5</h1></div>
            <div class="item bg-info text-white" alt="slide"><h1>6</h1></div>
        </div>
    </div>

      
    </body>
</html>
<script>
  $(document).ready(function() {


//Init the carousel
$("#owl-demo").owlCarousel({      
  items: 1,
  loop: true,
  autoplay: true,
  autoplayTimeout:10000,
  onInitialized: startProgressBar,
  onTranslate: resetProgressBar,
  onTranslated: startProgressBar
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
//Init progressBar where elem is $("#owl-demo")
function progressBar(elem){
  $elem = elem;
  //build progress bar elements
  buildProgressBar();
  //start counting
  start();
}



});

</script>