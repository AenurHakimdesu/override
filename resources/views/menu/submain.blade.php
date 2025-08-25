@if(!$items->isEmpty())
<ul class="submenu">
    @php
    if (Voyager::translatable($items)) {
    $items = $items->load('translations');
    }
    @endphp

    @foreach ($items as $item)
    @php
    $originalItem = $item;
    if (Voyager::translatable($item)) {
    $item = $item->translate($options->locale);
    }

    // RESET setiap loop
    $isActive = '';
    $styles = '';
    $icon = '';
    $hasSubmenu = '';
    $iconsubmenu = '';

    // Background Color or Color
    if (isset($options->color) && $options->color == true) {
    $styles = 'color:'.$item->color;
    }
    if (isset($options->background) && $options->background == true) {
    $styles = 'background-color:'.$item->color;
    }

    // Check if link is current
    if (url($item->link()) == url()->current()) {
    $isActive = 'active';
    }

    // Kalau punya child → kasih tanda panah
    if (!$originalItem->children->isEmpty()) {
    $hasSubmenu = 'has-submenu';
    }

    // Set Icon
    if (isset($options->icon) && $options->icon == true) {
    $icon = '<i class="' . $item->icon_class . '"></i>';
    }
    @endphp

    <li class="{{ $isActive }} {{ $hasSubmenu }}">
        <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
            {!! $icon !!}
            <span>{{ $item->title }}</span>
        </a>

        {{-- Render submenu hanya jika memang ada children --}}
        @if(!$originalItem->children->isEmpty())
        @include('menu.submain', ['items' => $originalItem->children, 'options' => $options])
        @endif
    </li>
    @endforeach
</ul>
@endif