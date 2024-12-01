@extends('layouts.main_layout')
@section('content')
@production
    <h3>Estou em ambiente de produção!!</h3>
@else
    <h3>Não estou em ambiente de produção!!</h3>
@endproduction

@env(['local', 'development'])
    <h3>Estou em ambiente {{ env('APP_ENV') }}</h3>
@endenv

{{--  formulario  --}}

<form action="{{ route('submit') }}" method="post">
    @csrf
    <div>
        <input type="text" name="name" id="">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <div>
        <input type="text" name="coutry" id="">
        @error('coutry')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <button type="submit">Enviar</button>
</form>
@endsection
