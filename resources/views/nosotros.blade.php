@extends('plantilla')


@section('seccion')

<h1>Este es mi equipo de trabajo</h1>

@foreach($equipo as $item)
<a href="{{route('nosotrosn', $item)}}" class="h4 text-danger">{{$item}}</a><br>
@endforeach

@if(!empty($nombre))
    @switch($nombre)
        @case($nombre == 'Margareth')
        <h2 class="mt-5">El nombre es {{$nombre}}</h2>
        <p> {{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aut, dolores nesciunt et illo itaque inventore, reiciendis pariatur, fuga ex maxime ut quisquam. Officiis, cumque. Exercitationem omnis nobis modi dolor?</p>
        @break
        @case($nombre == 'Juanito')
        <h2 class="mt-5">El nombre es {{$nombre}}</h2>
        <p> {{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aut, dolores nesciunt et illo itaque inventore, reiciendis pariatur, fuga ex maxime ut quisquam. Officiis, cumque. Exercitationem omnis nobis modi dolor?</p>
        @break
        @case($nombre == 'Ranchito')
        <h2 class="mt-5">El nombre es {{$nombre}}</h2>
        <p> {{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aut, dolores nesciunt et illo itaque inventore, reiciendis pariatur, fuga ex maxime ut quisquam. Officiis, cumque. Exercitationem omnis nobis modi dolor?</p>
        @break

    @endswitch

@endif

@endsection