
  
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="black-bordered-box"><h4>Product types</h4>
      <?php foreach($product_types as $type) : ?>
        <div class="checkbox">
          <label><input type="checkbox"><?=$type->product_type?></label>
        </div>
      <?php endforeach ?></div>
    
    <div class="black-bordered-box"><h4>Sizes</h4>
      <?php foreach($sizes as $size) : ?>
        <div class="checkbox">
          <label><input type="checkbox"><?=$size->size_name?></label>
        </div>
      <?php endforeach ?></div>
  </div>
