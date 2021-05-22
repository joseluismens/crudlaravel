
<div class="card-center col-lg-6 mt-3">
            <h1 class="card-header">Modulo usuario</h1>
            <div class="card-body">
                
                <form action="{{route('usuarios.store') }}" method="post">
                @csrf
                    
                    <label for="nombres ">nombres</label> 
                    <input type="text" name="nombres" class="form-control">

                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" class="form-control" name="apellido_paterno">
                
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" name="apellido_materno" class ="form-control"name="apellido_paterno">

                    <label for="rut">Rut</label>
                    <input type="text" name="rut" class="form-control">

                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" class="form-control">

                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">

                    <label for="status">Status</label>
                    <input type="number" name="status" class="form-control">
                
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control">

                    <input type="submit" value="Registrar" class="btn btn-primary"> 
                </form>
            </div>
    </div>