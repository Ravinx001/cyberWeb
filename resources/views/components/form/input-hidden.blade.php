@props(['name'])

<input class="form-control d-none" name="{{ $name }}" {{ $attributes(['value' => old($name)]) }} />
