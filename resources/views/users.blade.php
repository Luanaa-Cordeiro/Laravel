@extends('master')

@section('content')

<div class="lista">
    <div>
<h2>Users</h2>

<ul>
    @foreach($users as $user)
    <li>{{$user->nome}} | <a href="">editar</a> | <a href="">deletar</a></li> 
    @endforeach
</ul>
</div>
</div>

@endsection