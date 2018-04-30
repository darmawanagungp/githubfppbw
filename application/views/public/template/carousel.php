<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Carousel w/ Animated Caption</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Oswald:400,700'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="assets/css/css/style.css">


</head>

<body>


<div class="carousel slide" id="img-carousel" data-ride="carousel">
  <!-- Indicators-->
  <ol class="carousel-indicators">
    <li class="active" data-target="#img-carousel" data-slide-to="0"></li>
    <li data-target="#img-carousel" data-slide-to="1"></li>
    <li data-target="#img-carousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides-->
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="https://beautimour.com/wp-content/uploads/2018/04/pexels-photo-380769.jpeg" alt=""/>
      <div class="carousel-caption">
        <h2 class="animated fadeInDown">Rental Mobil Bapak Edy</h2>
        <p class="animated fadeInUp">Menyediakan berbagai pilihan mobil untuk anda sewa</p>
        <p class="animated fadeInUp"><a class="btn btn-transparent btn-rounded btn-large" href="#">Learn More</a></p>
      </div>
    </div>
    <div class="item"><img src="https://beautimour.com/wp-content/uploads/2018/04/pexels-photo-459654.jpeg" alt=""/>
      <div class="carousel-caption">
        <h2 class="animated bounceInDown">Mobil Baru</h2>
        <p class="animated bounceInUp">Menyediakan mobil terbaru dengan kualitas terbaik</p>
        <p class="animated bounceInUp"><a class="btn btn-transparent btn-rounded btn-large" href="#">Book Now!</a></p>
      </div>
    </div>
    <div class="item"><img src="https://beautimour.com/wp-content/uploads/2018/04/pexels-photo-572056.jpeg" alt=""/>
      <div class="carousel-caption">
        <h2 class="animated fadeInDown">Mengutamakan kepuasan customer</h2>
        <p class="animated fadeInDown">Kami menyediakan brosur untuk bisa anda download</p>
        <p class="animated fadeInRight"><a class="btn btn-transparent btn-rounded btn-large" href="#">Download Now!</a></p>
      </div>
    </div>
  </div>
  <!-- Controls--><a class="left carousel-control" href="#img-carousel" role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#img-carousel" role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i><span class="sr-only">Next</span></a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js'></script>



</body>

</html>
