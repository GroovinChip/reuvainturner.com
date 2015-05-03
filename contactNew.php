<!-- Reuvain Turner -->
<!-- www.reuvainturner.com -->
<!-- contactNew.php -->

<?php 
	$name = $_POST["name"];
	$subject = "$name has contacted you!";
	$email = $_POST["email"];
	// $email = "messages@reuvainturner.com";
	$headers= "From: $email";
	$message = $_POST["message"];
	// syntax: mail(to,subject,message,headers,parameters);
		
	mail("reuben.turner42@gmail.com", $subject, $message, $headers);		
?>

<!DOCTYPE html>
<html>  
    <head>
		<title>Reuvain Turner</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="css/newStyles.css" />
		<script>
		$(document).ready(function(){
			$('#submit').click(function(){
				$('#form').validate(); // end validate
			}); // end click
		}); // end ready
	</script>
    </head>  
    <body>
	<div id="wrapper">
        <div class="section">
            <div class="container">
                <div class="row" id="header">
                    <div class="col-md-12">
                        <h1 class="text-center">Reuvain Turner</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-justified nav-pills">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false">Resume<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="resumeSkills.html">Skills</a>
                                    </li>
                                    <li>
                                        <a href="resumeObjective.html">Objective</a>
                                    </li>
                                    <li>
                                        <a href="resumeEducation.html">Education</a>
                                    </li>
									<li>
                                        <a href="resumeWorkExp.html">Work Experience</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="media/Reuben Turner Resume.pdf" target="_blank">Download PDF Resume</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About Me</a>
                            </li>
                            <li class="active">
                                <a href="contactNew.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="row">
                    <div id="contactInfoDiv">
						<form method="POST" id="form">
							<label>Name</label>
							<br>
							<input class="required" title="Please enter your name" type="text" name="name" size="30"></input>
							<br>
							<label>Email Address</label>
							<br>
							<input class="required" title="Please enter a valid email address" type="email" name="email" size="30"></input>
							<br>
							<label>Message</label>
							<br>
							<textarea class="required" title="Please enter a message" name="message" cols="30" rows="10"></textarea>
							<br>
							<input type="submit" id="submit" value="Submit"></input>
						</form>			
					</div>
				</div> -->
				<div class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<form role="form">
									<div class="input-group">
										<label class="control-label" for="InputName">Name</label>
										<br>
										<input class="form-control" class="required" id="InputName" placeholder="Enter your name" type="text">
									</div>
									<br>
									<div class="input-group">
										<label class="control-label" for="InputEmail">Email</label>
										<br>
										<input class="form-control" class="required" id="InputEmail" placeholder="Enter your email address" type="email">
									</div>
									<br>
									<div class="input-group">
										<textarea class="form-control" class="required" title="Please enter a message" name="message" cols="30" rows="10"></textarea>
									</div>
									<br>
									<button type="submit" class="btn btn-default">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <footer class="section section-primary text-center">
            
        </footer>
	</div>
    </body>
</html>