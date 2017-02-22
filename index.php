<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>PHP APPLICATION - INDEX PAGE</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  	crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="./css/custome.css">

</head>

<body>
<nav class="navbar" style="background-color: #004080;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand crud" href="#">PHP APPLICATION</a>
    </div>
  </div>
</nav>

<div class="container">
	<ul class="nav nav-tabs">
		<li><a data-toggle="tab" href="#index">Index</a></li>
		<li><a data-toggle="tab" href="#login">Login</a></li>
		<li><a data-toggle="tab" href="#signup">Sign Up</a></li>
		<li><a data-toggle="tab" href="#admin">Admin</a></li>
	</ul>

	<!--creating access for each nav tab and create its content fade in to appear when clicked-->
	<div class="tab-content">
		<div id="index" class="tab-pane fade in">
			<p>Login</p>
		</div>

		<div id="login" class="tab-pane fade ">
			<p>Login</p>
		</div>

		<div id="signup" class="tab-pane fade in">
			<p>Sign Up</p>
		</div>

		<div id="admin" class="tab-pane fade in">
			<p>Admin</p>
		</div>

	</div>

</div>


</body>
</html>