@extends('plantilla')

@section('seccion')
<div class="container my-4"></div>
    <h1 class="display-4"> Notas </h1>
    @if (session('mensaje'))
        <div class= "alert alert-success ">
            {{ session('mensaje')}}
        </div>
    @endif

    <form action="{{ route('crear.notan')}}" method="POST">
        @csrf

        <input type="text" 
        name="nombre" 
        class="form-control mb-2" 
        placeholder="Nombre" 
        class="form-control mb-2"
        value="{{ old('nombre') }}">
        @if($errors->has('nombre') )
        <div class="alert alert-danger">
            El nombre es obligatorio
            <button type="button" 
            class=" close rounded" 
            data-dismiss="alert" 
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <input type="text" 
        name="descripcion" 
        class="form-control mb-2" 
        placeholder="Descripcion" 
        class="form-control mb-2"
        value="{{ old('descripcion') }}">
        @if($errors->has('descripcion') )
        <div class=" form-control alert alert-danger">
            La descripcion es obligatoria
            <button type="button" 
            class="close" 
            data-dismiss="alert" 
            aria-label="Close">
             <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    <button class = "btn btn-primary btn-block" type="submit">Agregar</button>
    </form>


    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form action= "{{ route('notas.buscar')}}" method= "get" class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>



    <table class="table">
    <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($notas as $item)

        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>
          <a href="{{ route('notas.detalle', $item)}}">
              {{$item->nombre}}</a> 
          </td>
          <td>{{$item->descripcion}}</td>
          <td>
              <a href="{{ route('notas.editar', $item) }}"class="btn btn-warning btn-sm">Editar</a>

              <form action="{{route('notas.eliminar', $item)}}" method="POST" class='d-inline'>
                @method('DELETE')
                @csrf
              
              <button class="btn btn-danger btn-sm" type='submit'> Eliminar </button>

              </form>

          </td>
        </tr>
      @endforeach()
      </tbody>
    </table>


@endsection
