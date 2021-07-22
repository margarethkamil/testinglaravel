@extends('plantilla')

@section('seccion')
<h1>Editar nota {{ $nota->id }}</h1>

@if (session('mensaje'))
    <div class="alert alert-success"> {{session('mensaje')}}</div>

@endif


<form action="{{ route('notas.update', $nota->id)}}" method="POST">
@method('PUT')
@csrf

        <input 
        type="text" 
        name="nombre" 
        class="form-control mb-2" 
        placeholder="Nombre" 
        class="form-control mb-2">

        @if($errors->has('nombre') )
        <div class="alert alert-danger">
            El nombre es obligatorio
            <button type="button" class=" close rounded" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
             </button>
        </div>
        @endif
        
        <input 
        type="text" 
        name="descripcion" 
        class="form-control mb-2" 
        placeholder="Descripcion" 
        class="form-control mb-2">

        @if($errors->has('descripcion') )
        <div class=" form-control alert alert-danger">
            La descripcion es obligatoria
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
            </button>
            </button>
        </div>
        @endif

    <button class = "btn btn-warning btn-block" type="submit">Editar</button>

    </form>

@endsection