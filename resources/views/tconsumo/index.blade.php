@extends('layouts.plantillabase');

@section('contenido')

<a href="Tconsumos/create" class="btn btn-primary">CREAR</a>

<table class="table table-primary table-striped m-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cubos_Ini</th>
            <th scope="col">Cubos_Fin</th>
            <th scope="col">Costo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tconsumos as $tconsumo)
        <tr>
            {{-- <td>{{tconsumo->id}}</td> --}}
            <td>{{tconsumo->descripcion}}</td>
            <td>{{tconsumo->cubos_ini}}</td>
            <td>{{tconsumo->cubos_fin}}</td>
            <td>{{tconsumo->costo}}</td>
            <td>
                <a href="/tconsumo/{{tconsumo->id}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
