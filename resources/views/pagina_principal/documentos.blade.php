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
		}
		#btn_busc:hover{
			background:#16979A;
			color:white;
		}
	</style>
	<div class="container-fluid">
		<h1>DOCUMENTOS</h1>
		<br>
			<div id="forms">
				<form action="">
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
						<input id="btn_busc" type="button" value="Buscar">
					</label>
				</form>
			</div>
		<br>
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
				<tr>
					<th scope="row">1</th>
					<td>Estado de equipos revisados en zona principal de trabajo</td>
					<td>Reporte</td>
					<td><a href="#"><ion-icon name="open-outline"></ion-icon></a></td>
					<td><a href="#"><ion-icon name="download-outline"></ion-icon></a></td>
					<td>08/10/23</td>
					<td>1563 Kb</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Estado de equipos revisados en zona principal de trabajo</td>
					<td>Reporte</td>
					<td><a href="#"><ion-icon name="open-outline"></ion-icon></a></td>
					<td><a href="#"><ion-icon name="download-outline"></ion-icon></a></td>
					<td>08/10/23</td>
					<td>1563 Kb</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Estado de equipos revisados en zona principal de trabajo</td>
					<td>Reporte</td>
					<td><a href="#"><ion-icon name="open-outline"></ion-icon></a></td>
					<td><a href="#"><ion-icon name="download-outline"></ion-icon></a></td>
					<td>08/10/23</td>
					<td>1563 Kb</td>
				</tr>
			</tbody>
		</table>
		
	</div>
@endsection