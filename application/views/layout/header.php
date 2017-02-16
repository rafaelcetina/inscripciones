<body class="menubar-hoverable header-fixed menubar-pin">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="<?=base_url();?>">
									<span class="text-lg text-bold text-primary">CURSOS IINDEQ</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options">
						<li>
							<!-- Search form -->
							<form class="navbar-search" role="search">
								<div class="form-group">
									<input type="text" class="form-control" name="headerSearch" placeholder="Ingrese una palabra clave¿">
								</div>
								<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
							</form>
						</li>
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger"></sup>
							</a>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header">Notificaciones</li>
								<li>
									<!--<a class="alert alert-callout alert-warning" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="<?=base_url()?>assets/img/gravatar.png" alt="" />
										<strong>Alex Anistor</strong><br/>
										<small>Testing functionality...</small>
									</a>-->
								</li>
								<li class="dropdown-header">Opciones</li>
								
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
						
					</ul><!--end .header-nav-options -->
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="<?=base_url()?>assets/img/gravatar.png" alt="" />
								<span class="profile-info">
									<?=$this->session->userdata('email');?>
									<small>
										<?=($this->session->userdata('rol')==1)?"Administrador":"Participante";?>
									</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Configuraciones</li>
								<li><a href="<?=base_url('usuarios/perfil')?>"><i class="fa fa-fw fa-user text-info"></i> Mi perfil</a></li>
								<li><a href="<?=base_url('auth/logout')?>"><i class="fa fa-fw fa-power-off text-danger"></i> Cerrar sesión</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->