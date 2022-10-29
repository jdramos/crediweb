@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Articulos</h1>
@stop

@section('content')
<form action="/articulos" method="POST">
    @csrf
    <div class="input-group">
                        <span class="input-group-text">Nombres</span>
                        <input type="text" id ="nombres" class="form-control">
                         <span class="input-group-text">Apellidos</span>
                         <input type="text" id ="apellidos" class="form-control">
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-text">ID</span>
                        <input type="text" name="identificacion" id ="identificacion" 
                               placeholder="Identificacion" required class="form-control" 
                               value="">
                        <span class="input-group-text">Tel:</span>
                        <input type="text" name="telefono" id ="telefono" 
                               placeholder="Telefono" required class="form-control" 
                               value="">
                        <span class="input-group-text">Edad:</span>
                        <input type="text" name="edad" id ="edad" 
                               placeholder="Edad" class="form-control" 
                               value="">
                        <span class="input-group-text">Oficio:</span>
                        <input type="text" name="profesion" id ="profesion" 
                               placeholder="Profesion" class="form-control" 
                               value="">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Dirección domicilio</span>
                        <textarea name="dirdomicilio" rows="4" cols="100" id ="dirdomicilio" 
                                  placeholder="Direccion domiciliar" required 
                                  class="form-control"></textarea>
                    </div>   
                    <div class="input-group">
                        <span class="input-group-text">Dirección negocio  </span>
                        <textarea name="dirnegocio" rows="4" cols="100" id ="dirnegocio"
                                  placeholder="Direccion negocio" 
                                  class="form-control"></textarea>
                    </div>   
                    <div class="input-group">
                        <span class="input-group-text">Genéro</span>
                        <select name="genero" id="genero" class="form-select notItemOne">
                            <option value="Manculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <span class="input-group-text">Est. civil</span>
                        <select name="estcivil" id="estcivil" class="form-select notItemOne">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                        </select>
                        <span class="input-group-text">Reporte al buró</span>
                        <select name="buro" id="buro" class="form-select notItemOne">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                <div class="input-group">
                    <span class="input-group-text">Comercio</span>
                    <select name="comercio" id="comercio" class="form-select notItemOne" >
                        <option value="1">Pulperia</option>
                        
                    </select>
                        
                </div>
                <div class="input-group"> 
                    <span class="input-group-text">Vta. Contado</span>
                    <input type="number" name="vtacontado" id ="vtacontado" step="0.01"
                           placeholder="Ventas de contado" class="form-control" value="" >
                    <span class="input-group-text">Vta. Crédito</span>
                    <input type="number" name="vtacredito" id ="vtacredito" 
                           placeholder="Ventas de crédito" class="form-control" value="">
                   
                    <span class="input-group-text">Inventario</span>
                    <input type="number" name="inventario" id ="inventario" 
                           placeholder="Inventario" class="form-control" value="">
                 </div>
                <div class="input-group">    
                    <span class="input-group-text">Efectivo</span>
                    <input type="number" name="efectivo" id ="efectivo" 
                           placeholder="Efectivo" class="form-control" value="">
               
                    <span class="input-group-text">Ctas. x cobrar</span>
                    <input type="number" name="ctasxcobrar" id ="ctasxcobrar" 
                           placeholder="Cuentas por cobrar" class="form-control" value="">
                    <span class="input-group-text">Otros ingresos</span>
                    <input type="number" name="otrosingresos" id ="otrosingresos" 
                           placeholder="Otros ingresos" class="form-control" value="">
               </div>
                <div class="input-group">  
                    <span class="input-group-text">Años de experiencia</span>
                    <input type="number" name="experiencia" id ="experiencia" step="1"
                           placeholder="Años de experiencia" class="form-control" value="">
                </div>
                <div class="contendor_inputs">
                  <input type="submit" value="Guardar cliente" class="btn btn-primary" >
                  <a href="lista_clientes.php" class="btn btn-danger">Cancelar <a/>
                      <button type="button"  class="btn btn-primary">Primary</button>
                      
                </div>
            </form>

    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button  >
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop



