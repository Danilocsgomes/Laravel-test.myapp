@extends('layouts.default')

{{--@inject('address', "APP\Service\Address")--}}

@section('subtitle', 'Site')

@section('sidebar')
    @parent
    <p>Items...</p>
@endsection

@section('content')
{{--    @auth--}}
{{--        <p>conteúdo x </p>--}}
{{--    @endauth--}}

{{--    @guest--}}
{{--        <p>conteúdo y </p>--}}
{{--    @endguest--}}

{{--    @unless(true)--}}
{{--        <p>Não mostrar isso! </p>--}}
{{--    @endunless--}}

{{--    @if(true)--}}
{{--        <p>Se deu tudo ok! </p>--}}
{{--    @elseif(false)--}}
{{--        <p>Meio termo! </p>--}}
{{--    @else--}}
{{--        <p>Deu tudo errado!</p>--}}
{{--    @endif--}}
{{--    @php $var = 'x'; @endphp--}}
{{--    @isset($var)--}}
{{--        <p>Existe a var</p>--}}
{{--    @endisset--}}

{{--    @empty($var)--}}
{{--        <p>A variável está vazía</p>--}}
{{--    @endempty--}}

{{--    @production--}}
{{--        <p>Mostrar apenas em produção </p>--}}
{{--    @endproduction--}}

{{--    @env(['local', 'production'])--}}
{{--        <p>Mostrar apenas em local e produção </p>--}}
{{--    @endenv--}}

{{--    @switch($var)--}}
{{--        @case('x')--}}
{{--            <p>Estou mostrando o X</p>--}}
{{--            @break--}}
{{--        @default--}}
{{--            <p>Mostrando alguma coisa</p>--}}
{{--            @break--}}
{{--    @endswitch--}}

{{--    @for($i = 0; $i <10; $i++)--}}
{{--        <p> 0 valor é: {{ $i + 1}} </p>--}}
{{--    @endfor--}}


{{--    @foreach([1,2,3,4,5,6,7,8,9,10] as $number)--}}
{{--        $loop->index--}}
{{--        $loop->first--}}
{{--        $loop->last--}}
{{--        $loop->remaining--}}
{{--        $loop->interation--}}
{{--        $loop->count--}}
{{--        $loop->even--}}
{{--        $loop->add--}}
{{--        $loop->depth--}}
{{--        $loop->parent--}}
{{--        @continue($number ==1)--}}
{{--        <p>Número: {{ $number}}</p>--}}
{{--        @break($number == 5)--}}
{{--    @endforeach--}}

{{--    @forelse([1] as $item)--}}
{{--        <p>Item - {{ $item }}</p>--}}
{{--    @empty--}}
{{--        <p>Não tem nenhum registro</p>--}}
{{--    @endforelse--}}
{{--    --}}{{--    @while(true)--}}
{{--    --}}{{--        <p>Infinito</p>--}}
{{--    --}}{{--    @endwhile--}}

{{--    @php--}}
{{--        $error = true--}}
{{--    @endphp--}}
{{--    <div @class(['form-control', 'error' => $error])>--}}
{{--        Demonstração--}}
{{--    </div>--}}

{{--    <input type="checkbox" @checked($var == 'x')>--}}

{{--    <select>--}}
{{--        <option value="" selected>Selecione</option>--}}
{{--        <option> Opção 1 </option>--}}
{{--        <option @selected($var == 'x')>Opção 2</option>--}}
{{--        <option>Opção 3</option>--}}
{{--        <option> Opção 4</option>--}}
{{--    </select>--}}


{{--    <input type="text" @disabled($var == 'y')>--}}

{{--    <input type="text" @readonly ($var == 'x')>--}}

{{--    <input type="text" @required ($var == 'y')>--}}

{{--    @include--}}
{{--    @includeif--}}
{{--    @includeWhen--}}
{{--    @includeUnless($var == 'y','sub.subview1')--}}

{{--    @includeFirst(['sub.subview2', 'sub.subview1'])--}}

{{--    @each('sub.subview', [['name' => 'João'], ['name' => 'Maria']], 'item', 'sub.view1')--}}

{{--    <form action="" method="post">--}}
{{--        @csrf--}}
{{--        @method('put')--}}
{{--        @method('delete')--}}
{{--        @method('PATCH')--}}
{{--        <input type="text" name="name">--}}
{{--        @error('name')--}}
{{--            <span>{{ $message }}</span>--}}
{{--        @enderror--}}
{{--    </form>--}}
    <x-input />
@endsection
