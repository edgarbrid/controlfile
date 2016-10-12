@extends ('layout.admin')

@section('usuario')
<ul class="nav navbar navbar-top-links navbar-right mbn">
	<li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="{{asset('back/images/avatar/48.jpg')}}" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">{{Auth::user()->nombre}}</span>&nbsp;<span class="caret"></span></a>
		<ul class="dropdown-menu dropdown-user pull-right">
			<li><a href="#"><i class="fa fa-calendar"></i>{{Auth::user()->cargo}}</a></li>
			<li><a href="#"><i class="fa fa-envelope"></i>{{Auth::user()->area->area}}</a></li>
			<li><a href="#"><i class="fa fa-tasks"></i>{{Auth::user()->documento}}</a></li>
			<li class="divider"></li>
			<li><a href="#"><i class="fa fa-lock"></i>Cambiar password</a></li>
			<li><a href="{{action('LoginController@getSalir')}}"><i class="fa fa-key"></i>Salir</a></li>
		</ul>
	</li>
	<li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
</ul>
@endsection

@section('pagina')
Inicio
@endsection

@section('ppal')
<div class="row mbl">
<div class="col-lg-8">
	<div class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<h4 class="mbs">Registro de funcionario</h4>
					<form action="{{action('AdminController@postCrearFuncionario')}}" method="post">
						{!! csrf_field() !!}
                        <div class="form-body pal">
                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-user"></i>
                        					<input id="inputFirstName" type="text" name="nombre" placeholder="Nombre Completo" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        		<div class="col-md-6">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-keyboard-o"></i>
                        					<input id="inputEmail" type="text" name="documento" placeholder="N° Identificación" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-envelope"></i>
                        					<input id="inputEmail" type="text" name="email" placeholder="Correo Electrónico" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        		<div class="col-md-6">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-phone"></i>
                        					<input id="inputPhone" type="text" name="telefono" placeholder="Teléfono" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        	<hr />
                        	<div class="row">
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<input id="inputCity" type="text" name="cargo" placeholder="Cargo" class="form-control" autocomplete="off" />
                        			</div>
                        		</div>
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<select class="form-control" name="profesion_id">
                        					<option value="">Seleccione Profesión</option>
                        					@foreach($profesiones as $profesion)
                        					<option value="{{$profesion->id}}">{{$profesion->profesion}}</option>
                        					@endforeach
                        				</select>
                        			</div>
                        		</div>
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<select class="form-control" name="area_id">
                        					<option value="">Seleccione Área</option>
                        					@foreach($areas as $area)
                        					<option value="{{$area->id}}">{{$area->area}}</option>
                        					@endforeach
                        				</select>
                        			</div>
                        		</div>
                        	</div>
                        	<hr />
                        	<div class="row">
                        		<div class="col-md-12">
		                        	<div class="form-group">
		                        		<input id="inputAddress" type="text" name="usuario" placeholder="Asignar Usuario" class="form-control" autocomplete="off" />
		                        	</div>
                        		</div>
                        	</div>
                        	<hr />
                        </div>
                        <div class="form-actions text-right pal">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                    </form>
				</div>
				<!-- <div class="col-md-4">
					<h4 class="mbm">Server Status</h4>
					<span class="task-item">CPU Usage (25 - 32 cpus)<small class="pull-right text-muted">40%</small>
						<div class="progress progress-sm">
							<div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-orange">
								<span class="sr-only">40% Complete (success)</span>
							</div>
						</div>
					</span>
					<span>Memory Usage (2.5GB)<small class="pull-right text-muted">60%</small>
						<div class="progress progress-sm">
							<div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-blue">
								<span class="sr-only">60% Complete (success)</span>
							</div>
						</div>
					</span>
					<span>Disk Usage (C:\ 120GB , D:\ 430GB)<small class="pull-right text-muted">55%</small>
						<div class="progress progress-sm">
							<div role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;" class="progress-bar progress-bar-green">
								<span class="sr-only">55% Complete (success)</span>
							</div>
						</div>
					</span>
					<span>Domain (2/5)<small class="pull-right text-muted">66%</small>
						<div class="progress progress-sm">
							<div role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;" class="progress-bar progress-bar-yellow">
								<span class="sr-only">66% Complete (success)</span>
							</div>
						</div>
					</span>
					<span>Database (90/100)<small class="pull-right text-muted">90%</small>
						<div class="progress progress-sm">
							<div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" class="progress-bar progress-bar-pink">
								<span class="sr-only">90% Complete (success)</span>
							</div>
						</div>
					</span>
					<span>Email Account (25/50)<small class="pull-right text-muted">50%</small>
						<div class="progress progress-sm">
							<div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-violet">
								<span class="sr-only">50% Complete (success)</span>
							</div>
						</div>
					</span>
				</div> -->
			</div>
		</div>
	</div>
</div>
<div class="col-lg-4">
	<div class="portlet box">
		<div class="portlet-header">
			<div class="caption">Funcionarios Registrados</div>
		</div>
		<div class="portlet-body">
			<div class="chat-scroller">
				<ul class="chats">
					@forelse($users as $user)
					<li class="in">
						<img src="{{asset('back/images/avatar/48.jpg')}}" class="avatar img-responsive" />
						<div class="message">
							<span class="chat-arrow"></span><a href="#" class="chat-name">{{$user->nombre}}</a>&nbsp;
							<span class="chat-datetime">{{$user->cargo}}</span>
							<span class="chat-body">Area: {{$user->area->area}}, Perfil: {{$user->profesion->profesion}}, Identificación: {{$user->documento}}, Email: {{$user->email}}</span>
						</div>
					</li>
					@empty
					<li class="out">
						<img src="{{asset('back/images/avatar/48.jpg')}}" class="avatar img-responsive" />
						<div class="message">
							<span class="chat-arrow"></span><a href="#" class="chat-name">Ho hay registros</a>&nbsp;
							<span class="chat-datetime"></span>
							<span class="chat-body">El sistema no encontró registros de funcionarios</span>
						</div>
					</li>
					@endforelse
				</ul>
			</div>
			<div class="chat-form">
				<div class="input-group">
					<!-- <input id="input-chat" type="text" placeholder="Type a message here..." class="form-control" />
					<span id="btn-chat" class="input-group-btn">
						<button type="button" class="btn btn-green">
							<i class="fa fa-check"></i>
						</button>
					</span> -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<div class="row mbl">
<div class="col-lg-4">
	<div class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="mbs">Registro de Áreas</h4>
					<form action="{{action('AdminController@postCrearArea')}}" method="post">
						{!! csrf_field() !!}
                        <div class="form-body pal">
                        	<div class="row">
                        		<div class="col-md-12">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-cogs"></i>
                        					<input type="text" name="area" placeholder="Área" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        <div class="text-center pal">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                    </form>
				</div>
				<div class="col-md-6">
					<h4 class="mbm">Áreas</h4>
					@forelse($areas as $area)
						<span class="task-item">{{$area->area}}<small class="pull-right text-muted"><i class="fa fa-check"></i></small></span>
						<hr/>
					@empty
						<span class="task-item">No hay registros<small class="pull-right text-muted"><i class="fa fa-times"></i></small></span>
					@endforelse
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-4">
	<div class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="mbs">Registro de Profesión</h4>
					<form action="{{action('AdminController@postCrearProfesion')}}" method="post">
						{!! csrf_field() !!}
                        <div class="form-body pal">
                        	<div class="row">
                        		<div class="col-md-12">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-briefcase"></i>
                        					<input type="text" name="profesion" placeholder="Profesión" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        <div class="text-center pal">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                    </form>
				</div>
				<div class="col-md-6">
					<h4 class="mbm">Server Status</h4>
					@forelse($profesiones as $profesion)
					<span class="task-item">{{$profesion->profesion}}<small class="pull-right text-muted"><i class="fa fa-check"></i></small></span>
					<hr/>
					@empty
					<span class="task-item">No hay registros<small class="pull-right text-muted"><i class="fa fa-times"></i></small></span>
					@endforelse
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-4">
	<div class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="mbs">Registro de T. de Docs</h4>
					<form action="{{action('AdminController@postCrearTipoDoc')}}" method="post">
						{!! csrf_field() !!}
                        <div class="form-body pal">
                        	<div class="row">
                        		<div class="col-md-12">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-fax"></i>
                        					<input type="text" name="tipo" placeholder="Tipo Documento" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        <div class="text-center pal">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                    </form>
				</div>
				<div class="col-md-6">
					<h4 class="mbm">Tipo Docs</h4>
					@forelse($tipos as $tipo)
					<span class="task-item">{{$tipo->tipo}}<small class="pull-right text-muted"><i class="fa fa-check"></i></small></span>
					<hr/>
					@empty
					<span class="task-item">No hay registros<small class="pull-right text-muted"><i class="fa fa-times"></i></small></span>
					@endforelse
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection