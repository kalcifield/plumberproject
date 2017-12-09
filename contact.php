<?php
    include_once 'header.php'
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div><h2>Get In Touch</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br>
			</div>
		</div>
	<div class="row">
    <div class="col-md-5">
							   <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate>
	       <h3>Contact me</h3>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
                    </div>
         </div> 	
         <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		        </div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>	
					</div>

	</div>
 
	</section>

<?php
    include_once 'footer.php'
?>