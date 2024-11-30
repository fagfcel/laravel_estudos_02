@extends('layouts.main_layout')
@section('content')
  {{-- usando continue e break --}}
  @for ($index = 0 ; $index < 10; $index++)
      {{-- continue --}}
      @if ($index == 5)
          @continue
      @endif
      {{-- break --}}
      @if($index == 7)
      @break
      @endif
      <p>{{ $index }}</p>
  @endfor


  {{-- loop variable --}}
  @foreach ($cities as $cite)
    @if($loop->first)
        <h1>Primeira Cidade</h1>
    @endif
    @if($loop->last)
        <h1>Última Cidade</h1>
    @endif
    
      <h1>{{ $cite }}</h1>
      <h3>{{ $loop->index }}</h3>
  @endforeach
      
@endsection
