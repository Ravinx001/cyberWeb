@props(['name'])

<x-form.label name="{{ $name }}" />

<input class="form-control" id="{{ $name }}" disabled {{ $attributes([]) }} />

<x-form.error name="{{ $name }}" />
