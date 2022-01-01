@extends('layouts.plantillabase');

@section('contenido')

    <h2>CREAR TARIFA DE CONSUMO</h2>

    <form action="/Tconsumos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cubos_Ini</label>
            <input id="cubos_ini" name="cubos_ini" type="number" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cubos fin</label>
            <input id="cubos_fin" name="cubos_fin" type="number" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Costo</label>
            <input id="costo" name="costo" type="number" step="any" value="0.00" class="form-control" tabindex="4">
            <a href="/Tconsumos" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
        </div>
    </form>

@endsection
