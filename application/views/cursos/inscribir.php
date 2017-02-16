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
					<!-- <img class="img-circle border-white border-xl img-responsive auto-width" src="<?=base_url('assets/img/gravatar.png')?>" with="100" alt /> -->
					<h3><?=$curso->nombre?><br/><small><?=$curso->fecha ?></small></h3>
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
				<div class="col-lg-offset-3  col-md-offset-2  col-lg-6 col-md-8" id="">
					
					<div class="card card-underline">
					<form class="form-horizontal form-validate" id="form_inscribir">
						<div class="card-head">

							<header class="opacity-95"><small>Selecciona al menos una opción <span class="result"></span> </small></header>
							<div class="tools">
								
								<button class="btn btn-primary ink-reaction btn-loading-state" data-loading-text="<i class='fa fa-spinner fa-spin'></i>" id=""><i class="md md-save" ></i>Generar ficha</button>
							</div><!--end .tools -->
						</div><!--end .card-head -->
						<div class="card-body">
							<div class="form-group">
								<input type="hidden" value="<?=$curso->id_curso?>" id="id_curso" name="id_curso">
								<label class="col-sm-3 control-label">Opciones</label>

								<div class="col-sm-9">
									<div class="checkbox checkbox-styled">
										<label>
											<input name="opciones[]" type="checkbox" value="CONFERENCIA: LA EVALUACIÓN DEL DESEMPEÑO DOCENTE. UN REFERENTE PARA LA CALIDAD EDUCATIVA" required>
											<span>CONFERENCIA: LA EVALUACIÓN DEL DESEMPEÑO DOCENTE, UN REFERENTE PARA LA CALIDAD EDUCATIVA</span>
										</label>
									</div>
									<div class="checkbox checkbox-styled">
										<label>
											<input name="opciones[]" type="checkbox" value="TALLER 1: ELABORACIÓN DE LA PLANEACIÓN DIDÁCTICA" required>
											<span>TALLER 1: ELABORACIÓN DE LA PLANEACIÓN DIDÁCTICA</span>
										</label>
									</div>
									<div class="checkbox checkbox-styled">
										<label>
											<input name="opciones[]" type="checkbox" value="TALLER 2: LA INTERVENCIÓN DOCENTE Y EVIDENCIAS DE ENSEÑANZA" required>
											<span>TALLER 2: LA INTERVENCIÓN DOCENTE Y EVIDENCIAS DE ENSEÑANZA</span>
										</label>
									</div>
									<div class="checkbox checkbox-styled">
										<label>
											<input name="opciones[]" type="checkbox" value="TALLER 3: ELABORACIÓN DEL TEXTO DE REFLEXIÓN Y ANÁLISIS DE SU PRÁCTICA" required>
											<span>TALLER 3: ELABORACIÓN DEL TEXTO DE REFLEXIÓN Y ANÁLISIS DE SU PRÁCTICA</span>
										</label>
									</div>
									
								</div><!--end .col -->
							</div><!--end .form-group -->
							</form>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->

				
				<!-- END PROFILE MENUBAR -->

			</div><!--end .row -->
				<!-- END PROFILE MENUBAR -->

			</div><!--end .row -->
		</div><!--end .section-body -->
	</section>
</div><!--end #content-->
<!-- END CONTENT -->
</div>
