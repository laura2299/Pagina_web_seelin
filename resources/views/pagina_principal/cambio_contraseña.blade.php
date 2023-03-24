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

		#btn_ing{
			max-width: 500px;
			width:100%;
			align-self:center;
		}
		#btn_ing:hover{
			background:#16979A;
			color:white;
		}

	</style>

    <div class="container-fluid">
        
        <div class="row">
			<div class="contact">
				<h1>Cambio Contraseña</h1>
				<form action="">
					<label for="Contraseña">
						<span>Contraseña:</span>
						<input type="text" name="Contraseña" id="Contraseña">
					</label>
					<label for="nueva_contraseña">
						<span>Nueva Contraseña:</span>
						<input type="text" name="nueva_contraseña" id="nueva_contraseña">
					</label>
					<label for="repita_contraseña">
						<span>Repita Contraseña:</span>
						<input type="password" name="repita_contraseña" id="repita_contraseña">
					</label>
					<input id="btn_ing" type="button" value="Ingresar">
				</form>
			</div>
        </div>
    </div>
@endsection