<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login Administrator Lapangan Futsal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="shortcut icon" href="../img/favicon.png" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

	<style>
		body {
			background-image: url(../img/body.jpg);
			background-repeat: repeat;
			background-attachment: fixed;
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#form_login").validate();
		})

		function validasi(form) {
			if (form.username.value == "") {
				alert("USERNAME MASIH KOSONG");
				form.username.focus();
				return (false);
			}

			if (form.password.value == "") {
				alert("PASSWORD MASIH KOSONG");
				form.password.focus();
				return (false);
			}

			return (true);
		}
	</script>

</head>

<body OnLoad="document.login.username.focus();">

	<form class="form-horizontal" name="login" id="form-login" method="post" action="log_proc.php" onSubmit="return validasi(this)">
		<div class="modal-body text-center">
			<div class="input-prepend">
				<span class="add-on" style="height: 28px;"><i class="glyphicon glyphicon-user"></i></span><input type="text" id="username" class="required input-large" name="username" placeholder="Username.." style="height: 28px;">
			</div>
			<div class="row">
				&nbsp;
			</div>
			<div class="input-prepend">
				<span class="add-on" style="height: 28px;"><i class="glyphicon glyphicon-lock"></i></span><input type="password" id="password" class="input-large" name="password" placeholder="Password.." style="height: 28px;">
			</div>
			<div class="row">
				&nbsp;
			</div>
			<div>
				<button class="btn btn-small btn-info" type="submit" name="login" id="login">Login</button>
			</div>
		</div>
	</form>