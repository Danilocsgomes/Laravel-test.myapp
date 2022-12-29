@extends('layouts.default')

{{--@inject('address', "APP\Service\Address")--}}

@section('subtitle', 'Site')

@section('sidebar')
    @parent
    <p>Items...</p>
@endsection

@section('content')
    @php
    $label = 'Nome'
    @endphp

    <x-input type="text" name="name" id="name" :label="$label" />

    <x-card>
        <x-slot:header>
            Header do card
        </x-slot:header>
        Conteúdo do card
    </x-card>

    <x-alert type="error">
        Deu erro!
    </x-alert>
@endsection
