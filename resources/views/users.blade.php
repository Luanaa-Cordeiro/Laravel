@extends('master')

@section('content')

<a href="{{route('users.create')}}">Adicionar</a>
<hr>

<h2>Users</h2>

<ul>
    @foreach($users as $user)
    <li>{{$user->nome}} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">editar</a>
 | <a href="{{route('users.show',['user' => $user->id])}}">Mostrar</a></li> 
    @endforeach
</ul>

@endsection