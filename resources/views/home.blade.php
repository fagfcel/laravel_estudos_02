@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route("submit") }}" method="post">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">User Name</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- executar PHP dentro de uma view --}}
@php
    $valor = 100;
    $valor1 = '<span class="text-warning">'.$valor.'</span>';
    $name = "Francisco Ferreira";
@endphp
      
<h3>{{ $valor }}</h3>
<h3>{!! $valor1 !!}</h3>
<h3>{{ $valor * 1000 }}</h3>

<h3>$name tem <span class="text-info">{{ strlen($name) }} </span>caracteres</h3>
@endsection
