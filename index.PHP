<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{
            background-image: url('background.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{
            width: 40%;
            margin: auto;
            margin-top: 150px;
        }
        h1{
            text-align: center;
        }
        .section{
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm  bg-white navbar-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/logo.png" alt="Logo" style="width:140px;">
    </a>
  </div>
</nav>

<div class="container">

    <h1 class="title">sign up</h1>
    <div class="section w3-card-4 w3-round-xxlarge">
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
        <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
        
        <form id="register_form" name="form1" method="post">
            <div class="form-group">
                <label for="email">First Name:</label>
                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
            </div>
            <div class="form-group">
                <label for="email">Last Name:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="d-grid gap-3 mb-2 mt-2">
                <input type="button" name="save" class="btn btn-primary" value="Register" id="butsave">
            </div>
            <a class="show-signin mb-5" style="float: right; cursor: pointer">login with account</a>
        </form>
        <form id="login_form" name="form1" method="post" style="display:none;">
            
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="email_log" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password_log" placeholder="Password" name="password">
            </div>
            <div class="d-grid gap-3 mb-2 mt-2">
                <input type="button" name="save" class="btn btn-primary" value="Login" id="butlogin">
            </div>
            <a class="show-forgot" style="cursor: pointer">forgot password?</a>
            <a class="show-signup mb-5" style="float: right; cursor: pointer">create account</a>
        </form>
    </div>

<div>

<script>
$(document).ready(function() {
	$('.show-signin').on('click', function() {
		$("#login_form").show();
		$("#register_form").hide();
        $(".title").text("sign in");
	});
    $('.show-signup').on('click', function() {
		$("#register_form").show();
		$("#login_form").hide();
        $(".title").text('sign up');
	});
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var email = $('#email').val();
		var password = $('#password').val();
		if(firstname!="" && lastname!="" && email!="" && password!="" ){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					type: 1,
					firstname: firstname,
					lastname: lastname,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#register_form').find('input:text').val('');
						$("#success").show();
						$('#success').html('Registration successful !'); 						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
	$('#butlogin').on('click', function() {
		var email = $('#email_log').val();
		var password = $('#password_log').val();
		if(email!="" && password!="" ){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					type:2,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "dashboard.php";						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Invalid EmailId or Password !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>   