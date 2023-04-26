@extends('layouts.app')
@section('content')
	<style>

		label{
			width:300px;
			display:flex;
			justify-content:space-around;
		}
		input{
			border:1px solid #16979A;
			border-radius:8px;
			padding: 5px;
		}
		#btn_busc{
			max-width: 400px;
			width:100%;
			align-self:center;
			text-align:center;
			padding: 5px;
			text-decoration:none;
			border: 3px solid #16979A;
			border-radius: 8px;
		}
		#btn_busc:hover{
			background:#16979A;
			color:white;
		}
		#forms{
			display:flex;
			justify-content:center;
			width:100%;
			min-width: 350px;
		}
		#forms form{
			align-self:center;
			display:flex;
			justify-content:center;
			flex-direction:column;
			min-width: 350px;
			background: white;
			padding:20px;
			border-left:5px solid #16979A;
			border-right:5px solid #16979A;
			border-radius:8px;
		}
		#forms h3{
			text-align:center;
			text-decoration:underline;
			margin-bottom:20px;
		}
		#forms label{
			display:flex;
			width:330px;
			justify-content: space-around;
			margin-bottom:15px;
		}
	</style>
	<div class="container-fluid">
		<h1>DOCUMENTOS</h1>
		<br>
		
			<div id="forms">
				<form action="">
					<h3>BUSCADOR</h3>
					<label for="nombre">
						<span>Nombre:</span>
						<input type="text" name="nombre" id="nombre">
					</label>
					<label for="categoria">
						<span>Categoria:</span>
						<input type="text" name="categoria" id="categoria">
					</label>
					<label for="fecha">
						<span>Fecha:</span>
						<input type="date" name="fecha" id="fecha">
					</label>
					<label for="buscar">
						<a href="{{ route('documentos_res') }}" id="btn_busc">Buscar</a>
						
					</label>
				</form>
			</div>
		<br>
		@isset($archivos)
		<table class="table table-striped table-hover">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Categoria</th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col">Fecha</th>
				<th scope="col">Tamaño</th>
				</tr>
			</thead>
			<tbody>
			<?php $c=1 ?>
				@foreach ($archivos as $item)
					<tr>
						<th scope="row"><?php echo $c;?></th>
						<td>{{$item->name}}</td>
						<td>{{$item->categoria}}</td>
						<td><a href="{{$item->path}}" target="_blank"><ion-icon name="open-outline"></ion-icon></a></td>
						<td><a href="#" target="_blank"><ion-icon name="download-outline"></ion-icon></a></td>
						<td>{{$item->fecha}}</td>
						<td></td>
					</tr>
					<?php $c=$c+1;?>
				@endforeach 
			</tbody>
		</table>
		@endisset
	</div>
@endsection