@extends('master')

@section('content')

<h2>User - {{$user->nome}}</h2>

<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
@csrf
    <input type="hidden" name="_method" value="delete">
    <button type='submit'>Deletar</button>

</form>

@endsection