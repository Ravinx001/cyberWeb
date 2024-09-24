@props(['name', 'text'])

<x-form.label name="{{ $name }}" />

<div class="input-group">

    <span class="input-group-text">{{ $text }}</span>

    <input class="form-control" name="{{ $name }}" id="{{ $name }}"
        {{ $attributes(['value' => old($name)]) }} />

</div>

<x-form.error name="{{ $name }}" />
