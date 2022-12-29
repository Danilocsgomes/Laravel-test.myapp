@extends('layouts.default')

{{--@inject('address', "APP\Service\Address")--}}

@section('subtitle', 'Site')

@section('sidebar')
    @parent
    <p>Items...</p>
@endsection

@section('content')

    <x-input />

    <x-card>
        <x-slot:header>
            Header do card
        </x-slot:header>
        Conteúdo do card
    </x-card>
@endsection
