<div>
    @isset($header)
        <div>
            {{ $header }}
        </div>
    @endisset

    {{ $slot }}
</div>
