<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<meta charset="utf-8" />
		<title>Title</title>
		<link href="C:\Users\Alfredo\Documents\GitHub\ProyectoUnoEdwinJimenez\ProyectoUnoEdwinJimenez\PrimerProyectoEdwinJimenez\EstiloRegis.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=devive-width, user-scalable=no, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<style type="text/css">
		header{
		background: #2c3e50;
		color: #fff;
		}
		.main{
		background: #f2f2f2;
		}
		img{
		display:flex;
		margin:0 auto;
		}
		h1{
		display:flex;
		margin:0 auto;
		}
		</style>
		
		
	</head>
	<body>
		<header>
			<hgroup>
			<div class="container">
				
				<img src="C:\xampp\htdocs\ProyectoPrograWeb\taxi.png">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">TicoRide.com</a>
						</div>
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url('useer');?>">Home</a></li>
							<li><a href="<?php echo site_url('user');?>">DashBoard</a></li>
							<li><a href="<?php echo site_url('register_ride');?>">Register Ride</a></li>
							<li><a href="<?php echo site_url('Prueba');?>">Edit Ride</a></li>
							<li><a href="<?php echo site_url('Eliminar');?>">Eliminar Ride</a></li>
							<li><a href="<?php echo site_url('healp');?>">Help</a></li>
							<li><a href="<?php echo site_url('about');?>">About Us</a></li>
							<li><a href="<?php echo site_url('contact');?>">Contact</a></li>
							<li><a href="<?php echo site_url('Settings');?>">Settings</a></li>
							<li><a href="<?php echo site_url('login');?>">Login</a></li>
							<li><a href="<?php echo site_url('register_user');?>">Sign in</a></li>
							
						</ul>
					</div>
				</nav>
				<form action=<?php echo site_url('/user/save');?> method="POST" role="form">
					<div class="container">
						<div class="first">
							
							<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
								
								<h1><b>Sign in</b></h1>
							</div>
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<table class="table">
									
									<tbody id="user_table">
										
									</tbody>
								</table>
								
							</div>
							
							
						</div>
						
					</div>
				</div>
				
				
				
				</hgroup>
			</header>
			<br>
			<br>
			<br>
			<br>
			<div class="container">
				<div class="nombre">
					
					<div class="col-xs- col-sm- col-md- col-lg-12">
						
						<p>
							<b>Nombre</b>
						</p>
						
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="nombre">
					<div class="col-xs-12 col-sm-6 col-md-12">
						
						<input type="text" name="nombre" placeholder="Introduce tu nombre" id="nombre">
						
					</div>
					
				</div>
			</div>
			<br>
			<div class="container">
				<div class="apellido">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>
							<b>Apellido</b>
						</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="apellido">
					<div class="col-xs-12 col-sm-6 col-md-3">
						
						<input type="text" name="apellido" placeholder="Introduce tus apellidos" id="apellido">
					</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="cedula">
					
					<div class="col-xs- col-sm- col-md- col-lg-12">
						
						<p>
							<b>Cedula</b>
						</p>
						
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="cedula">
					<div class="col-xs-12 col-sm-6 col-md-12">
						
						<input type="text" name="cedula" placeholder="cedula" id="cedula">
						
					</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="username">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>
							<b>Username</b>
						</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="user_name">
					<div class="col-xs-12 col-sm-6 col-md-3">
						
						<input type="text" name="username" value="" placeholder="Type your username" class="required"  id="username" />
					</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="password">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>
							<b>password</b>
						</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="password">
					<div class="col-xs-12 col-sm-6 col-md-3">
						
						<input type="password" name="password" id="password" />
					</div>
				</div>
			</div>
			
			<br>

			<div class="container">
				<div class="tipo_usuario">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>
							<b>Tipo Usuario</b>
						</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="tipo_usuario">
					<div class="col-xs-12 col-sm-6 col-md-3">
						
						<input type="tipo_usuario" name="tipo_usuario" id="tipo_usuario" />
					</div>
				</div>
			</div>
			
			<br>
			<div class="container">
				<div class="link">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>
							Already an user <a href="<?php echo site_url('login');?>">Login here</a>
							
							
						</p>
					</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="boton">
					<div class="col-xs-12 col-sm-6 col-md-3">
						
						<button type="submit" class="btn btn-primary"  id="btnSave">Registrar</button>
						<!--<button type="submit" class="btn btn-primary"  id="btnUp">Actualizar</button>-->
					</div>
				</div>
			</div>
		</form>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</body>
</html>