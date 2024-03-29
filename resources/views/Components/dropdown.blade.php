@props(['align' => '', 'width' => 'full', 'contentClasses' => 'bg-gray-800 text-white'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
    break;
}
@endphp

<div class="z-10" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="z-50 absolute top-0 left-0 {{ $width }} {{ $alignmentClasses }}"
            style="display: none;height: 90vh;"
            @click="open = false">
        <div class="shadow-xs pt-16 h-full {{ $contentClasses }}">
            <div @click="open = false">
                {{ $esc }}
            </div>
            {{ $content }}
        </div>
    </div>
</div>
