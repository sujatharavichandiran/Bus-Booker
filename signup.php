<head>
<link rel="stylesheet" type="text/css" href="signupcss.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script> 
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;</script>
</head>
<body>

<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="register.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Sign Up</legend>
                    
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" required name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" required name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                    </div><br>
                    <input type="text" required name="email" value="" class="form-control input-lg" placeholder="Your Email" " /><br>
					<input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" id="password" /><br>
					<!--<input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" id="confirm_password"  />
				-->	<div class="row">
                                     <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                        Create my account</button>
            </form>          
          </div>
</div>            
</div>
</div>
</body>