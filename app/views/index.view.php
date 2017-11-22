<?php
include 'master/header.view.php';
?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="../../public/resources/img/carousel/img1.png" alt="Los Angeles">
        <div class="shop-now1">
          <a href="/men">shop now &#x276F</a>
        </div>
      </div>

      <div class="item">
        <img src="../../public/resources/img/carousel/img2.png" alt="Chicago">
        <div class="shop-now2">
          <a href="/men">shop now &#x276F</a>
        </div>
      </div>
    
      <div class="item">
        <img src="../../public/resources/img/carousel/img3.png" alt="New York">
        <div class="shop-now3">
          <a href="/women">shop now &#x276F</a>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('.navbar').find('active').removeClass('active');
    $('.home').addClass('active');
  });
</script>
<?php  ?>
<?php 

// include 'master/social.view.php';
include 'master/footer.view.php';

?>