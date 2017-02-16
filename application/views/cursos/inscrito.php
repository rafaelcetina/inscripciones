<!-- BEGIN BASE-->
<div id="base">

<!-- BEGIN CONTENT-->
<div id="content">
<section>
<!-- <div class="section-header">
	<ol class="breadcrumb">
		<li class="active">Cursos</li>
	</ol>
</div> -->
<div class="section-body">
	<div class="container-fluid">
		<h2 class="text-light text-center">Cursos inscritos<br/><small class="text-primary"> Aqui se encuentran los cursos a los que ya te hayas incrito</small></h2>
		<br/>
		<?php if($cursos) {?>
		<?php foreach ($cursos as $curso) {
			# code...
		} ?>
		<!-- BEGIN PRICING CARDS 1 -->
		<div class="row centered">
			<div class="col-md-3">
				<div class="card card-type-pricing text-center">
					<div class="card-body style-primary card-curso">
						<h2 class="text-light"><?=$curso->nombre ?></h2>
						<br>
						<br/>
						<p class="opacity-70"><em>Imparte: <?=$curso->instructor ?></em></p>
					</div><!--end .card-body -->
					<div class="card-body no-padding">
						<ul class="list-unstyled">
							<li>Sede: <?=$curso->sede ?></li>
							<li><?=$curso->horas?> Horas.</li>
							<li><?=$curso->descripcion ?></li>
							<li>Fecha: <?=$curso->fecha ?></li>
						</ul>
					</div><!--end .card-body -->
					<div class="card-body">
						<a class="btn btn-primary" href="<?=base_url('cursos/ficha/')?><?=$curso->id_curso?>">Ver mi ficha de pago</a>
					</div><!--end .card-body -->
				</div><!--end .card -->
			</div><!--end .col -->
		</div><!--end .row -->
		<!-- END PRICING CARDS 1 -->
		<?php }else{ ?>
		<div class="row centered">
			<div class="col-md-6">
				<div class="card card-type-pricing text-center">
					<div class="card-body style-primary card-curso">
						<h2 class="text-light">No hay cursos disponibles por el momento</h2>
						<br>
						
					</div><!--end .card-body -->
					<div class="card-body no-padding">
						
					</div><!--end .card-body -->
					<div class="card-body">
						<a class="btn btn-primary" href="<?=base_url('cursos/disponibles')?>">Ver cursos disponibles</a>
					</div><!--end .card-body -->
				</div><!--end .card -->
			</div><!--end .col -->
		</div><!--end .row -->
		<?php } ?>
	</div><!--end .container -->
</div><!--end .section-body -->
</section>
</div><!--end #content-->
<!-- END CONTENT -->