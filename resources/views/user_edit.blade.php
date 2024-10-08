@extends('master')

@section('content')

<h2>edit</h2>

@if(session()->has('message'))
{{session()->get('message')}}
@endif

<form action="{{ route('users.update', ['user' => $user->id])}}" method='post'>
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="nome" value="{{$user->nome}}">
    <input type="text" name="email" value="{{$user->email}}"> 
    <input type="text" name="senha" value="{{$user->senha}}"> 
    <button type='submit'>Atualizar</button>
</form>

@endsection