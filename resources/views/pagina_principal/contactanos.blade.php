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
			height:min-content;
		}
		.contact h3{
			color:#16979A;
			text-decoration-line: underline;
		}
		.contact form {
			display:flex;
			width:100%;
			flex-direction:column;
			justify-content: center;
		}
		.contact form label{
			width:80%;
			display:flex;
			align-self:center;
			justify-content: space-between;
		}
		.contact form label span{
			width:150px;
			font-size:medium;
		}
		.contact form input{
			border:1px solid #16979A;
			border-radius:8px;
			padding: 5px;
		}
		.contact form textarea{
			border:1px solid #16979A;
			border-radius:8px;
			padding: 5px;
		}
		.contac_abajo{
			display:flex;
			flex-direction:row;
			width:90%;
		}
		#btn_env{
			display:flex;
			justify-content:flex-end;
		}
		#btn_env input{
			width:150px;
		}
		#btn_env input:hover{
			background:#16979A;
			color:white;
		}
		.mapa{
			display:flex;
			flex-direction:column;
			justify-content:center;
			margin:0px 20px 30px 20px;
			min-width: 400px;
		}
		.mg_p{
			align-self:center;
			border:2px solid #16979A;
			width:300px;
			height:300px;
		}
	</style>
    <div class="container-fluid">
        
        <div class="row">
			<div class="mapa col-4">
				<h1 style="text-align: left p-4">Nuestra Ubicación</h1>
				<div class="mg_p">
					<img src="#" alt="mapa">
				</div>
			</div>
			<div class="contact col-5">
				<h3>Contáctanos</h3>
				<form action="">
						<label for="nombre">
							<span>Nombre:</span>
							<input type="text" name="nombre" id="nombre">
						</label>
						<label for="correo">
							<span>Correo:</span>
							<input type="email" name="correo" id="correo">
						</label>
						<label for="celular">
							<span>Celular:</span>
							<input type="text" name="celular" id="celular">
						</label>
						<label for="mensaje">
							<span>Mensaje:</span>
							<textarea name="mensaje" id="mensaje" cols="22" rows="5"></textarea>
						</label>
						<div class="contac_abajo">
							<label for="check">
								<span>No soy un Robot</span>
								<input type="checkbox" name="check" id="check">
							</label>

							<label for="btn_env" id="btn_env">
								<input type="button" value="Enviar" >
							</label>
						</div>
				</form>
			</div>
        </div>
    </div>
@endsection