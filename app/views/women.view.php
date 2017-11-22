<?php include 'master/header.view.php';?>



<div class="container">
	<div class="row">
<?php include 'master/prod_custom.view.php';?>
	
		<div class="clothes col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<?php foreach($women as $woman) : ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<a href="" class="thumbnail">
						<img src="<?=$woman->image?>" alt="women-clothes">
						<div class="caption">
							<p><?=$woman->product_name?><span class="pull-right"><strong>$<?=$woman->price?></strong></span></p>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		</div>
		
	</div>

</div>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('.navbar').find('active').removeClass('active');
    $('.clothes').addClass('active');
  });
</script>
<?php 

// include 'master/social.view.php';
include 'master/footer.view.php';

?>