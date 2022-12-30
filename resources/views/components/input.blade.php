<div class="form-group">
    <label for="{{ $attributes->get('id') }}" {{ $label->attributes->class(['label']) }}>{{ $label }}</label>
    <input {{$attributes->class(['form-control', 'is-invalid' => $errors->has($attributes->get('name'))]) }}>
    @error()
    <x-alert type="error">{{$message}}</x-alert>
    @enderror
</div>
