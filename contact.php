<?php include_once('header.php'); ?>
    </header>

	<section class="blackish-filter-section headersec">
		<div class="blackish-filter">
		  <div class="textside position-relative" style="MARGIN-TOP: 55px;">
			  <div class="content text-center">
				<br><br>
				<h1>CONTACT</h1>
				<p class="nav-link nav-item" style="font-size: 21px;"><a class="txt1" href="index.php">Home</a> / <a class="txt1" href="about.php">About</a></p>

			  </div>
			</div>
			</div>
  </section>


  <section class="sec">
    <h1 align="center">Connect Us</h1>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sec">
        <form method="POST" enctype="multipart/form-data" id="contactform">
		<div class="row">

							<div class="form-group col-6">				  

					    		<input type="text" class="form-control" id="name" name="name" placeholder="Name *" onkeyup="document.getElementById('nameErr').innerHTML=''" required="">

									<label class="text-danger " id="nameErr"></label>

					  		</div>

					  		<div class="form-group col-6">				  

					    		<input type="text" class="form-control" id="email" name="email" placeholder="Your Email *" onkeyup="document.getElementById('emailErr').innerHTML=''" required="">				   

								<label class="text-danger" id="emailErr"></label>

					  		</div>

					  		<div class="form-group col-6">				  

					    		<input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number *" onkeyup="document.getElementById('phoneErr').innerHTML=''" required="">				   

								<label class="text-danger" id="phoneErr"></label>

					  		</div>
					  		<div class="form-group col-6">				  

					    		<input type="text" class="form-control" id="subject" name="subject" placeholder="Your subject *" onkeyup="document.getElementById('subjectErr').innerHTML=''" required="">				   

								<label class="text-danger" id="subjectErr"></label>

					  		</div>

					  		<div class="form-group col-12">				  

							   <textarea id="message" name="message" class="form-control" rows="3" placeholder="Your Message *" onkeyup="document.getElementById('messageErr').innerHTML=''" required="required"></textarea>	   

							   <label class="text-danger" id="messageErr"></label>

							  </div>
							</div>
<div class="submit">
      <p class="btnform">
 
 
							  <a href=""  id="btnSubmit" class="btn btn-primary py-md-3 px-md-5">Submit</a>
</p>
    </div>


					<div id="mail-status"></div>

						</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $("#btnSubmit").click(function (event) {
        event.preventDefault();

        var data = new FormData($('#contactform')[0]);

        if ($('#name').val().trim() == '') {
            document.getElementById("nameErr").innerHTML = "Please provide Name";
            document.getElementById("name").focus();
            return;
        }
        if ($('#email').val().trim() == '') {
            document.getElementById("emailErr").innerHTML = "Please provide Email";
            document.getElementById("email").focus();
            return;
        }
        if ($('#subject').val().trim() == '') {
            document.getElementById("subjectErr").innerHTML = "Please provide subject";
            document.getElementById("subject").focus();
            return;
        }
        if ($('#message').val().trim() == '') {
            document.getElementById("messageErr").innerHTML = "Please provide Message";
            document.getElementById("message").focus();
            return;
        }
        $("#btnSubmit").prop("disabled", true);

        $.ajax({
            type: "POST",
            url: "send_email.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                console.log(data);
                $("#mail-status").removeClass('text-danger');
                $("#mail-status").addClass('text-success');
                $("#mail-status").html("We have received your enquiry successfully!");
                $("#btnSubmit").prop("disabled", false);
                $('#name').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#message').val('');
            },
            error: function (error) {
                $("#mail-status").removeClass('text-success');
                $("#mail-status").addClass('text-danger');
                $("#mail-status").html("Something went wrong..Please try again!");
            }
        });
    });
});
</script>


  </div>

  <!-- Bootstrap JS and Popper.js (for Bootstrap components that require it) -->
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sec ser">
	<h5 style="text-align: center;">Contact us</h5>
	<br>
	<!--headin5_amrc-->
	<p class="mb10">Aarya Drip Irrigation Company, founded by Ms. Poonam Sanjay Raut and supported by her husband Sanjay Namdeo Raut, offers affordable drip lateral pipes to assist farmers. With a combined experience of over 55 years in the industry, the company is a trusted partner for farmers.</p>
	<p><i class="fa fa-phone"></i> +919370145489 </p>
	<p><i class="fa fa fa-envelope"></i> aaryadripirrigation@gmail.com </p>
    
  </div>
        </div>
      </div>


	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.1825150090904!2d74.55818006957394!3d16.76759274869529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc11f30b26a36df%3A0x57e234aab555aa1f!2sBunway!5e0!3m2!1sen!2sin!4v1697702658283!5m2!1sen!2sin" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- /.container -->
    <!--footer starts from here-->
    <?php include_once('footer.php'); ?>