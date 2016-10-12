@extends ('layout.user')

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
					<h4 class="mbs">Registro de documentos</h4>
					<form action="{{action('UserController@postTransferenciaDoc')}}" method="post">
						{!! csrf_field() !!}
                        <div class="form-body pal">
                        	<div class="row">
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<select class="form-control" name="tipodoc_id">
                        					<option value="">Seleccione tipo de documento</option>
                        					@foreach($tipodocs as $tipo)
                        					<option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                        					@endforeach
                        					
                        				</select>
                        			</div>
                        		</div>
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-credit-card"></i>
                        					<input type="text" name="codfuncional" placeholder="Código funcional" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<div class="input-icon">
                        					<i class="fa fa-sort-numeric-asc"></i>
                        					<input type="text" name="serie" placeholder="Serie documental" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        	<hr />
							<div class="row">
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<label>Folio</label>
                        				<div class="input-icon">
                        					<i class="fa fa-folder-open"></i>
                        					<input type="text" name="folio" placeholder="N° Folio" class="form-control" autocomplete="off" />
                        				</div>
                        			</div>
                        		</div>
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<label>Año-Mes-Día</label>
                        				<div class="input-icon">
                        					<i class="fa fa-calendar"></i>
                        					<input type="text" name="desde" placeholder="Fecha inicial" class="form-control" autocomplete="off" data-inputmask="'mask': '9999-99-99'" />
                        				</div>
                        			</div>
                        		</div>
                        		<div class="col-md-4">
                        			<div class="form-group">
                        				<label>Año-Mes-Día</label>
                        				<div class="input-icon">
                        					<i class="fa fa-calendar"></i>
                        					<input type="text" name="hasta" placeholder="Fecha final" class="form-control" autocomplete="off" data-inputmask="'mask': '9999-99-99'" />
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        	<hr />
                              @if(Session::has('error'))
                                    <div class="alert alert-warning alert-dismissable">
                                          <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                          <strong>Error!</strong> {{Session::get('error')}}
                                    </div>
                              @endif
                              @if(Session::has('comprobante'))
                                    <div class="alert alert-success alert-dismissable">
                                          <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                          <strong>Comprobante</strong> Se ha registrado la información, <a href="{{action('UserController@getSopoteTransferencia',['doc'=>Session::get('comprobante')])}}" target="blank">Ver comprobante</a>
                                    </div>
                              @endif

                        	<div class="row">
                        		<div class="col-md-12">
		                        	<div class="form-group">
		                        		<label>Observaciones</label>
		                        		<textarea name="observaciones" class="form-control" rows="3"></textarea>
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
			</div>
		</div>
	</div>
</div>
<div class="col-lg-4">
	<div class="portlet box">
		<div class="portlet-header">
			<div class="caption">Últimos Registros</div>
		</div>
		<div class="portlet-body">
			<div class="chat-scroller">
				<ul class="chats">
					@foreach($documentos as $documento)
					<li class="out">
						<img src="{{asset('back/images/avatar/48.jpg')}}" class="avatar img-responsive" />
						<div class="message">
							<span class="chat-arrow"></span><a href="#" class="chat-name">{{$documento->tipodocs->tipo}}</a>&nbsp;
							<span class="chat-datetime"></span>
							<span class="chat-body">por: {{$documento->user->nombre}}, Área: {{$documento->user->area->area}}, Folio: {{$documento->nfolio}}</span>
						</div>
					</li>
					@endforeach
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

<script>
    $(document).ready(function () {
        $(":input").inputmask();
    });
</script>

@endsection