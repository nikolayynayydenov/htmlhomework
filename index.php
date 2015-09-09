<?php
$page_title = 'Home';
include 'includes/header.php';
?>
<div class="col-md-1">
    
</div>

<div class="col-md-10">
    <div class="jumbotron">
  <h1>Book a hotel online!</h1>
  <p>If you are looking for a fancy hotel to book for your dream vacation, this is the right place!</p>
  <p><a class="btn btn-primary btn-lg" href="reservation.php" role="button">Book now!</a></p>
</div>
    
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/hotel3.jpg" alt="The image is not found">
      <div class="carousel-caption">
        Amirandes Grecotel Exclusive Resort
      </div>
    </div>
      
      <div class="item">
        <img src="images/hotel4.jpg" alt="The image is not found">
      <div class="carousel-caption">
        El Silencio Lodge & Spa
      </div>
    </div>
      
       <div class="item">
        <img src="images/hotel5.jpg" alt="The image is not found">
      <div class="carousel-caption">
        Grand Hotel Las Vegas
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="col-md-1"></div>
<?php
include 'includes/footer.php';
?>z
