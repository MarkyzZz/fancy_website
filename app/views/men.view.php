<?php 
include 'master/header.view.php';?>

<div class="box1">
 <h4>Product type</h4>
 <?php foreach ($product_types as $type) : ?>
  <input type="checkbox"/>&nbsp<?=$type->product_type?><br>
<?php endforeach ?>

</div>
<br>

<div class="box2">
  <h4>Size</h4>
  <?php foreach ($sizes as $size) : ?>
    <input type="checkbox"/>&nbsp<?=$size->size_name?><br>
  <?php endforeach ?>
</div>
   
       <div class="mfoto1">
    <div>
           <img class="m1" src="../../public/resources/img/clothes/men/m1.jpg" ><br>
        </div>
           <div class="middle"><div class="midtext">BUY</div></div>
       <p id="textm1">Brixton Print Shirt in Relaxed Fit <br><b>$ 65.00</b></p>
    </div>
    
       <div class="mfoto2">
    <div>
           <img class="m2" src="../../public/resources/img/clothes/men/m2.jpg" ><br>
        </div>
           <div class="middle"><div class="midtext">BUY</div></div>
           <p id="textm1">Diesel Buster Straight Fit Jeans <br><b>$ 150.00</b></p>
    </div>
    
       <div class="mfoto3">
    <div>
           <img class="m3" src="../../public/resources/img/clothes/men/m3.jpg" ><br>
        </div>
           <div class="middle"><div class="midtext">BUY</div></div>
           <p id="textm1">Produkt Jersey Shorts In Marl <br><b>$ 20.00</b></p>
    </div>
    
       <div class="mfoto4">
    <div>
           <img class="m4" src="../../public/resources/img/clothes/men/m4.jpg" ><br>
        </div>
           <div class="middle"><div class="midtext">BUY</div></div>
           <p id="textm1">Longline Shirt With All Over Floral <br><b>$ 50.00</b></p>
    </div>
    
    <div class="mfoto5">
    <div>
           <img class="m5" src="../../public/resources/img/clothes/men/m5.jpg" ><br>
        </div>
        <div class="middle"><div class="midtext">BUY</div></div>
           <p id="textm1">Faster Print T-Shirt <br><b>$ 20.00</b></p>
    </div>
    
    <div class="mfoto6">
    <div>
           <img class="m6" src="../../public/resources/img/clothes/men/m6.jpg" ><br>
        </div>
        <div class="middle"><div class="midtext">BUY</div></div>
           <p id="textm1">Buster Jeans Regular Stretch Fit Jeans <br><b>$ 160.00</b></p>
    </div>
    
        <div class="prevnext">
        <a href="#" class="previous">&#8249;</a>
        <a href="#" class="next">&#8250;</a>
    </div>

<?php 

include 'master/social.view.php';
include 'master/footer.view.php';

?>