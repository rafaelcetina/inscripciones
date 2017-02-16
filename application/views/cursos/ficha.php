<div id="base">

	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div><!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->
	
<!-- BEGIN CONTENT-->
	<div id="content">
		<section>
		<!-- <?=print_r($opciones) ?> -->
			<div class="section-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="card card-printable style-default-light">
							<div class="card-head">
								<div class="tools">
									<div class="btn-group">
										<a class="btn btn-floating-action btn-primary" href="javascript:void(0);" onclick="javascript:window.print();"><i class="md md-print"></i></a>
									</div>
								</div>
							</div><!--end .card-head -->
							<div class="card-body style-default-bright">

								<!-- BEGIN INVOICE HEADER -->
								<div class="row">
									<div class="col-xs-8">
										<h1 class="text-light"><img src="<?=base_url('assets/img/IINDEQ2.png')?>" width="100" alt="">Inscripciones <strong class="text-accent-dark">IINDEQ</strong></h1>
									</div>
									<div class="col-xs-4 text-right">
										<h1 class="text-light text-default-light">Ficha de Pago</h1>
									</div>
								</div><!--end .row -->
								<!-- END INVOICE HEADER -->

								<br/>

								<!-- BEGIN INVOICE DESCRIPTION -->
								<div class="row">
									<div class="col-xs-3">
										<h4 class="text-light">Datos de Institución</h4>
										<address>
											<strong>Instituto de Investigación y Desarrollo Educativo de Quintana Roo.</strong>
											
										</address>
									</div><!--end .col -->
									<div class="col-xs-3">
										<h4 class="text-light">Datos del Participante</h4>
										<address>
											<strong><?=$participante->nombre ?>.</strong><br>
										</address>
									</div><!--end .col -->
									<div class="col-xs-6">
										<div class="well">
											<div class="clearfix">
												<div class="pull-left"> Fecha de generación: </div>
												<div class="pull-right"> <?=date('d-m-Y') ?> </div>
											</div>
											<div class="clearfix">
												<div class="pull-left"> Cuenta BANORTE </div>
												<div class="pull-right"> 0686619891  </div>
											</div>
											<div class="clearfix">
												<div class="pull-left"> Transferencia</div>
												<div class="pull-right">CLABE 072690006866198912 </div>
											</div>
											<div class="clearfix">
												<div class="pull-left"> OXXO, BANORTE: </div>
												<div class="pull-right"> 4189 2810 4101 7386 </div>
											</div>

										</div>
									</div><!--end .col -->
								</div><!--end .row -->
								<!-- END INVOICE DESCRIPTION -->

								<br/>

								<!-- BEGIN INVOICE PRODUCTS -->
								<div class="row">
									<div class="col-md-12">
										<h4 class="text-center text-light">Curso: <?=$curso->nombre ?></h4>
										<table class="table">
											<thead>
												<tr>
													<th style="width:60px" class="text-center">CANT.</th>
													<th class="text-left">CONCEPTO</th>
													<th style="width:140px" class="text-right">PRECIO UNITARIO</th>
													<th style="width:90px" class="text-right">TOTAL</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													$total = 0;
													$conceptos = explode(',', $opciones->opciones);
													$n_conceptos = sizeof($conceptos);
													
													$descuento = 0;
													if($n_conceptos > 3)
														$descuento = 200;
												 ?>
												 <?php foreach ($conceptos as $concepto) {
												 	if(strpos($concepto, 'TALLER') !== FALSE)
												 		$precio = 500;
												 	if(strpos($concepto, 'CONFERENCIA') !== FALSE)
												 		$precio = 300;
												 ?>
												<tr>
													<td class="text-center">1</td>
													<td><?=strtoupper($concepto) ?></td>
													<td class="text-right">$<?=number_format($precio) ?></td>
													<td class="text-right">$<?=number_format($precio) ?></td>
												</tr>
												<?php 

													$total += $precio;

												} ?>
												<tr>
													<td colspan="2" rowspan="4">
														<h3 class="text-light opacity-50">Notas</h3>
														<p>Consigne en la cuenta No. 0686619891 del Banco BANORTE o realice transferencia bancaria “CLABE 072690006866198912” a nombre del Instituto de Investigación y Desarrollo Educativo de Quintana Roo, después de realizar el depósito favor enviar el comprobante de pago al email: <strong>eventosiindeq@gmail.com</strong>, con copia a: <strong>rwilbermx@hotmail.com</strong>. Para mayor información sobre las inscripciones comunicarse al teléfono fijo (983) 8326421 o al móvil 9831020811.</p>
														<!-- <p><strong><em>Excepteur sint occaecat est laborum.</em></strong></p> -->
													</td>
													<td class="text-right"><strong>Subtotal</strong></td>
													<td class="text-right">$<?=number_format($total) ?></td>
												</tr>
												<tr>
													<td class="text-right hidden-border"><strong>Descuento</strong></td>
													<td class="text-right hidden-border">$<?=number_format($descuento) ?> </td>
												</tr>
												<tr>
													<td class="text-right hidden-border"><strong></strong></td>
													<td class="text-right hidden-border"></td>
												</tr>
												<tr>
													<td class="text-right"><strong class="text-lg text-accent">Total</strong></td>
													<td class="text-right"><strong class="text-lg text-accent">$ <?=number_format($total - $descuento) ?></strong></td>
												</tr>
											</tbody>
										</table>
									</div><!--end .col -->
								</div><!--end .row -->
								<!-- END INVOICE PRODUCTS -->

							</div><!--end .card-body -->
						</div><!--end .card -->
					</div><!--end .col -->
				</div><!--end .row -->
			</div><!--end .section-body -->
		</section>
	</div>
	<!-- END CONTENT-->
</div>