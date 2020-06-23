@extends("navLayout")
@section("title", "ComenzarJuego")
@section("content")
        <div class="container-fluid">
                <div class="row">
                        <div class="col-6 d-flex justify-content-center">
                                <div class="w-100 border-dark bg-light p-5">
                                        <h3 class="text-center">Registrarse</h3>
                                        <form class="w-100 d-flex flex-column justify-content-center ">
                                                <div class="form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" class="form-control" id="inputNombre" aria-describedby="ApodoHelp" placeholder="Digite su apodo">
                                                </div>
                                                <div class="form-group">
                                                        <label for="apodo">Apodo</label>
                                                        <input type="text" class="form-control" id="inputApodo" aria-describedby="ApodoHelp" placeholder="Digite su apodo">
                                                </div>
                                                 <div class="form-group">
                                                        <label for="contrasenia">Contraseña</label>
                                                        <input type="password" class="form-control" id="inputContrasenia" placeholder="Digite su contraseña">
                                                </div>
                                                <button type="submit" class="btn btn-danger">Registrarse</button>
                                        </form>
                                </div>
                        </div>
                         <div class="col-6 d-flex justify-content-center">
                                <div class="w-100 border-dark bg-light p-5">
                                        <h4 class="text-center">Iniciar Sesión</h4>
                                        <form class="w-100 d-flex flex-column justify-content-center ">
                                                <div class="form-group">
                                                        <label for="apodo">Apodo</label>
                                                        <input type="text" class="form-control" id="inputApodo" aria-describedby="ApodoHelp" placeholder="Digite su apodo">
                                                </div>
                                                 <div class="form-group">
                                                        <label for="contrasenia">Contraseña</label>
                                                        <input type="password" class="form-control" id="inputContrasenia" placeholder="Digite su contraseña">
                                                </div>
                                                <a href="" type="submit" class="btn btn-danger">iniciar Sesión</a>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
@endsection