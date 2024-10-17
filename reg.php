<?php include'forms/php/app.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
      <style type="text/css">
       *{
        font-family: Century Gothic;
       }
.custom-breadcrumb{
    list-style:none;
    overflow: hidden;
}

.custom-breadcrumb li {
    text-decoration: none; 
    padding: 10px 0 10px 50px;
    position: relative; 
    display: block;
    float: left;
}

.custom-breadcrumb li:after {
    content: " ";
    display: block;
    width: 0;
    height: 0;
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent;
    position: absolute;
    top: 50%;
    margin-top: -50px;
    left: 100%;
    z-index: 2;
}

.custom-breadcrumb li:before {
    content: " "; 
  display: block; 
  width: 0; 
  height: 0;
  border-top: 50px solid transparent;       
  border-bottom: 50px solid transparent;
  border-left: 30px solid white;
  position: absolute;
  top: 50%;
  margin-top: -50px; 
  margin-left: 1px;
  left: 100%;
  z-index: 1;
}

.blue-crumb{
    background-color: #2980b9;
    color: white;
}
.blue-crumb:after{
    border-left:30px solid #2980b9;
}

.gray-crumb{
    background-color: #bdc3c7;
}
.gray-crumb:after{
    border-left: 30px solid #bdc3c7;
}

.light-blue-crumb:after{
    border-left:30px solid #3498db;
}
.light-blue-crumb{
    background: #3498db;
    color: white;
}

.faded-crumb:after{
    border-left:30px solid #ecf0f1;
}

.faded-crumb{
    background: #ecf0f1;
    color: #95a5a6;
}

.current {
    
}

.row{
    padding: 5px;
}

    </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Multi Step Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="reg_assets/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="reg_assets/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="reg_assets/assets/css/form-elements.css">
        <link rel="stylesheet" href="reg_assets/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->

    </head>


    <body style="background-image: url('assets/user/banner6.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">

		<!-- Top menu -->
	


	

		


                <div class="container">

                    <div class="row">
                    <ul class="custom-breadcrumb">
		    <li class="light-blue-crumb" ><span class="fa fa-home"> </span> <a  style="color: white;" href="home.php"> HOME </a></li>
		    <li class="faded-crumb"> <span class="fa fa-user-plus text-primary" > </span><a class="text-primary" href="#">  REGISTRATION FORM </a></li>
	
		</ul>

                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Fill Up Registration Form</h1>
                            <div class="description">
                            	<p style="color: white;">
	                            You need to fill up for our Reference of your Identities 
	                        
                            	</p>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-sm-12 form-box">
                        	
                        	<form role="form" action="regprocess.php" method="post" class="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 1 / 3</h3>
		                            		<p>Tell us who you are:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<!-- <i class="fa fa-user"></i> -->
		                        		</div>
		                            </div>

		                           
		                            <div class="form-bottom ">
				                    	<div class="form-group col-sm-4">
				                    		<label class="" for="form-first-name">*First name</label>
				                        	<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        	<div class="form-group col-sm-4">
				                    		<label class="" for="form-first-name">*Middle name</label>
				                        	<input type="text" name="mname" placeholder="Middle name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group col-sm-4">
				                        	<label class="" for="form-last-name">*Last name</label>
				                        	<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>  
				                        
				                        <div class="form-group col-sm-12">
				                        	<label class="" for="form-last-name">*Address</label>
				                        	<input type="text" name="address" placeholder="Bryg / Street / City..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                   


				                       	<div class="form-group col-sm-6">
				                    		<label class="" for="form-first-name">*Birthday</label>
				                        	<input type="date" name="bday" placeholder="Birthday" class="form-first-name form-control" id="bday">
				                        	
				                        </div>

										
				                        <div class="form-group col-sm-6">
				                        	<label class="" for="form-last-name">*Gender</label>
				                        	<!-- <input type="text" name="gen" placeholder="Gender.." class="form-last-name form-control" id="form-l"> -->
											 <select  name="gen" class="form-last-name" id="gender" style="width: 100%">
												<option></option>
												<option value="male">Male</option>
												<option value="female">Female</option>
												
											 </select>
				                    	</div>

										<div class="form-group col-sm-12">
				                        	<label class="" for="form-last-name">*Age</label>
				                        	<input type="text" name="age" placeholder="Age.." class="form-last-name form-control" id="age">
				                    	</div>


										<div class="form-group col-sm-4" style="display: none;">
											<label class="" for="form-first-name">*Weight (pounds)</label>
											<input type="text" name="weight" placeholder="Weight.." class="form-first-name form-control" id="form-first-name" value="0">
										</div>

										

										<div class="form-group col-sm-4" style="display: none;">
											<label class="" for="form-first-name">*Height (cm)</label>
											<input type="text" name="height" placeholder="Height.." class="form-first-name form-control" id="form-first-name" value="0">
										</div>





				                      

				                        <button type="button" class="btn btn-next btn-danger">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 2 / 3</h3>
		                            		<p>Set up your account:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-key"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                        <div class="form-group">
				                        	<label class="" for="form-email">*Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                      
									  <div class="form-group">
				                        	<label class="" for="form-last-name">*Username</label>
				                        	<input type="text" name="uname" placeholder="Last name..." class="form-last-name form-control" id="form-l">
				                    </div>

				                        <div class="form-group">
				                    		<label class="" for="form-password">*Password</label>
				                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                     
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="button" class="btn btn-next">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 3 / 3</h3>
		                            		<p>Registration Confirmation </p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-folder"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
		                            <h3> Do you want Continue Register ?? </h3>

				                        <button type="button" class="btn btn-previous">Cancel</button>
				                        <button type="submit" class="btn" name="register">Sign me up !</button>
				                    </div>
			                    </fieldset>
		                    
		                    </form>
		                    
                        </div>
                    </div>
                </div>
      



        <!-- Javascript -->
        <script src="reg_assets/assets/js/jquery-1.11.1.min.js"></script>
        <script src="reg_assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="reg_assets/assets/js/jquery.backstretch.min.js"></script>
        <script src="reg_assets/assets/js/retina-1.1.0.min.js"></script>
        <script src="reg_assets/assets/js/scripts.js"></script>
		<script>
			$('#bday').on('change', function() {
			var birthDate = new Date($(this).val()); // Get the birthdate value
			var today = new Date(); // Get today's date
			
			// Calculate the age based on the current date and birth date
			var age = today.getFullYear() - birthDate.getFullYear();
			var monthDifference = today.getMonth() - birthDate.getMonth();

			// Adjust the age if the birthdate hasn't passed this year
			if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
				age--;
			}

			// Set the calculated age in the age input field
			$('#age').val(age);
		});
		</script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>