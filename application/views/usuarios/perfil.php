<!-- BEGIN BASE-->
<div id="base">

	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div><!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->

	<!-- BEGIN CONTENT-->
<!-- BEGIN CONTENT-->
<div id="content">

	<!-- BEGIN PROFILE HEADER -->
	<section class="full-bleed">
		<div class="section-body style-default-dark force-padding text-shadow">
			<div class="img-backdrop" style="background-image: url('<?=base_url('assets/img/escritorio_6.jpeg')?>')"></div>
			<div class="overlay overlay-shade-top stick-top-left height-3"></div>
			<div class="row">
				<div class="col-md-3 col-xs-5">
					<!-- <img class="img-circle border-white border-xl img-responsive auto-width" src="<?=base_url('assets/img/gravatar.png')?>" with="100" alt="" /> -->
					<h3><?=$this->session->userdata('email')?><br/><small>Participante</small></h3>
				</div><!--end .col -->
				
			</div><!--end .row -->
		</div><!--end .section-body -->
	</section>
	<!-- END PROFILE HEADER  -->

	<section>
		<div class="section-body no-margin">
			<div class="row">
				<!-- END MESSAGE ACTIVITY -->
				<!-- BEGIN PROFILE MENUBAR -->
				<div class="col-lg-offset-3  col-md-offset-2  col-lg-6 col-md-8" id="card_info">
					
					<div class="card card-underline">
						<div class="card-head">
							<header class="opacity-75"><small>Complete con su información personal</small></header>
							<div class="tools">
								<a class="btn ink-reaction" id="btn_card_info"><i class="md md-edit"></i> Editar</a>
							</div><!--end .tools -->
						</div><!--end .card-head -->
						<div class="card-body no-padding form-mayus">
							<ul class="list">
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="md md-account-circle"></i>
										</div>
										<div class="tile-text">
											<?=($usuario->nombre!='')?$usuario->nombre:'*No hay información*'?>
											<small>Nombre completo</small>
										</div>
									</a>
								</li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon"></div>
										<div class="tile-text">
											<?=($usuario->estudios!='')?$usuario->estudios:'*No hay información*'?>
											<small>Grado de estudios</small>
										</div>
									</a>
								</li>
								<li class="divider-inset"></li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="md md-location-on"></i>
										</div>
										<div class="tile-text">
											<?=($usuario->entidad!='')?$usuario->entidad:'*No hay información*'?>
											<small>Entidad Federativa (Estado)</small>
										</div>
									</a>
								</li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon"></div>
										<div class="tile-text">
											<?=($usuario->municipio!='')?$usuario->municipio:'*No hay información*'?>
											<small>Municipio</small>
										</div>
									</a>
								</li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon"></div>
										<div class="tile-text">
											<?=($usuario->ciudad!='')?$usuario->ciudad:'*No hay información*'?>
											<small>Ciudad</small>
										</div>
									</a>
								</li>
								<li class="divider-inset"></li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="tile-text">
											<?=($usuario->telefono!='')?$usuario->telefono:'*No hay información*'?>
											<small>Teléfono</small>
										</div>
									</a>
								</li>
								
							</ul>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->

				
				<!-- END PROFILE MENUBAR -->

			</div><!--end .row -->

			<div class="col-lg-offset-3 col-md-offset-2 col-lg-6 col-md-8" id="card_edit" style="display: none">
					
					<div class="card card-underline">
						<form class="form form-mayus form-validate" id="form_edit_perfil">
						<div class="card-head">
							<header class="opacity-95"><small>Información personal <span class="result"></span></small> </header>
							<div class="tools">
								<button class="btn btn-primary ink-reaction btn-loading-state" data-loading-text="<i class='fa fa-spinner fa-spin'></i>" id="btn_card_edit"><i class="md md-save" ></i> Guardar</button>
							</div><!--end .tools -->
						</div><!--end .card-head -->
						<div class="card-body no-padding">
							<ul class="list">
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="md md-account-circle"></i>
										</div>
										<div class="tile-text">
											<input type="text" class="form-control" name="nombre" value="<?=$usuario->nombre?>" data-rule-minlength="6"  placeholder="Nombre completo" required>
											<small>Nombre completo</small>
										</div>
									</a>
								</li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon"></div>
										<div class="tile-text">
											<input type="text" class="form-control" name="estudios" value="<?=$usuario->estudios?>" placeholder="Grado máximo de estudios" required>
											<small>Grado de estudios</small>
										</div>
									</a>
								</li>
								<li class="divider-inset"></li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="md md-location-on"></i>
										</div>
										<div class="tile-text">
											<input type="text" class="form-control" name="entidad" value="<?=$usuario->entidad?>" placeholder="Estado donde vive" required>
											<small>Entidad Federativa (Estado)</small>
										</div>
									</a>
								</li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon"></div>
										<div class="tile-text">
											<input type="text" class="form-control" name="municipio" value="<?=$usuario->municipio?>" placeholder="Municipio donde vive" required>
											<small>Municipio</small>
										</div>
									</a>
								</li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon"></div>
										<div class="tile-text">
											<input type="text" class="form-control" name="ciudad" value="<?=$usuario->ciudad?>" placeholder="Ciudad donde vive" required>
											<small>Ciudad</small>
										</div>
									</a>
								</li>
								<li class="divider-inset"></li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="tile-text">
											<input type="text" class="form-control" name="telefono" value="<?=$usuario->telefono?>" placeholder="Teléfono personal" required data-rule-digits>
											<small>Teléfono</small>
										</div>
									</a>
								</li>
								
							</ul>
							
						</div><!--end .card-body -->
						</form>
					</div><!--end .card -->
				</div><!--end .col -->


				<!-- END PROFILE MENUBAR -->

			</div><!--end .row -->
		</div><!--end .section-body -->
	</section>
</div><!--end #content-->
<!-- END CONTENT -->
</div>
