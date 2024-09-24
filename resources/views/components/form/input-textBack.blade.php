@props(['name', 'text'])

<x-form.label name="{{ $name }}" />

<div class="input-group">

    <input class="form-control" name="{{ $name }}" id="{{ $name }}"
        {{ $attributes(['value' => old($name)]) }} />

    <span class="input-group-text">{{ $text }}</span>

</div>

<x-form.error name="{{ $name }}" />
