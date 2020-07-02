<form action="{{ $route }}" method="{{ $method }}" class="w-100" autocomplete="{{ $autocomplete }}">
    @csrf
    {{ $slot }}
</form>