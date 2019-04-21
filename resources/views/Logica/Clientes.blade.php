@extends('layouts.app')

@section('content')

    <!-- Styles -->
    <link href="{{ asset('css/Clientes/clientes.css') }}" rel="stylesheet">
<h4>Clientes</h4>
<main id="root" class="panel panel-default">
    <div class="panel-heading" id="contenedor_nvo_cliente">
        <strong>Agregar.</strong>
        
    </div>
    <div id="contenedor_lista_clientes" class="panel-body">
        <strong>Lista Clientes.</strong>
    </div>
</main>
    <!-- Scripts -->
    <script src="{{ asset('js/clientes/cliente.js') }}" defer></script>
@endsection