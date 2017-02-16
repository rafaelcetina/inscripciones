<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sistema de Cursos - Login</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/theme-1/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/theme-1/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/theme-1/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/theme-1/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/theme-default/libs/toastr/toastr.css?1425466569" />
		<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/custom.css" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('<?=base_url()?>assets/img/buldingbanner.jpg'); background-size: cover;"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">INICIO DE SESIÓN</span>
							<br/><br/>
							<form class="form floating-label form-validate" action="<?=base_url('auth/postLogin')?>" id="form_login" accept-charset="utf-8" method="post">
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" required>
									<label for="email">Correo electrónico</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password" required data-rule-minlength="6" 	>
									<label for="password">Contraseña</label>
									<p class="help-block"><a href="#">La olvidaste?</a></p>
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Recordarme</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="col-xs-6 text-right">
										<button class="btn login btn-primary btn-raised btn-loading-state" data-loading-text="<i class='fa fa-spinner fa-spin'></i>" type="submit">Iniciar sesión</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
						<div class="col-sm-5 col-sm-offset-1 text-center">
							<br><br>
								<h3 class="text-light">
									¿Aún no tienes cuenta?
								</h3>
								<a class="btn btn-block btn-raised btn-primary btn-loading-state" data-loading-text="<i class='fa fa-spinner fa-spin'></i>" href="<?=base_url('auth/register')?>">¡Registrate aqui!</a>
								<br>
								</div><!--end .col -->
							</div><!--end .row -->
						</div><!--end .card-body -->
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->

				<!-- BEGIN JAVASCRIPT -->
				<script src="<?=base_url()?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
				<script src="<?=base_url()?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
				<script src="<?=base_url()?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
				<script src="<?=base_url()?>assets/js/libs/spin.js/spin.min.js"></script>
				<script src="<?=base_url()?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
				<script src="<?=base_url()?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
				<script src="<?=base_url()?>assets/js/libs/jquery-validation/dist/jquery.validate.js"></script>
				<script src="<?=base_url()?>assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
				<script src="<?=base_url()?>assets/js/libs/toastr/toastr.js"></script>
				<script src="<?=base_url()?>assets/js/core/source/App.js"></script>
				<script src="<?=base_url()?>assets/js/core/source/AppNavigation.js"></script>
				<script src="<?=base_url()?>assets/js/core/source/AppOffcanvas.js"></script>
				<script src="<?=base_url()?>assets/js/core/source/AppCard.js"></script>
				<script src="<?=base_url()?>assets/js/core/source/AppForm.js"></script>
				<script src="<?=base_url()?>assets/js/core/source/AppNavSearch.js"></script>
				<script src="<?=base_url()?>assets/js/core/source/AppVendor.js"></script>
				<script src="<?=base_url()?>assets/js/core/demo/Demo.js"></script>
				<!-- END JAVASCRIPT -->

				<script>
				$('button.login').prop('disabled', true); 

				$('#form_login input').on('keyup blur click', function () { // fires on every keyup & blur
			        if ($('#form_login').valid()) {                   // checks form for validity
			            $('button.login').prop('disabled', false);        // enables button
			        } else {

			            $('button.login').prop('disabled', true);   // disables button
			        }
			    });

				$('#form_login').submit(function(e) {
					e.preventDefault();

					$.post($(this).attr('action'), $(this).serialize()) 
			        .done(function(data) {
			        	toastr.options.positionClass = 'toast-bottom-left';
			        	console.log(data);
		                if(data.includes("Error")){
							toastr.error(data, '');
		                }
		                if(data.includes("participante")){
		                	toastr.success(data, '');
		                	setTimeout(function(){
		                		location.href = "../home";
		                	},2000);
		                }
		                if(data.includes("administrador")){
		                	toastr.success(data, '');
		                	setTimeout(function(){
		                		location.href = "../admin";
		                	},2000);
		                }
			        });
			        return false;
				});
					
				</script>

			</body>
		</html>
