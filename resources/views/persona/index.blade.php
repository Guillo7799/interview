@extends('home')

@section('content')

<div class="row table-responsive justify-content-center p-2">
    <div class="col-md2-2"></div>
    <div class="col-md-8">
        <br><br>
        <h1>Lista de Personas</h1>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nueva persona
        </button>
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">C.I</th>
                        <th scope="col">Email</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr class="">
                            <td scope="row">{{$persona->id}}</td>
                            <td>{{$persona->name}}</td>
                            <td>{{$persona->lastname}}</td>
                            <td>{{$persona->identification}}</td>
                            <td>{{$persona->email}}</td>
                            <td>{{$persona->phone}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('persona.create')
    </div>
    <div class="col-d-2"></div>
</div>



@endsection
