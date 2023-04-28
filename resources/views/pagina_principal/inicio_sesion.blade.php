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
			height:200px;
			flex-direction:column;
			justify-content: center;
		}/*
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
*/
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
				<h1>Inicio de Sesion</h1>
				
				<form method="POST" action="{{ route('login') }}">
				@csrf
					<div class="row mb-3">
						<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre:') }}</label>
						<div class="col-md-6">
							<input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password:') }}</label>

						<div class="col-md-6">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Ingresar</button>
					<!--
						<div class="row mb-0">
						<div class="col-md-8 offset-md-4">
							<button type="submit" class="btn btn-primary">
								{{ __('Ingresar') }}
							</button>
						</div>
					</div>
						<input id="btn_ing" type="button" value="Ingresar">-->

					
				</form>
			</div>
        </div>
    </div>
@endsection