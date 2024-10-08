@extends('master')

@section('content')

<h2>Criar</h2>

@if(session()->has('message'))
{{session()->get('message')}}
@endif

<form action="{{ route('users.store')}}" method="post">
@csrf
<input type="text" name="nome" placeholder="Nome" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Criar</button>
</form>


@endsection