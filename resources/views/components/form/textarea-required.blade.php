@props(['name'])

<div class="col-12">
    <x-form.label name="{{ $name }}" />

    <textarea class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $attributes([]) }} required>@if (old($name)){{ old($name) }}@else{{ $slot }}@endif</textarea>

    <x-form.error name="{{ $name }}" />
</div>
