<?php include 'master/header.view.php';?>
<div class="container">
    <h1 class="well">Welcome, customer!</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action="/register">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label class="red-star">First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="first_name" required>
							</div>
							<div class="col-sm-6 form-group">
								<label class="red-star">Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="last_name" required>
							</div>
						</div>					
						<div class="form-group">
							<label class="red-star">Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label class="red-star">City</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control" name="city" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label class="red-star">State</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control" name="state" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label class="red-star">Zip</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control" name="zip" required>
							</div>		
						</div>

					<div class="form-group">
						<label class="red-star">Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="phone" required>
					</div>		
					<div class="form-group">
						<label class="red-star">Email Address</label>
						<input type="email" placeholder="Enter Email Address Here.." class="form-control" name="email" required>
					</div>	
					<div class="form-group">
						<label class="red-star">Password</label>
						<input type="password" placeholder="Enter password Here.." class="form-control" name="password" required>
					</div>	
					<div class="form-group">
						<label>Website</label>
						<input type="text" placeholder="Enter Website Name Here.." class="form-control" name="website">
					</div>
					<input type="submit" value="Submit" class="btn btn-lg btn-info"></button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
<script type="text/javascript">
	
	$(document).ready(function(){
		$('.navbar').find('active').removeClass('active');
		$('.register').addClass('active');
	});
</script>
<?php
	include 'master/footer.view.php';

?>