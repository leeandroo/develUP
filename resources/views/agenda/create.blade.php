@extends('layouts.main')
@section('agenda-form')
	<!-- FORM START -->
	<form class="align-items-center" style="color: #757575;" action="{{ url('/') }}" method="POST">
		{!! csrf_field() !!}
        <div class="form-group">
			<div>
	        	<h6 class="form-title mt-3">Tipo de Cliente</h6>
        	</div>						
        	<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="empresa" name="tipo" value="Empresa" checked>
						<label class="custom-control-label box-label" for="empresa">Empresa</label>
					</div>	
				</div>		
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="personaNatural" name="tipo" value="Persona natural">
						<label class="custom-control-label box-label" for="personaNatural">Persona natural</label>
					</div>
				</div>											  
			</div>
		</div>

        <div class="form-group">
			<div>
				<h6 class="form-title mt-3">Informacion del solicitante</h6>
			</div>

			<div class="form-row">
				<div class="col-lg-6 col-6">
					<label for="nombre" class="mt-1 box-label">Nombre</label>
					<input name="nombre" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-6">
					<label for="apellido" class="mt-1 box-label">Apellido</label>
					<input name="apellido" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-6" >
					<label for="rut" class="mt-1 box-label">RUT</label>
					<input name="rut" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-6">
					<label for="telefono" class="mt-1 box-label">Teléfono</label>
					<input name="telefono" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-sm-12">
					<label for="direccion" class="mt-1 box-label">Dirección</label>
					<input name="direccion" class="form-control " type="text">
				</div>
				<div class="col-lg-6 col-sm-12" >
					<label for="correo" class="mt-1 box-label">Correo</label>
					<input name="correo" class="form-control " type="text">
				</div>
			</div>
		</div>

        <div class="form-group">
			<div>
				<h6 class="form-title mt-3"> Detalle de la solicitud</h6>
			</div>

			<div class="form-row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
					<label for="servicio" class="mt-1 box-label">Tipo de servicio</label>
					<select class="custom-select" name="servicio">
						<option value="Mantención de equipos">Mantención de equipos</option>
						<option value="Mantención veículos">Mantención vehículos</option>
						<option value="Equipamiento minero">Equipamiento minero</option>
						<option value="Instalación de alarmas">Instalación de alarmas</option>
						<option value="Instalación de cámaras">Instalación de cámaras</option>
						<option value="Cotizaciones">Cotizaciones</option>
						<option value="Automatización de vivienda">Automatización de vivienda</option>
						<option value="Otro">Otro</option>
					</select>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<label for="fecha" class="mt-1 box-label">Fecha atención</label>
					<input name="fecha" class="form-control " type="date">
				</div>				
			</div>
		</div>

        <div class="custom-control custom-checkbox my-4 text-center">
			<input type="checkbox" class="custom-control-input" id="estadowsp" name="estadowsp">
			<label class="custom-control-label grey-text w-responsive" for="estadowsp" id="relawayLight">¿Desea que nos comuniquemos a través de Whatsapp?</label>
        </div>

        <div class="md-form my-0 text-center" id="btnformulario">
			<button type="submit" class="btn" id="relawaySB">Enviar <i class="fa fa-paper-plane ml-2"></i></button>
		</div>
	</form>
    <!-- FORM END -->
@endsection 