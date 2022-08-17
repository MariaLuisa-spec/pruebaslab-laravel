@extends('layouts.app')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paciente') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form action = "home/pacientes/index/pruebas/{{$paciente->id}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>                                        
                                            <th>Identificacion</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Edad</th>
                                            <th>Genero</th>
                                            <th>Eps</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td scope="row"></td>                                            
                                            <td>{{ $paciente->Identificacion }}</td>
                                            <td>{{ $paciente->nombres }}</td>
                                            <td>{{ $paciente->apellidos }}</td>
                                            <td>{{ $paciente->edad }}</td>
                                            <td>{{ $paciente->genero }}</td>
                                            <td>{{ $paciente->EPS }}</td>
                                            
                                            <form method="POST">
                                                <td> <a class="btn btn-sm btn-primary " href="{{ route('pacientes.index',$paciente->id) }}"> Show</a> </td>
                                                @csrf
                                            </form>
                                        </tr>
                                            
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@endsection