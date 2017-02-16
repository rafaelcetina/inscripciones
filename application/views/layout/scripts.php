<!-- BEGIN JAVASCRIPT -->
		<script src="<?=base_url()?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/spin.js/spin.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/moment/moment.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="<?=base_url()?>assets/js/libs/flot/curvedLines.js"></script>
		<script src="<?=base_url()?>assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/jquery-validation/dist/jquery.validate.js"></script>
		<script src="<?=base_url()?>assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/d3/d3.min.js"></script>
		<script src="<?=base_url()?>assets/js/libs/d3/d3.v3.js"></script>
		<script src="<?=base_url()?>assets/js/libs/rickshaw/rickshaw.min.js"></script>
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

			$('#btn_card_info').click(function(e) {
				e.preventDefault();
				$('#card_info').hide();
				$('#card_edit').show();
				$('button.btn').prop('disabled', true);  
			});

			$('#form_edit_perfil').submit(function(e) {
				e.preventDefault();

				$.post("update", $("#form_edit_perfil").serialize()) 
		        .done(function(data) {
		        	console.log(data);
	                if(data.includes("error")){
	                	$('.card-head').addClass('alert-danger');
	                }

	                if(data.includes("exito")){
	                	$('.card-head').addClass('alert-success');
	                	
	                	setTimeout(function(){
	                		location.href = "../cursos/disponibles";
	                	},2000);
	                }
	                $(".result").html(data);   

		            if (data.trim().length >0){
		            }
		            else {
	            		
		            }
		        });
		        return false;

				//$('#card_edit').hide();
				//$('#card_info').show();
			});

			$('#form_edit_perfil input').on('keyup blur', function () { // fires on every keyup & blur
		        $('.card-head').removeClass('alert-danger');
		        
		        $('.card-head').removeClass('alert-success');
		        $('.result').html('');

		        if ($('#form_edit_perfil').valid()) {                   // checks form for validity
		            $('button.btn').prop('disabled', false);        // enables button
		        } else {

		            $('button.btn').prop('disabled', true);   // disables button
		        }
		    });



		        $('button.btn').prop('disabled', true); 

			$('#form_inscribir input').on('keyup blur click', function () { // fires on every keyup & blur
		        $('.card-head').removeClass('alert-danger');
		        $('.card-head').removeClass('alert-success');
		        $('.result').html('');

		        if ($('#form_inscribir').valid()) {                   // checks form for validity
		            $('button.btn').prop('disabled', false);        // enables button
		        } else {

		            $('button.btn').prop('disabled', true);   // disables button
		        }
		    });


		    $('#form_inscribir').submit(function(e) {
				e.preventDefault();

				$.post("../postInscribir", $("#form_inscribir").serialize()) 
		        .done(function(data) {
		        	console.log(data);
	                if(data.includes("error")){
	                	$('.card-head').addClass('alert-danger');
	                }

	                if(data.includes("exito")){

	                	$('.card-head').addClass('alert-success');

	                	setTimeout(function(){
	                		location.href = "../ficha/"+$('#id_curso').val();
	                	},2000);
	                }
	                $(".result").html(data);   

		            if (data.trim().length >0){
		            }
		            else {
	            		
		            }
		        });
		        return false;

				//$('#card_edit').hide();
				//$('#card_info').show();
			});
			

		</script>

	</body>
</html>