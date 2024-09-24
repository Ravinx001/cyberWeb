@props(['name'])

<input class="form-control" placeholder="{{ $name }}" name="{{ $name }}" id="{{ $name }}"
    {{ $attributes(['value' => old($name)]) }} required />

<x-form.label name="{{ $name }}" />

<x-form.error name="{{ $name }}" />
