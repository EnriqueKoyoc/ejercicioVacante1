@extends('layouts/plantilla')

@section('tittle', 'Personas')

@section('container')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Personas</h1>
    </div>
    <!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Personas</li>
        </ol>
    </div>
    <!-- /.col -->
</div>

<div class="card">
    <div class="card-header">
        <button data-backdrop="static" data-keyboard="false" class="btn btn-primary" data-toggle="modal"
            data-target="#modal-lg"><i class="fas fa-plus-circle"></i>&nbsp;Agregar</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>CURP</th>
                    <th>Apellido Paterno</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($personas as $vistaPersona)
                <tr>

                    <td>{{ $vistaPersona->id }}</td>
                    <td>{{ $vistaPersona->perCurp }}</td>
                    <td>{{ $vistaPersona->perApellido1 }}</td>
                    <td>{{ $vistaPersona->perNombre }}</td>



                    <td>
                        @if ($vistaPersona->id != 0)
                        <div><button style="outline:none; border: 0px solid #000000;"
                                class="fas fa-eye"></button>&nbsp;&nbsp <button
                                style="outline:none; border: 0px solid #000000;" class="fas fa-edit"></button></div>
                        @else
                        <span class='btn btn-label-danger btn-pill'>Inactivo</span>
                        @endif

                        @empty
                        <div class="alert alert-danger" role="alert">
                            <strong>¡tabla vacia!</strong>
                        </div>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- modal -->

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar nuevo cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="perCurp">CURP</label>
                            <input id="perCurp" maxlength="15" class="form-control" type="text" name="perCurp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="perNombre">Nombre persona</label>
                            <input id="perNombre" maxlength="15" class="form-control" type="text" name="perNombre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="perApellido1">Apellido paterno</label>
                            <input id="perApellido1" maxlength="15" class="form-control" type="text"
                                name="perApellido1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="perApellido2">Apellido materno</label>
                            <input id="perApellido2" name="perApellido2" maxlength="15" class="form-control" type="text"
                                name="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" id="perFechaNac" name="perFechaNac" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">Sexo</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="perSexo" id="perSexo"
                                    value="option1">
                                <label class="form-check-label">Mujer</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="perSexo" id="perSexo"
                                    value="option2">
                                <label class="form-check-label">Hombre</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="perCorreo1">Correo electrónico</label>
                            <input type="email" class="form-control" id="perCorreo1" name="perCorreo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- fin modal  -->

@endsection