@extends('plantilla')

@section('seccion')

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