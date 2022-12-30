@extends('layouts.default')

{{--@inject('address', "APP\Service\Address")--}}

@section('subtitle', 'login')

@section()
    <form action="{{route('login')}}" method="post">
        @csrf
        <x-input type="email" id="email" name="email">
            <x-slot name="label">E-mail</x-slot>
        </x-input>

        <x-input type="password" id="password" name="password">
            <x-slot name="label">Senha</x-slot>
        </x-input>

       <button>Entrar</button>
    </form>
@endsection
