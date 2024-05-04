@props(['screens'])

<div class="fixed bottom-0 left-0 w-full flex justify-end pointer-events-none z-50">
    @foreach($screens as $screen)
        <div class="bg-primary-500 inline-block px-3 py-1 text-white opacity-75 max-{{ $screen }}:hidden">
            {{ $screen }}
        </div>
    @endforeach
</div>

