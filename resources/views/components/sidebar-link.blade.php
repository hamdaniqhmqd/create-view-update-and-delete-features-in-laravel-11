<li>
    <a {{ $attributes }} href="#" aria-current="{{ $active ? 'page' : 'false' }}"
        class="{{ $active ? 'active' : '' }}">{{ $slot }}
        
    </a>
</li>
