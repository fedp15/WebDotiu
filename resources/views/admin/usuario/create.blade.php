@extends('home.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-users "></i>
				Usuarios <small>[Agregar Usuario]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">


								    {!! Form::open(['action'=>'AdminUserController@store']) !!}

										 <div class="form-group">
									 		<label for="nombre">
									 			Nombre
									 		</label>
									 		<input type="text" name="name" class="form-control" placeholder="Nombre....">
									 	</div>

										<div class="form-group">
									 	<label for="last_name">
									 		Apellidos
									 	</label>
									 	<input type="text" name="last_name" class="form-control" placeholder="Apellidos....">
									 </div>

									 <div class="form-group">
								 	<label for="email">
								 		Correo Electronico
								 	</label>
								 	<input type="text" name="email" class="form-control" placeholder="Correo Electronico....">
								  </div>

									<div class="form-group">
									<label for="user">
									 Usuario
									</label>
									<input type="text" name="user" class="form-control" placeholder="Usuario....">
									</div>

									<div class="form-group">
									<label for="password">
									 Contraseña
									</label>
									<input type="password" name="password" class="form-control" placeholder="Contreseña....">
									</div>

									 	<div class="form-group">
									 		<label for="address">
									 			Direccion
									 		</label>
									 		<input type="text" name="address" class="form-control" placeholder="Descripcion....">
									 	</div>

										<div class="form-group">
										<label for="type">
										 Tipo Usuario
										</label>
										<input type="text" name="type" class="form-control" placeholder="Administrador/Usuario">
										</div>



<div class="form-group">
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="/admin/usuario" class="btn btn-warning">Cancelar</a>
</div>

    {!! Form::close() !!}

                </div>

            </div>
        </div>


	</div>

@stop
