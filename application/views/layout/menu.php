
	<div id="menubar" class="menubar-inverse animate">
		<div class="menubar-fixed-panel">
			<div>
				<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
					<i class="fa fa-bars"></i>
				</a>
			</div>
			<div class="expanded">
				<a href="<?=base_url()?>">
					<span class="text-lg text-bold text-primary ">Cursos&nbsp;IINDEQ</span>
				</a>
			</div>
		</div>
		<div class="menubar-scroll-panel">

			<!-- BEGIN MAIN MENU -->
			<ul id="main-menu" class="gui-controls">

				<!-- BEGIN DASHBOARD -->
				<li>
					<a href="<?=base_url()?>" class="<?=(isset($home_active))?"active":"";?>">
						<div class="gui-icon"><i class="md md-home"></i></div>
						<span class="title">Inicio</span>
					</a>
				</li><!--end /menu-li -->
				<!-- END DASHBOARD -->

				<!-- BEGIN EMAIL -->
				<li class="gui-folder">
					<a class="<?=(isset($cursos_active))?"active":"";?>">
						<div class="gui-icon"><i class="md md-book"></i></div>
						<span class="title">Cursos</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a class="<?=(isset($disponibles))?"active":"";?>" href="<?=base_url('cursos/disponibles')?>" ><span class="title">Disponibles</span></a></li>
						<li><a class="<?=(isset($inscrito))?"active":"";?>" href="<?=base_url('cursos/inscrito')?>" ><span class="title">Inscrito</span></a></li>
						<?php if($this->session->userdata('rol')==1) { ?>
						<li><a class="<?=(isset($gestion_cursos))?"active":"";?>" href="<?=base_url('admin/cursos')?>" ><span class="title">Gestión de cursos</span></a></li>
						<?php } ?>
						<!-- <li><a href="<?=base_url('cursos/proximos')?>" ><span class="title">Proximos</span></a></li>
						<li><a href="<?=base_url('cursos/historial')?>" ><span class="title">Historial</span></a></li> -->
					</ul><!--end /submenu -->
				</li><!--end /menu-li -->
				<!-- END EMAIL -->
				<!-- BEGIN EMAIL -->
				<li class="gui-folder">
					<a class="<?=(isset($usuarios_active))?"active":"";?>">
						<div class="gui-icon"><i class="md md-account-circle"></i></div>
						<span class="title">Usuarios</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a class="<?=(isset($miperfil))?"active":"";?>" href="<?=base_url('usuarios/perfil')?>" ><span class="title">Mi perfil</span></a></li>
						<?php if($this->session->userdata('rol')==1) { ?>
						<li><a class="<?=(isset($gestion_usuarios))?"active":"";?>" href="<?=base_url('admin/usuarios')?>" ><span class="title">Gestión de usuarios</span></a></li>
						<?php } ?>
					</ul><!--end /submenu -->
				</li><!--end /menu-li -->
				<!-- END EMAIL -->
			</ul><!--end .main-menu -->
			<!-- END MAIN MENU -->

			<div class="menubar-foot-panel">
				<small class="no-linebreak hidden-folded">
					<span class="opacity-75">Copyright &copy; 2017</span> <strong>IINDEQ</strong>
				</small>
			</div>
		</div><!--end .menubar-scroll-panel-->
	</div><!--end #menubar-->
	<!-- END MENUBAR -->
</div><!--end #base-->
<!-- END BASE