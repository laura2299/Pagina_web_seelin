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
			flex-direction:column;
			width:100%;
			min-width: 350px;
			background: white;
			padding:20px;
			border-left:5px solid #16979A;
			border-right:5px solid #16979A;
			border-radius:8px;
		}
		#forms form{
			align-self:center;
			display:flex;
			justify-content:center;
			flex-direction:column;
			min-width: 350px;
			
			
		}
		#forms h3{
			text-align:center;
			text-decoration:underline;
			margin-bottom:20px;
		}
		/*
		#forms label{
			display:flex;
			width:330px;
			justify-content: space-around;
			margin-bottom:15px;
		}*/

		.input_p{
			display:flex;
			justify-content:space-around;
			margin:10px;
		}
		.input_p label{
			width:40%
		}
		.input_p input{
			width:60%
		}
	</style>
	<div class="container-fluid">
		<h1>DOCUMENTOS</h1>
		<br>
			<div id="forms">
				<form method="POST" action="{{ route('documentos_res') }}" id="formulario_subir" >
					@csrf
					<h3>BUSCADOR</h3>
					<div class="input_p">
						<label for="nombre">Nombre:</label>
						<input type="text"name="nombre" id="nombre">
					</div>
					@if(auth()->user()->role == 'administrador' || auth()->user()->role == 'user_interno')
					<div class="input_p">
						<label for="categoria">Categoria:</label>
						<input list="categorias" id="categoria" name="categoria">
						<datalist id="categorias">
							<option value="archivo">archivo</option>
							<option value="correspondencia">correspondencia</option>
						</datalist>
					</div>
					@endif
					<div class="input_p">
						<label for="dia">Dia:</label>
						<input type="number" id="dia" name="dia" min="1" max="31">
					</div>
					<div class="input_p">
						<label for="mes">Mes:</label>
						<input type="number" id="mes" name="mes" min="1" max="12">
					</div>
					<div class="input_p">
						<label for="año">Año:</label>
						<input type="number" id="año" name="año" min="2000" max="2100">
					</div>
					<p id="men_fecha"></p>
				</form>
				<button id="btn_busc" onclick="verificar()">Buscar</button>
			</div>
		<br>
		
		@isset($archivos)
		<table class="table table-striped table-hover" style="margin:30px;width:90%;">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Categoria</th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col">Fecha</th>
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
						<td><a href="{{$item->path}}" download="{{$item->name}}"><ion-icon name="download-outline"></ion-icon></a></td>
						<td>{{$item->fecha}}</td>
					</tr>
					<?php $c=$c+1;?>
				@endforeach 
			</tbody>
		</table>
		@endisset
	</div>
	<script>
		function verificar(){
			var dia=document.getElementById("dia").value;
			var mes=document.getElementById("mes").value;
			var año=document.getElementById("año").value;
			swd=false;
			swm=false;
			swa=false;
			if(dia=="" || (dia<32 && dia>0)){
				swd=true;
			}
			if(mes=="" || (mes<13 && mes>0)){
				swm=true;
			}
			if(año=="" || (año<2100 && año>1950)){
				swa=true;
			}
			if(swd && swm && swa){
				document.getElementById("formulario_subir").submit();
			}else{
				var men=document.getElementById("men_fecha");
				men.innerText="Fecha Incorrecta";
			}
		}
	</script>
@endsection