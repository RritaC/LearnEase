@props(['active' => false])

<a class="{{ $active ? ' rounded-md px-3 py-2 bg-darkred text-white' : 'text-dark text-2xl font-bold hover:bg-darkred hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
