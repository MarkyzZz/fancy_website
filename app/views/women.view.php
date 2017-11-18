<?php include 'master/header.view.php';?>

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

<div class="wfoto1">
  <div>
   <img class="w1" src="../../public/resources/img/clothes/women/w1.jpg" ><br>
 </div>
 <div class="middle"><div class="midtext">BUY</div></div>
 <p id="textw1">Beach Floaty Co-ord <br><b>$ 20.00</b></p>
</div>

<div class="wfoto2">
  <div>
   <img class="w2" src="../../public/resources/img/clothes/women/w2.jpg" ><br>
 </div>
 <div class="middle"><div class="midtext">BUY</div></div>
 <p id="textw1">Imogen Satin Lace Up Corset <br><b>$ 35.00</b></p>
</div>

<div class="wfoto3">
  <div>
   <img class="w3" src="../../public/resources/img/clothes/women/w3.jpg" ><br>
 </div>
 <div class="middle"><div class="midtext">BUY</div></div>
 <p id="textw1">Embroidered Skirt Maxi <br><b>$ 50.00</b></p>
</div>

<div class="wfoto4">
  <div>
   <img class="w4" src="../../public/resources/img/clothes/women/w4.jpg" ><br>
 </div>
 <div class="middle"><div class="midtext">BUY</div></div>
 <p id="textw1">Cami Top With Gothic Text <br><b>$ 30.00</b></p>
</div>

<div class="wfoto5">
  <div>
   <img class="w5" src="../../public/resources/img/clothes/women/w5.jpg" ><br>
 </div>
 <div class="middle"><div class="midtext">BUY</div></div>
 <p id="textw1">Boyfriend Tee With Treasure Map <br><b>$ 28.00</b></p>
</div>

<div class="wfoto6">
  <div>
   <img class="w6" src="../../public/resources/img/clothes/women/w6.jpg" ><br>
 </div>
 <div class="middle"><div class="midtext">BUY</div></div>
 <p id="textw1">Style Mafia Frill Top <br><b>$ 60.00</b></p>
</div>

<div class="prevnext">
  <a href="#" class="previous">&#8249;</a>
  <a href="#" class="next">&#8250;</a>
</div>

<?php 

include 'master/social.view.php';
include 'master/footer.view.php';

?>