@extends('layouts.main')
@section('title','HDC Events')
@section('content')

<h1>Algum Título</h1>
<img src="/img/banner.jpg" alt="" class="src">

{{-- Uso do IF e ELSE --}}

@if(10 > 15)
<p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Jonathan")
<p>O nome não é {{$nome}}, ele tem {{$idade}} anos e trabalha como {{$profissao}}</p>
@elseif($nome == "Matheus")
<p>O nome não é {{$nome}}, ele tem {{$idade}} anos e trabalha como {{$profissao}}</p>
@else
<p> O nome é Pedro</p>
@endif


{{-- Uso do For e Foreach --}}

@for($i = 0; $i < count($arr); $i++) <p> {{ $arr[$i] }} - {{ $i }} </p>
    @if($i == 2)
    <p>O {{$i}} é igual 2</p>
    @endif
    @endfor

    @foreach($nomes as $nome)
    <p>{{ $loop->index }}
    <p>{{ $nome }}</p>
    @endforeach


    {{-- PHP PURO --}}

    @php
    $name = "João";
    echo $name;
    @endphp

    {{-- Comentários HTML do blade --}}

@endsection