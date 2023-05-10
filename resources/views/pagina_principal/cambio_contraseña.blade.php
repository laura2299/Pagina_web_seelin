@extends('layouts.app')
@section('content')

	<style>
		.contact{
			border-right:4px solid #24315E;
			border-left:4px solid #24315E;
			border-radius:8px;
			box-shadow: 10px 5px 5px #717171;
			display:flex;
			flex-direction:column;
			padding:0px 15px 15px 15px;
			background-color: white;
			min-width: 400px;
			max-width: 600px;
			margin:30px;
		}
		.contact h1{
			color:#16979A;
			text-decoration-line: underline;
			text-align:center;
			margin-bottom:20px;
		}
		.contact form {
			display:flex;
			width:100%;
			height:250px;
			flex-direction:column;
			justify-content: center;
		}
		.contact form label{
			width:80%;
			display:flex;
			align-self:center;
			justify-content: space-between;
			margin-bottom:25px;
		}
		.contact form label span{
			width:100px;
			font-size:medium;
		}
		.contact form input{
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
	</style>

    <div class="container-fluid">
        
        <div class="row">
			<div class="contact">
				<h1>Cambio Contraseña</h1>
				@if(isset($mess))
					{{$mess}}
					@endif
				<form method="POST" action="{{ route('cambio_contrasena_U') }}" id="formulario_subir">
				@csrf
					
					<label for="nueva_contraseña">
						<span>Nueva Contraseña:</span>
						<input type="text" name="nueva_contraseña" id="nueva_contraseña">
					</label>
					<label for="confirm_contraseña">
						<span>Repita Contraseña:</span>
						<input type="password" name="confirm_contraseña" id="confirm_contraseña">
					</label>
					<p id="men_fecha"></p>
				</form>
				<button id="btn_busc" onclick="verificar()">Cambiar</button>
			</div>
        </div>
    </div>
	<script>
		function verificar(){
			var nueva_contraseña=document.getElementById("nueva_contraseña").value;
			var confirm_contraseña=document.getElementById("confirm_contraseña").value;
			if(nueva_contraseña != confirm_contraseña){
				var men=document.getElementById("men_fecha");
				men.innerText="No concuerdan las contraseñas";
			}else{
				if (nueva_contraseña.length < 8) {
					var men=document.getElementById("men_fecha");
					men.innerText="Tiene que tener al menos 8 digitos";
				}else{
					var men=document.getElementById("men_fecha");
					men.innerText="";
					document.getElementById("formulario_subir").submit();
				}
				
			}

		}
	</script>
@endsection