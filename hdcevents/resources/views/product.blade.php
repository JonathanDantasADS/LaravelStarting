@extends('layouts.main')
@section('title','Produto')
@section('content')

    @if($id != null)
        <p>Exibindo Produtos id: {{ $id }}</p>
    @endif

@endsection