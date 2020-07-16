<form 
    action="{{ $route }}" method="{{ $method }}"
    autocomplete="{{ $autocomplete }}"
    {{ $attributes->merge([
        'class' => 'w-100',
        'id' => '',
        'name' => ''
    ]) }}
>
    @csrf
    {{ $slot }}
</form>
