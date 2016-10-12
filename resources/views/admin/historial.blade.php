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
Historial
@endsection

@section('ppal')
<div class="row mbl">
	<div class="col-lg-12">
		<div class="panel panel-green">
			<div class="panel-heading">Historial de Archivos</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Tipo Doc</th>
							<th>Cód. funcional</th>
							<th>Serie documental</th>
							<th>N° Folio</th>
							<th>Funcionario</th>
							<th>Área</th>
							<th>Observaciones</th>

						</tr>
					</thead>
					<tbody>
						@foreach($documentos as $documento)
						<tr>
							<td>1</td>
							<td>{{$documento->tipodocs->tipo}}</td>
							<td>{{$documento->codfuncional}}</td>
							<td>{{$documento->seriedoc}}</td>
							<td>{{$documento->nfolio}}</td>
							<td>{{$documento->user->nombre}}</td>
							<td>{{$documento->user->area->area}}</td>
							<td><span class="label label-sm label-success">{{$documento->observacion}}</span></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
        </div>
	</div>
</div>
@endsection