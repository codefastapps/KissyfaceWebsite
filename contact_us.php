<?php include "header.php"; ?>
	  
	  <script>
	  	function funLocalStartup(){
	  		// Change Navigation Link to Active
	  		document.getElementById("linkContact").className = "active";
	  	}
	  </script>
	  
	  <div class="row marketing">
        <div class="col-lg-6">
          <h4>Phone</h4>
          <p>406-309-2409</p>
        </div>
        <div class="col-lg-6">
          <h4>Email</h4>
          <p><a href="mailto:support@kissyfaceinteractive.com">support@kissyfaceinteractive.com</a></p>
    	</div>
      </div>



	  <div class="row marketing">
        <div class="col-lg-12">
        	<h4>Leave Us A Message</h4>
        	<?php
				if(isset($_GET["inpMessageSent"])){
					?>
						<div class="alert alert-success" role="alert">
        					<strong>Thank You.</strong> Your message has been sent. We will get back to you shortly.
        				</div>
					<?php
				}
			?>
        	<p>
        		<form class="form-horizontal" role="form" method="post" action="contact_us_add_script.php">
  					<div class="form-group">
    					<label for="inpEmail" class="col-sm-2 control-label">Your Email</label>
    					<div class="col-sm-10">
      						<input type="email" class="form-control" name="inpEmail" id="inpEmail" placeholder="Email">
    					</div>
  					</div>
  					<div class="form-group">
    					<label for="inpMessage" class="col-sm-2 control-label">Your Message</label>
    					<div class="col-sm-10">
      						<textarea class="form-control" name="inpMessage" id="inpMessage" placeholder="Message" rows="6"></textarea>
    					</div>
  					</div>
  					<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" class="btn btn-default">Send It</button>
    					</div>
  					</div>
				</form>
    		</p>
    	</div>
      </div>


<?php include "footer.php"; ?>