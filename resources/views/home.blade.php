@extends('layouts.main_layout')
@section('content')
   {{-- Empty --}}
   @empty($value)
   <h1>Não existe!</h1>
    @else
    <h1>Existe!</h1>
   @endempty

   {{-- isset --}}
   @isset($values   )
       <h1>Existe a variavel!</h1>
       @else
       <h1>Não existe a variavel</h1>
   @endisset

   {{-- unless --}}
   @unless ($value != 100)
       <h1>OK!!!!</h1>
   @endunless
@endsection
